<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista;

use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleMeadow;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class KataCommand extends Command
{
    private const CONFIGURATIONS_ARGUMENT = 'configurations';
    private const LOOP_OPTION = 'loop';

    private Vista $vista;

    protected function configure(): void
    {
        $this->setName('vista:describe');
        $this->addArgument(self::CONFIGURATIONS_ARGUMENT, InputArgument::OPTIONAL, 'List of enabled rules', '');
        $this->addOption(self::LOOP_OPTION, 'l', InputOption::VALUE_NONE);

        $this->vista = new Vista();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->getFormatter()->setStyle('landmark', new OutputFormatterStyle('yellow', null, ['underscore']));
        $io->getFormatter()->setStyle('position', new OutputFormatterStyle('magenta', null, []));

        $configurationString = $input->getArgument(self::CONFIGURATIONS_ARGUMENT);
        if (!is_string($configurationString)) {
            throw new \RuntimeException('The "'.self::CONFIGURATIONS_ARGUMENT.'" argument must be a string.');
        }

        $descriptionLetters = [];
        if (!empty($configurationString)) {
            $configurations = str_split($configurationString);
            $previousDescriptions = $this->vista->getDescribed(...$configurations);
            $descriptionLetters = array_map(
                fn (Description $description): string => $description->getLetter(),
                $previousDescriptions
            );
            $io->comment(count($previousDescriptions).' landmarks described.');
        }

        $loopMode = $input->hasOption(self::LOOP_OPTION) && $input->getOption(self::LOOP_OPTION);

        $proceed = 'Yes';
        $wait = 'Not yet';
        $exit = 'Stop';

        do {
            if (!isset($answer) || ($answer === $proceed)) {
                $newDescriptionLetter = $this->pickNewDescription($io, ...$descriptionLetters);
                if ($newDescriptionLetter === null) {
                    return 1;
                }

                $descriptionLetters[] = $newDescriptionLetter;
            }

            if ($loopMode) {
                $answer = $io->choice('Proceed to next iteration?', [$proceed, $wait, $exit], $proceed);
            }
        } while ($loopMode && $answer !== $exit);

        $io->note('For the next iteration code, proceed with the command below:');
        $io->text('./console.php vista:describe '.implode($descriptionLetters));

        return 0;
    }

    private function pickNewDescription(SymfonyStyle $io, string ...$descriptionLetters): ?string
    {
        if (empty($descriptionLetters)) {
            $io->success('Welcome to the "vista" kata.');
            $io->text('Your goal is to update the Painter so it renders what is described below.');
            $io->text('This command will act as a project manager / product owner, and will give you new instruction along the way.');
            $io->text('There should already be a failing test. First, fix the test with `make all` for the following landmark, then use the command again as indicated in the end.');
            $io->newLine(2);

            $newDescription = new RuleMeadow();
        } else {
            $availableDescription = $this->vista->getVisible(...$descriptionLetters);
            if (empty($availableDescription)) {
                $io->error('No more landmark to describe available for the kata, you can open a PR to add some.');

                return null;
            }

            $io->comment('Picking a new landmark from '.count($availableDescription).' available.');
            $newDescription = $availableDescription[array_rand($availableDescription)];
        }

        $newDescriptionLetter = $newDescription->getLetter();
        $io->text('<fg=green> ! New landmark spotted: '.$newDescription->getDescription().' ('.$newDescription->getLetter().')</>');

        $descriptions = $this->vista->getDescribed($newDescriptionLetter, ...$descriptionLetters);

        $io->section('List of visible landmarks');
        $io->listing(array_map(fn (Description $rule): string => '('.$rule->getLetter().') '.$rule->getDescription(), $descriptions));

        return $newDescriptionLetter;
    }
}

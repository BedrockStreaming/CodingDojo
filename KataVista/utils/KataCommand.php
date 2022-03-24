<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista;

use BedrockStreamingUtils\CodingDojo\KataVista\Description\Meadow;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class KataCommand extends Command
{
    private const CONFIGURATIONS_ARGUMENT = 'configurations';

    protected function configure(): void
    {
        $this->setName('vista:describe');
        $this->addArgument(self::CONFIGURATIONS_ARGUMENT, InputArgument::OPTIONAL, 'List of enabled rules', '');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->getFormatter()->setStyle('landmark', new OutputFormatterStyle('yellow', null, ['underscore']));
        $io->getFormatter()->setStyle('position', new OutputFormatterStyle('magenta', null, []));

        $rules = new Vista();

        $configurationString = $input->getArgument(self::CONFIGURATIONS_ARGUMENT);
        if (!is_string($configurationString)) {
            throw new \RuntimeException('The "'.self::CONFIGURATIONS_ARGUMENT.'" argument must be a string.');
        }

        if (empty($configurationString)) {
            $io->success('Welcome to the "vista" kata.');
            $io->text('Your goal is to update the Painter so it renders what is described below.');
            $io->text('There should already be a failing test. First, fix the test with `make all` for the following landmark, then use the command again as indicated in the end.');

            $newRule = new Meadow();
        } else {
            $configurations = str_split($configurationString);
            $previousRules = $rules->getDescribed(...$configurations);
            $io->comment(count($previousRules).' landmarks described.');

            $availableRules = $rules->getVisible(...$configurations);
            if (empty($availableRules)) {
                $io->error('No more landmark available for the kata, you can open a PR to add some.');

                return 1;
            }

            $io->comment('Picking a new landmark from '.count($availableRules).' available.');
            $newRule = $availableRules[array_rand($availableRules)];
        }

        $newRuleLetter = $newRule->getLetter();
        $io->info('New landmark spotted: '.$newRule->getDescription().' ('.$newRule->getLetter().')');

        $descriptions = $rules->getDescribed($newRuleLetter, ...$configurations ?? []);

        $io->section('List of visible landmarks');
        $io->listing(array_map(fn (Description $rule): string => '('.$rule->getLetter().') '.$rule->getDescription(), $descriptions));

        $io->note('For the next iteration code, proceed with the command below:');
        $io->text('./console.php vista:describe '.$configurationString.$newRuleLetter);

        return 0;
    }
}

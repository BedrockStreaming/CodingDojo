<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista;

use BedrockStreaming\CodingDojo\KataVista\Painter;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class PaintCommand extends Command
{
    protected function configure(): void
    {
        $this->setName('vista:paint');
        $this->setDescription('Take a picture and describe the view.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $camera = new Painter();

        $io->block($camera->captureVista()->describe());

        return 0;
    }
}
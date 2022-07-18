<?php

namespace BedrockStreamingUtils\CodingDojo\KataCola;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'cola:insert-coin')]
class InsertCoinCommand extends Command
{
    private const COINS = 'inserted-coins';

    protected function configure(): void
    {
        $this->addArgument(self::COINS, InputArgument::REQUIRED, 'Please insert your coin with a coma separator.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $insertedCoins = $input->getArgument(self::COINS);

        $output->writeln('Credit: ' . $insertedCoins);

        return Command::SUCCESS;
    }
}
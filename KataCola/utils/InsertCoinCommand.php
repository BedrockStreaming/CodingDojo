<?php

namespace BedrockStreamingUtils\CodingDojo\KataCola;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Yaml\Yaml;

#[AsCommand(name: 'cola:insert-coin')]
class InsertCoinCommand extends Command
{
    private const COINS = 'inserted-coins';

    private SerializerInterface $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        parent::__construct();
        $this->serializer = $serializer;
    }

    protected function configure(): void
    {
        $this->addArgument(self::COINS, InputArgument::REQUIRED, 'Please insert your coin with a coma separator.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        /* @var Credit $credit */
        $actualCredit = $this->serializer->deserialize(
            file_get_contents(__DIR__.'/credit.yaml'),
            Credit::class,
            'yaml'
        )->credit;

        $insertedCoins = $input->getArgument(self::COINS);

        $insertedCoins = explode(',',$insertedCoins);
        $credit = 0;
        $invalidCoin = 0;
        foreach ($insertedCoins as $coin) {
            //1euro
            if ((int)$coin === 1) {
                $coin = 100;
            }
            //2euroS
            if ((int)$coin === 2) {
                $coin = 200;
            }

            if ((int)$coin > 1 && (int)$coin < 10) {
                $invalidCoin += (int)$coin;
                $coin = 0;
            }
            $credit  = $credit + (int)$coin;
        }

        $formattedCoinReturn =  $invalidCoin > 0 ? ' COIN-RETURN '.number_format($invalidCoin / 100, 2): '';

        $creditToSave = (float)($actualCredit + $credit / 100);
        $yaml = Yaml::dump(['credit' => $creditToSave]);
        file_put_contents(__DIR__.'/credit.yaml', $yaml);

        $output->writeln('CREDIT: ' . number_format($creditToSave, 2) .$formattedCoinReturn);

        return Command::SUCCESS;
    }
}
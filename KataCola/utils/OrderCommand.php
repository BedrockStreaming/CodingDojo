<?php

namespace BedrockStreamingUtils\CodingDojo\KataCola;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\YamlEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

#[AsCommand(name: 'cola:order')]
class OrderCommand extends Command
{
    private const PRODUCT = 'selected-product';

    protected function configure(): void
    {
        $this->addArgument(self::PRODUCT, InputArgument::REQUIRED, 'Please select your product.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $insertedCoins = $input->getArgument(self::PRODUCT);

        $serializer = new Serializer([new ObjectNormalizer(null, null, null, new ReflectionExtractor())], [new YamlEncoder()]);
        $products = $serializer->deserialize(file_get_contents('/home/orann/bedrock_projects/CodingDojo/KataCola/utils/products.yaml'), Products::class, 'yaml');

        print_r($products);
       // $output->writeln('PRODUCT-RETURN: ' . number_format($credit / 100, 2) .$formattedCoinReturn);

        return Command::SUCCESS;
    }
}
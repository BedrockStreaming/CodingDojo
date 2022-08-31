<?php

namespace BedrockStreamingUtils\CodingDojo\KataCola;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Serializer\SerializerInterface;

#[AsCommand(name: 'cola:order')]
class OrderCommand extends Command
{
    private const PRODUCT = 'selected-product';

    private SerializerInterface $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        parent::__construct();
        $this->serializer = $serializer;
    }

    protected function configure(): void
    {
        $this->addArgument(self::PRODUCT, InputArgument::REQUIRED, 'Please select your product.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $selectedProductKeyName = $input->getArgument(self::PRODUCT);

        /* @var Products[] $products */
        $products = $this->serializer->deserialize(
            file_get_contents(__DIR__.'/products.yaml'),
            Products::class . '[]',
            'yaml'
        );

        $productName = 'Please select a valid product';
        foreach ($products as $product) {
            if($product->keyName === $selectedProductKeyName){
                $productName = $product->name;
                break;
            }
        }
       $output->writeln('PRODUCT-RETURN: ' . $productName);

        return Command::SUCCESS;
    }
}
#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';

use BedrockStreamingUtils\CodingDojo\KataCola\InsertCoinCommand;
use BedrockStreamingUtils\CodingDojo\KataCola\OrderCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\Serializer\Encoder\YamlEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

$application = new Application();

$application->add(new InsertCoinCommand(new Serializer([new ObjectNormalizer()], [new YamlEncoder()])));
$application->add(new OrderCommand(
        new Serializer([new ObjectNormalizer(), new ArrayDenormalizer()], [new YamlEncoder()])
));

$application->run();
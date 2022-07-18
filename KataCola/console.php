#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new \BedrockStreamingUtils\CodingDojo\KataCola\InsertCoinCommand());
$application->add(new \BedrockStreamingUtils\CodingDojo\KataCola\OrderCommand());

$application->run();
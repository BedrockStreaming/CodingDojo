 <?php

$finder = PhpCsFixer\Finder::create()
    ->in(
        [
            __DIR__.'/src',
            __DIR__.'/tests',
            __DIR__.'/utils',
        ]
    );

$config = new M6Web\CS\Config\BedrockStreaming();
$config->setFinder($finder);

return $config;

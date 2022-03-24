<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista;

use BedrockStreamingUtils\CodingDojo\KataVista\Description\Abbey;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\Cattle;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\Cows;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\DerelictShip;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\Field;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\FieldBarley;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\FieldWheat;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\Forest;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\Lighthouse;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\Meadow;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\Mountain;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\Ocean;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\Pines;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\Road1;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\Road2;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\Road3;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\Road4;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\Road5;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\Ship;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\SnowyMountains;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\Swamp;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\Tower;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\Village;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\Windmill;

class Vista
{
    /** @var array<string, Description> */
    private array $descriptions = [];

    public function __construct()
    {
        /** @var array<int, Description> $descriptions */
        $descriptions = [
            new Field(),
            new FieldWheat(),
            new FieldBarley(),
            new Windmill(),
            new Cattle(),
            new Cows(),
            new Meadow(),
            new Village(),
            new Forest(),
            new Pines(),
            new Abbey(),
            new Mountain(),
            new SnowyMountains(),
            new Tower(),
            new Ocean(),
            new Lighthouse(),
            new Ship(),
            new Swamp(),
            new DerelictShip(),
            new Road1(),
            new Road2(),
            new Road3(),
            new Road4(),
            new Road5(),
        ];

        foreach ($descriptions as $description) {
            $letter = $description->getLetter();
            if (array_key_exists($letter, $this->descriptions)) {
                throw new \InvalidArgumentException('Letter "'.$letter.'" is already used by class "'.get_class($this->descriptions[$letter]).'", cannot be used by "'.get_class($description).'".');
            }

            $this->descriptions[$letter] = $description;
        }
    }

    /**
     * @return array<int, Description>
     */
    public function getDescribed(string ...$configurations): array
    {
        return array_values(
            array_filter(
                $this->descriptions,
                fn (Description $description): bool => $description->isDescribed(...$configurations)
            )
        );
    }

    /**
     * @return array<int, Description>
     */
    public function getVisible(string ...$configurations): array
    {
        return array_values(
            array_filter(
                $this->descriptions,
                fn (Description $description): bool => $description->isAvailableToDescribe(...$configurations)
            )
        );
    }
}
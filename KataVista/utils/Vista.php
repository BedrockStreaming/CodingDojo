<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista;

use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleAbbey;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleCattle;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleCows;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleDerelictShip;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleField;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleFieldBarley;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleFieldWheat;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleForest;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleLighthouse;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleMeadow;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleMountain;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleOcean;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RulePines;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleRoad1;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleRoad2;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleRoad3;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleRoad4;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleRoad5;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleShip;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleSnowyMountains;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleSwamp;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleTower;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleVillage;
use BedrockStreamingUtils\CodingDojo\KataVista\Description\RuleWindmill;

class Vista
{
    /** @var array<string, Description> */
    private array $descriptions = [];

    public function __construct()
    {
        /** @var array<int, Description> $descriptions */
        $descriptions = [
            new RuleField(),
            new RuleFieldWheat(),
            new RuleFieldBarley(),
            new RuleWindmill(),
            new RuleCattle(),
            new RuleCows(),
            new RuleMeadow(),
            new RuleVillage(),
            new RuleForest(),
            new RulePines(),
            new RuleAbbey(),
            new RuleMountain(),
            new RuleSnowyMountains(),
            new RuleTower(),
            new RuleOcean(),
            new RuleLighthouse(),
            new RuleShip(),
            new RuleSwamp(),
            new RuleDerelictShip(),
            new RuleRoad1(),
            new RuleRoad2(),
            new RuleRoad3(),
            new RuleRoad4(),
            new RuleRoad5(),
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
    public function getDescribed(string ...$descriptionLetters): array
    {
        return array_values(
            array_filter(
                $this->descriptions,
                fn (Description $description): bool => $description->isDescribed(...$descriptionLetters)
            )
        );
    }

    /**
     * @return array<int, Description>
     */
    public function getVisible(string ...$descriptionLetters): array
    {
        return array_values(
            array_filter(
                $this->descriptions,
                fn (Description $description): bool => $description->isAvailableToDescribe(...$descriptionLetters)
            )
        );
    }
}
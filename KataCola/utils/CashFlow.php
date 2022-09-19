<?php

namespace BedrockStreamingUtils\CodingDojo\KataCola;

class CashFlow
{
    public function __construct
    (
        public int $coin,
        public int $quantity,
        public string $name,
    )
    {}

}
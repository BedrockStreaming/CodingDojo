<?php

class Products
{
    public function __construct
    (
        public string $name,
        public string $keyName,
        public int $quantity,
        public float $price
    )
    {}
    
}
<?php

declare(strict_types=1);

namespace App\Line;

class Product
{
    use RawLineTrait;

    private string $reference;
    private int $price;

    public function getReference(): string
    {
        return $this->reference;
    }

    public function setReference(string $reference): void
    {
        $this->reference = $reference;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }
}

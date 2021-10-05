<?php

declare(strict_types=1);

namespace App\Line;

class Balance
{
    private int $totalPrice;

    public function getTotalPrice(): ?int
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(int $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }
}

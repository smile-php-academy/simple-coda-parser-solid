<?php

declare(strict_types=1);

namespace App;

use App\Line\Balance;
use App\Line\Header;
use App\Line\Product;

class Statement
{
    private Header $header;
    private array $products;
    private Balance $balance;

    public function getHeader(): Header
    {
        return $this->header;
    }

    public function setHeader(Header $header): void
    {
        $this->header = $header;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function getBalance(): Balance
    {
        return $this->balance;
    }

    public function setBalance(Balance $balance): void
    {
        $this->balance = $balance;
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }
}

<?php

declare(strict_types=1);

namespace App\LineParser;

use App\Line\Product;
use App\Statement;

class ProductLineParser implements LineParserInterface
{
    public function canBeUsed(string $line): bool
    {
        return 0 === strpos($line, '1');
    }

    public function parse(string $line, Statement $statement): void
    {
        $product = new Product();

        $product->setRawLine($line);
        $product->setReference(substr($line, 1, 3));
        $product->setPrice((int) substr($line, 4));

        $statement->addProduct($product);
    }
}

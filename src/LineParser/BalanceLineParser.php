<?php

declare(strict_types=1);

namespace App\LineParser;

use App\Line\Balance;
use App\Statement;

class BalanceLineParser implements LineParserInterface
{
    public function canBeUsed(string $line): bool
    {
        return 0 === strpos($line, '2');
    }

    public function parse(string $line, Statement $statement): void
    {
        $balance = new Balance();

        $balance->setRawLine($line);
        $balance->setTotalPrice((int) substr($line, 1));

        $statement->setBalance($balance);
    }
}

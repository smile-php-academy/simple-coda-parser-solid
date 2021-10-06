<?php

declare(strict_types=1);

namespace App\Line;

use App\LineParser\LineParserInterface;
use App\Statement;

class DefaultLineParser implements LineParserInterface
{
    public function canBeUsed(string $line): bool
    {
        return true;
    }

    public function parse(string $line, Statement $statement): void
    {
        // TODO: Implement parse() method.
    }
}

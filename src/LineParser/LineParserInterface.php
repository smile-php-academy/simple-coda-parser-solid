<?php

declare(strict_types=1);

namespace App\LineParser;

interface LineParserInterface
{
    public function canBeUsed(string $line): bool;

    public function parse(string $line);
}

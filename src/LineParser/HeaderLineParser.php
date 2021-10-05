<?php

declare(strict_types=1);

namespace App\LineParser;

use App\Line\Header;

class HeaderLineParser implements LineParserInterface
{
    public function canBeUsed(string $line): bool
    {
        return 0 == strpos($line, '0');
    }

    public function parse(string $line)
    {
        $header = new Header();

        $header->setDate(substr($line, 1));

        return $header;
    }
}

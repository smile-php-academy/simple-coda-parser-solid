<?php

declare(strict_types=1);

namespace App\LineParser;

use App\Line\Header;
use App\Statement;

class HeaderLineParser implements LineParserInterface
{
    public function canBeUsed(string $line): bool
    {
        return 0 === strpos($line, '0');
    }

    public function parse(string $line, Statement $statement): void
    {
        $header = new Header();

        $header->setRawLine($line);
        $header->setDate(substr($line, 1));

        $statement->setHeader($header);
    }
}

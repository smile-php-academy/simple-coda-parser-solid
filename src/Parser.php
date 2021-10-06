<?php

declare(strict_types=1);

namespace App;

use App\Line\DefaultLineParser;
use App\LineParser\BalanceLineParser;
use App\LineParser\HeaderLineParser;
use App\LineParser\LineParserInterface;
use App\LineParser\ProductLineParser;

class Parser
{
    private FileReader $fileReader;
    private $lineParsers = [];

    public function __construct()
    {
        $this->fileReader = new FileReader();
        $this->lineParsers = [
            new HeaderLineParser(),
            new ProductLineParser(),
            new BalanceLineParser(),
        ];
    }

    public function parse(string $filename): Statement
    {
        $statement = new Statement();

        foreach ($this->fileReader->getLines($filename) as $line) {
            $lineParser = $this->getLineParser($line);
            $lineParser->parse($line, $statement);
        }

        return $statement;
    }

    public function getLineParser(string $line): LineParserInterface
    {
        foreach ($this->lineParsers as $lineParser) {
            if ($lineParser->canBeUsed($line)) {
                return $lineParser;
            }
        }

        return new DefaultLineParser();
        // throw new \RuntimeException(sprintf('Cannot parse line : [%s]', $line));
    }
}

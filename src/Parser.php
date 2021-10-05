<?php

declare(strict_types=1);

namespace App;

use App\LineParser\HeaderLineParser;
use App\LineParser\LineParserInterface;

class Parser
{
    private FileReader $fileReader;
    private $lineParsers = [];

    public function __construct()
    {
        $this->fileReader = new FileReader();
        $this->lineParsers = [
            new HeaderLineParser(),
        ];
    }

    public function parse(string $filename): Statement
    {
        foreach ($this->fileReader->getLines($filename) as $line) {
            $lineParser = $this->getLineParser($line);
        }
    }

    public function getLineParser(string $line): LineParserInterface
    {
        foreach ($this->lineParsers as $lineParser) {
            if ($lineParser->canBeUsed($line)) {
                return $lineParser;
            }
        }

        throw new \RuntimeException(sprintf('Cannot parse line : [%s]', $line));
    }
}

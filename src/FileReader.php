<?php

declare(strict_types=1);

namespace App;

class FileReader
{
    public function getLines(string $filename): array
    {
        $content = file_get_contents($filename);

        $lines = explode(PHP_EOL, $content);

        return array_filter($lines);
    }
}

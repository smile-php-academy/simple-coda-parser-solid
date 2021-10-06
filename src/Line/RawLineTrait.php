<?php

declare(strict_types=1);

namespace App\Line;

trait RawLineTrait
{
    private string $rawLine;

    public function getRawLine(): string
    {
        return $this->rawLine;
    }

    public function setRawLine(string $rawLine): void
    {
        $this->rawLine = $rawLine;
    }
}

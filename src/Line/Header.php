<?php

declare(strict_types=1);

namespace App\Line;

class Header
{
    use RawLineTrait;

    private string $date;

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }
}

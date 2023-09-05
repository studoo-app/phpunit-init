<?php

namespace App\Services;

class TextService
{
    public function toUpperCase(string $string): string
    {
        return  strtoupper($string);
    }

    public function capitalizeFirst(string $string): string
    {
        return  ucfirst($string);
    }

    public function minimizeFirst(string $string): string
    {
        return  lcfirst($string);
    }
}

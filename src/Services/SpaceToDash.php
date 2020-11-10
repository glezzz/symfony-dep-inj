<?php


namespace App\Services;


class SpaceToDash implements transform
{
    public function transform(string $string): string
    {
        return str_replace(' ', '-', $string);
    }

}
<?php

namespace App;

use phpDocumentor\Reflection\Types\Array_;
use phpDocumentor\Reflection\Types\ArrayKey;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        $array = self::products;
        $tmpArray = array();
        $colors = array();
        foreach ($array as $value) {
            $tmpColor = strtok($value, '-');
            $tmpSize = substr($value, strpos($value, '-') + 1);
            $tmpArray[$tmpColor][] = $tmpSize;
        }
        foreach ($array as $value) {
            $color = strtok($value, '-');
            $size = substr($value, strpos($value, '-') + 1);
            $count = count(array_keys($tmpArray[$color], $size, true));
            $colors[$color][$size] = $count;
        }

        // var_dump($colors);

        return $colors;
    }
}

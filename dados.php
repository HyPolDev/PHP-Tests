<?php

function dados($min = 1, $max = 6, $ndados = 1)
{
    $resultado = [];
    for ($i = 0; $i < $ndados; $i++) {
        $resultado[] = rand($min, $max);
    }
    return $resultado;
};

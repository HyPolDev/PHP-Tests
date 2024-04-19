<?php

$array = [];
$nPlatos = 100000;

for ($i = 0; $i < $nPlatos; $i++) {

    $array[] = [
        "titulo" => "plato" . $i,
        "Numero de comensales" => $i * 3,
        "Tipo de plato" => "plato" . $i,
        "precio" => $i * (1 / ($i + 0.5)) * 10
    ];
};

for ($i = 0; $i < count($array); $i++) {
    print_r($array[$i]);
    echo "<br>-------------------------------------------------------------------------------------------------------------------------------------<br>";
};

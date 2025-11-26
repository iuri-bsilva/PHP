<?php

require_once __DIR__ . "/../classes/Carro.php";

$carros = [
    new Carro("Ferrari", 320, 2500000),
    new Carro("BMW", 280, 550000),
    new Carro("Gol", 160, 45000)
];

foreach ($carros as $carro) {
    echo $carro->mostrarInfo() . "<br>";
}

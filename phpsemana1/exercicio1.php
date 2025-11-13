<?php 

if (isset($_POST['valor'])) {
    $valor = (int) $_POST['valor'];

    $nota100 = intdiv($valor, 100);
    $valor %= 100;

    $nota50 = intdiv($valor, 50);
    $valor %= 50;

    $nota10 = intdiv($valor, 10);
    $valor %= 10;

    $nota1 = $valor;

    echo "<p>Notas de 100: $nota100</p>";
    echo "<p>Notas de 50: $nota50</p>";
    echo "<p>Notas de 10: $nota10</p>";
    echo "<p>Notas de 1: $nota1</p>";
}
?>
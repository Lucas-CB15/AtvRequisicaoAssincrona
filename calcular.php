<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $larguraComodo = floatval($_POST["larguraComodo"]);
    $comprimentoComodo = floatval($_POST["comprimentoComodo"]);
    $larguraPiso = floatval($_POST["larguraPiso"]);
    $comprimentoPiso = floatval($_POST["comprimentoPiso"]);
    $margemExtra = floatval($_POST["margemExtra"]);

    $areaComodo = $larguraComodo * $comprimentoComodo;

    $areaPiso = $larguraPiso * $comprimentoPiso;

    $quantidadePisos = ceil($areaComodo / $areaPiso);

    if ($margemExtra > 0) {
        $quantidadeTotal = ceil($quantidadePisos * (1 + $margemExtra / 100));
    } else {
        $quantidadeTotal = $quantidadePisos;
    }

    echo $quantidadeTotal;
}
?>
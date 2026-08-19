<?php

function calcularPrecoFinal($preco, $quantidade, $desconto) {
    $total = $preco * $quantidade;
    $desconto = $total * ($desconto / 100);
    $precoFinal = $total - $desconto;

    return $precoFinal;
}

$preco = 50;
$quantidade = 3;
$desconto = 10;

$precoFinal = calcularPrecoFinal($preco, $quantidade, $desconto);

echo "Preço final " . $precoFinal;

?>
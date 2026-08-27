<?php

function CalcularPedido($nome, $preco, $qtd, $desconto = 0, $imposto = 0) {

    $subtotal = $preco * $qtd;
    $ValorDesconto = $subtotal * ($desconto / 100);
    $ValorTotalDesconto = $subtotal - $ValorDesconto;
    $valorimposto = $ValorTotalDesconto * ($imposto / 100);
    $TotalFinal = $ValorTotalDesconto + $valorimposto;

    return [
        "nome" => $nome,
        "preço" => $preco,
        "desconto" => $ValorDesconto,
        "Imposto" => $valorimposto,
        "preço final" => $TotalFinal
    ];
}

function CalculoFrete($TotalFinal) {

    $valorfinalfrete = $TotalFinal + ($TotalFinal / 100);

    return [
        "valorfinalfrete" => $valorfinalfrete
    ];
}

?>

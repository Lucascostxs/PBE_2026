<?php

function escolherMensalidade($tipo)
{
    $mensalidades = [
        "basica" => 80,
        "completa" => 120,
        "premium" => 160
    ];

    return $mensalidades[$tipo];
}


function calcularDesconto($valor, $idade)
{
    if ($idade >= 60) {
        $desconto = $valor * 0.20;
    } elseif ($idade < 18) {
        $desconto = $valor * 0.10;
    } else {
        $desconto = 0;
    }

    return $desconto;
}


function calcularTotal($valor, $desconto)
{
    return $valor - $desconto;
}

?>
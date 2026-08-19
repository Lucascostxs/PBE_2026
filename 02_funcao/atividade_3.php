<?php

function analisarNumero($num){
    $dobro = $num * 2;
    $triplo = $num * 3;
    $quadrado = $num * $num;

    if ($num >= 0){
        $situacao = "Positivo";
    }
    elseif ($num < 0){
        $situacao = "Negativo";
    }

    return [
        "numero" => $num,
        "dobro" => $dobro,
        "triplo" => $triplo,
        "quadrado" => $quadrado,
        "situacao" => $situacao
    ];
}

$resultado = analisarNumero(67);

echo "Numero" . $resultado["numero"] . "<br>";
echo "Dobro" . $resultado["dobro"] . "<br>";
echo "Triplo" . $resultado["triplo"] . "<br>";
echo "Quadrado: " . $resultado["quadrado"] . "<br>";
echo "Situação: " . $resultado["situacao"];

?>
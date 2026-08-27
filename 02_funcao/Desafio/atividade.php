<?php

require_once "funcao.php";

$resultado = CalcularPedido("Celular", 600, 5, 10, 7);

echo "Nome: " . $resultado["nome"] . "<br>";
echo "Preço: " . $resultado["preço"] . "<br>";
echo "Desconto: " . $resultado["desconto"] . "<br>";
echo "Imposto: " . $resultado["Imposto"] . "<br>";
echo "Preço final: " . $resultado["preço final"] . "<br>";

echo "<br>";
$resultado2 = CalculoFrete($resultado["preço final"]);
echo "frete: " . $resultado2["valorfinalfrete"];

?>
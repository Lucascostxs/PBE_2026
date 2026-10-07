<?php

$nome = $_POST["nomecliente"];

$produto1 = $_POST["produto1"];
$preco1 = $_POST["preco1"];
$qtd1 = $_POST["qtd1"];

$produto2 = $_POST["produto2"];
$preco2 = $_POST["preco2"];
$qtd2 = $_POST["qtd2"];

$produto3 = $_POST["produto3"];
$preco3 = $_POST["preco3"];
$qtd3 = $_POST["qtd3"];


$produtos = [
    ["nome" => $produto1, "preco" => $preco1, "quantidade" => $qtd1],
    ["nome" => $produto2, "preco" => $preco2, "quantidade" => $qtd2],
    ["nome" => $produto3, "preco" => $preco3, "quantidade" => $qtd3]
];


$total = 0;

foreach ($produtos as $produto) {

    $subtotal = $produto["preco"] * $produto["quantidade"];

    $total = $total + $subtotal;
}


if ($total > 500) {
    $desconto = $total * 0.10;
} else {
    $desconto = 0;
}


$totalFinal = $total - $desconto;


require_once "view_relatorio.php";

?>
```



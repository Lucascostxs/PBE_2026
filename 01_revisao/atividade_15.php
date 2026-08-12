<?php

$produtos = [
    ["Nome" => "Celular", "Preço" => 1267],
    ["Nome" => "Fone", "Preço" => 60],
    ["Nome" => "Mouse", "Preço" => 80],
    ["Nome" => "Notebook", "Preço" => 6766]
];

foreach ($produtos as $produto) {
    echo "Produto: " . $produto["Nome"] . "<br>";
    echo "Preço: " . $produto["Preço"] . "<br>";

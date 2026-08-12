<?php

$funcionarios = [
    ["Nome" => "Cauã", "Cargo" => "Mata frango", "Salario" => 200],
    ["Nome" => "Thiago", "Cargo" => "Gari", "Salario" => 400],
    ["Nome" => "Tobias", "Cargo" => "Contador", "Salario" => 100],
    ["Nome" => "Matheus", "Cargo" => "Pedreiro", "Salario" => 700]
];

$soma = 0;

foreach ($funcionarios as $funcionario) {
    echo "Funcionário: " . $funcionario["Nome"] . "<br>";
    echo "Cargo: " . $funcionario["Cargo"] . "<br>";
    echo "Salário: R$ " . $funcionario["Salario"] . "<br>";

    $soma += $funcionario["Salario"];
}

echo "<br>";
echo "Funcionários: " . count($funcionarios) . "<br>";
echo "Salários: " . $soma;

?>
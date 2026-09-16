
<?php

$nome = $_POST['nome'];
$salariobruto = $_POST['bruto'];
$horas_extras = $_POST['extra'];
$beneficio = $_POST['beneficios'];
$desconto = $_POST['desconto'];

$valor_hora = $salariobruto / 160;
$valor_hora_extra = $valor_hora * 1.5;
$total_horas_extras = $horas_extras * $valor_hora_extra;

$salario_bruto_sem_descontos = $salariobruto + $total_horas_extras + $beneficio;

if ($salario_bruto_sem_descontos >= 5000) {
    $imposto = 10;
    $valorimposto = $salario_bruto_sem_descontos * ($imposto / 100);
    $salario_final = $salario_bruto_sem_descontos - $valorimposto;
}
elseif ($salario_bruto_sem_descontos >= 3000) {
    $imposto = 5;
    $valorimposto = $salario_bruto_sem_descontos * ($imposto / 100);
    $salario_final = $salario_bruto_sem_descontos - $valorimposto;
}
else {
    $salario_final = $salario_bruto_sem_descontos;
    echo "Isento de Imposto de Renda";
}

$salario_liq = $salario_final - $desconto;

if ($salario_liq >= 4000) {
    $status = "Ganha bem";
}
else {
    $status = "Ganha Médio";
}

echo "Nome do Funcionario: " . $nome;
echo "<br>";
echo "Salario Bruto: " . $salariobruto;
echo "<br>";
echo "Salario bruto mais horas extras e beneficios: " . $salario_bruto_sem_descontos;
echo "<br>";
echo "Desconto: " . $desconto;
echo "<br>";
echo "Imposto: " . $valorimposto;
echo "<br>";
echo "Salario liquido: " . $salario_liq;
echo "<br>";
echo "Status: " . $status;

?>


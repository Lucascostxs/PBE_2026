<?php

require_once "logica.php";

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$tipo = $_POST["mensalidade"];
$pagamento = $_POST["pagamento"];

$valor = escolherMensalidade($tipo);

$desconto = calcularDesconto($valor, $idade);

$total = calcularTotal($valor, $desconto);


$nomesMensalidades = [
    "basica" => "Mensalidade Básica",
    "completa" => "Mensalidade Completa",
    "premium" => "Mensalidade Premium"
];

$nomeMensalidade = $nomesMensalidades[$tipo];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Relatório</title>
</head>
<body>

<h1>Cadastro finalizado!</h1>

<h2>Dados do aluno</h2>

<?php

echo "Nome: " . $nome . "<br><br>";
echo "Idade: " . $idade . "<br><br>";
echo "Mensalidade: " . $nomeMensalidade . "<br><br>";
echo "Forma de pagamento: " . $pagamento . "<br><br>";
echo "Valor da mensalidade: R$ " . number_format($valor, 2, ",", ".") . "<br><br>";
echo "Desconto: R$ " . number_format($desconto, 2, ",", ".") . "<br><br>";
echo "Valor final: R$ " . number_format($total, 2, ",", ".") . "<br>";

?>

</body>
</html>
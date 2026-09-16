
<?php

$nome = $_POST['nome'];
$filme = $_POST['filme'];
$Quantidade = $_POST['qtd'];
$tipo = $_POST['tipo'];

if($tipo == "inteira"){
    $total = $Quantidade * 10;
}
else {
    $total = $qtd * 5
}
if ($qtd >= 10){
    $desconto =total * (10/100);
    $total = $total -$desconto;
}
require_once "view_relatorio.php";

?>

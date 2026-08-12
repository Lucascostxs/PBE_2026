<?php
$num1 = 10;
$num2 = 2;
$operacao = '/';

switch ($operacao) {
    case '+':
        $resultado = $num1 + $num2;
        echo  $resultado;
        break;
    case '-':
        $resultado = $num1 - $num2;
        echo $resultado;
        break;
    case '*':
        $resultado = $num1 * $num2;
        echo $resultado;
        break;
    case '/':
        if ($num2 == 0) {
            echo "Dividido por zero";
        } else {
            $resultado = $num1 / $num2;
            echo $resultado;
        }
        break;
    default:
        echo "Operação inválida.";
        break;
}
?>

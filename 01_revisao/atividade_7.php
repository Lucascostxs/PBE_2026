<?php

$num1 = 270;
$num2 = 33;
$operacao = "+"; 

switch ($operacao) {

    case "+":
        echo "Resultado: " . ($num1 + $num2);
        break;

    case "-":
        echo "Resultado: " . ($num1 - $num2);
        break;

    case "*":
        echo "Resultado: " . ($num1 * $num2);
        break;

    case "/":
        if ($num2 == 0) {
            echo "Erro";
        } else {
            echo "Resultado: " . ($num1 / $num2);
        }
        break;

    default:
        echo "Operação inválida!";
        break;
}

?>
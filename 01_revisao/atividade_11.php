<?php

$numeros = [12, 45, 8, 98, 69, 67, 44, 55, 10, 89];
$maior = $numero[0];

foreach ($numeros as $numero) {
    if ($numero > $maior) {
        $maior = $numero;
    }
}
echo $maior;
?>
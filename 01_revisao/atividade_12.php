<?php

$idades = [17, 20, 15, 22, 8, 8, 35, 99];
$soma = 0;
$maior = 0;

foreach ($idades as $idade) {
    echo "Idade: ". $idade;
    echo "<br>";
    $soma = $soma + $idade;
    if ($idade >= 18) {
        $maior = maior + 1;
    }
}

 count($idades);
$media = $soma / count($idades);

echo "A media das idade é ". $media . "<br>";
echo "Os maiores são ". $maior;

?>
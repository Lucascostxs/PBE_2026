<?php

$alunos = array(
    "Cauã" => 7.0,
    "Gabriel" => 8.5,
    "João" => 6.5,
    "Ana" => 9.0,
    "Tobias" => 7.5
);

$soma = 0;
$quantidade = 0;

foreach ($alunos as $nome => $nota) {
    echo "O aluno " . $nome . " tirou nota " . $nota . "<br>";

    $soma = $soma + $nota;
    $quantidade++;
}

$media = $soma / $quantidade;

echo "<br>Média da turma: " . $media;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-08">
    <meta name="viewpost" content="width=device-width, initial-scale=1.0">
    <title>Relatorio</title>
</head>
<body>
    <h1 style = "text-align: center"> Resultado dos Alunos </h1>
    <p><b>Nome: <b> <?= $nome ?> </p>
    <p><b>Nota 1: <b> <?= $nota1 ?> </p>
    <p><b>Nota 2: <b> <?= $nota2 ?> </p>
    <p><b>Nota 3: <b> <?= $nota3 ?> </p>

    <?php if ($media >= 7): ?>
        <p>Aprovado</p>
    <?php else: ?>
        <p>Reprovado</p>
    <?php endif ?>

    <?php if($media ==10): ?>
        <p>Você Atingiu a nota Maxima</p>
        <?php endif ?>
    </body>
</html>
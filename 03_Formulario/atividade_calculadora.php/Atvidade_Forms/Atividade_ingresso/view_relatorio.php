<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-08">
    <meta name="viewpost" content="width=device-width, initial-scale=1.0">
    <title>Atividade ingressos</title>
</head>
<body>
    <h1> Compra Ingressos</h1>>
    <p><b>Nome: </b> <?= $nome ?></p>
    <p><b>Nome Filme: </b> <?= $filme ?></p>
    <p><b>Qunatidade: </b> <?= $Quantidade ?></p>
    <p><b>Tipo de Ingressos: </b> <?= $tipo ?></p>
    <p><b>Valor Total: </b> <?= $total ?></p>

    <?php if(%qtd >=10): ?>
        <h2>Parabens desconto de 10%</h2>
    <?php endif ?>
    </body>
</html>
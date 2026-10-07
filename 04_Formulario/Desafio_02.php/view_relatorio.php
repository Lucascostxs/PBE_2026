<!DOCTYPE html>
<html>

<head>
    <title>Relatório</title>
</head>

<body>

<h2>Resumo da Compra</h2>

<h3>Cliente: <?= $nome; ?></h3>

<table border="1">

<tr>
    <th>Produto</th>
    <th>Preço</th>
    <th>Quantidade</th>
    <th>Subtotal</th>
</tr>

<?php foreach ($produtos as $produto) { ?>

<tr>
    <td><?= $produto["nome"]; ?></td>
    <td><?= $produto["preco"]; ?></td>
    <td><?= $produto["quantidade"]; ?></td>
    <td><?= $produto["preco"] * $produto["quantidade"]; ?></td>
</tr>

<?php } ?>

</table>

<h3>Total: R$ <?= $total; ?></h3>

<h3>Desconto: R$ <?= $desconto; ?></h3>

<p>Obrigado pela Compra!</p>

<h3>Total final: R$ <?= $totalFinal; ?></h3>

    </body>
</html>




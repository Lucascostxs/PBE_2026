<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-08">
    <meta name="viewpost" content="width=device-width, initial-scale=1.0">
    <title>Atividade Compras</title>
</head>
<body>
    <h1 style = "text-elign: center">Carrinho de Compras</h1>
    <br>
    <h2 style= "text-elign: center">Dados do Cliente</h2>
    <form action= "logica.php" method ="POST">
        <label for = "">Nome: </label>
        <input type ="text" name = "nomecliente">
        <br><br>
        <h2 style = "text-elign: center">Produto 1</h2>
        <label for = "">Nome do Produto: </label>
        <input type ="text" name = "produto1">
        <br><br>
        <label for = "">Preço: </label>
        <input type ="number" name = "preco1">
        <br><br>
        <label for = "">Quantidade: </label>
        <input type ="number" name = "qtd1">
        <br><br>
        <h2 style = "text-elign: center">Produto 2</h2>
        <label for = "">Nome do Produto: </label>
        <input type ="text" name = "produto2">
        <br><br>
        <label for = "">Preço: </label>
        <input type ="number" name = "preco2">
        <br><br>
        <label for = "">Quantidade: </label>
        <input type ="number" name = "qtd2">
        <br><br>
        <h2 style = "text-elign: center">Produto 3</h2>
        <label for = "">Nome do Produto: </label>
        <input type ="text" name = "produto3">
        <br><br>
        <label for = "">Preço: </label>
        <input type ="number" name = "preco3">
        <br><br>
        <label for = "">Quantidade: </label>
        <input type ="number" name = "qtd3">
        <br><br>
        <button type ="submit">Finalizar Compra</button>
    </body>
</html>




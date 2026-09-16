<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-08">
    <meta name="viewpost" content="width=device-width, initial-scale=1.0">
    <title>Atividade Ingresso</title>
</head>
<body>
    <h2 style= "text-elign: center">Calcular IMC</h2>
    <form action= "logica.php" method ="POST">
        <label for = "">Nome: </label>
        <input type ="text" name = "nome">
        <br><br>
        <label for = "">Filme: </label>
        <input type ="text" name = "filme">
        <br><br>
        <label for = "">Quantidade de ingressos: </label>
        <input type ="number" name = "qtd">
        <br><br>

        <input type ="radio" name = "tipo" value = "inteira">
        <label for = ""> inteira </label>
        <br>
        <input type ="radio" name = "tipo" value = "Meia">
        <label for = ""> Meia </label>
        <br><br>
        <button type ="submit">Comprar ingressos</button>
    </body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-08">
    <meta name="viewpost" content="width=device-width, initial-scale=1.0">
    <title>Atividade IMC</title>
</head>
<body>
    <h2 style= "text-elign: center">Calcular IMC</h2>
    <form action= "logica.php" method ="POST">
        <label for = "">Nome: </label>
        <input type ="text" name = "nome">
        <br><br>
        <label for = "">Peso em KG: </label>
        <input type ="number" name = "peso" step = "0.01">
        <br><br>
        <label for = "">Altura em metros: </label>
        <input type ="number" name = "altura" step = "0.01">
        <br><br>
        <button type ="submit">Calcular IMC</button>
    </body>
</html>

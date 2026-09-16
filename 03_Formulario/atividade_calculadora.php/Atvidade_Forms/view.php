<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-08">
    <meta name="viewpost" content="width=device-width, initial-scale=1.0">
    <title>Atividade Forms</title>
</head>
<body>
    <h2 style= "text-elign: center">Calcular Média do Aluno</h2>
    <form action= "logica.php" method ="POST">
        <label for = "">Nome do Aluno: </label>
        <input type ="text" name = "nome">
        <br><br>
        <label for = "">Nota 1: </label>
        <input type ="number" name = "nota1">
        <br><br>
        <label for = "">Nota 2: </label>
        <input type ="number" name = "nota2">
        <br><br>
        <label for ="">Nota 3: </label>
        <input type ="number" name ="nota3">
        <br><br>
        <button type ="submit">Calcular Média</button>
    </body>
</html>

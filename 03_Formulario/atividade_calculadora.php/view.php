<!DoCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-08">
    <meta name="viewpost" content="width=device-width, initial-scale=1.0">
    <title>Atividade 8</title>
</head>
<body>
    <h2 style= "text-elign: center">Calcular Salario</h2>
    <form action= "logica.php" method ="POST">
        <label for = "">Nome funcionario: </label>
        <input type ="text" name = "nome">
        <br><br>
        <label for = "">Salario bruto: </label>
        <input type ="number" name = "bruto">
        <br><br>
        <label for = "">Horas extras: </label>
        <input type ="number" name = "extra">
        <br><br>
        <label for = "">Beneficios: </label>
        <input type ="number" name = "beneficios">
        <br><br>
        <label for = "">Descontos: </label>
        <input type ="number" name = "desconto">
        <br><br>
        <button type ="submit">Enviar</button>
    </body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro da Academia</title>
</head>
<body>

<h1>Bem-vindo a GYM10</h1>

<form action="view_relatorio.php" method="POST">

    <label>Nome:</label>
    <input type="text" name="nome" required>
    <br><br>

    <label>Idade:</label>
    <input type="number" name="idade" required>
    <br><br>

    <label>Tipo de mensalidade:</label>
    <select name="mensalidade" required>
        <option value="basica">Mensalidade Básica - R$ 80</option>
        <option value="completa">Mensalidade Completa - R$ 120</option>
        <option value="premium">Mensalidade Premium - R$ 160</option>
    </select>
    <br><br>

    <label>Forma de pagamento:</label>
    <select name="pagamento" required>
        <option value="pix">Pix</option>
        <option value="cartao">Cartão</option>
        <option value="dinheiro">Dinheiro</option>
    </select>
    <br><br>

    <input type="submit" value="Cadastrar">

</form>

</body>
</html>
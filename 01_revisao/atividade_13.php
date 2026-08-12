<?php

$clientes = [
    "Nome" => "Lucas",
    "CPF" => "4448574302",
    "Telefone" => "67 99432-4567",
    "Endereco" => "Rua Belterra, 20"
];
foreach ($clientes as $cliente => $informacao){
    echo $cliente, ": ". $informacao;
    echo "<br>";
}
?>
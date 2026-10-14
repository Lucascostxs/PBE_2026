<?php

class Produto {

    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome, $preco, $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function vender($quantidade) {
        if ($quantidade <= $this->estoque) {
            $this->estoque -= $quantidade;
            echo "Venda realizada com sucesso!<br>";
        } else {
            echo "Estoque insuficiente para vender .<br>";
        }
    }

    public function reajustarPreco($percentual) {
        $this->preco += $this->preco * ($percentual / 100);
    }

    public function exibirInfo() {
        $precoFormatado = number_format($this->preco, 2, ',', '.');

        echo "Nome: " . $this->nome . "<br>";
        echo "Preço: R$ " . $precoFormatado . "<br>";
        echo "Estoque: " . $this->estoque . " unidades<br>";
    }
}

$produto = new Produto("Teclado", 100, 10);
$produto->vender(2);
$produto->reajustarPreco(5);
$produto->exibirInfo();

?>
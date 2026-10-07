<?php

class ContaBancaria {
    
    public $titular;
    public $saldo;

    public function __construct($titular, $saldoInicial) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }
    public function depositar($valor) {
        $this->saldo += $valor;
    }
    public function sacar($valor) {
        $this->saldo -= $valor;
    }
    public function exibirSaldo() {
        $saldoFinal = $this->saldo;
        echo "Titular: {$this->titular} - Saldo atual: R$ {$saldoFinal}<br>";
    }
}

$conta = new ContaBancaria("Lucas", 350);
$conta->depositar(500);
$conta->sacar(50);
$conta->exibirSaldo();

?>
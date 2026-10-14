<?php

class Carro {

    private $modelo;
    private $consumo;
    private $tanque;

    public function __construct($modelo, $consumo = 10, $tanqueInicial = 0) {
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanqueInicial;
    }

    public function abastecer($litros) {
        if ($litros > 0) {
            $this->tanque += $litros;
            echo "Abastecido com sucesso!<br>";
        } else {
            echo "combustível inválida para abastecimento.<br>";
        }
    }
    public function dirigir($km) {
        $litrosNecessarios = $km / $this->consumo;

        if ($litrosNecessarios <= $this->tanque) {
            $this->tanque -= $litrosNecessarios;
            echo "Viagem de {$km} km realizada com sucesso!<br>";
        } else {
            echo "Combustível insuficiente para percorrer {$km} km.<br>";
        }
    }

    public function exibirInfo() {
        $tanqueFormatado = number_format($this->tanque, 2, ',', '.');
        echo "Modelo: {$this->modelo} | Consumo: {$this->consumo} km/L | Tanque: {$tanqueFormatado} L<br>";
    }
}

$carro = new Carro("Honda Civic", 12, 20);
$carro->exibirInfo();
$carro->dirigir(60);
$carro->abastecer(10);
$carro->exibirInfo();

?>
<?php

class Funcionario
{
    private $nome;
    private $salario;

    public function __construct($nome, $salario = 1000)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario($percentual)
    {
        if ($percentual > 0 || $percentual <= 10) {
            $this->salario = $this->salario + ($this->salario * $percentual / 100);
        }
    }
    public function exibirSalario()
    {
        echo "Funcionário: " . $this->nome;
        echo "Salário: R$ " . $this->salario;
    }
}

$func = new Funcionario ("Lucas", 4000);
$func->aumentarSalario(15);
$func->exibirSalario();

?>
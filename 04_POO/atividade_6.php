<?php

class Media {

    public $nome;
    public $nota1;
    public $nota2;
    public $media;

    public function __construct($nome, $nota1, $nota2) {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->media = $this->CalcularMedia();
    }

    private function CalcularMedia() {
        return ($this->nota1 + $this->nota2) / 2;
    }
    public function exibirDetalhes() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Nota 1: " . $this->nota1 . "<br>";
        echo "Nota 2: " . $this->nota2 . "<br>";
        echo "Média: " . $this->media . "<br><br>";
    }
}

$aluno = new Media("Lucas", 6, 10);
$aluno->exibirDetalhes();
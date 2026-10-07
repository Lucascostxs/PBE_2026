<?php
 
 class Aula{
    public $disciplina;
    public $professor;
    public $duracao;
    public $n_sala;
    public $bloco;

    function exibirInformações(){
        echo "Disciplina:" $this->disciplina <br>";
        echo "Professor:" $this->professor <br>";
        echo "Duração:" $this->duracao <br>";
        echo "Número de Salas:" $this->n_sala <br>";
        echo "Bloco:" $this->bloco <br>";
    }
        function trocarProfessor($nome_professor){
            $this -> professor = $nome_professor;
            echo "O novo professor é $this->professor<br>;
    }
        function alterarLocal($novo_bloco, $novo_numero_sala){
        $this -> n_sala = $nome_numero_sala;
        $this-> bloco = $novo_bloco;

        echo "O novo local é $this->bloco $this->n_sala <br>";
    }
 }

 $aula1 = new Aula();

$aula1->disciplina = "Programação";
$aula1->professor = "Leonardo";
$aula1->duracao = 4;
$aula1->numeroSala = 12;
$aula1->bloco = "A";

$aula1->exibirInformacoes();
$aula1->trocarProfessor("Carlos");
$aula1->alterarLocal(15, "B");
$aula1->exibirInformacoes();

echo "<hr>";

$aula2 = new Aula();

$aula2->disciplina = "Banco de Dados";
$aula2->professor = "Marcos";
$aula2->duracao = 2;
$aula2->numeroSala = 8;
$aula2->bloco = "C";

$aula2->exibirInformacoes();
$aula2->trocarProfessor("Ana");
$aula2->alterarLocal(10, "D");
$aula2->exibirInformacoes();
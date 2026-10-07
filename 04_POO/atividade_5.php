<?php

class Livro {

    public $titulo;
    public $autor;
    public $paginas;
    public $anoPublicacao;

    public function __construct($titulo, $autor, $paginas, $anoPublicacao) {

        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->anoPublicacao = $anoPublicacao;
    }
    public function exibirDetalhes() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Páginas: " . $this->paginas . "<br>";
        echo "Publicado em: " . $this->anoPublicacao . "<br><br>";
    }
}
$livro1 = new Livro("Dom Casmurro", "Machado de Assis", 256, "1899");
$livro1-> exibirDetalhes();

$livro2 = new Livro("O Alquimista", "Paulo Coelho", 208, "1905");
$livro2->exibirDetalhes();

?>
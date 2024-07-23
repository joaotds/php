<?php

class Livro {
    private $titulo;
    private $autor;
    private $genero;
    private $quantidadeDePaginas;

    public function __construct($titulo, $autor, $genero, $quantidadeDePaginas) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero;
        $this->quantidadeDePaginas = $quantidadeDePaginas;
    }

    public function __toString() {
        return "$this->titulo, $this->autor, $this->genero, $this->quantidadeDePaginas";
    }
}

// Criando objetos da classe Livro
$livro1 = new Livro("Python Cookbook", "David Beazley", "Programação", 706);
$livro2 = new Livro("Clean Code", "Robert C. Martin", "Desenvolvimento de Software", 464);
$livro3 = new Livro("O Hobbit", "J.R.R. Tolkien", "Fantasia", 320);

// Adicionando os objetos em um array
$livros = [$livro1, $livro2, $livro3];

// Exibindo os atributos dos objetos Livro em uma tabela
echo "Título, Autor, Gênero, Quantidade de Páginas\n";
foreach ($livros as $livro) {
    echo $livro . "\n";
}

?>

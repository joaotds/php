<?php

class Pessoa {
    private $nome;
    private $sobrenome;

    public function __construct($nome, $sobrenome) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function nomeCompleto() {
        return $this->nome . " " . $this->sobrenome;
    }
}

// Criando objetos da classe Pessoa
$pessoa1 = new Pessoa("João", "Silva");
$pessoa2 = new Pessoa("Maria", "Santos");
$pessoa3 = new Pessoa("Pedro", "Souza");

// Exibindo o nome completo de cada pessoa
echo $pessoa1->nomeCompleto() . "\n";
echo $pessoa2->nomeCompleto() . "\n";
echo $pessoa3->nomeCompleto() . "\n";

?>

<?php

class Pessoa {

    private $nome;
    private $sobrenome;
    private $idade;

    public function __construct($nome, $sobrenome, $idade) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->idade = $idade;
    }

    public function __toSring(){
        echo "Nome completo: " . $nome . " " . $sobrenome . "\n";
        echo "Idade: " . $idade . "\n";
    }

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }
}
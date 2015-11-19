<?php

class Produto{
    private $nome;
    private $descricao;
    private $valor;
    private $estoque;

    public function getEstoque()
    {
        return $this->estoque;
    }

    public function setEstoque($estoque)
    {
        $this->estoque = $estoque;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
        return $this;
    }

    public function getValor()
    {
        return $this->valor;
        return $this;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

//    public function __construct($nome, $descricao, $valor, $estoque){
//        $this->nome = $nome;
//        $this->descricao = $descricao;
//        $this->estoque = $estoque;
//        $this->valor = $valor;
//    }

    private function baixaEstoque(){
        $this->estoque = $this->estoque - 1;
    }
}
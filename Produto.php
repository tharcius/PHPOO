<?php

class Produto{
    public $nome;
    public $descricao;
    public $valor;
    public $estoque;

//    public function __construct($nome, $descricao, $valor, $estoque){
//        $this->nome = $nome;
//        $this->descricao = $descricao;
//        $this->estoque = $estoque;
//        $this->valor = $valor;
//    }

    public function baixaEstoque(){
        $this->estoque = $this->estoque - 1;
    }
}
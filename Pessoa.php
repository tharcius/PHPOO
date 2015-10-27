<?php

class Pessoa{
    public $nome;
    public $idade;

    public function __construct($nome, $idade){
        $this->nome  = $nome;
        $this->idade = $idade;
    }

    public function correr($km){
        echo $this->nome." está correndo\n";

        for ($i = 0; $km > $i; $i++ ){
            echo '.';
        }
        echo $this->nome." terminou de correr\n";
    }
}

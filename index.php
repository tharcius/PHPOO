<?php

require_once "Pessoa.php";
require_once "Produto.php";
require_once "Tenis.php";
require_once "TenisInterface.php";
require_once "TenisAdidas.php";
require_once "SapaTenis.php";

$pessoa = new Pessoa('TvS', 35);
$pessoa->correr(10);

$tenis = new Tenis();
if($tenis instanceof Tenis){
    echo "É um tipo de tênis\n";
} else {
    echo "Não é um tipo de tênis\n";
}

$adidas = new TenisAdidas();
$adidas->getCor();

$tenis2 = new SapaTenis();
$tenis2->getTamanho();
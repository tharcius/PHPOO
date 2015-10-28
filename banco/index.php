<?php
require_once "Conta.php";
$conta = new Conta();

$conta->depositar(100);
echo $conta->saldo;

$conta->sacar(50);
echo $conta->saldo;

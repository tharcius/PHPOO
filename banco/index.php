<?php
require_once "Conta.php";
require_once "ContaPremium.php";

$conta = new ContaPremium();

$conta->depositar(100);
echo $conta->getSaldo()."\n";

$conta->sacar(50);
echo $conta->getSaldo()."\n";

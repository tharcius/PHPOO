<?php
require_once "Conta.php";
require_once "ContaPremium.php";

$conta1 = new Conta();
$conta2 = new ContaPremium();

$conta1->depositar(100);
echo $conta1->getSaldo()."\n";

$conta2->depositar(100);
echo $conta2->getSaldo()."\n";

$conta1->sacar(50);
echo $conta1->getSaldo()."\n";

$conta2->sacar(50);
echo $conta2->getSaldo()."\n";

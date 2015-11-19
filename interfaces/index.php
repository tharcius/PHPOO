<?php
require_once "ComputadorDesktop.php";
require_once "ComputadorNotebook.php";

$computador = new ComputadorDesktop();
$notebook = new ComputadorNotebook();

print_r($computador);
print_r($notebook);
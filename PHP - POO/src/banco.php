<?php

require 'Conta.php';
require 'Titular.php';
require 'CPF.php';

$primeiraconta = new Conta(new Titular("Vinicius Pontes"(new CPF( "483.306.838-93"))));
$primeiraconta->depositar(500);
$primeiraconta->sacar(300);

echo $primeiraconta-> recuperaNomeTitular() . PHP_EOL;
echo $primeiraconta-> recuperaCpfTitular() . PHP_EOL;
echo $primeiraconta-> recuperarSaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular("Daniele", "123.456.789-10"));
var_dump($segundaConta);
$terceiraConta = new Conta(new Titular("andreia", "123.567.852-34"));

echo Conta::recuperarNumeroDeContas();

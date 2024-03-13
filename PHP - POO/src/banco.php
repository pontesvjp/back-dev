<?php

require 'Conta.php';

$primeiraconta = new Conta("Vinicius Pontes", "483.306.838-93");
$primeiraconta->depositar(500);
$primeiraconta->sacar(300);
$primeiraconta->definirNomeTitular('Vinicius Pontes');
$primeiraconta->definirCpfTitular('483.306.838-93');

echo $primeiraconta->recuperarNometitular() . PHP_EOL;
echo $primeiraconta->recuperarCpf() . PHP_EOL;
echo $primeiraconta->recuperarSaldo() . PHP_EOL;

$segundaConta = new Conta("Daniele", "123.456.789-10");
$terceiraConta = new Conta("andreia", "123.567.852-34");

echo Conta::recuperarNumeroDeContas();

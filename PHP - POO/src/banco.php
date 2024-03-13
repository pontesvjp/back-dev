<?php

require 'Conta.php';

$primeiraconta = new Conta();
$primeiraconta->depositar(500);
$primeiraconta->sacar(300);
$primeiraconta->definirNomeTitular('Vinicius Pontes');
$primeiraconta->definirCpfTitular('483.306.838-93');

echo $primeiraconta->recuperarNometitular() . PHP_EOL;
echo $primeiraconta->recuperarCpf() . PHP_EOL;
echo $primeiraconta->recuperarSaldo() . PHP_EOL;

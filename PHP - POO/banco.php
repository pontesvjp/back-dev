<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('sumare', 'nova veneza', 'rua jpse mendes', '222');
$vinicius = new Titular(new CPF('483.306.838-93'), 'Vinicius Pontes', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$daniele = new Titular(new CPF('698.549.548-10'), 'daniele', $endereco);
$segundaConta = new Conta($daniele);
var_dump($segundaConta);

$outroEndereco = new Endereco('dksd', 'idsjf', 'ijsf', 'ksjfjf');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();

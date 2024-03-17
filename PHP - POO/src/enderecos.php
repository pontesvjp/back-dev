<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('sumare', 'nova veneza', 'rua qualquer', '3242');
$outroEndereco = new Endereco('sumare', 'picerno', 'rua qualquer', '32');

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;
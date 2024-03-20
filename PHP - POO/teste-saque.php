<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};

use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.678-74'),
        'vinicius pontss',
        new Endereco('slsdsdsa', 'blabla', 'okafof', '23')
    ),

);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
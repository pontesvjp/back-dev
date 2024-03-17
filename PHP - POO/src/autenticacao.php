<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor(
    'lino alvaristo',
    new CPF('352.321.321-21'),
    10000
);

$autenticador->tentaLogin($umDiretor, '4321');
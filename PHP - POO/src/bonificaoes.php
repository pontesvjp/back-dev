<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF, Funcionario};

$umFuncionario = new Funcionario(
    'vinicius',
    new CPF('483.306.838-93'),
    'estagiario',
    1000
);

$umaFuncionaria = new Funcionario(
    'daniele',
    new CPF('483.336.838-13'),
    'gerente',
    3000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);

echo $controlador->recuperaTotal();
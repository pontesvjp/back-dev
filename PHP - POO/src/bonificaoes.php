<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor};

$umFuncionario = new Desenvolvedor(
    'vinicius',
    new CPF('483.306.838-93'),
    'desenvolvedor',
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'daniele',
    new CPF('483.336.838-13'),
    'gerente',
    3000
);

$umDiretor = new Diretor(
    'gabriel',
    new CPF('146.311.463-24'),
    'diretor',
    10000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);

echo $controlador->recuperaTotal();
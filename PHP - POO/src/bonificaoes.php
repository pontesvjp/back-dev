<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor, EditorVideo};

$umFuncionario = new Desenvolvedor(
    'vinicius',
    new CPF('483.306.838-93'),
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'daniele',
    new CPF('483.336.838-13'),
    3000
);

$umDiretor = new Diretor(
    'gabriel',
    new CPF('146.311.463-24'),
    10000
);

$umEditor = new EditorVideo(
    'andreia',
    new CPF('346.234.642-53'),
    2000
);



$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();
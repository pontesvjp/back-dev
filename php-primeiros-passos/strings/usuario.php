<?php

$nome = 'vinicius pontes';
$email = 'Pontes.vjp@gmail.com';
$senha = '123';

if (strlen($senha < 8)) {
    echo 'a senha n eh segura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');
$usuario = substr($email, 0, $posicaoDoArroba);



echo strtolower($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

list ($nome, $sobrenome)  = explode(' ', $nome);

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

trim($email, ' ') . PHP_EOL;

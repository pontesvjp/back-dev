<?php

$alunos2023 = [
    'vinicius',
    'joao',
    'carlos',
    'roberto',
    'douglas',
    'pedro',
    'jose'
];

$novosAlunos2024 = [
    'diego',
    'marcos',
    'maria',
    'carla'
];

$alunos2024 = array_merge( $alunos2023, $novosAlunos2024);
array_push($alunos2024, 'daniele', 'andreia', 'miguel');
$alunos2024[] = 'luiz';
array_unshift($alunos2024, 'stephanie', 'diogo');

echo array_shift($alunos2024) . PHP_EOL;
echo array_pop($alunos2024) . PHP_EOL;

var_dump($alunos2024);

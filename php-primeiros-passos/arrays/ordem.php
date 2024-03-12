<?php $notas = [
    [
        "aluno" => "Maria",
        "nota" => 9
    ],
    [
        "aluno" => "João",
        "nota" => 8
    ],
    [
        "aluno" => "Pedro",
        "nota" => 7
    ]

];

function ordenaNotas(array $nota1, array $nota2): int
{
    return $nota2['nota'] <=> $nota1['nota'];
}

usort($notas, 'ordenaNotas');
var_dump($notas);

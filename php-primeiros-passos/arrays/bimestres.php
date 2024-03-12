<?php

$notasBimestre1 = [
    'vinicius' => 6,
    'roberto' => 7,
    'carlos' => 8,
    'joao' => 10,
];

$notasBimestre2 = [
    'vinicius' => 6,
    'joao' => 10,
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump(array_flip($alunosFaltantes));
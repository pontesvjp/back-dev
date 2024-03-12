<?php

// Implemente aqui o código

$contasCorrente = [
    '102.322.321-12' => [
        'titular' => 'vinicius',
        'saldo' => 1000
    ],
    '238.432.343-34' => [
        'titular' => 'roberto',
        'saldo' => 100032
    ],
    '736.343.233-42' => [
        'titular' => 'carlos',
        'saldo' => 10000
    ]
];

// Implemente aqui o código para adicionar uma nova conta corrente ao array $contasCorrentes

$contasCorrente['343.121.455-23'] = [
    'titular' => 'claudio',
    'saldo' => 2433
];

// Implemente aqui o foreach

foreach ($contasCorrente as $cpf => $contas) {
    echo $cpf . ' ' . $contas['titular'] . PHP_EOL;
}

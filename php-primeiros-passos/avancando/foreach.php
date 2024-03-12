<?php

$contaList = [
    '102.431.545-43' => [
        'titular' => 'vinicius',
        'saldo' => '1000'
    ], 
    '303.719.432-93' => [
        'titular' => 'carlos',
        'saldo' => '10000'
    ],
    '638.193.545=43' =>  [
        'titular' => 'roberto',
        'saldo' => '100'
    ],
];

$contaList ['231.342.421-23'] = [
        'titular' => 'douflas',
        'saldo'=> '1303'
    
    ];

foreach ($contaList as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
};

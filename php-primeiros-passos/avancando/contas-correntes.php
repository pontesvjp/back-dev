<?php

$conta1 = [
    'titular' => 'vinicius',
    'saldo' => '1000'
];

$conta2 = [
    'titular' => 'carlos',
    'saldo' => '10000',
];

$conta3 = [
    'titular' => 'roberto',
    'saldo'=> '100'
];

$contaList = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contaList); $i++) {
    echo $contaList [$i] ['saldo'] . PHP_EOL; 
}
<?php
$notas = [
    'vinicius' => null,
    'roberto' => 7,
    'carlos' => 8,
    'joao' => 10,
];    

krsort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo "isso eh um array" . PHP_EOL;
};

var_dump(array_is_list($notas));
var_dump(isset($notas['vinicius'])); 

echo "alguem tirou 10?" . PHP_EOL;
var_dump(in_array( 10, $notas, true));

echo "quem tirou 10?". PHP_EOL;
var_dump (array_search(10, $notas, true));


//array_key_exists = verifica se uma chave existe
//in_array = verifica se tem um determinado valor no array
//isset = verifica se uma chave existe e eh nula
//array_serach = verifica quem tirou determinado valor no array



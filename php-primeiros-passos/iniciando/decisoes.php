<?php

$idade = 16;
$numeroDePessoas = 2;

echo "voce so pode entrar se tiver mais de 18 anos ou a partir de 16 anos se tiver acompanhado" . PHP_EOL;
echo PHP_EOL;

if ($idade >= 18) {
    echo "Voce tem $idade. Pode entrar" . PHP_EOL;
} else  if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Voce tem $idade, pode entrar acompanhado" . PHP_EOL;
} else {
    echo "Voce só tem $idade. não pode entrar" . PHP_EOL;
    echo "eh uma pena"; 
}

echo PHP_EOL;
echo "adeus";

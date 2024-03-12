<?php

$nome = 'vinicius pontes';

$ehDaMinhaFamilia = str_contains($nome, 'pontes');

if ($ehDaMinhaFamilia) {
    echo "$nome eh da minha familia" . PHP_EOL;
} else {
    echo "$nome nao eh da minha familia" . PHP_EOL;
}

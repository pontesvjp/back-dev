<?php

$url = 'https://alura.com.br';

if (str_starts_with($url,'https')){
    echo 'A URL eh segura';
} else {
    echo 'A URL nao eh segura';
}

echo  PHP_EOL;

if (str_ends_with($url,'br')){  
    echo 'A URL eh brasileira';
} else  {
    echo 'A URL nao eh brasileira';
}
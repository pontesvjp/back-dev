<?php

$arquivo = fopen('PHP - IO\times-sccp.txt', 'a');

$linha = PHP_EOL . "1990 – O time de Neto";

fwrite($arquivo, $linha);

fclose($arquivo);
<?php



function geraEmail(string $nome): void
{
    $email = <<<FINAL
    olá, $nome
    
    {conteudo}
    {assinatura} 

    FINAL;

    echo $email . PHP_EOL;
}

geraEmail('vinicius');

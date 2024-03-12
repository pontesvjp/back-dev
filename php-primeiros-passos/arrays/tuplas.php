<?php

$dados = ['nome' => 'vinicius', 'nota' => 10, 'idade' => 21];

//['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

extract($dados);
var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade'));
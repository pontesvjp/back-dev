<?php

use Mvc\Entity\Video;
use Mvc\Repository\VideoRepository;

require "conexao-bd.php";
$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
if ($url === false) {
    header('Location: /?sucesso=0');
    exit();
}
$titulo = filter_input(INPUT_POST, 'titulo');
if ($titulo === false) {
    header('Location: /?sucesso=0');
    exit();
}

$repositoy = new VideoRepository($pdo);

if ($repositoy->add(new Video($url, $titulo)) === false) {
    header('Location: /?sucesso=0');
} else {
    header('Location: /?sucesso=1');
}

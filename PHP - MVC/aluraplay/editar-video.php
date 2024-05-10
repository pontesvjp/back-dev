<?php
use Mvc\Entity\Video;
use Mvc\Repository\VideoRepository;

require "conexao-bd.php";

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id === false && $id === null) {
    header('Location: /?sucesso=0');
    exit();
}

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
$video = new Video($url, $titulo);
$video->setId($id);

$repository = new VideoRepository($pdo);
$repository->update($video);


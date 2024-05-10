<?php
use Mvc\Repository\VideoRepository;

require "conexao-bd.php";

$id = $_GET['id'];
$repository = new VideoRepository($pdo);
$repository->remove($id);

if ($repository->remove($id) === false) {
    header('Location: /index.php?sucesso=0');
} else {
    header('Location: /index.php?sucesso=1');
}

<?php
use DI\ContainerBuilder;
use League\Plates\Engine;

$builder = new ContainerBuilder();
$builder->addDefinitions([
    PDO::class => function () {
        return new PDO('mysql:host=localhost;dbname=videos', 'root', 'V1nicius');
    },
    Engine::class => function () {
        $templatePath = __DIR__.'/../views';
        return new League\Plates\Engine($templatePath);
    }
]);
$container = $builder->build();

return $container;

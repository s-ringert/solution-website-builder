<?php
chdir(dirname(__DIR__));
require 'vendor/autoload.php';
/** @var \Psr\Container\ContainerInterface $container */
$container = require 'config/container.php';

$loader = new \Twig\Loader\FilesystemLoader();

$loader->setPaths(__DIR__.'/../templates');
$loader->setPaths(__DIR__.'/../templates/app','app');
$loader->setPaths(__DIR__.'/../templates/layout','layout');
$twig = new \Twig\Environment($loader, []);



//config bauen
//template, twig options, filepath
//foreach über alle templates drüber



$html = $twig->render('/app/test.html.twig', ['language' => 'de', 'currentPage' => 'index']);
$stream = file_put_contents(__DIR__.'/../compiled/index.html', $html);
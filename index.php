<?php


use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

require 'vendor/autoload.php';

$loader = new FilesystemLoader(__DIR__ . '/templates');

$twig = new Environment($loader, [
  'debug' => true,
  'cache' => false //__DIR__.'cache'
]);

// $twig->addExtension(new DebugExtension());

$page = isset($_GET['page']) && !empty($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {

  case 'home':
    echo $twig->render('home.twig', []);
    break;
  case 'contact':

    echo $twig->render('contact.twig', []);
    break;

  default:
    echo $twig->render('home.twig', []);
    break;
}

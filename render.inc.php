<?php
require_once 'config.inc.php';
require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => $zoigl['cache-templates'],
    'auto_reload' => true
));
?>

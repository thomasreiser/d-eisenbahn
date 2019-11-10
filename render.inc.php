<?php
require_once 'config.inc.php';
require_once 'vendor/autoload.php';

if ($zoigl['https']) {
  header('Content-Security-Policy: upgrade-insecure-requests;');
}
header('X-XSS-Protection: 1; mode=block');
header('X-Frame-Options: DENY');
header('X-Content-Type-Options: nosniff');
header('X-Powered-By: meow');
header('X-DNS-Prefetch-Control: off');

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => $zoigl['cache-templates'],
    'auto_reload' => true
));
?>

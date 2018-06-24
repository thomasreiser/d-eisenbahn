<?php
require_once 'config.inc.php';
require_once 'vendor/autoload.php';

if ($zoigl['https']) {
  header('content-security-policy: upgrade-insecure-requests;');
}
header('x-xss-protection: 1; mode=block');
header('x-frame-options: DENY');
header('x-content-type-options: nosniff');
header('x-powered-by: Zoigl');


$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => $zoigl['cache-templates'],
    'auto_reload' => true
));
?>

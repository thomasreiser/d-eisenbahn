<?php
require_once 'render.inc.php';

echo $twig->render('datenschutz.html', [
  'page' => 'datenschutz',
  'index' => false
]);
?>

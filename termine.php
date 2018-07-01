<?php
require_once 'render.inc.php';

echo $twig->render('termine.html', [
  'page' => 'termine',
  'index' => false
]);
?>

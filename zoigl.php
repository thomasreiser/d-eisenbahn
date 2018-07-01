<?php
require_once 'render.inc.php';

echo $twig->render('zoigl.html', [
  'page' => 'zoigl',
  'index' => true
]);
?>

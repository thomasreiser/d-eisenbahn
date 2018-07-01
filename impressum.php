<?php
require_once 'render.inc.php';

echo $twig->render('impressum.html', [
  'page' => 'impressum',
  'index' => false,
  'title' => 'Impressum ✡ d´ Eisenbahn',
  'description' => 'Historische Zoiglwirtschaft in Vohenstrauß 🍺 Zoigl frisch vom Fass 🍺 Regionale Spezialitäten 🍺 Warme und kalte Speisen'
]);
?>

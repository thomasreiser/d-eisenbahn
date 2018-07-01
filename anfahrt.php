<?php
require_once 'render.inc.php';

echo $twig->render('anfahrt.html', [
  'page' => 'anfahrt',
  'index' => true,
  'title' => 'Anfahrt ✡ d´ Eisenbahn',
  'description' => 'Anfahrt zur Zoiglwirtschaft in Vohenstrauß 🍺 Zoigl frisch vom Fass 🍺 Regionale Spezialitäten 🍺 Warme und kalte Speisen'
]);
?>

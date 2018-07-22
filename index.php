<?php
require_once 'render.inc.php';

echo $twig->render('index.html', [
  'page' => 'index',
  'index' => true,
  'title' => "Zoigl in Vohenstrauß ✡ d'Eisenbahn",
  'description' => 'Historische Zoiglwirtschaft in Vohenstrauß 🍺 Zoigl frisch vom Fass 🍺 Regionale Spezialitäten 🍺 Warme und kalte Speisen'
]);
?>

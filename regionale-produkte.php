<?php
require_once 'render.inc.php';

echo $twig->render('regionale-produkte.html', [
  'page' => 'regionale-produkte',
  'index' => true,
  'title' => 'Regionale Produkte ✡ d´ Eisenbahn',
  'description' => 'Historische Zoiglwirtschaft in Vohenstrauß 🍺 Zoigl frisch vom Fass 🍺 Regionale Spezialitäten 🍺 Warme und kalte Speisen',
]);
?>

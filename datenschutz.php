<?php
require_once 'render.inc.php';

echo $twig->render('datenschutz.html', [
  'page' => 'datenschutz',
  'index' => false,
  'title' => "Datenschutz ✡ d'Eisenbahn",
  'description' => 'Historische Zoiglwirtschaft in Vohenstrauß 🍺 Zoigl frisch vom Fass 🍺 Regionale Spezialitäten 🍺 Warme und kalte Speisen'
]);
?>

<?php
require_once 'render.inc.php';

echo $twig->render('zoigl.html', [
  'page' => 'zoigl',
  'index' => true,
  'title' => "Wissenswertes rund um den Zoigl ✡ d'Eisenbahn",
  'description' => 'Historische Zoiglwirtschaft in Vohenstrauß ✓ Zoigl frisch vom Fass ✓ Regionale Spezialitäten ✓ Warme und kalte Speisen'
]);
?>

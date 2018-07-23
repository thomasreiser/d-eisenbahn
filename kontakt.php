<?php
require_once 'render.inc.php';

echo $twig->render('kontakt.html', [
  'page' => 'kontakt',
  'index' => true,
  'title' => "Kontakt - d'Eisenbahn",
  'description' => 'Kontakt zur Zoiglwirtschaft in Vohenstrauß ✓ Zoigl frisch vom Fass ✓ Regionale Spezialitäten ✓ Warme und kalte Speisen'
]);
?>

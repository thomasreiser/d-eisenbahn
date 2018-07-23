<?php
require_once 'render.inc.php';

echo $twig->render('termine.html', [
  'page' => 'termine',
  'index' => true,
  'title' => "Schanktermine ✡ d'Eisenbahn",
  'description' => 'Kalender mit Schankterminen ✓ Zoiglwirtschaft in Vohenstrauß ✓ Zoigl frisch vom Fass ✓ Regionale Spezialitäten ✓ Warme und kalte Speisen'
]);
?>

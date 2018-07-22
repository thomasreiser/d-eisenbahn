<?php
require_once 'render.inc.php';

echo $twig->render('feste.html', [
  'page' => 'feste',
  'index' => true,
  'title' => "Feste feiern ✡ d'Eisenbahn",
  'description' => 'Feste und Geburtstage feiern in „der Eisenbahn” 🍺 Zoigl frisch vom Fass 🍺 Regionale Spezialitäten 🍺 Warme und kalte Speisen'
]);
?>

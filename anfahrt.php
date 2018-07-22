<?php
require_once 'render.inc.php';

echo $twig->render('anfahrt.html', [
  'page' => 'anfahrt',
  'index' => true,
  'title' => 'Anfahrt zur Zoiglstube ✡ d´ Eisenbahn',
  'description' => 'Anfahrt zur Zoiglwirtschaft in Vohenstrauß 🍺 Zoigl frisch vom Fass 🍺 Regionale Spezialitäten 🍺 Warme und kalte Speisen',
  'directions' => "https://www.google.de/maps/dir//Zoiglwirtschaft+d'Eisenbahn,+Bahnhofstra%C3%9Fe+18,+92648+Vohenstrau%C3%9F/@49.6262902,12.3395098,18z/data=!4m8!4m7!1m0!1m5!1m1!1s0x47a015c9f9453d79:0x7ca690778574d902!2m2!1d12.3399949!2d49.6263834"
]);
?>

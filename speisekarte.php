<?php
require_once 'render.inc.php';

$drinks = [
  [
    '@type' => 'MenuSection',
    'name' => 'Alkoholische Getränke',
    'hasMenuItem' => [
      [
        '@type' => 'MenuItem',
        'name' => 'Zoigl',
        'description' => 'Zoigl vom Fass',
        'offers' => [
          '@type' => 'Offer',
          'price' => 1.90,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => '0,5L'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Struz Zoigl',
        'description' => 'Zoigl vom Fass',
        'offers' => [
          '@type' => 'Offer',
          'price' => 1.00,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => '0,3L'
          ]
        ]
      ]
    ]
  ],
];

$meals = [];

$menu = array_merge($drinks, $meals);

echo $twig->render('speisekarte.html', [
  'page' => 'speisekarte',
  'menu' => $menu,
  'drinks' => $drinks,
  'meals' => $meals
]);
?>

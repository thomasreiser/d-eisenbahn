<?php
require_once 'render.inc.php';

$drinks = [
  [
    '@type' => 'MenuSection',
    'name' => 'Bier und Wein',
    'hasMenuItem' => [
      [
        '@type' => 'MenuItem',
        'name' => 'Zoigl',
        'offers' => [
          '@type' => 'Offer',
          'price' => 1.90,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => '0,5l'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Struz Zoigl',
        'offers' => [
          '@type' => 'Offer',
          'price' => 1.00,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => '0,3l'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Zoiglradler',
        'offers' => [
          '@type' => 'Offer',
          'price' => 1.90,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => '0,5l'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Glaserl Wein',
        'description' => 'Rot oder weiß',
        'offers' => [
          '@type' => 'Offer',
          'price' => 3.00,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => '0,25l'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Weinschorle',
        'offers' => [
          '@type' => 'Offer',
          'price' => 3.00,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => '0,3l'
          ]
        ]
      ]
    ]
  ],
  [
    '@type' => 'MenuSection',
    'name' => 'Alkoholfreie Getränke',
    'hasMenuItem' => [
      [
        '@type' => 'MenuItem',
        'name' => 'Limonade',
        'description' => 'Zitrone, Orange, Cola, Cola-Mix',
        'offers' => [
          '@type' => 'Offer',
          'price' => 1.70,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => '0,5l'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Mineralwasser',
        'description' => 'Still oder mit Kohlensäure',
        'offers' => [
          '@type' => 'Offer',
          'price' => 1.70,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => '0,3l'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Saftschorle',
        'description' => 'Zitrone, Orange',
        'offers' => [
          '@type' => 'Offer',
          'price' => 1.70,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => '0,5l'
          ]
        ]
      ]
    ]
  ],
  [
    '@type' => 'MenuSection',
    'name' => 'Wos worms zum trinken',
    'hasMenuItem' => [
      [
        '@type' => 'MenuItem',
        'name' => 'Haferl Kaffee',
        'offers' => [
          '@type' => 'Offer',
          'price' => 1.90,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Haferl'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Haferl Tee',
        'offers' => [
          '@type' => 'Offer',
          'price' => 1.50,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Haferl'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Haferl Tee mit Rum (2cl)',
        'offers' => [
          '@type' => 'Offer',
          'price' => 3.50,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Haferl'
          ]
        ]
      ]
    ]
  ],
  [
    '@type' => 'MenuSection',
    'name' => 'Wos guads zur Verdauung oder einfach a so',
    'hasMenuItem' => [
      [
        '@type' => 'MenuItem',
        'name' => 'Prinz „Alte Williams-Christ-Birne”',
        'description' => '41% vol.',
        'offers' => [
          '@type' => 'Offer',
          'price' => 2.20,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => '2cl'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Prinz „Alte Marille”',
        'description' => '41% vol.',
        'offers' => [
          '@type' => 'Offer',
          'price' => 2.20,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => '2cl'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Prinz „Alte Haus-Zwetsche',
        'description' => '41% vol.',
        'offers' => [
          '@type' => 'Offer',
          'price' => 2.20,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => '2cl'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Prinz „Hausschnaps”',
        'description' => '34% vol.',
        'offers' => [
          '@type' => 'Offer',
          'price' => 2.00,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => '2cl'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Prinz „Nusseria”',
        'description' => '34% vol.',
        'offers' => [
          '@type' => 'Offer',
          'price' => 2.00,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => '2cl'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Prinz „Bitter”',
        'description' => '31% vol.',
        'offers' => [
          '@type' => 'Offer',
          'price' => 2.00,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => '2cl'
          ]
        ]
      ]
    ]
  ]
];

$meals = [
  [
    '@type' => 'MenuSection',
    'name' => 'Wos kalt`s zum Essen',
    'hasMenuItem' => [
      [
        '@type' => 'MenuItem',
        'name' => 'Brotzeitteller',
        'description' => 'versch. Wurst, Käs, O-Bazder, Grieberlfett',
        'offers' => [
          '@type' => 'Offer',
          'price' => 5.40,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Teller'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Fischteller',
        'description' => 'versch. Räucherfisch',
        'offers' => [
          '@type' => 'Offer',
          'price' => 5.40,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Teller'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Kästeller',
        'description' => 'versch. Kässorten',
        'offers' => [
          '@type' => 'Offer',
          'price' => 4.90,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => '0,5l'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Backsteinkäs mit Musik',
        'offers' => [
          '@type' => 'Offer',
          'price' => 3.90,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Teller'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Saurer Teller',
        'description' => 'Pressack, Käs, Wurstsalat',
        'offers' => [
          '@type' => 'Offer',
          'price' => 4.70,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Teller'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Wurstsalat',
        'offers' => [
          '@type' => 'Offer',
          'price' => 3.90,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Teller'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Pressack mit Musik',
        'offers' => [
          '@type' => 'Offer',
          'price' => 3.90,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Teller'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Tellersulz',
        'offers' => [
          '@type' => 'Offer',
          'price' => 4.20,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Teller'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'G`selchts',
        'offers' => [
          '@type' => 'Offer',
          'price' => 5.40,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Teller'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'O-Bazder',
        'offers' => [
          '@type' => 'Offer',
          'price' => 3.00,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Portion'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Käsbrez`n',
        'offers' => [
          '@type' => 'Offer',
          'price' => 1.90,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Stück'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Wurst- oder Käsbrot',
        'description' => 'Streichwurst, Wurst oder Käs',
        'offers' => [
          '@type' => 'Offer',
          'price' => 1.90,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Scheibe'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Grieberlfettbrot',
        'offers' => [
          '@type' => 'Offer',
          'price' => 1.50,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Scheibe'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Brez`n nackert',
        'offers' => [
          '@type' => 'Offer',
          'price' => 0.90,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Stück'
          ]
        ]
      ]
    ]
  ],
  [
    '@type' => 'MenuSection',
    'name' => 'Wos worms zum Essen',
    'hasMenuItem' => [
      [
        '@type' => 'MenuItem',
        'name' => '3 Käswürst`l mit Kraut',
        'offers' => [
          '@type' => 'Offer',
          'price' => 4.70,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Teller'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => '3 Bauernseifzer mit Kraut',
        'offers' => [
          '@type' => 'Offer',
          'price' => 4.70,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Teller'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => '3 Pfälzer mit Kraut',
        'offers' => [
          '@type' => 'Offer',
          'price' => 4.70,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Teller'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Würst`lteller mit Kraut',
        'description' => 'vo jeder oine',
        'offers' => [
          '@type' => 'Offer',
          'price' => 4.70,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Teller'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => '2 Paar sauerne Zipfl',
        'offers' => [
          '@type' => 'Offer',
          'price' => 4.70,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Teller'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => '2 Paar Bratwürst`l mit KRaut',
        'offers' => [
          '@type' => 'Offer',
          'price' => 4.70,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Teller'
          ]
        ]
      ]
    ]
  ]
];

$menu = array_merge($drinks, $meals);

echo $twig->render('speisekarte.html', [
  'page' => 'speisekarte',
  'menu' => $menu,
  'drinks' => $drinks,
  'meals' => $meals
]);
?>

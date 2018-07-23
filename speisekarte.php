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
          'price' => 3.50,
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
    'name' => 'Alkoholfreie Getränke',
    'hasMenuItem' => [
      [
        '@type' => 'MenuItem',
        'name' => 'Limonade',
        'description' => 'Orange oder Cola-Mix',
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
        'name' => 'Apfelschorle',
        'offers' => [
          '@type' => 'Offer',
          'price' => 1.90,
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
    'name' => 'Wos woams zum trinken',
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
            'name' => 'Tasse'
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
            'name' => 'Tasse'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Haferl Tee mit Rum (2cl)',
        'offers' => [
          '@type' => 'Offer',
          'price' => 3.00,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Tasse'
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
          'price' => 1.90,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => '2cl'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Prinz „Nusserla”',
        'description' => '34% vol.',
        'offers' => [
          '@type' => 'Offer',
          'price' => 1.90,
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
          'price' => 1.90,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => '2cl'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Kümmel',
        'description' => '34% vol.',
        'offers' => [
          '@type' => 'Offer',
          'price' => 1.90,
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
    'name' => 'Wos kalts zum Essen',
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
        'description' => 'versch. Räucherfisch (freitags)',
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
        'name' => 'Gselchts',
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
        'name' => 'Kalter Braten',
        'offers' => [
          '@type' => 'Offer',
          'price' => 4.20,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Portion'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Wurst- oder Käsbrot',
        'description' => 'Streichwurst, Wurst, Käs oder O-Bazder',
        'offers' => [
          '@type' => 'Offer',
          'price' => 2.00,
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
      ]
    ]
  ],
  [
    '@type' => 'MenuSection',
    'name' => 'Wos woams zum Essen',
    'hasMenuItem' => [
      [
        '@type' => 'MenuItem',
        'name' => 'Paar Käswürstl mit Kraut',
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
        'name' => 'Paar Knacker mit Kraut',
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
        'name' => 'Paar Kaminwuz`n mit Kraut',
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
        'name' => 'Würstlteller mit Kraut',
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
        'name' => 'Leberknödlsuppn',
        'description' => '(Fr./Sa./So.)',
        'offers' => [
          '@type' => 'Offer',
          'price' => 2.90,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Teller'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Warmer Leberkäs mit Erdäpfsalat',
        'description' => '(montags)',
        'offers' => [
          '@type' => 'Offer',
          'price' => 3.90,
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
  'index' => true,
  'title' => "Speisen und Getränke - d'Eisenbahn",
  'description' => 'Unsere Speisekarte ✓ Zoiglwirtschaft in Vohenstrauß ✓ Zoigl frisch vom Fass ✓ Regionale Spezialitäten ✓ Warme und kalte Speisen',
  'menu' => $menu,
  'drinks' => $drinks,
  'meals' => $meals
]);
?>

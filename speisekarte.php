<?php
require_once 'render.inc.php';

$drinks = [
  [
    '@type' => 'MenuSection',
    'name' => 'Mit Alkohol',
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
        'description' => 'rot oder weiß',
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
        'description' => 'rot oder weiß',
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
    'name' => 'Ohne Alkohol',
    'hasMenuItem' => [
      [
        '@type' => 'MenuItem',
        'name' => 'Limonade',
        'description' => 'Zitrone oder Cola-Mix',
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
        'name' => 'Tafelwasser',
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
    'name' => 'Wos woams',
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
        'name' => 'Prinz „Alte Haus-Zwetschke”',
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
        'name' => 'Prinz „Alte Wald-Himbeere”',
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
        'name' => 'Kümmel',
        'description' => '35% vol.',
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
        'name' => 'Ramazzotti',
        'description' => '30% vol.',
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
        'name' => 'Kirschlikör',
        'description' => '19% vol.',
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
        'name' => 'Jägermeister',
        'description' => '35% vol.',
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
          'price' => 5.90,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Teller'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Saurer Käs',
        'offers' => [
          '@type' => 'Offer',
          'price' => 4.40,
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
          'price' => 4.90,
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
          'price' => 4.40,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Teller'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Schweizer Wurstsalat',
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
        'name' => 'Pressack mit Musik',
        'offers' => [
          '@type' => 'Offer',
          'price' => 4.40,
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
          'price' => 4.50,
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
        'name' => 'Kalter Braten',
        'description' => 'mit Meerrettich oder Senf',
        'offers' => [
          '@type' => 'Offer',
          'price' => 4.40,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Portion'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Belegt`s Brot',
        'description' => 'Wurst, Grieberlfett, Käs oder O-Bazder',
        'offers' => [
          '@type' => 'Offer',
          'price' => 2.00,
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
    'name' => 'Wos woams zum Essen (bis 21 Uhr)',
    'hasMenuItem' => [
      [
        '@type' => 'MenuItem',
        'name' => 'Strammer Max',
        'description' => 'mit Schwarzwälder Schinken und 2 Ochsnaug`n',
        'offers' => [
          '@type' => 'Offer',
          'price' => 3.90,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Scheibe'
          ]
        ]
      ],[
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
          'price' => 4.50,
          'priceCurrency' => 'EUR',
          'eligibleQuantity' => [
            '@type' => 'QuantitativeValue',
            'name' => 'Teller'
          ]
        ]
      ],
      [
        '@type' => 'MenuItem',
        'name' => 'Paar Kaminwurz`n mit Kraut',
        'offers' => [
          '@type' => 'Offer',
          'price' => 4.50,
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
        'name' => 'Ofenfrischer Leberkäs',
        'description' => 'mit Erdäpflsalat (montags)',
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

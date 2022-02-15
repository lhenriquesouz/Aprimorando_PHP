<?php

$carros = [
    'LMS-2312' => [ 
    'marca' => 'VW',
    'modelo' => 'Golf'
    ],
    'LLI-2300' => [ 
      'marca' => 'VW',
      'modelo' => 'Polo'
    ],
    'JKS-0002' => [ 
      'marca' => 'Ford',
      'modelo' => 'Fiesta'
    ]
];

//Adcionando no array
$carros['KKK-2320'] = [
    'marca' => 'Ford',
    'modelo' => 'Ranger'
];

foreach ($carros as $placa => $carro){
  echo $placa . PHP_EOL;
}
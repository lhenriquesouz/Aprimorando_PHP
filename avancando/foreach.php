<?php

$contasCorrentes = [
    1234567 => [
    'titular' => 'Luis',
    'saldo' => 2000
  ],
    1234568 => [
      'titular' => 'Gabi',
      'saldo' => 3000
  ],
    1234569 => [
      'titular' => 'Vera',
      'saldo' => 3000
  ]
];  


foreach ($contasCorrentes as $cpf => $conta){
  echo $conta["titular"]. "\t" . $cpf .  PHP_EOL;
}
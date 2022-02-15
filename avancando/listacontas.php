<?php

$conta1 = [
  'titular' => 'Luis',
  'saldo' => 2000
];

$conta2 = [
  'titular' => 'Gabi',
  'saldo' => 3000
];

$conta3 = [
  'titular' => 'Vera',
  'saldo' => 3000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i=0; $i < count($contasCorrentes); $i++) { 
  echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
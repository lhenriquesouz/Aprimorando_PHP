<?php

// include 'funcoes.php'; // inlcude é bom colcoar quando você não precisa que o arquivo seja o principal
require_once 'funcoes.php';

$contasCorrentes = [
    '1234567' => [
    'titular' => 'Luis',
    'saldo' => 2000
  ],
    '1234568' => [
      'titular' => 'Gabi',
      'saldo' => 3000
  ],
    '1234569' => [
      'titular' => 'Vera',
      'saldo' => 3000
  ]
];  

$contasCorrentes['1234567'] = sacar($contasCorrentes['1234567'],500);
$contasCorrentes['1234568'] = depositar($contasCorrentes['1234568'],5000);

// unset($contasCorrentes['1234568']); //remove a variavel

maiuscula($contasCorrentes['1234567']);

// echo "<prev>";
// print_r($contasCorrentes);
// echo "<prev>";

foreach ($contasCorrentes as $cpf => $conta) {
  ['titular' => $titular, 'saldo' => $saldo] = $conta;
  exibeMensagem("
  <p style='font-size:20px; color: #005290; font-family: monospace;'>$cpf $titular $saldo</p> 
  ");
}
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

// echo "<ul>";
// foreach ($contasCorrentes as $cpf => $conta) {
//   exibeConta($conta);
// }
// echo "</ul>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Contas correntes</h1>
  <dl>
    <?php foreach($contasCorrentes as $cpf => $conta) { ?> <!--foreach -->
    <dt>
      <h3><?php echo $conta['titular']; ?> - <?php echo $cpf; ?></h3>
    </dt>
    <dd>
      Saldo: <?php echo $conta['saldo']; ?>
    </dd>
    <?php } ?>
  </dl>
</body>
</html>
<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, Conta, ContaCorrente, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};

require_once 'autoload.php';

$conta = new Conta(
  new Titular(
    'Luis Henrique',
    new Cpf('123.456.789-10'),
    new Endereco('PF', 'Nova Gimirim', 'Rua 1', '632')
  )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();



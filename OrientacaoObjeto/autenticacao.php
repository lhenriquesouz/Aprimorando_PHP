<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente};
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Titular(
  'Luis Henrique',
  new Cpf('123.456.789-10'),
  new Endereco('PF', 'Nova Gimirim', 'Rua', '632')
);

$autenticador->tentaLogin($umDiretor, 'abcd');

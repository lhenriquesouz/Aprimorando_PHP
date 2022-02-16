<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor, EditorDeVideo};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
  'Luis Henrique',
  new Cpf('123.456.789-10'),
  2000
);

$umFuncionario->sobeDeNivel();

$umGerente = new Gerente(
  'gabrielle',
  new Cpf('123.456.880-20'),
  4000
);

$umDiretor = new Diretor(
  'Sebastiao',
  new Cpf('123.456.111-00'),
  5000
);

$umEditor = new EditorDeVideo('Paulo',
    new CPF('456.987.231-11'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umGerente);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);


echo $controlador->recuperaTotal();

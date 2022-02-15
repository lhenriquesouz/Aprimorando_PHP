<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$primeiraConta = new Conta(new Titular('Luis Henrique', new Cpf('123.456.789-10')));

$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular('Gabrielle', new Cpf('123.456.654-20')));
var_dump($segundaConta);

echo Conta::recuperaNumeroContas() . PHP_EOL; //pode ser usado assim ou
// echo $primeiraConta->recuperaNumeroContas(); // assim, quando estamos tratando de atributos direto da classe

<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('PF', 'Nova Gimirim', 'Rua Prefeito', '632');
$Luis = new Titular('Luis Henrique', new Cpf('123.456.789-10'), $endereco);
$primeiraConta = new Conta($Luis);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$segundaConta = new Titular('Gabrielle', new Cpf('123.456.654-20'), $endereco);
var_dump($segundaConta);

echo Conta::recuperaNumeroContas() . PHP_EOL; //pode ser usado assim ou
// echo $primeiraConta->recuperaNumeroContas(); // assim, quando estamos tratando de atributos direto da classe

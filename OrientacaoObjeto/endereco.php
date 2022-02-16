<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;


require_once "autoload.php";

$novoEmprego = new Desenvolvedor('Luis Henrique', new Cpf('123.456.789-10'), 2000);
echo $novoEmprego->numero;


// $umEndereco = new Endereco('PF', 'Nova Gimirim', 'Rua Prefeito', '632');
// $novoEndereco = new Endereco('PF', 'Nova Poço Fundo', 'Rua 2', '100');

// echo $umEndereco;
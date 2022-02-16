<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;

abstract class Funcionario extends Pessoa
{
  private $salario;

  public function __construct(string $nome, Cpf $cpf, float $salario)
  {
    parent::__construct($nome, $cpf);
    $this->salario = $salario;
  }

  public function alteraNome(string $nome)
  {
    $this->validaNomeTitular($nome);
    $this->nome = $nome;
  }

  public function recebeAumento(float $valorAumento): void
  {
    if ($valorAumento < 0) {
      echo "Aumento deve ser positivo";
    }

    $this->salario += $valorAumento;
  }

  public function recuperaSalario(): float
  {
    return $this->salario;
  }

 abstract public function calculaBonificacao(): float;
}
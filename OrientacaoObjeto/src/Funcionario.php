<?php

class Funcionario extends Pessoa
{
  private $cargo;

  public function __construct(string $nome, Cpf $cpf, string $cargo)
  {
    $this->validaNomeTitular($nome);
      $this->nome = $nome;
      $this->cpf = $cpf;
      $this->cargo = $cargo;
  }

  public function recuperaCargo()
  {
    return $this->cargo;
  }

}
<?php

class Titular
{
  private $nome;
  private $cpf;

  public function __construct(string $nome, Cpf $cpf)
  {
    $this->cpf = $cpf;
    $this->nome =  $nome;
    $this->validaNomeTitular($nome);
  }
  
  public function recuperaNome(): string //Getters
  {
    return $this->nome;
  }

  public function recuperaCpf(): string //Getters
  {
    return $this->cpf->mostraCpf();
  }


  private function validaNomeTitular(string $nome)
  {
    if (strlen($nome) < 5) {
      echo "Nome do titular precisar ter mais do que 5 caracteres!!";
      exit();
    }
  }

}

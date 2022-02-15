<?php

class Pessoa 
{
  public $nome;
  public $cpf;

  public function __construct($nome, Cpf $cpf)
  {
    $this->nome = $nome;
    $this->cpf = $cpf;  
  }

  public function recuperaNome() : string
  {
    return $this->nome;
  }

  public function recuperaCpf() : string
  {
    return $this->cpf->mostrarCpf;
  }

  public function validaNomeTitular(string $nome)
  {
    if (strlen($nome) < 5) {
      echo "Nome do titular precisar ter mais do que 5 caracteres!!";
      exit();
    }
  }

}
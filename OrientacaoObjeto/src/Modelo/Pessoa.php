<?php

namespace Alura\Banco\Modelo;

class Pessoa 
{
  private $nome;
  private $cpf;

  public function __construct(string $nome, Cpf $cpf)
  {
    $this->validaNomeTitular($nome);
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

  protected function validaNomeTitular(string $nome)
  {
    if (strlen($nome) < 5) {
      echo "Nome do titular precisar ter mais do que 5 caracteres!!";
      exit();
    }
  }

}
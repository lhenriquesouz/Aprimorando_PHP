<?php
class Titular extends Pessoa
{
  private $endereco;

  public function __construct(string $nome, Cpf $cpf, Endereco $endereco)
  {
    $this->nome =  $nome;
    $this->cpf = $cpf;
    $this->endereco = $endereco;
    $this->validaNomeTitular($nome);
  }

  public function recuperaEndereco(): Endereco //Getters
  {
    return $this->endereco;
  }


}

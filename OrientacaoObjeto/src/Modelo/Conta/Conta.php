<?php

namespace Alura\Banco\Modelo\Conta;

//PRORIEDADES SEMPRE PRIVADAS - PRIVATE 
//MÉTODOS PUBLICOS - PUBLIC

abstract class Conta
{
  //Definir dados da conta
  private $titular;
  private $saldo;
  private static $numeroDeContas = 0; //Static faz com que seja um atributo da classe

  public function __construct(Titular $titular)
  {
    $this->titular = $titular;
    $this->saldo = 0;

    Conta::$numeroDeContas++; // Deste jeito eu consigo acessar os métodos static dentro da classe
  }

  public function __destruct()
  {
    Conta::$numeroDeContas--;
  }

  public function saca(float $valorASacar): void
  {
    $tarifaDeSaque = $valorASacar * $this->percentualTarifa();
    $valorSaque = $valorASacar + $tarifaDeSaque;
    if ($valorSaque > $this->saldo) {
      echo "Saldo indisponível";
      return;
    }

    $this->saldo -= $valorSaque;
  }

  public function deposita(float $valorADepositar): void
  {
    if ($valorADepositar < 0) {
      echo "Valor precisa ser positivo";
      return;
    }

    $this->saldo += $valorADepositar;
  }


  public function recuperaNomeTitular(): string
  {
      return $this->titular->recuperaNome();
  }
  
  public function recuperaCpfTitular(): string
  {
      return $this->titular->recuperaCpf();
  }
  
  
  public function recuperaSaldo(): float //Getters
  {
    return $this->saldo;
  }

  public static function recuperaNumeroContas() : int //Precisamos colocar como static pois estamos criando a função da classe
  {
    return self::$numeroDeContas;
  }

  abstract protected function percentualTarifa() : float;//Toda classe que estender desta Classe COnta, teráo que implementar este método


}

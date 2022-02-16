<?php
namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta 
{
  public function sacar(float $valorASacar)
  {
    $tarifaSaque = $valorASacar * 0.03;
    $valorSaque = $valorASacar + $tarifaSaque;
    if ($valorSaque > $this->saldo) {
        echo "Saldo indisponível";
        return;
    }

    $this->saldo -= $valorSaque;
  }

  protected function percentualTarifa() : float
  {
    return 0.03;
  }
}
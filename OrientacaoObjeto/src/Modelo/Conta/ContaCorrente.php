<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Conta as ContaConta;

class ContaCorrente extends Conta
{
  protected function percentualTarifa():float
  {
    return 0.05;
  }

  public function transferir(float $valorATransferir, conta $contaDestino): void
  {
    if ($valorATransferir > $this->saldo) {
      echo "Saldo indisponível";
      return;
    }

    $this->saca($valorATransferir);
    $contaDestino->deposita($valorATransferir);
  }

}
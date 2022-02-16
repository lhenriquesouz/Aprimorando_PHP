<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;


class Autenticador
{
  public function tentaLogin(Autenticavel $autenticador, string $senha) : void
  {
    if ($autenticador->podeAutenticar($senha)) {
      echo "Ok. Usuario logado com sucesso!!";
    } else {
      echo "Ops. senha incorreta!!!";
    }
  }
}
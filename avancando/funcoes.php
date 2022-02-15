<?php

function exibeMensagem($mensagem)
{
  echo $mensagem . PHP_EOL . "<br>";
}

function sacar(array $conta, float $valorASacar)
{

  if ($valorASacar > $conta['saldo']) {
    exibeMensagem("Saldo insuficiente");
  } else{
    $conta['saldo'] -= $valorASacar;
  }

  return $conta;
}

function depositar(array $conta, float $valorDepositado)
{

  if ($valorDepositado > 0) {
    # code...
    $conta['saldo'] += $valorDepositado;
    exibeMensagem("Depositado com sucesso!");
  }else{
    exibeMensagem("Os depositos precisam ser positivos");
  }
  return $conta;
}
/**
 * Deixar a variavel com letra maiuscla
 */
function maiuscula(array &$conta)//quando coloca & ele passa o valor por referencia
{
  $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
  ['titular' => $titular, 'salut' => $saldo] = $conta; // list
  echo "<li>Titular: $titular Saldo: $saldo</li>";

}
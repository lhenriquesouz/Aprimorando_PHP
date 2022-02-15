<?php

function exibeMensagem($mensagem) 
{
  echo $mensagem;
}

$mysql = new mysqli('localhost', 'root', '','blog');
$mysql->set_charset('utf8');

if($mysql == false) {
    exibeMensagem("Erro na conexão!!!");
}
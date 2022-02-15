<?php

$peso = 95;
$altura = 1.80;
$calculoAltura = $peso / ($altura ** 2);

if ($calculoAltura <= 18.5) {
  echo "Abaixo do peso";
}elseif ($calculoAltura >18.5 && $calculoAltura <=24.9 ){
  echo "Peso normal";
}elseif ($calculoAltura >24.9 && $calculoAltura <=29.9){
  echo "Sobrepeso";
}elseif ($calculoAltura >29.9 && $calculoAltura <=34.9){
  echo "Obesidade Grau 1";
}elseif ($calculoAltura >34.9 && $calculoAltura <=39.9){
  echo "Obesidade Grau 2";
}else {
  echo "Obesidade Grau 3 ou Mórbida";
}






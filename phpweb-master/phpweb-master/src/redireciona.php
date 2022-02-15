<?php

  function redireciona(string $url) : void //não tera retorno
  {
    header("location: $url");
    die();
  }

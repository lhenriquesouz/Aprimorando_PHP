<?php

require '../conexao.php';
require '../src/artigos.php';
require '../src/redireciona.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $artigo = new Artigo($mysql);
        $artigo->adicionar($_POST['titulo'], $_POST['conteudo']);    
        
        // header('location: index.php');//faz com que depois que adicionou o artigo ele redireciona para outra página
        // die();//termina a operação

        redireciona('index.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Adicionar Artigo</title>
</head>

<body>
    <div id="container">
        <h1>Adicionar Artigo</h1>
        <form action="adicionar-artigo.php" method="POST">
            <p>
                <label for="">Digite o título do artigo</label>
                <input class="campo-form" type="text" name="titulo" id="titulo" />
            </p>
            <p>
                <label for="">Digite o conteúdo do artigo</label>
                <textarea class="campo-form" type="text" name="conteudo" id="conteudo"></textarea>
            </p>
            <p class="button">
                <button class="botao">Criar Artigo</button>
                <a class="botao botao-block voltar" href="index.php">Voltar</a>
            </p>
        </form>
    </div>
</body>

</html>
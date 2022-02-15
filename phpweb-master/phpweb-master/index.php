<?php

require_once 'src/artigos.php';
require_once 'conexao.php';

$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <nav>
        <a class="botao botao-block" href="./admin/index.php">Painel administrador</a>
    </nav>

    <div id="container">
        <h1>Meu Blog</h1>
        <?php foreach ($artigos as $artigo) : ?>
        <h2>
            <a href="artigo.php?id=<?php echo $artigo['id']; ?>">
                <?php echo nl2br($artigo['titulo']);?>  
            </a>
        </h2>
        <p>
            <?php echo $artigo['conteudo'];?>
        </p>
        <?php endforeach ?>
    </div>
</body>

</html>
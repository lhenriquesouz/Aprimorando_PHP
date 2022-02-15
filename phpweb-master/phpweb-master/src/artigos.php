<?php

class Artigo 
{

  private $mysql;

  public function __construct(mysqli $mysql)
  {
    $this->mysql = $mysql; //atribui propriedade
  }

  public function adicionar(string $titulo, string $conteudo) : void 
  {
    $insereDados = $this->mysql->prepare("INSERT INTO artigos (titulo, conteudo) VALUES(?,?)");
    $insereDados->bind_param('ss', $titulo, $conteudo);
    $insereDados->execute();
  }

  public function excluirArtigo(string $id) : void
  {
    $deletaDados = $this->mysql->prepare("DELETE FROM artigos WHERE id = ?");
    $deletaDados->bind_param('s', $id);
    $deletaDados->execute();
  }

  public function exibirTodos() : array
  {

    $resultado = $this->mysql->query("SELECT id, titulo, conteudo FROM artigos");
    $artigos = $resultado->fetch_all(MYSQLI_ASSOC);

    return $artigos;
  }

  public function editar(string $id, string $titulo, string $conteudo) : void
  {
    $editaDados = $this->mysql->prepare('UPDATE artigos SET titulo = ?, conteudo = ? WHERE id = ?');
    $editaDados->bind_param('sss', $titulo, $conteudo, $id);//respeitar a ordem do UPDATE
    $editaDados->execute();
  }

  public function buscaPorId(string $id)
  {
    $selecionaArtigo = $this->mysql->prepare("SELECT * FROM artigos WHERE id=?;");
    $selecionaArtigo->bind_param('s', $id);
    $selecionaArtigo->execute();
    $artigo = $selecionaArtigo->get_result()->fetch_assoc();
    return $artigo;
  }
}

?>
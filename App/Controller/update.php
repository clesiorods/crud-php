<?php

require __DIR__.'./../../vendor/autoload.php';

define('TITLE','Editar');


//VALIDAÇÃO DO POST
if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){

  $produto = new \App\Model\Produto();

  $produto->setId($_GET['id']);
  $produto->setTitulo($_POST['titulo']);
  $produto->setDescricao($_POST['descricao']);
  $produto->setAtivo($_POST['ativo']);
  $produto->setData();

  $produtoDao = new App\Model\ProdutoDao();
  $produtoDao->update($produto);

  header('location: index.php?status=success');
  exit;
}
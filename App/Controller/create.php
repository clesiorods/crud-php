<?php

require __DIR__.'/../../vendor/autoload.php';

define('TITLE','Cadastrar');

  $titulo = '';
  $descricao = '';
  $ativo = 's'; 

  

//DIFERENCIAÇÃO DE CRIAÇÃO E ATUALIZAÇÃO DE CADASTRO
if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){

  $produto = new \App\Model\Produto();

  $produto->setTitulo($_POST['titulo']);
  $produto->setDescricao($_POST['descricao']);
  $produto->setAtivo($_POST['ativo']);
  $produto->setData();

  $produtoDao = new App\Model\ProdutoDao();
  $produtoDao->create($produto);

  header('location: index.php?status=success');
  exit;
}
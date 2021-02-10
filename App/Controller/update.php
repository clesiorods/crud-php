<?php

use App\Model\ProdutoDao;

require __DIR__.'./../../vendor/autoload.php';

define('TITLE','Editar');


$produtoDao = new App\Model\ProdutoDao();
$editavel = $produtoDao->getOne($_GET['id'])[0];

var_dump($editavel['titulo']);


if($editavel) {
  $titulo = $editavel['titulo'];
  $descricao = $editavel['descricao'];
  $ativo = $editavel['ativo'];
} else {
  $titulo = '';
  $descricao = '';
  $ativo = ''; 
}



//VALIDAÇÃO DO POST
if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){

  $produto = new \App\Model\Produto();

  $produto->setId($_GET['id']);
  $produto->setTitulo($_POST['titulo']);
  $produto->setDescricao($_POST['descricao']);
  $produto->setAtivo($_POST['ativo']);
  $produto->setData();

  
  $produtoDao->update($produto);

  header('location: index.php?status=success');
  exit;
}
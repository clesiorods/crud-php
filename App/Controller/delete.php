<?php

require __DIR__.'./../../vendor/autoload.php';

define('TITLE','Excluir');



//VALIDAÇÃO DO PRODUTO PARA DETETE
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}


//DELETANDO PRODUTO
if(isset($_POST['excluir'])){
  
  $produtoDao = new App\Model\ProdutoDao();
  $produtoDao->delete($_GET['id']);

  header('location: index.php?status=success');
  exit;
}
<?php

require __DIR__.'./../../vendor/autoload.php';

define('TITLE','Excluir');



//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}


//VALIDAÇÃO DO POST
if(isset($_POST['excluir'])){
  
  $produtoDao = new App\Model\ProdutoDao();
  $produtoDao->delete($_GET['id']);

  header('location: index.php?status=success');
  exit;
}
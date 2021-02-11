<?php

require __DIR__.'./../../vendor/autoload.php';


define('TITLE','Editar');


$produtoDao = new App\Model\ProdutoDao();
$editavel = $produtoDao->getOne($_GET['id'])[0];


//PREENCHIMENTO DOS CAMPOS EM CASO DE EDIÇÃO
if($editavel) {
    $funcao = $editavel['funcao'];
    $empresa = $editavel['empresa'];
    $descricao = $editavel['descricao'];
    $salario = $editavel['salario'];
    $ativo = $editavel['ativo'];
} else {
    $funcao = '';
    $empresa = '';
    $descricao = '';
    $salario = '';
    $ativo = '';
}



//VALIDAÇÃO DO POST
if(isset($_POST['funcao'], $_POST[ 'empresa'], $_POST['descricao'], $_POST['salario'], $_POST['ativo'])){

  $produto = new \App\Model\Vaga();

  $produto->setId($_GET['id']);
  $produto->setFuncao($_POST['funcao']);
  $produto->setEmpresa($_POST['empresa']);
  $produto->setDescricao($_POST['descricao']);
  $produto->setSalario($_POST['salario']);
  $produto->setAtivo($_POST['ativo']);
  $produto->setData();


  $produtoUpate = new \App\Model\ProdutoDao();
  $produtoDao->update($produto);

  
  header('location: index.php?status=success');
  exit;
}
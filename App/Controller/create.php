<?php

require __DIR__.'/../../vendor/autoload.php';

define('TITLE','Cadastrar');

  $funcao = '';
  $empresa = '';
  $descricao = '';
  $salario = '';
  $ativo = 's'; 

  

//DIFERENCIAÇÃO DE CRIAÇÃO E ATUALIZAÇÃO DE CADASTRO
if(isset($_POST['funcao'],$_POST['empresa'],$_POST['descricao'],$_POST['salario'],$_POST['ativo'])){

  $vaga = new \App\Model\Vaga();

  $vaga->setFuncao($_POST['funcao']);
  $vaga->setEmpresa($_POST['empresa']);
  $vaga->setDescricao($_POST['descricao']);
  $vaga->setSalario($_POST['salario']);
  $vaga->setAtivo($_POST['ativo']);
  $vaga->setData();

  $produtoDao = new App\Model\ProdutoDao();
  $produtoDao->create($vaga);

  if($vaga->getSalario() and $vaga->getFuncao() and $vaga->getDescricao() and $vaga->getEmpresa!== '') {
    header('location: index.php?status=success');
    exit;
  } else {
    header('location: index.php?status=error');
  }
}
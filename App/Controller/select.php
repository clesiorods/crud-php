<?php

require __DIR__.'./../../vendor/autoload.php';




$produtoDao = new App\Model\ProdutoDao();
$editavel = $produtoDao->getOne($_GET['id'])[0];

define('TITLE',$editavel['funcao']);


//PREENCHIMENTO DOS CAMPOS EM CASO DE EDIÇÃO
if($editavel) {
  $funcao = $editavel['funcao'];
  $descricao = $editavel['descricao'];
  $ativo = $editavel['ativo'];
} else {
  $funcao = '';
  $descricao = '';
  $ativo = ''; 
}



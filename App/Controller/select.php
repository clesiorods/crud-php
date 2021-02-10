<?php

require __DIR__.'./../../vendor/autoload.php';




$produtoDao = new App\Model\ProdutoDao();
$editavel = $produtoDao->getOne($_GET['id'])[0];

define('TITLE',$editavel['titulo']);


//PREENCHIMENTO DOS CAMPOS EM CASO DE EDIÇÃO
if($editavel) {
  $titulo = $editavel['titulo'];
  $descricao = $editavel['descricao'];
  $ativo = $editavel['ativo'];
} else {
  $titulo = '';
  $descricao = '';
  $ativo = ''; 
}



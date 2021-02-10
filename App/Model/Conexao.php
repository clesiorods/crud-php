<?php
namespace App\Model;


//CLASSE PARA INSTÂNCIA DE CONEXÃO COM O BANCO DE DADOS
class Conexao {
  private static $instance;

  public static function getConn() {
    if(!isset(self::$instance)) {
      self::$instance = new \PDO('mysql:host=localhost;dbname=crud-vagas;charset=utf8', 'root', '');
    }

    return self::$instance;

  }
}
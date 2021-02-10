<?php

namespace App\Model;


//MODELO DE PRODUTO A SER SALVO NO BANCO DE DADOS
  class Produto {

    private $id;
    private $titulo;
    private $descricao;
    private $ativo;
    private $data;


    public function setTitulo($t) {
      $this->titulo = $t;
    }
    public function getTitulo() {
      return $this->titulo;
    }


    public function setDescricao($n) {
      $this->descricao = $n;
    }
    public function getDescricao() {
      return $this->descricao;
    }


    public function setId($id) {
      $this->id = $id;
    }
    public function getId() {
      return $this->id;
    }


    public function setAtivo($a) {
      $this->ativo = $a;
    }
    public function getAtivo() {
      return $this->ativo;
    }



    public function setData() {
      $this->data = date('Y-m-d H:i:s');
    }
    public function getData() {
      return $this->data;
    }
  }
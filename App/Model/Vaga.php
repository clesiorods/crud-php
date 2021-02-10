<?php

namespace App\Model;


//MODELO DE PRODUTO A SER SALVO NO BANCO DE DADOS
  class Vaga {

    private $id;
    private $funcao;
    private $empresa;
    private $descricao;
    private $salario;
    private $ativo;
    private $data;



    public function setId($id) {
      $this->id = $id;
    }
    public function getId() {
      return $this->id;
    }



    public function setFuncao($f) {
      $this->funcao = $f;
    }
    public function getFuncao() {
      return $this->funcao;
    }




    public function setEmpresa($empresa) {
      $this->empresa = $empresa;
    }
    public function getEmpresa() {
      return $this->empresa;
    }



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


    public function setSalario($s) {
      $this->salario = $s;
    }
    public function getSalario() {
      return $this->salario;
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
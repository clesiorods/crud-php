<?php 
namespace App\Model;

//CLASSE PARA INSTÂNCIA DE CONTROLE DO BANCO DE DADOS
  class ProdutoDao {

    //CRIANDO PRODUTO NO BANCO DE DADOS
    public function create(Produto $p) {
      $sql = 'INSERT INTO produtos (titulo, descricao, ativo, data) VALUES (?,?,?,?)';

      $stmt = Conexao::getConn()->prepare($sql);
      $stmt->bindValue(1, $p->getTitulo());
      $stmt->bindValue(2, $p->getDescricao());
      $stmt->bindValue(3, $p->getAtivo());
      $stmt->bindValue(4, $p->getData());

      $stmt->execute();
    }

    //LENDO TODOS OS PRODUTOS DO BANCO DE DADOS
    public function read() {
      $sql = 'SELECT * FROM produtos';

      $stmt = Conexao::getConn()->prepare($sql);
      $stmt->execute();

      if($stmt->rowCount() > 0) {
        $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
      } else {
        return [];
      }
    }


    //ATUALIZANDO PRODUTO DO BANCO DE DADOS
    public function update(Produto $p) {
      $sql = 'UPDATE produtos SET titulo = ?, descricao = ?, ativo = ? WHERE id = ?';

      $stmt = Conexao::getConn()->prepare($sql);
      $stmt->bindValue(1, $p->getTitulo());
      $stmt->bindValue(2, $p->getDescricao());
      $stmt->bindValue(3, $p->getAtivo());
      $stmt->bindValue(4, $p->getId());

      $stmt->execute();
    }


    //DELETANDO PRODUTO DO BANCO DE DADOS
    public function delete($id) {
      $sql = 'DELETE FROM produtos WHERE id = ?';

      $stmt = Conexao::getConn()->prepare($sql);
      $stmt->bindValue(1, $id);
      $stmt->execute();
    }


    //SELECIONANDO UM DOS PRODUTOS DO BANCO DE DADOS
    public function getOne($id) {
      $sql = 'SELECT * FROM produtos WHERE id = ?';

      $stmt = Conexao::getConn()->prepare($sql);
      $stmt->bindValue(1, $id);
      $stmt->execute();

      $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

      return $resultado;
    }
  }

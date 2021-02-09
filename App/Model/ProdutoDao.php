<?php 
namespace App\Model;


  class ProdutoDao {

    public function create(Produto $p) {
      $sql = 'INSERT INTO produtos (titulo, descricao, ativo, data) VALUES (?,?,?,?)';

      $stmt = Conexao::getConn()->prepare($sql);
      $stmt->bindValue(1, $p->getTitulo());
      $stmt->bindValue(2, $p->getDescricao());
      $stmt->bindValue(3, $p->getAtivo());
      $stmt->bindValue(4, $p->getData());

      $stmt->execute();
    }


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


    public function update(Produto $p) {
      $sql = 'UPDATE produtos SET titulo = ?, descricao = ?, ativo = ? WHERE id = ?';

      $stmt = Conexao::getConn()->prepare($sql);
      $stmt->bindValue(1, $p->getTitulo());
      $stmt->bindValue(2, $p->getDescricao());
      $stmt->bindValue(3, $p->getAtivo());
      $stmt->bindValue(4, $p->getId());

      $stmt->execute();
    }

    public function delete($id) {
      $sql = 'DELETE FROM produtos WHERE id = ?';

      $stmt = Conexao::getConn()->prepare($sql);
      $stmt->bindValue(1, $id);
      $stmt->execute();
    }
  }
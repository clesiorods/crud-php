<?php 
namespace App\Model;

//CLASSE PARA INSTÂNCIA DE CONTROLE DO BANCO DE DADOS
  class ProdutoDao {

    //CRIANDO PRODUTO NO BANCO DE DADOS
    public function create(Vaga $v) {
      $sql = 'INSERT INTO vaga (funcao, empresa, descricao, salario, ativo, data) VALUES (?,?,?,?,?,?)';

      $stmt = Conexao::getConn()->prepare($sql);
      $stmt->bindValue(1, $v->getFuncao());
      $stmt->bindValue(2, $v->getEmpresa());
      $stmt->bindValue(3, $v->getDescricao());
      $stmt->bindValue(4, $v->getSalario());
      $stmt->bindValue(5, $v->getAtivo());
      $stmt->bindValue(6, $v->getData());

      $stmt->execute();

      return true;
    }

    //LENDO TODOS OS vaga DO BANCO DE DADOS
    public function read() {
      $sql = 'SELECT * FROM vaga';

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
    public function update(Vaga $v) {
      $sql = 'UPDATE vaga SET funcao = ?, empresa = ?, descricao = ?, salario = ?, ativo = ? WHERE id = ?';

      $stmt = Conexao::getConn()->prepare($sql);
      $stmt->bindValue(1, $v->getFuncao());
      $stmt->bindValue(2, $v->getEmpresa());
      $stmt->bindValue(3, $v->getDescricao());
      $stmt->bindValue(4, $v->getSalario());
      $stmt->bindValue(5, $v->getAtivo());
      $stmt->bindValue(6, $v->getId());

      $stmt->execute();
    }


    //DELETANDO PRODUTO DO BANCO DE DADOS
    public function delete($id) {
      $sql = 'DELETE FROM vaga WHERE id = ?';

      $stmt = Conexao::getConn()->prepare($sql);
      $stmt->bindValue(1, $id);
      $stmt->execute();
    }


    //SELECIONANDO UM DOS vaga DO BANCO DE DADOS
    public function getOne($id) {
      $sql = 'SELECT * FROM vaga WHERE id = ?';

      $stmt = Conexao::getConn()->prepare($sql);
      $stmt->bindValue(1, $id);
      $stmt->execute();

      $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

      return $resultado;
    }
  }

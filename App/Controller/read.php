<?php

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
        break;
    }
  }


  $produtoDao = new App\Model\ProdutoDao();
$produtoDao->read();




  $resultados = '';
  foreach($produtoDao->read() as $value){
    $resultados .= '<tr class="bg-light">
                      <td>'.$value['id'].'</td>
                      <td>'.$value['titulo'].'</td>
                      <td>'.$value['descricao'].'</td>
                      <td>'.($value['ativo'] == 's' ?
                                                    '<span class="badge badge-success">disponível</span>' :
                                                    '<span class="badge badge-light">contratado</span>').'
                                                  </td>

                      <td>'.date('d/m/Y à\s H:i:s',strtotime($value['data'])).'</td>
                      <td>
                        <a href="editar.php?id='.$value['id'].'">
                          <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir.php?id='.$value['id'].'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                    </tr>';
  }

  $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhuma vaga encontrada
                                                       </td>
                                                    </tr>';

?>

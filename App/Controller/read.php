<?php

//MENSAGEM EM RESPOSTA A AÇÃO NO CRUD
$mensagem = '';
if (isset($_GET['status'])) {
  switch ($_GET['status']) {
    case 'success':
      $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
      break;

    case 'error':
      $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
      break;
  }
}


//CRIAÇÃO DA TABELA COM AS VAGAS PRESENTES NO BANCO DE DADOS
$produtoDao = new App\Model\ProdutoDao();

$resultados = '';
foreach (array_reverse($produtoDao->read()) as $value) {
  $resultados .= '<tr class="bg-light">
                      <td>' . $value['id'] . '</td>
                      <td>' . $value['titulo'] . '</td>
                      <td>' . $value['descricao'] . '</td>
                      <td>' . ($value['ativo'] == 's' ?
    '<span class="badge badge-success">disponível</span>' :
    '<span class="badge badge-light">contratado</span>') . '
                                                  </td>

                      <td>' . date('d/m/Y à\s H:i:s', strtotime($value['data'])) . '</td>
                      <td>
                        <a href="editar.php?id=' . $value['id'] . '">
                          <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir.php?id=' . $value['id'] . '">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                    </tr>';
}


//CASO NÃO HAJA NENHUM CADASTRO
$resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhuma vaga encontrada
                                                       </td>
                                                    </tr>';

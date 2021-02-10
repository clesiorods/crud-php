<?php
require __DIR__.'/../App/Controller/read.php';
?>


<main>

  <?=$mensagem?>

  <section>
    <a href="cadastrar.php">
      <button class="btn btn-success btn-lg">Nova vaga</button>
    </a>
  </section>

  <section>

    <table class="table bg-light mt-3">
        <thead>
          <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Data</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>

  </section>


</main>
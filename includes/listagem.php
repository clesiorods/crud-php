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

  <h2 class="mt-5">Vagas Disponíveis</h2>


    <table class="table bg-light mt-3">
        <thead>
          <tr>
            <!-- <th>ID</th> -->
            <th>Função</th>
            <th>Empresa</th>
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
<main>

  <section>
    <a href="index.php">
      <button class="btn btn-primary btn-lg">Voltar</button>
    </a>
  </section>

  <h2 class="mt-4"><?=TITLE?></h2>

  <form method="post">

    <div class="form-group">
      <label>Função</label>
      <input type="text" class="form-control" name="funcao" value="<?=$funcao?>" placeholder="Título da vaga">
    </div>


    <div class="form-group">
      <label>Empresa</label>
      <input type="text" class="form-control" name="empresa" value="<?=$empresa?>" placeholder="Nome da sua empresa">
    </div>


    <div class="form-group">
      <label>Descrição</label>
      <textarea class="form-control" name="descricao" rows="3" placeholder="Insira aqui uma descrição da função..."><?echo $descricao == '' ? '' : $descricao ?></textarea>
    </div>


    <div class="form-group">
      <label>Salario</label>
      <input type="number" class="form-control" name="salario" value="<?=$salario?>" placeholder="Salario a ser pago">
    </div>



    <div class="form-group">
      <label>Status</label>
      <br>
      <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">

        <label class="btn btn-secondary active">
          <input type="radio" name="ativo" id="option1" autocomplete="off" <?echo $ativo == 's' ? "checked" : "" ?> value="s"> Dispovível
        </label>

        <label class="btn btn-secondary">
          <input type="radio" name="ativo" id="option2" autocomplete="off" <?echo $ativo == 'n' ? "checked" : "" ?> value="n"> Indisponível
        </label>
      </div>


    </div>



    <div class="form-group d-flex justify-content-end">
      <button type="submit" class="btn btn-success btn-lg w-25 p-3 mt--5">Enviar</button>
    </div>

  </form>

</main>
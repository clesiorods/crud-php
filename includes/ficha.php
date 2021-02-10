<?php
$funcao = $editavel['funcao'];
$empresa = $editavel['empresa'];
$salario = $editavel['salario'];
$descricao = $editavel['descricao'];
?>


<section>
    <a href="index.php">
        <button class="btn btn-primary btn-lg">Voltar</button>
    </a>
</section>


<main>
    <h1 class="mt-5">
        <?= $funcao ?>
    </h1>

    <h3 class="text-primary">
        <?echo $empresa;?>
    </h3>

    <? 
        if($ativo == 's') {
            echo '<span class="badge badge-success"> disponível </span>';
        } else {
            echo '<span class="badge badge-warning"> indisponível </span>';
        }        
    ?>

    <div class="d-flex flex-row-reverse bg-white">
        <h3 class="text-success"> R$
            <?echo $salario;?>,00
        </h3>
    </div>

    <p class="pb-5 pt-3">
        <?echo $descricao;?>
    </p>




</main>
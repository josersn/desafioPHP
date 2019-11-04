<?php require('header.php');
    require('config/function.php');
    $produto= getOneProduct($_GET['id']);
?>
<main class="d-flex box">

        <div class="col-6 ">
        <a href="index.php" class="btn mt-3 mb-3">Voltar para lista de produtos</a>
        <img src="<?= $produto["img"] ?>" class="img-fluid" alt="">
        </div>
        <div class="col-6 mt-5">
            <h2 class="mt-3 text-white"><?= $produto["nome"] ?></h2>
            
            <h4 class="mt-3">Categoria</h4>
            <label><?= $produto["categoria"] ?></label>
            
            <h4 class="mt-3">Descrição</h4>
            <label><?= $produto["descricao"] ?></label>

            <h4>Quantidade</h4>
            <label><?= $produto["quantidade"] ?></label>

            <h4>Preço</h4>
            <label><?= $produto["preco"] ?></label>
            
        </div>
</main>
<?php require('footer.php') ?>
<?php
  require('config/function.php');

  if(isset($_POST['action'])){
    $img = $_FILES["img"]["name"];
    $imgTmp = $_FILES["img"]["tmp_name"];
    $imgPath = "img/". $img;
    $certo = move_uploaded_file($imgTmp, $imgPath);

    newProduct($_POST['nome'], $_POST['categoria'], $_POST['descricao'], $_POST['quantidade'], $_POST['preco'], $imgPath);    
  }
  require('header.php');
?>
<main class="d-flex">
        <div class="lista">
        <h2>Todos Os produtos</h2>
        <?php 
      $produtos = getProdutos(); 
      if($produtos != null){
        ?>
        <table class="table mt-4">
  <thead>
    <tr class="top-table">
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Categoria</th>
      <th scope="col">Preço</th>
    </tr>
  </thead>
  <tbody> 
  <?php foreach($produtos as $produto){?>
    <tr>
      <th scope="row"><?php echo $produto['id']?></th>
      <td><a href="produto.php?id=<?php echo $produto['id']?>"><?php echo $produto["nome"] ?></a></td>
      <td><?php echo $produto["categoria"] ?></td>
      <td><?php echo $produto["preco"] ?></td>
    </tr>
  <?php }?>
  </tbody>
</table>
<?php
      
      }else{
        echo "<h2 class='text-align-center red'>Sem produtos cadastrados <small class='h5'>Vamos cadastrar</small></h2>";
      } ?>
      

</div>
<div class="new-produto">
    <h2 class="text-center">Adicionar Produto </h2>
    <div class="form-all mt-4">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"  enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input  required type="text" id="nome" class="form-control"  name="nome" placeholder="Nome do Produto">
            </div>
            <div class="form-group">
              <label for="categoria">Categoria </label>
                <select name="categoria" id="categoria"  class="form-control">
                  <option value="Camisetas">Camisetas</option>
                  <option value="Adesivos">Adesivos</option>
                  <option value="Copos">Copos</option>
                </select>
            </div>
            <div class="form-group">
              <label for="descricao">Descrição</label>
              <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input  required type="text" id="quantidade" class="form-control"  name="quantidade" placeholder="quantidade do Produto">
            </div>

            <div class="form-group">
                <label for="preco">Preço</label>
                <input  required type="text" id="preco" class="form-control"  name="preco" placeholder="Preço do Produto">
            </div>
            <div class="form-group">
              <label for="file">Imagem do produto</label>
              <input  required type="file" class="form-control-file" name="img" id="file">
            </div>
            <button class="btn btn-my" name="action">Cadastrar</button>
        </form>
    </div>
</div>
</main>
<?php require('footer.php')?>
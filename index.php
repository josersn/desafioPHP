<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Loja do Vinão</title>
</head>
<body>
<header class="top-bar">
<div class="logo">
    <img src="img/hairstyle.svg" alt="Escola Do Vinão">
    <h1>Loja Do Vinão</h1>
</div>
<nav>
    <ul>
        <li>Masculino</li>
        <li>Feminino</li>
        <li>Painel de Administração</li>
    </ul>
</nav>
</header>
   <main class="d-flex">
        <div class="lista">
        <h2>Todos Os produtos</h2>
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
    <tr>
      <th scope="row">1</th>
      <td>Camiseta Javacript</td>
      <td>Camisetas</td>
      <td>30.00</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Camiseta PHP</td>
      <td>Camisetas</td>
      <td>30.00</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Camiseta React</td>
      <td>Camisetas</td>
      <td>30.00</td>
    </tr>
    
  </tbody>
</table>
</div>
<div class="new-produto">
    <h2 class="text-center">Adicionar Produto </h2>
    <div class="form-all mt-4">
        <form action="produto.php" method="post">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" class="form-control"  name="nome" placeholder="Nome do Produto">
            </div>
            <div class="form-group">
              <label for="categoria">Categoria </label>
                <select name="categoria" id="categoria"  class="form-control">
                  <option value="1">Camisetas</option>
                  <option value="2">Adesivos</option>
                  <option value="3">Copos</option>
                </select>
            </div>
            <div class="form-group">
              <label for="descricao">Descrição</label>
              <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="text" id="quantidade" class="form-control"  name="quantidade" placeholder="quantidade do Produto">
            </div>

            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="text" id="preco" class="form-control"  name="preco" placeholder="Preço do Produto">
            </div>
            <div class="form-group">
              <label for="file">Imagem do produto</label>
              <input type="file" class="form-control-file" name="img-produto" id="file">
            </div>
            <button class="btn btn-my">Cadastrar</button>
        </form>
    </div>
</div>
</main>
</body>
</html>
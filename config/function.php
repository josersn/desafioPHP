<?php
    function newProduct($nome, $categoria, $descricao, $quantidade, $preco, $imgPath) {
        $arquivo = 'json.json';
        if(file_exists($arquivo)){
        $produtos = json_decode(file_get_contents($arquivo), true);
        
        if(is_numeric($preco) && is_numeric($quantidade)){
            $id = lastID($produtos);
            $produtos[] = [
              "nome" => $nome,
              "categoria" => $categoria,
              "descricao" => $descricao,
              "quantidade" => $quantidade,
              "preco" => $preco,
              "id" => $id++,
              "img" => $imgPath
            ];
            $certo = file_put_contents($arquivo, json_encode($produtos));
            }else{
              echo "<script>alert('Digite numero nos campos quantidade e/ou preço')</script>";
            }
        
        }
      }

      function lastID ($produtos) {
        if($produtos == null){
            return 0;
        }else {
            return count($produtos);
        }
      }

      function getProdutos() {
        $arquivo = 'json.json';
        if(file_exists($arquivo)){
        return $produtos = json_decode(file_get_contents($arquivo), true);
      }else{
         echo "Não banco de produtos";
       }
    }

    function getOneProduct($id){
      $arquivo = 'json.json';
        if(file_exists($arquivo)){
         $produtos = json_decode(file_get_contents($arquivo), true);
        return $produto = $produtos[$id];
        }else{
           echo "Produto não encontrado";
         }
    }
?>

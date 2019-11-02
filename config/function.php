<?php
    function newProduct($nome, $categoria, $descricao, $quantidade, $preco) {
        $arquivo = 'json.json';
        if(file_exists($arquivo)){
        $produtos = json_decode(file_get_contents($arquivo), true);
        
        if(is_numeric($preco) && is_numeric($quantidade)){
            $id = ladtID();
            $produtos[] = [
              "nome" => "nome",
              "categoria" => $categoria,
              "descricao" => $descricao,
              "quantidade" => $quantidade,
              "preco" => $preco,
              "id" => $id++
            ];
            $certo = file_put_contents($arquivo, json_encode($produtos));
            }else{
              echo "<script>alert('Digite numero nos campos quantidade e/ou preço')</script>";
            }
        
        }
      }

      function lastID () {
        if(isset($produtos['1']['id'])){
            return count($produtos['1']['id']);
        }else {
            return $count = 1;
        }
      }



?>

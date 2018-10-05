<?php

include_once('conexao.php');
include_once('menu/menulateral.php');

// echo "teste<pre>";

$tableName = "produtos";

$id = $_POST['id'];
$nomeProduto = $_POST['nome_produto'];
$descricaoProduto = $_POST['descricao_produto'];
$precoProduto = $_POST['preco_produto'];

$precoProduto = str_replace(",",".",$precoProduto);

$sql = "";

    $sql = "UPDATE  ".$tableName." SET nome='".$nomeProduto."', preco='".$precoProduto."',descricao='".$descricaoProduto."' WHERE id='".$id."'; ";

    // var_dump($sql);

     if ($conn->query($sql) === TRUE) {
         echo "<script type='text/javascript'> console.log('dados atualizados no banco') </script>";
         header("location: http://127.0.0.1/Produto/app/menu/dadosInseridos.php");
     } else {
         echo "Erro ao atualizar: ".$conn->error;
     }

    $conn->close();

   

?>
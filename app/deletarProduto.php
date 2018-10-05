<?php

include_once('conexao.php');
include_once('menu/menulateral.php');

// echo "teste<pre>";

$tableName = "produtos";

include_once('conexao.php');
include_once('menu/menulateral.php');
      
$link = $_SERVER['REQUEST_URI'];

$link = explode("/",$link);
$idProduto = $link[4];


$sql = "";

      $sql = "DELETE FROM ".$tableName." WHERE id =".$idProduto.";";

    // var_dump($sql);

     if ($conn->query($sql) === TRUE) {
         echo "<script type='text/javascript'> console.log('dados atualizados no banco') </script>";
         header("location: http://127.0.0.1/Produto/app/menu/dadosInseridos.php");
     } else {
         echo "Erro ao atualizar: ".$conn->error;
     }

    $conn->close();

   

?>
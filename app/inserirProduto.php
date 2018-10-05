<?php
include_once('conexao.php');

$nomeProduto = $_POST['nome_produto'];
$descricaoProduto = $_POST['descricao_produto'];
$precoProduto = $_POST['preco_produto'];
$precoProduto = str_replace(",",".",$precoProduto);

echo "<pre>";
var_dump($_POST);

    $query = "INSERT INTO produtos (nome, descricao, preco)
    VALUES ('".$nomeProduto."', '".$descricaoProduto."', '".$precoProduto."')";

    if ($conn->query($query) === TRUE) {
        header("location: http://127.0.0.1/Produto/app/menu/dadosInseridos.php");
        
        echo "<script type='text/javascript'>alert('Dados Inseridos')</script>";
        
    } else {
        echo "Houve um erro: " . $query . "<br>" . $conn->error;
    }

    $conn->close();



?>
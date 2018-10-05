<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Produto</title>
</head>
<body class="container">
    <?php
      
        include_once('conexao.php');
        include_once('menu/menulateral.php');
              
        $link = $_SERVER['REQUEST_URI'];

        $link = explode("/",$link);
        $idProduto = $link[4];

        $sql = "SELECT id,nome,descricao,preco FROM produtos WHERE id = '".$idProduto."' ";
        $result = $conn->query($sql);      
        $id = "";
        $descricao="";
        $preco="";
        $nome="";

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {           
                $id =  $row["id"];
                
                 $nome =   $row["nome"];
                  
                  $descricao =    $row["descricao"];
                      
                     $preco =  $row["preco"];

            }
        }
        
    ?>
          <h4>Editar Produto</h4>  
        <form action="http://127.0.0.1/Produto/app/atualizaProduto.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" class="form-control" id="nome" value="<?php echo $nome ?>" placeholder="nome do produto" name="nome_produto" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descricao</label>
                <textarea type="text"  class="form-control" id="descricao" placeholder="descreva detalhes" name="descricao_produto" rows="4" cols="50"><?php echo $descricao ?></textarea>
            </div>
            <div class="form-group">
                <label for="nome">preco</label>
                <input type="text" class="form-control" id="preco" value="<?php echo $preco ?>" onkeyup="replaceVirgula()" placeholder="preco" name="preco_produto" required>
            </div>

            <input type="hidden" value="<?php echo $id ?>" name="id">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    
</body>

<html>
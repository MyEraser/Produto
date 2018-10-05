<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="http://127.0.0.1/Produto/header/style.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Listar Produto</title>
</head>
<body>
  
    <div class="container">
    <?php
    include_once('conexao.php');
    include_once('menu/menulateral.php');
    
    
    $sql = "SELECT id,nome,descricao,preco FROM produtos order by nome";
    $result = $conn->query($sql);
    ?>

    <h4> Lista dos Seus Produtos </h4>
            <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col" hidden>Código</th>
              <th scope="col">Nome</th>
              <th scope="col">Descricao</th>
              <th scope="col">Preco</th>
              <th scope="col">Editar</th>
              <th scope="col">Excluir</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
                 if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td hidden>" .
                         $row["id"].
                          "</td>
                          <td> ".
                              $row["nome"].
                          "</td>
                          <td> ".
                             $row["descricao"].
                          "</td>
                          <td>R$ ".
                              $row["preco"].
                          "</td>
                          <td>".
                              "<a href='editarProduto.php/".$row["id"]."'>Editar <i class='fas fa-edit'></i></a> 
                          </td>
                          <td>".
                              "<a href='deletarProduto.php/".$row["id"]."'>Deletar<i class='fas fa-trash-alt'></i></a>
                          </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<script type='text/javascript'> alert('Nenhum Produto Encontrado') </script>";
                }
              ?>
            </tr>
          </tbody>
        </table>

</body>
</html>
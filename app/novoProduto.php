<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Novo produto</title>
</head>

<body>

    <div class="container">
    <?php include_once('menu/menulateral.php') ?>
        <h4>Inserir Novo Produto</h4>
         <form action="inserirProduto.php" method="POST">

            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="nome" class="form-control" id="nome"  placeholder="nome do produto" name="nome_produto" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descricao</label>
                <textarea type="nome"  class="form-control" id="nome"  placeholder="descreva detalhes" name="descricao_produto" rows="4" cols="50"></textarea>
            </div>
            <div class="form-group">
                <label for="nome">preco</label>
                <input type="nome" class="form-control" id="nome"  placeholder="nome do produto" name="preco_produto" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    
</body>
</html>
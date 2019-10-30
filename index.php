<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Desafio PHP</title>
</head>
<body>
    <?php include_once("config/val.php") ?>

    <main class="container">

        <div class="row">

            <div class="col-6"> 
                <h1>Cadastro de Produtos</h1>   
                <form action="index.php" method="post">
                    <div class="form-group">
                        <div>
                            <input class="form-control" type="text" name="nomeProduto" id="" placeholder="Nome do produto">
                        </div>

                        <div>
                            <input class="form-control" type="text" name="descProduto" id="" placeholder="Desrição do produto">
                        </div>

                        <div>
                            <input class="form-control" type="text" name="categoriaProduto" id="" placeholder="Categoria do produto">
                        </div>

                        <div>
                            <input class="form-control" type="number" name="quantidadeProduto" id="" placeholder="Quantidade do produto">
                        </div>

                        <div>
                            <input class="form-control" type="number" name="precoProduto" id="" placeholder="Preço do produto">
                        </div>

                        <div>
                            <input class="form-control" type="file" name="fotoProduto" id="" placeholder="Foto do produto">
                        </div>

                        <button class="btn btn-success" type="submit">Cadastrar Produto</button>
                    </div>
                </form>
            </div>    
        </div>

    
</body>
</html>
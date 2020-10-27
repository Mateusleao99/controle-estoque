<?php
    require_once "validador_acesso.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Estoque</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
		.card-home {
			padding: 40px 0 0 0;
			width: 80%;
			margin: 0 auto;
		}		
	</style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="#" class="navbar-brand">
            <img src="img/icone-estoque.png" width="30" height="30" class="d-inline-block align-top"> Estoque
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="logoff.php" class="nav-link">Sair</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="row">
            <div class="card-home">
                <div class="card">
                    <div class="card-header">
                        Transação do produto
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="registra_chamado.php">
                                    <div class="row">
                                        <div class="form-group col-5">
                                            <label>Nome do produto</label>
                                            <input type="text" name="titulo" class="form-control" placeholder="Produto">
                                        </div>
                                        <div class="form-group col-3">
                                            <label>Marca</label>
                                            <input type="text" name="marca" class="form-control" placeholder="Marca">
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Lote</label>
                                            <input type="number" name="lote" class="form-control" placeholder="Lote">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-5">
                                        <label>Transação</label>
                                            <select class="form-control" name="categoria">
                                                <option disabled selected>Selecione ...</option>
                                                <option>Venda</option>
                                                <option>Ajuste de estoque</option>
                                                <option>Produto danificado</option>
                                                <option>Outros </option>
                                            </select>
                                        </div>
                                        <div class="form-group col-3">
                                            <label>Valor da nota</label>
                                            <input type="number" name="lote" class="form-control" placeholder="Nota">
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Quantidade</label>
                                            <input type="number" name="quantidade" class="form-control" placeholder="Quantidade">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Descrição</label>
                                        <textarea name="descricao" class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="home.php" class="btn btn-lg btn-secondary btn-block"> Cancelar</a>
                                        </div>

                                        <div class="col-6">
                                            <button class="btn btn-lg btn-info btn-block" type="submit">Processar</button>
                                        </div>
                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
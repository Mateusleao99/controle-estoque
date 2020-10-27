<?php
    require_once "validador_acesso.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de estoque</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
		.card-home {
			padding: 40px 0 0 0;
			width: 100%;
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
                        Menu - Estoque
                    </div>
                    <div class="card-body d-flex">
                        <div class="col-6 d-flex justify-content-center">
                            <a href="entrada-e-saida-de-produto.php">
                                <img src="img/lista-de-tarefas.png" width="80" height="80" alt="Abrir chamado" width="64px">
                                <p>Transação</p>
                            </a>
                        </div>
                        <div class="col-6 d-flex justify-content-center">
                            <a href="listar_chamado.php" class="text-center">
                                <img src="img/mostrar-tarefa.png" width="80" height="80">
                                <p>Historico do estoque</p>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
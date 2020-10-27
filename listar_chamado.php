<?php
    require_once "validador_acesso.php";
    //LISTA DE CHAMADA VAZIA
    $chamado = array();
    //ABERTURA DE ARQUIVO DE CHAMADOS
    $arquivo = fopen('chamados.uni', 'r');

    // LEITURA DO ARQUIVO E PARA CADA LINHA ENCONTRADA  E INCLUIR NA LISTA
    while(!feof($arquivo)){
        $linha = fgets ($arquivo);
        $chamado[] = $linha;
    }

    fclose($arquivo);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Controle de estoque</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <style>
            .card-home{
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
                            Lista de produtos
                        </div>
                        <div class="card-body">
                            <?php foreach($chamado as $chamados) { 
    
                                $chamado_dados = explode('#', $chamados);

                                if($_SESSION["perfil_id"] == 2){
                                    //o usuário só vê seus próprios chamados
                                    if($chamado_dados[0] != $_SESSION['id']){
                                        continue;
                                    }
                                }

                                if(count($chamado_dados) < 3){
                                    continue;
                                }
                            ?>
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $chamado_dados[1] ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[2] ?></h6>
                                    <p class="card-text"><?= $chamado_dados[3] ?></p>
                                </div>

                            </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </body>
</html>
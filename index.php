<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Estoque </title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <style>
            .card-login{
                padding: 30px 0 0 0;
                width: 350px;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <a href="#" class="navbar-brand">
                <img src="img/icone-estoque.png" width="30" height="30" class="d-inline-block align-top">Estoque
            </a>
        </nav>

        <div class="container">
            <div class="row">
                <div class="card-login">
                    <?php
                        if(isset($_GET['login']) && $_GET['login'] == 'logoff'){ ?>
                            <div class="text-success text-center"> 
                                <h5>Deslogado com sucesso!</h5>
                            </div>
                    <?php } ?>
                    <div class="card">
                        <div class="card-header">
                            Login - Estoque
                        </div>
                        <div class="card-body">
                            <form method="post" action="valida_login.php"> 
                                <div class="form-group">
                                    <input class="form-control" type="text" name="registro" placeholder="Registro">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="senha" placeholder="Senha">
                                </div>

                                <?php
                                    if(isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>
                                        <div class="text-danger"> 
                                            Usuario ou senha inválido(s)!
                                        </div>
                                <?php }?>
                                
                                <?php
                                    if(isset($_GET['login']) && $_GET['login'] == 'erro2'){ ?>
                                        <div class="text-danger"> 
                                            Faça login antes de continuar!
                                        </div>
                                <?php } ?>
                                
                                <button class="btn btn-lg btn-info btn-block" type="submit"> Acessar</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
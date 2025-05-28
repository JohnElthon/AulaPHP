<?php
require_once "validador_acesso.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="imagens/logo.png" type="image/x-icon">

    <style>
        .card-login {
            padding: 30px 0 0 0;
            width: 350px;
            margin: 0 auto;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark bg-secondary">
        <a class="navbar-brand" href="index.php">
            <img src="../app_help_deskBD/imagens/cadastro06.png" width="30" height="30" class="d-inline-block align-top" alt="">
            App Help Desk
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">VOLTAR</a>
            </li>
        </ul>
    </nav>
    </head>


    <body class="bg-light">


        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-header bg-primary text-white text-center">
                            <h4>Cadastro de Usuário</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tipo de Usuário</label>
                                    <select class="form-control">
                                        option selected disabled>Selecione</option>
                                        <option value="admin">Administrador</option>
                                        <option value="tecnico">Técnico</option>
                                        <option value="usuario">Usuário</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>
<?php

    // Iniciando a sessão
    session_start();

    // Verificando se o usuário já não está logado.
    if(($_SESSION["nome_logado"] == "") || ($_SESSION["email_logado"] == "")){

        // Se ele não está logado, manda ele fazer login ora...
        header("location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>+Meus Pontos</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            body{
                background-image: url(images/background.jpg);
            }
        </style>
    </head>

    

    <body>
        <br>
        <div class="row">
            <!-- header (cabeçalho) -->
            <div class="col-xs-10 col-md-offset-1 bg-info">
                <div class="page-header dropdown">
                    <div class="pull-right">
                    


                    </div>
                    <a class="navbar-brand" href="index.html">
                        <img alt="Brand" src="images\icone.png">
                    </a> 
                    <h1>+Meus Pontos<br><small>Emagrecendo com Saúde</small></h1>
                </div>
            </div>
            <br>
            <br>
            <!-- menu -->
            <div class="col-xs-2 col-md-offset-1 bg-info">
                <br>
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation" class="active"><a href="index.html">Home</a></li>
                    <li role="presentation"><a href="RegistrarConsumo.html">Registrar Consumo</a></li>
                    <li role="presentation"><a href="ConsumoDiario.html">Consumo Diário</a></li>
                    <li role="presentation"><a href="Historico.html">Histórico</a></li>
                    <li role="presentation"><a href="TabelaDeAlimentos.html">Tabela de Alimentos</a></li>
                    <li role="presentation"><a href="logout.php">Sair</a></li>
                </ul>
            </div>
            <!-- o resto -->
            <div class="col-xs-8 bg-info">
                <h3>Você já consumiu:</h3>
            </div>
        </div>
    </body>
</html>
<?php
session_start();
require_once 'includes/valida_login.php';
require_once 'core/conexao_mysql.php';
require_once 'core/sql.php';
require_once 'core/mysql.php';


    
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="lib/css/Formularios/formularios.css">
    <link rel="stylesheet" href="lib/css/Formularios/exclusivoProd.css">
    <title>Formulário</title>
</head>
<body>
<div id="posicao">
<div class="form-header">
        <div class="title">
            <h1>Cadastre seu produto</h1>
        </div>
        <div class="login-button">
            <button><a href="#">Entrar</a></button>
        </div>
</div>
    <div class="container">
        <!--Cadastro de imagens-->
        <div class="form-image">

        <form method = "post" action ="core/imagem_repositorio.php" enctype="multipart/form-data" id="formProd"> 
            <div class="containerimg">
                <input type="hidden" name="acao" value="<?php echo 'insert' ?>">
                <input type="file" id="file-input" name='imagens[]' accept="image/png, image/jpeg, imagem/jpg" onchange="preview()" multiple>
                <label for="file-input">
                    <i class="fas fa-upload"></i> &nbsp; Choose A Photo
                </label>
                <p id="num-of-files">No Files Chosen</p>
                <div id="images"></div>
            </div>
        </form>
        </div>
    </div>
    <div class="continue-button" >
        <button type="submit" form="formProd"><a href="Ranking.php">Continuar</a> </button>
    </div>
</div>
<script src="lib/js/cadastroProd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
</body>
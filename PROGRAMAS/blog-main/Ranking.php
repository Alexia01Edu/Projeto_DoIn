<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuários | Projeto para Web com PHP</title>
        <link rel="stylesheet" href="lib/css/Ranquing.css">
    </head>
    <body>
    
    <div >
        
    </div>
        
    <nav>
        <div class="menu">
            <div class="link"><a href="#nav-doa">DOAÇÃO</a></div>
            <div class="link"><a href="#nav-troca" >TROCA</a></div>
            <div class="link"><a href="#nav-ambos">DOAÇÃO E TROCA</a></div>
        </div>
    </nav>
        <div class="" id="">
            <div class="conteudo" id="nav-doa">
                <?php
                    include 'includes/tabelaDoar.php';
                 ?>
            </div>
            <div class="conteudo" id="nav-troca" >
                <?php
                    include 'includes/tabelaTrocar.php';
                ?>
            </div>
            <div class="conteudo" id="nav-ambos" >
                <?php
                    include 'includes/tabelaTrocaDoa.php';
                ?>
            </div>
        </div>
    <script src="lib/js/Ranqing.js"></script>
    </body>
</html>
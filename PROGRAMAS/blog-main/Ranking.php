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
    <script type="text/javascript" src="lib/js/Ranqing.js"></script>
    <div >
        
    </div>
        
    <nav>
        <div class="menu">
           <button id="doa" onclick="document.getElementById('div1').style.display = 'block'">DOAÇÃO</button>
            <button id="troca" onclick="document.getElementById('div2').style.display = 'block'">TROCA</button>
            <button id="ambos" onclick="document.getElementById('div3').style.display = 'block'">DOAÇÃO E TROCA</button>
        </div>
    </nav>
        <div class="tabelas" id="">
            <div class="conteudo" id="div1">
                <?php
                    include 'includes/tabelaDoar.php';
                 ?>
            </div>
            <div class="conteudo" id="div2" >
                <?php
                    include 'includes/tabelaTrocar.php';
                ?>
            </div>
            <div class="conteudo" id="div3" >
                <?php
                    include 'includes/tabelaTrocaDoa.php';
                ?>
            </div>
        </div>
    </body>
</html>
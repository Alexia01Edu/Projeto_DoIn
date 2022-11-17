<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuários | Projeto para Web com PHP</title>
        <script>function doacao(){
        document.getElementById('div1').style.display = 'block'
        document.getElementById('div2').style.display = 'none'
        document.getElementById('div3').style.display = 'none'
        }
        function trocas(){
        document.getElementById('div2').style.display = 'block'
        document.getElementById('div1').style.display = 'none'
        document.getElementById('div3').style.display = 'none'
        }
        function ambos(){
        document.getElementById('div3').style.display = 'block'
        document.getElementById('div1').style.display = 'none'
        document.getElementById('div2').style.display = 'none'
}</script>
        <link rel="stylesheet" href="lib/css/Ranquing.css">
    </head>
    <body>
   
    <div></div>
        
    <nav>
        <div class="menu">
           <button id="doa" onclick="doacao()">DOAÇÃO</button>
            <button id="troca" onclick="trocas()">TROCA</button>
            <button id="ambos" onclick="ambos()">DOAÇÃO E TROCA</button>
        </div>
    </nav>
        <div class="tabelas" id="">
            <div class="conteudo" id="div1">
                <?php
                    include 'includes/Tabelas_ranking/tabelaDoar.php';
                 ?>
            </div>
            <div class="conteudo" id="div2" >
                <?php
                    include 'includes/Tabelas_ranking/tabelaTrocar.php';
                ?>
            </div>
            <div class="conteudo" id="div3" >
                <?php
                    include 'includes/Tabelas_ranking/tabelaTrocaDoa.php';
                ?>
            </div>
        </div>
        <script src="lib/js/ranqing.js"></script>
    </body>
</html>
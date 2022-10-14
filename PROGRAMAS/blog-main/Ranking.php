<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuários | Projeto para Web com PHP</title>
        <link rel="stylesheet"
            href="lib/css/bootstrap.min.css">
    </head>
    <body>
    
    <div class="container-fluid">
        
    </div>
        
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-doa-tab" data-toggle="tab" href="#nav-doa" role="tab" aria-controls="nav-home" >DOAÇÂO</a>
            <a class="nav-item nav-link" id="nav-troca-tab" data-toggle="tab" href="#nav-troca" role="tab" aria-controls="nav-troca" >TROCA</a>
            <a class="nav-item nav-link" id="nav-ambos-tab" data-toggle="tab" href="#nav-ambos" role="tab" aria-controls="nav-contact" >DOAÇÂO E TROCA</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane container fade show active" id="nav-doa" role="tabpanel" aria-labelledby="nav-doa-tab">
        <?php
            include 'includes/tabelaTrocar.php';
        ?>
    </div>
    <div class="tab-pane fade container" id="nav-troca" role="tabpanel" aria-labelledby="nav-troca-tab">
        <?php
            include 'includes/tabelaTrocar.php';
        ?>
    </div>
    <div class="tab-pane fade" id="nav-ambos" role="tabpanel" aria-labelledby="nav-ambos-tab"></div>
    </div>
    </div>
        <script src="lib/js/bootstrap.min.js"></script>
    </body>
</html>
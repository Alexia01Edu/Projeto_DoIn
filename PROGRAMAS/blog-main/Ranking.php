<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuários | Projeto para Web com PHP</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    
    <div class="container-fluid">
        
    </div>
        
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-doa-tab" data-toggle="tab" href="#nav-doa" role="tab" aria-controls="nav-home" >DOAÇÃO</a>
            <a class="nav-item nav-link" id="nav-troca-tab" data-toggle="tab" href="#nav-troca" role="tab" aria-controls="nav-troca" >TROCA</a>
            <a class="nav-item nav-link" id="nav-ambos-tab" data-toggle="tab" href="#nav-ambos" role="tab" aria-controls="nav-contact" >DOAÇÃO E TROCA</a>
        </div>
    </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade container show active" id="nav-doa" role="tabpanel" aria-labelledby="nav-doa-tab">
                <?php
                    include 'includes/tabelaDoar.php';
                 ?>
            </div>
            <div class="tab-pane fade container" id="nav-troca" role="tabpanel" aria-labelledby="nav-troca-tab">
                <?php
                    include 'includes/tabelaTrocar.php';
                ?>
            </div>
            <div class="tab-pane fade container" id="nav-ambos" role="tabpanel" aria-labelledby="nav-ambos-tab">
                <?php
                    include 'includes/tabelaTrocaDoa.php';
                ?>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
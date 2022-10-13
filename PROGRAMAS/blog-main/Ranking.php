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
    <h1>pr</h1>
    </div>

    <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Perfil</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contato</a>
    </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Topo //-->
                    <?php 
                        include 'includes/topo.php';
                      
                    ?>
                </div>
            </div>
            <div class="row" style="min-height: 500px;">
                <div class="col-md-12">
                    <!-- Menu //-->
                    <?php 
                        include 'includes/menu.php';
                       
                    ?>
                </div>
                <div class="col-md-10" style="padding-top: 50px;">
                    <!-- Conteúdo //-->
                    <h2>Usuário</h2>
                    <?php
                        require_once 'includes/funcoes.php';
                        require_once 'core/conexao_mysql.php';
                        require_once 'core/sql.php';
                        require_once 'core/mysql.php'; 

                        foreach($_GET as $indice => $dado) {
                            $$indice = limparDados($dado);
                        }

                        $criterio = [];

                        if(!empty($busca)) {
                            $criterio[] = ['nome', 'like', "%{$busca}%"];
                        }

                        $result = buscar(
                            'usuario',
                            [
                                'usuarioID',
                                'nome',
                                'ranking'
                            ],
                            $criterio,
                            'ranking DESC'
                        );
                    ?>
                    <table class="table table-bordered table-houver table-striped
                                    table-responsive{-sm|-md|-ld|-xl}">
                    
                        <thead>
                            <tr>
                                <td>Posição</td>
                                <td>Nome</td>
                                <td>Quantidade Total de produtos</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $posicao=1;
                                foreach($result as $entidade) :
                                    //$instrucao = "SELECT * from usuario";
                                    //$conexao = conecta();
                                    //$stmt = mysqli_prepare($conexao, $instrucao);
                                    //mysqli_stmt_execute($stmt);
                                    //mysqli_stmt_store_result($stmt);
                                    //$num = mysqli_stmt_num_rows($stmt);
                                    //for($posicao=1;$posicao <= $num;$posicao++) :
                                       
                            ?>
                            <tr>
                                <td><?php echo $posicao;  $posição++;?><td>
                                <td><?php echo $entidade['nome'] ?></td>
                                <td><?php echo $entidade['ranking']?></td>
                            </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                <!-- permanece após: -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Rodapé //-->
                    <?php
                        include 'includes/rodape.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
    </div>
    </div>
        <script src="lib/js/bootstrap.min.js"></script>
    </body>
</html>
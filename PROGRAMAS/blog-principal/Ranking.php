<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuários | Projeto para Web com PHP</title>
        <link rel="stylesheet"
            href="lib/bootstrap-4.2.1-dist/css/bootstrap.min.css">
    </head>
    <body>
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
                    <?php include 'includes/busca.php' ?>
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
                                <td><?php  $posicao=0; echo $posicao;  $posicao++;?><td>
                                <td><?php echo $entidade['nome'] ?></td>
                                <td><?php echo $entidade['ranking']?></td>
                            </tr>
                            <?php  endfor; endforeach; ?>

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
        <script src="lib/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
    </body>
</html>

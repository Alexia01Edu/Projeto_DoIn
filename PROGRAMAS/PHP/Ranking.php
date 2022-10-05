<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuários | Projeto para Web com PHP</title>
        <link rel="stylesheet" href="">
    </head>
    <body>
        <div class="">
            <div class="">
                <div class="">
                    <!-- Topo //-->
                    <?php 
                        include 'includes/topo.php';
                        include 'includes/valida_login.php';
                        if(!isset($_SESSION['login'])) {
                            header('Location: index.php');
                        }
                    ?>
                </div>
            </div>
            <div class="">
                <div class="">
                    <!-- Menu //-->
                    <?php 
                        include 'includes/menu.php';
                    ?>
                </div>
                <div class="">
                    <!-- Conteúdo //-->
                    <h2>Ranking</h2>
                    <?php include 'includes/busca.php' ?>
                    <?php
                        require_once 'includes/funcoes.php';
                        require_once 'core/conexao_mysql.php';
                        require_once 'core/sql.php';
                        require_once 'core/mysql.php'; 

                        foreach($_GET as $indice => $dado) {
                            $$indice = limparDados($dado);
                        }

                        $data_atual = date('Y-m-d H:i:s');

                        $criterio = [];

                        if(!empty($busca)) {
                            $criterio[] = ['nome', 'like', "%{$busca}%"];
                        }

                        $result = buscar(
                            'usuario',
                            [
                                'id',
                                'nome',
                                'email',
                               //senha fica cripytografada
                               'genero',
                               'dataNasc',
                               'quantDoar',
                               'quantTrocar',
                               'ranking',

                            ],
                            $criterio,
                            'ranking ASC'
                        );
                    ?>
                    <table class="">        
                        <thead>
                            <tr>
                                <td>Nome</td>
                                <td>Quatidade de produtos Doados</td>
                                <td>Quatidade de produtos Trocados</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php foreach($result as $entidade) : ?>
                                <td><?php echo $entidade['nome'] ?></td>
                                <td><?php echo $entidade['quantDoar'] ?></td>
                                <td><?php echo $entidade['quantTrocar'] ?></td>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <!-- permanece após: -->
                </div>
            </div>
            <div class="">
                <div class="">
                    <!-- Rodapé //-->
                    <?php
                        include 'includes/rodape.php';
                    ?>
                </div>
            </div>
        </div>
        <script src=""></script>
    </body>
</html>
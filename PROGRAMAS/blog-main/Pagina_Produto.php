<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuário | Projeto para Web com PHP</title>
        <link rel="stylesheet" href="lib/css/Produtos.php">
        <script>

</script>
    </head>
    <body>  
            <div class="prop"></div>
            <div id="main" >
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

                       /* $imagens = buscar(
                            'Imagem',
                                [
                                    'imagemID',
                                    'descricaoImg',
                                    'Imagem_arq',
                                    'fk_produto'
                                ],
                                $criterio,
                                'where fk_produto = $_SESSION["idproduto"]'
                                );

                        $result = buscar(
                            'Produto',
                            [
                                'produtoID',
                                'descricao',
                                'nome_prod',
                                'quant',
                                'modoOperacao',
                                'dataValidade',
                                'estado',
                                'cidade'
                            ],
                            $criterio,
                            'where produtoID = $_SESSION["idproduto"]'
                        );*/
                    //https://html-css-js.com/css/generator/box-shadow/
                    $id = $_GET['id'];
                    echo $id;?>
                
                <div class="card" >
                    <a href="" class="link efeitos">
                        
                    <h2 class="titulo-card"><?php echo $entidade['modoOperacao']?></h2>
                    
                    <img src="" alt="">
                    <div>
                        <h3><?php echo $entidade['nome_prod']?></h3>
                        <div class="info">
                        <span class="data">Data de validade: <?php echo $entidade['dataValidade']?>;</span>
                        <p class="lugar"><?php echo $entidade['cidade']?>, <?php echo $entidade['estado']?></p>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
    </body>
</html>





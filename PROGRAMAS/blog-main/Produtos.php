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
                                'cidade',
                                '(SELECT Imagem_arq  
                                FROM Imagem WHERE fk_produto = produtoID  
                                LIMIT 1) as imagem_arq'
                            ],
                            $criterio,
                            'dataValidade ASC'
                        );
                        function postiit(array $entidade): string
                        {
                            if($entidade['modoOperacao']=='Troca'){
                                $src = 'lib/img/Amarelo.jpg';
                            }
                            if($entidade['modoOperacao']=='Doação'){
                                $src = 'lib/img/verde.jpg';
                            }
                            return $src;
                        }
                    //https://html-css-js.com/css/generator/box-shadow/
                      foreach($result as $entidade) : 

                    ?>
                <div class="p1">
                    <div class="postit">  
                        <img src="<?php echo postiit($entidade); ?>" alt="" id="img"><h2><?php echo $entidade['modoOperacao']?></h2>
                    </div>
                    <div class="card" >
                    <a href="Pagina_Produto.php?id=<?php echo $entidade['produtoID'] ?>" class="link efeitos">
                    <div class="envoltorio">
                    <img src="<?php echo $entidade['imagem_arq'] ?>" alt="">
                    </div>
                    <div class="info">
                        <h3><?php echo $entidade['nome_prod']?></h3>
                        <div>
                        <p>Unidades: <?php echo $entidade['quant']?></p>
                        <p class="lugar"><?php echo $entidade['cidade']?>, <?php echo $entidade['estado']?></p>
                        <span class="data">Data de validade: <?php echo $entidade['dataValidade']?></span>
                        </div>
                    </div>
                    </a>
                </div>
                </div>
                <?php endforeach; ?>
                
            </div>
    </body>
</html>
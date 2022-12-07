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
        <link rel="stylesheet" href="lib/css/card_Prod.css">
        <link rel="stylesheet" href="lib/css/category.css">
        <link rel="stylesheet" href="lib/css/footer.css">
        <link rel="stylesheet" href="lib/css/header.css">
        <script>

</script>
    </head>
    <body>  
       
            <div id="main">
                    <?php
                        require_once 'includes/funcoes.php';
                        require_once 'core/conexao_mysql.php';
                        require_once 'core/sql.php';
                        require_once 'core/mysql.php'; 

                        foreach($_GET as $indice => $dado) {
                            $$indice = limparDados($dado);
                        }
                        $hj=date('Y/m/d');
                        $criterio = [];
                        

                        $result = buscar(
                            'Produto',
                            ['*',
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
                                $src = 'img/Amarelo.jpg';
                            }
                            if($entidade['modoOperacao']=='Doação'){
                                $src = 'img/verde.jpg';
                            }
                            return $src;
                        }
                    //https://html-css-js.com/css/generator/box-shadow/
                      foreach($result as $entidade) : ?>
                
                    <?php
                        include 'includes/card_Prod.php';
                    ?>
                    <?php endforeach; ?>
            </div>
      
    </body>
</html>
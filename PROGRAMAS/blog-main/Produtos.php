<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuário | Projeto para Web com PHP</title>
        <link rel="stylesheet" href="lib/css/Produtos.php">
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
                                'cidade'
                            ],
                            $criterio,
                            'dataValidade ASC'
                        );
                    
                      foreach($result as $entidade) : ?>

                <div class="card" >
                    <h2 class="titulo-card"><?php echo $entidade['modoOperacao']?></h2>
                    <img src="" alt="">
                    <div>
                        <h3 class="nome-Prod"><?php echo $entidade['nome_prod']?></h3>
                        <p class="data-Vali">Data de validade: <?php echo $entidade['dataValidade']?>;</p></br>
                        <p class="lugar"><?php echo $entidade['cidade']?>, <?php echo $entidade['estado']?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
    </body>
</html>
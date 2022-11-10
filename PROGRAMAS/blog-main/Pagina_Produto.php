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
        <link rel="stylesheet" href="">
        <script>

</script>
    </head>
    <body>  
            <div class="prop"></div>
            <div id="main" >
                    <?php /*
                        require_once 'includes/funcoes.php';
                        require_once 'core/conexao_mysql.php';
                        require_once 'core/sql.php';
                        require_once 'core/mysql.php'; 

                        foreach($_GET as $indice => $dado) {
                            $$indice = limparDados($dado);
                        }

                        
                        $id = (int) $_GET['id'];
                        echo $id;
                        $criterioimagens[] = ['fk_produto', '=', $id];
                        $imagens = buscar(
                            'Imagem',
                                [
                                    'imagemID',
                                    'descricaoImg',
                                    'Imagem_arq',
                                    'fk_produto'
                                ],
                                $criterioimagens
                                );

                        $criterioproduto[] = ['id', '=', $id];
                        
                        $produto = buscar(
                            'Produto',
                            ['*'],
                            $criterioproduto
                        );
                    //https://html-css-js.com/css/generator/box-shadow/
                    */?>
                
    <div class="card" >
                        
    <h2 class="Transação">troca/doação</h2>
        <div class="imagens">               
        <img src="" alt="">
        </div>              
            <div>
                <h3>nome do produto</h3>
                    <div class="info">
                        <h2>Detalhes do produto</h2>
                        <table>
                            <tr>
                                <td>Categoria: </td>
                                <td>Data de validade: </td>
                                <td>Quantidade:</td>
                                <td>Local: </td>
                            </tr>
                            <tr>
                                <td>Ted</td>
                                <td>22</td>
                                <td>Estudante</td>
                            </tr>
                        </table>
                    </div>
            </div>
    </div>
    <div>
        
        <h2>Descrição do produto</h2>
    </div>
</div>
    </body>
</html>





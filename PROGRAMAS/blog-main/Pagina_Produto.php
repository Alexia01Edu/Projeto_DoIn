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
        <link rel="stylesheet" href="lib/css/PaginaProd.css">
        <script>

</script>
    </head>
    <body>  
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
    <div class="p1">
    <h3 id="nome">nome do produto</h3>
    <h2 class="transacao">troca/doação</h2>     
    <div class="card" > 
        <div class="imagens">               
        <img src="" alt=""> 
        </div>            
        <div id="infoProd">
                        <h4>Detalhes do produto</h4>
                        <table>
                            <tr>
                                <th>Categoria: </th>
                                <td>Ted</td>
                            </tr>
                            <tr>
                                <th>Data de validade:</th>
                                <td>12/30/3409</td>
                            </tr>
                            <tr>
                                <th>Quantidade:</th>
                                <td>5</td>
                            </tr>
                            <tr>
                                <th>Local: </th>
                                <td>Estudante</td>
                            </tr>
                        </table>
                </div>
           </div>
        </div> 
    </div>
    </body>
</html>





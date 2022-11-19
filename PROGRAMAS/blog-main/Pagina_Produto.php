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
        <link rel="stylesheet" href="lib/css/Paginaprod.css">
        <script>
        </script>
    </head>
    <body>  
        <?php  
        /*
        require_once 'Produtos.php';
        require_once 'includes/funcoes.php';
        require_once 'core/conexao_mysql.php';
        require_once 'core/sql.php';
        require_once 'core/mysql.php'; 

        foreach($_GET as $indice => $dado) {
            $$indice = limparDados($dado);
        }

        $id = (int)$_GET['id'];
        
        $criterio1 = ['fk_produto', '=', $id];
        $imagens = buscar (
            'Imagem',
            ['*'],
            $criterio1
        );

        $criterio2 = ['produtoID', '=', $id];

        $Produto = buscar (
        'Produto',
        ['*',
        '(select nome
            from categoria
            where categoriaID = Produto.fk_categoria) as categoria'],
        $criterio2
        );
        */?>

    <div id="main" >
    <div class="p1">
    <h3 id="nome">nome do produto</h3>   
    <div class="card" > 
        <div class="imagem">               
        <img src="" alt=""> 
        </div> 
        <div class="lista">
            <div class="envoltorio">
                <img src="lib/img/GPS_Icon.png" alt="" class="imagens">
            </div>
        </div>           
                <div id="infoProd">

                    <strong class="transacao">Troca, doacao</strong><br>
                                
                        <a href="Produtos.php?categoria=<?php echo $Produto['fk_categoria']?>">categoria</a><br>
                       
                        <span> Data de validade: <strong>12/30/3409</strong></span>
                               
                    
                        <p>Quantidade:</p>

                        <img width="20" height="30" src="lib/img/GPS_Icon.png" alt=""><span>Cidade, Estado</span><br>

                    <span>Compartilhe este produto:</span> <br>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost/Projeto_Doin/PROGRAMAS/blog-main/Pagina_Produto.php" target="_blank">
	                <img width="25" height="25" src="https://ayltoninacio.com.br/img/s/18w50.jpg" alt="Compartilhe no Facebook" class="share"> </a>
                    <a href="https://api.whatsapp.com/send?text=http://localhost/Projeto_Doin/PROGRAMAS/blog-main/Pagina_Produto.php" target="_blank">
	                <img width="25" height="25" src="https://ayltoninacio.com.br/img/s/20w50.jpg" alt="Compartilhe no WhatsApp" class="share"></a>
                </div>
           </div>
        </div> 
        <div class="descricao">
            <h1>Descrição do Produto</h1>
                <div>A descrição é a enumeração das características próprias dos seres, coisas, cenários, ambientes, costumes, impressões etc. A visão, o tato, a audição, o olfato e o paladar constituem a base da descrição.</div>
        </div>
    </div>
    </body>
</html>






<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuário | Projeto para Web com PHP</title>
        <link rel="stylesheet" href="lib/css/PaginaProd.css">
        <link rel="stylesheet" href="lib/css/card_Prod.css">
        <link rel="stylesheet" href="lib/css/category.css">
        <link rel="stylesheet" href="lib/css/footer.css">
        <link rel="stylesheet" href="lib/css/header.css">
        <script>
        </script>
    </head>
    <body>  
        <?php include 'includes/header.php'?>
        <?php  
        require_once 'includes/funcoes.php';
        require_once 'core/conexao_mysql.php';
        require_once 'core/sql.php';
        require_once 'core/mysql.php'; 

        foreach($_GET as $indice => $dado) {
            $$indice = limparDados($dado);
        }

        $id = (int)$_GET['id'];
 
        $img[] = ['fk_produto', '=', $id];
        $imagens = buscar (
            'Imagem',
            ['*'],
            $img
        );

        $Prod[] = ['produtoID', '=', $id];

        $result = buscar (
        'Produto',
        ['*',
        '(select nome
            from categoria
            where categoriaID = Produto.fk_categoria) as categoria',
         '(SELECT Imagem_arq  
            FROM Imagem WHERE fk_produto = produtoID  
            LIMIT 1) as imagem_arq'],
        $Prod
        );
        $tam = count($imagens);

        ?>
    <div id="main" >
    <?php foreach($result as $Produto): 
        $cat = $Produto['fk_categoria'];?>
        <div class="p1">
            <div id="nome">
                <h3><?php echo $Produto['nome_prod']?></h3>
            </div>   
        <div class="card"> 

            <div class="slide">
                
                <div class="slides">

                    <?php for($i=1; $i<=$tam; $i++):?>
                    <input type="radio" name="slide" id="<?php echo 'btn'.$i?>"<?php if($i==1){echo 'checked';}?>>
                    <?php endfor; ?>
  
                    <div class="imagem">
                    <img src="<?php echo $Produto['imagem_arq']?>" alt="" class="img" id="img">
                    </div>

                </div>

                    <div class="navega">
                        <div class="lista">
                            <?php $i=1; foreach($imagens as $imagem):?>
                            <label for="<?php echo 'btn'.$i?>" class="barra envoltorio" id="<?php echo "img".$i?>" onclick="myFunction(this.id)">      
                                <img src="<?php echo $imagem['Imagem_arq']?>" alt="" class="imagens">
                                <?php $i++?>
                            </label>
                            <?php endforeach;?>
                        </div>
                    </div>
                
            </div>        
                <div id="infoProd">

                    <strong class="transacao"><?php echo $Produto['modoOperacao']?></strong><br>
                                
                        <a href="Produtos.php?categoria=<?php echo $Produto['fk_categoria']?>"><?php echo $Produto['categoria']?></a><br>
                       
                        <span> Data de validade: <strong><?php echo $Produto['dataValidade']?></strong></span>
                               
                    
                        <p>Quantidade:<?php echo $Produto['quant']?></p>

                        <img width="20" height="30" src="img/GPS_Icon.png" alt=""><span><?php echo $Produto['cidade']?>, <?php echo $Produto['estado']?></span><br>

                    <span>Compartilhe este produto:</span>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost/Projeto_Doin/PROGRAMAS/blog-main/Pagina_Produto.php" target="_blank">
	                <img width="25" height="25" src="https://ayltoninacio.com.br/img/s/18w50.jpg" alt="Compartilhe no Facebook" class="share"> </a>
                    <a href="https://api.whatsapp.com/send?text=http://localhost/Projeto_Doin/PROGRAMAS/blog-main/Pagina_Produto.php" target="_blank">
	                <img width="25" height="25" src="https://ayltoninacio.com.br/img/s/20w50.jpg" alt="Compartilhe no WhatsApp" class="share"></a>

                    <button>Contato do Fornecedor</button>
                </div>
           </div>
        </div> 
        <?php endforeach;?>
        <div class="semelhantes">
             <?php
             $hj=date('Y/m/d');
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
                    $categoria = buscar (
                                        'Produto',
                                        ['*',
                                        '(SELECT Imagem_arq  
                                            FROM Imagem WHERE fk_produto = produtoID  
                                            LIMIT 1) as imagem_arq'],
                                        [['fk_categoria', '=', $cat]]
                                        );
                foreach($categoria as $entidade) :?>
                <?php
                if($entidade['produtoID']!=$id){
                    include 'includes/card_Prod.php';
                }
                ?>
                 <?php   endforeach; ?>
            
        </div>
        <?php foreach($result as $Produto):?>
        <div class="descricao">
            <h1>Descrição do Produto</h1>
                <div class="conteudo"><?php echo $Produto['descricao']?></div>
        </div>
        <?php   endforeach; ?>
    </div>
    <script src="lib/js/PagProd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    </body>
</html>





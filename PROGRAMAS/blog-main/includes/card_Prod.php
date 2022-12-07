<div class="p2">
    <div class="postit">  
        <img src="<?php echo postiit($entidade); ?>" alt="" id="img"><h2><?php echo $entidade['modoOperacao']?></h2>
    </div>
    <div class="minicard" >
        <a href="Pagina_Produto.php?id=<?php echo $entidade['produtoID'] ?>" class="link efeitos">
            <div class="en">
                <img src="<?php echo $entidade['imagem_arq'] ?>" alt="">
            </div>
            <div class="informacao">
                <h3><?php echo $entidade['nome_prod']?></h3>
                <div>
                <p>Unidades: <?php echo $entidade['quant']?></p>
                <p class="lugar"><?php echo $entidade['cidade']?>, <?php echo $entidade['estado']?></p>
                <span class="data" <?php if($entidade['dataValidade']==$hj){echo'style="color:red;"';}?>>
                Data de validade: <?php echo $entidade['dataValidade']?></span>
                </div>
            </div>
        </a>
    </div>
</div>
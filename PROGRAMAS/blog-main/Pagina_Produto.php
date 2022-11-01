$imagens = buscar(
    'Imagem',
        [
            'imagemID',
            'descricaoImg',
            'Imagem_arq',
            'fk_produto'
        ],
        $criterio,
        ''
        );

    foreach($imagens as $imagem) : 
    if($imagem[fk_produto] == $entidade[produtoID]){
        echo $imagem[Imagem_arq];
    }
    endforeach

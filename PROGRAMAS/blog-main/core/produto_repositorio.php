<?php
session_start();
require_once '../includes/valida_login.php';
require_once '../includes/funcoes.php';
require_once 'conexao_mysql.php';
require_once 'sql.php';
require_once 'mysql.php';

foreach($_POST as $indice => $dado){

    $$indice = $dado;

}

foreach($_GET as $indice => $dado){

    $$indice = $dado;
}

switch($acao){

    case 'insert':
        $quantidade =(int)$quant;
        $usuario=$_SESSION ['login'] ['usuario'] ['usuarioID'];
        $modo = $modoOperacao;
        $dados = [
            'nome_prod' => $nome_prod,
            'descricao' => $descricao,
            'quant' => $quant,
            'modoOperacao' => $modoOperacao,
            'dataValidade' => $dataValidade,
            'estado' => $estado,
            'cidade' => $cidade,
            'fk_categoria'=>$fk_categoria,
            'fk_usuario' => $_SESSION['login'] ['usuario'] ['usuarioID']
        ];
        insere(
            'Produto',
            $dados
        );
       $criterio = [];
        $id = buscar(
                'Produto',
                ['produtoID'],
                $criterio,
                'produtoID DESC LIMIT 1'
        );
        $idProd=$id[0]['produtoID'];

        echo $idProd.'  ';
     
   $criterio=[['usuarioID','=',$usuario]];
        $resultado = buscar(
            'usuario',
            ['quantDoar','quantTrocar'],
            $criterio
        );
        
        $doa=(int)$resultado[0]['quantDoar'];
        $troca=(int)$resultado[0]['quantTrocar'];

        if($modo=='Doação'){
        $quantDoar=$doa+$quantidade;
        $quantTrocar=$troca;
        }
        else{
        $quantTrocar=$troca+$quantidade;
        $quantDoar=$doa;

        }
/*
        $dados=[
            'quantDoar'=>$quantDoar,
            'quantTrocar'=>$quantTrocar
        ];
        $criterio=['usuarioID','=',$usuario];
        atualiza(
            'usuario',
            $dados,
            $criterio
        );

      /*   function enviarImagem($error, $name, $tmp_name){
            include 'conexao_mysql.php';
             
             $pasta = 'ImagensProdutos/';
             $nomeImagem = $name;
             $novoNomeImagem = uniqid();
             $extensao = strtolower(pathinfo($nomeImagem, PATHINFO_EXTENSION));
             
             if(move_uploaded_file( $tmp_name, $pasta.$novoNomeImagem.'.'.$extensao)){
                $imagem_arq ='core/'.$pasta.$novoNomeImagem.'.'.$extensao;
         
                 $dados = [
                     'Imagem_arq' => $imagem_arq,
                     'fk_produto'=> $idProd
                     //'data_postagem' => "$data_postagem $hora_postagem",
                 ];
                 insere(
                     'Imagem',
                     $dados,
                     ''
                 );
             return true;
         }
             else{
                 return false;
             }
         }
         
         if (isset($_FILES['imagens'])){
             $imagens = $_FILES['imagens'];
             //array imagens = recebe as imagens
             foreach($imagens['name'] as $index => $img) {
                 $imagens_arqs  = enviarImagem($imagens['error'][$index], $imagens['name'][$index], $imagens["tmp_name"][$index]);
             }
         }
*/
         break;
        case 'update':
            //caso seja para atualizar dados existentes
            //função sql.php
            $dados = [
                'nome_prod' => $nome_prod,
                'descricao' => $descricao,
                'quant' => $quant,
                'modoOperacao' => $modoOperacao,
                'dataValidade' => $dataValidade,
                'estado' => $estado,
                'cidade' => $cidade,
                //'data_postagem' => "$data_postagem $hora_postagem",
                'fk_usuario' => $_SESSION['login'] ['usuario'] ['usuarioID']
            ];

            $criterio = [
                ['id', '=', $id]
            ];
    
            atualiza(
                'Produto',
                $dados,
                $criterio
            );
    
            break;

            case 'delete':
            //caso seja para deletar dados
            //função sql.php
                $criterio = [
                    ['id', '=', $id]
                ];
        
                deleta(
                    'Produto',
                    $criterio
                );
        
                break;

    }
    //header('Location: ../index.php');  
?>
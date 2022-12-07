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
        $quantidade = $quant;
        $usuario=$_SESSION ['login'] ['usuario'] ['usuarioID'];
        $modo = $modoOperacao;
        echo $usuario;
        $sql = "INSERT INTO Produto(nome_prod, descricao, quant, modoOperacao, dataValidade, estado, cidade,fk_categoria, fk_usuario)
        VALUES(' ". $nome_prod ." ',' ". $descricao ." ',' ". $quant ." ',' ". $modoOperacao ." ',' ". $dataValidade ."',' ". $estado ." ',' ". $cidade ."',' ". $fk_categoria ."',' ". $_SESSION ['login'] ['usuario'] ['usuarioID'] ." ')";  
        
        $resultado = mysqli_query($conexao,$sql);
        $idProd=mysqli_insert_id($conexao);
        echo $idProd;

        $criterio=[['usuarioID','=',$usuario]];
        $resultado = buscar(
            'usuario',
            ['quantDoar','quantTrocar'],
            $criterio
        );
        if($modo=='Doação'){
        $quantDoar=$resultado[0]['quantDoar']+$quantidade;
        $quantTrocar=$resultado[0]['quantTrocar'];
        }
        else{
        $quantTrocar=$resultado[0]['quantTrocar']+$quantidade;
        $quantDoar=$resultado[0]['quantDoar'];
        }
        $sql = "UPDATE usuario(quantDoar,quantTrocar)
        VALUES(' ". $quantDoar ." ',' ". $quantTrocar ." ') WHERE usuarioID = '.$usuario.'";  

        $resultado = mysqli_query( $conexao, $sql);

        function enviarImagem($error, $name, $tmp_name){
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
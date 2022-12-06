<?php
session_start();
require_once '../includes/valida_login.php';
require_once 'conexao_mysql.php';
require_once 'sql.php';
require_once 'mysql.php';


switch($acao){
    //switch - função de repetição
    case 'insert':
        function enviarImagem($error, $name, $tmp_name){
            include 'core/conexao_mysql.php';
             
            if($error){
             die("falha ao enviar arquivo");
             }
             
             $pasta = 'core/ImagensProdutos/';
             $nomeImagem = $name;
             $novoNomeImagem = uniqid();
             $extensao = strtolower(pathinfo($nomeImagem, PATHINFO_EXTENSION));
             
             $deu_certo = move_uploaded_file($tmp_name, $pasta.$novoNomeImagem.$extensao);
             $imagem_arq = $pasta . $novoNomeImagem. "." . $extensao;
             if($deu_certo){
         
                 $dados = [
                     'Imagem_arq' => $imagem_arq,
                     'fk_produto'=> $_SESSION ['fk_Produto']
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

        break;

        case 'update':
            //caso seja para atualizar dados existentes
            //função sql.php
            $dados = [
                'dataImg' => $dataImg,
                'descricaoImg' => $descricaoImg,
            ];

            $criterio = [
                ['id', '=', $id]
            ];
    
            atualiza(
                'Imagem',
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
                    'Imagem',
                    $criterio
                );
        
                break;

    }
   // header('Location: ../index.php');  
?>
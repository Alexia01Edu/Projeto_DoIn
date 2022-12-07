<?php
session_start();
require_once '../includes/valida_login.php';
require_once 'conexao_mysql.php';
require_once 'sql.php';
require_once 'mysql.php';


switch($acao){
    //switch - função de repetição
        case 'insert':


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
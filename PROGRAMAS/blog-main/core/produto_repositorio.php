<?php
session_start();
require_once '../includes/valida_login.php';
require_once '../includes/funcoes.php';
require_once 'conexao_mysql.php';
require_once 'sql.php';
require_once 'mysql.php';

foreach($_POST as $indice => $dado){

    $$indice = limparDados($dado);

}

foreach($_GET as $indice => $dado){

    $$indice = limparDados($dado);
}

switch($acao){
    //switch - função de repetição
    case 'insert':

        $nome = $nome_prod;
        $des = $descricao;
        $dados = [
            'nome_prod' => $nome_prod,
            'descricao' => $descricao,
            'quant' => $quant,
            'modoOperacao' => $modoOperacao,
            'dataValidade' => $dataValidade,
            'estado' => $estado,
            'cidade' => $cidade,
            'fk_categoria' => $fk_categoria,
            //'data_postagem' => "$data_postagem $hora_postagem",
            'fk_usuario' => $_SESSION ['login'] ['usuario'] ['usuarioID']
        ];
        
      insere(
            'Produto',
            $dados
        );
        
        $idProd = buscar(
            'Produto',
            ['produtoID'],
            [['nome_prod', '=', $nome,
              'descricao', '=', $des]],
              'LIMIT 1'
            );
        echo $idProd;

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
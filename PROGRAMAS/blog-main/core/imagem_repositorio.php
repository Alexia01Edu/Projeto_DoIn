<?php
session_start();
require_once '../includes/valida_login.php';
require_once '../includes/funcoes.php';
require_once 'conexao_mysql.php';
require_once 'sql.php';
require_once 'mysql.php';

foreach($_POST as $indice => $dado){
//Valores que chegam pelo método $_POST 
//enquanto percorre a array $_POST, também  pega o valor da sua chave.
//Um valor é pego a cada repetição ou iteração.
    $$indice = limparDados($dado);
//função limparDados, retira tags indesejadas
// A variavel indice, tem nome variavel, ou seja, o nome mude muda acada iteração
//o valor de $dado sera o nome do $indice 
}

foreach($_GET as $indice => $dado){
//Valores que chegam pelo método $_GET 
//enquanto percorre a array $_GET, também  pega o valor da sua chave.
//Um valor é pego a cada repetição ou iteração.
    $$indice = limparDados($dado);
}

$id = (int)$id;
// Pegar o id transformar em int e armazenar em id 
switch($acao){
    //switch - função de repetição
    case 'insert':
        //caso seja para inserir novo dados
        //função sql.php
        if($error){
            die("falha ao enviar arquivo");
            }
            if($size > 2097152)
                die('arquivo muito grande!! Max: 2MB');
            
            $pasta = '..imagens/';
            $nomeImagem = $imagem_name;
            $novoNomeImagem = uniqid();
            $extensao = strtolower(pathinfo($nomeImagem, PATHINFO_EXTENSION));
            
            if($extensao != 'jpg' && $extensao != 'jpeg' && $extensao != 'png')
                die("Tipo de arquivo não aceito");
            
            
            $Imagem_arq = $pasta . $novoNomeImagem. "." . $extensao;
        

        $dados = [
            'Imagem_arq' => $Imagem_arq,
            'descricaoImg' => $descricaoImg,
            'imagem_name' => $imagem_name,
            //'data_postagem' => "$data_postagem $hora_postagem",
        ];
    
        insere(
            'Imagem',
            $dados
        );
        //função (Mysql.php) 'insere' parâmetros: string 'post' (tabela), array $dados;
        //function insere(string $entidade, array $dados) : bool 

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
    header('Location: ../index.php');  
?>
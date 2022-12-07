<?php
 session_start();
 require_once '../includes/funcoes.php';
 require_once 'conexao_mysql.php';
 require_once 'sql.php';
 require_once 'mysql.php';
 $salt = '$exemplosaltifsp';

 foreach($_POST as $indice => $dado){
 
        $$indice = $dado;
    }
    
    foreach($_GET as $indice => $dado){

        $$indice = $dado;
}

 switch($acao) {

     case 'insert':
        $imagem = $_FILES['imagemP'];
        $pasta = "ImagemPerfil/";
        $nomeImagem = $imagem['name'];
        $novoNomeImagem = uniqid();
        $extensao = strtolower(pathinfo($nomeImagem, PATHINFO_EXTENSION));

        if(move_uploaded_file( $imagem['tmp_name'], $pasta.$novoNomeImagem.'.'.$extensao)){
          $imagemPerfil ='core/'.$pasta.$novoNomeImagem.'.'.$extensao;
      }
    
    else{
        $imagemPerfil ='core/ImagemPerfil/Rosa.jpg';
    }
    $dados=[
        'nome'=>$nome,
        'email'=>$email,
        'senha'=> crypt($senha,$salt),
        'genero'=>$genero,
        'dataNasc'=>$dataNasc,
        'telefone'=>$telefone,
        'imagemPerfil'=>$imagemPerfil

    ];
    insere(
        'usuario',
        $dados
    );
    
         break;
     case 'update':
         $id = (int)$id;
         $dados = [
             'nome' => $nome,
             'email' => $email
         ];

         $criterio = [
             ['id', '=', $id]
         ];

         atualiza(
             'usuario',
             $dados,
             $criterio
         );

         break;

     case 'login':
        
        //se input name='login' então 
         $criterio = [
             ['email', '=', $email]            
         ];
         //comapa se o email na digitado é igual ao email na tabela sql
         //E compara se ativo igual a 1 na tabela do banco de dados

         $retorno = buscar(
             'usuario',
             ['usuarioID','nome','email','senha'],
             $criterio
         );
         //a função buscar, verifica na tabela usuario se aquele usuario existe;
         //compara os valores do array criterio com os valores da tabela usuario
         //retorna 1 se sim e 0 se não;
         if(count($retorno) > 0) {
            //se o retorno for 1 ou seja se o usuario estiver cadastrado
             if(crypt($senha,$salt) == $retorno[0]['senha']) {
                //se a senha descrypitografada for igual a senha digitada
                 $_SESSION['login']['usuario'] = $retorno[0];
                 if(!empty($_SESSION['url_retorno'])) {
                     header('Location: ' . $_SESSION['url_retorno']);
                     $_SESSION['url_retorno'] = '';
                     exit;
                 }
             }
         }

         break;
     case 'logout':
         session_destroy();
         break;
     case 'status':
         $id = (int)$id;
         $valor = (int)$valor;

         $dados = [
             'ativo' => $valor
         ];

         $criterio = [
             ['id', '=', $id]
         ];

         atualiza(
             'usuario',
             $dados,
             $criterio
         );

         header('Location: ../usuarios.php');
         exit;
         break;
     case 'adm':
         $id = (int)$id;
         $valor = (int)$valor;

         $dados = [
             'adm' => $valor
         ];
         // o array dados recebe a chave(campo) adm com o valor $valor

         $criterio = [
             ['id', '=', $id]
         ];
         //criterio armazena o id

         atualiza(
             'usuario',
             $dados,
             $criterio
         );
         // a função atualiza a tabela usuario com os novos dados
         //no registro $criterio

         header('Location: ../usuarios.php');
         exit;
         break;
 }
 header('Location: ../index.php');

 //http://localhost/blog/core/usuario_repositorio.php
?>
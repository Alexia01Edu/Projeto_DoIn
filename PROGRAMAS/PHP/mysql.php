<?php
function insere(string $entidade, array $dados) : bool
{
    
    $retorno = false;

    foreach ($dados as $campo => $dado) {
        //comando de repetição
        //a cada repetição a variavel $dado recebe um valor do array $dados;
        //assim como sua chave do array contida na variavel $campo;
        //a chave é um campo do banco de dados 

        $coringa[$campo] = '?';
        //$coringa é um array que na posição/chave $campo
        //recebe o valor "?";

        $tipo[] = gettype($dado) [0];
        //$tipo[], array que recebe os tipos da variavel dado;
        //gettype - comando que obtem o tipo da variável:
        //"boolean","integer","double(float)", "string","array","object"....
        //parametro $dado, qual o tipo de valor que recebe a variavel $dado

        $$campo = $dado;
        //a variavel campo já possuia um valor atribuido a ela
        //agora esse valor passa ser o nome da variavel
        //após isso essa nova variavel recebe o nome
        
        //o sinal $$:
        // variáveis com nomes variáveis.
        //Uma variável variável obtém o valor de uma variável e a trata como o nome de uma variável.
        //www.php.net/manual/pt_BR/language.variables.variable.php
    } 

    $instrucao = insert($entidade, $coringa);
    //insert função do sql.php criado anteriormente
    //utlizando os parametros $entidade, $coringa[] para (string $entidade, array $dados);
    //retornando a $intrucao que sera armazendo dentro de instrução;

    $conexao = conecta();
    //a função conecta, conecta ao banco de dados
    //criado no conexao.php
    //a conexao com o banco fica armazenada na variavel $conexao

    $stmt = mysqli_prepare($conexao, $instrucao);
    //retorna: Um objeto de instrução em caso de sucesso e FALSO em caso de falha

    eval('mysqli_stmt_bind_param($stmt, \'' . implode('',$tipo) . '\', $' . implode(', $', array_keys($dados)) . ');');
    //eval : Executa uma string dada no parametro (), como se ela fosse um código PHP
    
    mysqli_stmt_execute($stmt);

    $retorno = (boolean) mysqli_stmt_affected_rows($stmt);

    $_SESSION['errors'] = mysqli_stmt_error_list($stmt);

    mysqli_stmt_close($stmt);

    desconecta($conexao);
      
    return $retorno;
}

function atualiza(string $entidade, array $dados, array $criterio = []) : bool
{
    $retorno = false;

    foreach ($dados as $campo => $dado) {
        $coringa_dados[$campo] = '?';
        $tipo[] = gettype($dado) [0];
        $$campo = $dado;
    }

    foreach ($criterio as $expressao) {
        $dado = $expressao[count($expressao) -1];

        $tipo[] = gettype($dado) [0];
        $expressao[count($expressao) - 1] = '?';
        $coringa_criterio[] = $expressao;

        $nome_campo = (count($expressao) < 4) ? $expressao[0] : $expressao[1];

        if(isset($nome_campo)) {
            $nome_campo = $nome_campo . '_' . rand();
        }

        $campos_criterio[] = $nome_campo;
        $$nome_campo = $dado;
    }
    $instrucao = update($entidade, $coringa_dados, $coringa_criterio);

    $conexao = conecta();

    $stmt = mysqli_prepare($conexao, $instrucao);

    if(isset($tipo)) {
        $comando = 'mysqli_stmt_bind_param($stmt, ';
        $comando .= "'" . implode('', $tipo). "'";
        $comando .= ', $' . implode(', $', array_keys($dados));
        $comando .= ', $' . implode(', $', $campos_criterio);
        $comando .= ');';

        eval($comando);
    }

    mysqli_stmt_execute($stmt);

    $retorno = (boolean) mysqli_stmt_affected_rows($stmt);

    $_SESSION ['errors'] = mysqli_stmt_error_list($stmt);

    mysqli_stmt_close($stmt);

    desconecta($conexao);

    return $retorno;
}

function deleta(string $entidade, array $criterio = []) : bool
{
    $retorno = false;

    $coringa_criterio = [];

    foreach ($criterio as $expressao) {
        $dado = $expressao[count($expressao) -1];

        $tipo[] = gettype($dado) [0];
        $expressao[count($expressao) -1] = '?';
        $coringa_criterio[] = $expressao;

        $nome_campo = (count($expressao) < 4) ? $expressao[0] : $expressao[1];

        $campos_criterio[] = $nome_campo;

        $$nome_campo = $dado;
    }
    $instrucao = delete($entidade, $coringa_criterio);

    $conexao = conecta();

    $stmt = mysqli_prepare($conexao, $instrucao);

    if(isset($tipo)) {
        $comando = 'mysqli_stmt_bind_param($stmt, ';
        $comando .= "'" . implode('', $tipo). "'";
        $comando .= ', $' . implode(', $', $campos_criterio);
        $comando .= ');';

        eval($comando);
    }

    mysqli_stmt_execute($stmt);

    $retorno = (boolean) mysqli_stmt_affected_rows($stmt);

    $_SESSION ['errors'] = mysqli_stmt_error_list($stmt);

    mysqli_stmt_close($stmt);

    desconecta($conexao);

    return $retorno;
    }

    function buscar(string $entidade, array $campos = ['*'], array $criterio = [], string $ordem = null ) : array
    {
        $retorno = false;
    
        $coringa_criterio = [];
    
        foreach ($criterio as $expressao) {
            $dado = $expressao[count($expressao) -1];
    
            $tipo[] = gettype($dado) [0];
            $expressao[count($expressao) - 1] = '?';
            $coringa_criterio[] = $expressao;
    
            $nome_campo = (count($expressao) < 4) ? $expressao[0] : $expressao[1];

            if(isset($nome_campo)) {
                $nome_campo = $nome_campo . '_' . rand();
            }
    
            $campos_criterio[] = $nome_campo;
    
            $$nome_campo = $dado;
        }
        $instrucao = select($entidade, $campos, $coringa_criterio, $ordem);
    
        $conexao = conecta();
    
        $stmt = mysqli_prepare($conexao, $instrucao);
    
        if(isset($tipo)) {
            $comando = 'mysqli_stmt_bind_param($stmt, ';
            $comando .= "'" . implode('', $tipo). "'";
            $comando .= ', $' . implode(', $', $campos_criterio);
            $comando .= ');';
    
            eval($comando);
        }
    
        mysqli_stmt_execute($stmt);

     if($result = mysqli_stmt_get_result($stmt)){
        $retorno = mysqli_fetch_all($result, MYSQLI_ASSOC);

        mysqli_free_result($result);
     }
        $_SESSION ['errors'] = mysqli_stmt_error_list($stmt);
    
        mysqli_stmt_close($stmt);
    
        desconecta($conexao);

        $retorno = $retorno;
    
        return $retorno;
        }

?>
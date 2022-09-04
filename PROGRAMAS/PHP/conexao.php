<?php
function conecta() : mysqli 
{
$hostname = "localhost";
$port = 3306;
$username = "root";
$passaword = "";
$database = "DoIn";
$conexao = mysqli_connect($hostname, $username, $passaword, $database, $port);
//mysqli_connect : Retorna um objeto representando a conexão com o servidor MySQL
//Se o modo de exceção mysqli não estiver habilitado e uma conexão falhar, mysqli_connect() retornará false em vez de um objeto.
    if(!$conexao){
    //se o valor retornado for diferente de $conexao

    echo 'Erro: Não foi possível conectar ao mysql.' . PHP_EOL;
    //PHP_EOL : símbolo de 'Fim de linha' para esta plataforma.

    echo 'Debugging errno: ' . mysqli_connect_errno() . PHP_EOL;
    //A função mysqli_connect_errno(): Retorna o valor(nùmero inteiro) do código de erro para a ultima chamada a função mysqli_connect(), SE está tiver FALHADO. 
    // Retornará ZERO se não houve erro.

    echo 'Debugging error:' . mysqli_connect_error() . PHP_EOL;
    //mysqli_error() é identica a mysqli_errno(), exceto que ao invés de retornar um código de erro inteiro, 
    //Ela retornará uma string que descreve o erro 
    //OU uma string vazia se não houve erro.
    return null;
}
    return $conexao;
    //se não houver erro retorna o objeto $conexão
    
}

function desconecta($conexao)
{
    mysqli_close($conexao);
    //A função mysqli_close() fecha uma conexão com um banco de dados aberto anteriormente 
    //especificado pelo parâmetro $conexão.
    //retornado da função conecta();
    //Retorna true em caso de sucesso ou false em caso de falha.
}
?>
<!-- https://undraw.co/illustrations  link para imagens--> 
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/css/style_usuario.css">
    <title>Formulário</title>
</head>

<body>
   <?php
    /*require_once 'includes/funcoes.php';
    require_once 'core/conexao_mysql.php';
    require_once 'core/sql.php';
    require_once 'core/mysql.php';*/
    ?>
    <div id="posicao">
    <div class="form-header">
        <div class="title">
            <h1>Cadastre-se</h1>
        </div>
        <div class="login-button">
            <button><a href="#">Entrar</a></button>
        </div>
    </div>
    <div class="container">
        <div class="form-image">
            <img src="lib/img/cadastro_usuario.png" alt="">
        </div>
        <div class="form">
            <form method="post" action="core/usuario_repositorio.php" id="formUsuario">
            <input type="hidden" name="acao" value="<?php echo 'insert' ?>">
                <div class="input-group">
                    <div class="input-box">
                        <label for="NomeC">Nome Completo</label>
                        <input id="NomeC" type="text" name="nome" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Data Nascimento</label>
                        <input type="date" name="dataNasc" required>
                    </div>
                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="text" name="number" placeholder="xxx.xxx.xxx-x" required>
                    </div>
                    <div class="input-box">
                        <label for="tel">Celular</label>
                        <input id="tel" type="text" name="telefone" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="entrar">
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>


                    <div class="input-box">
                        <label for="confirmar">Confirme sua Senha</label>
                        <input id="confirmar" type="password" name="senha" placeholder="Digite sua senha novamente" required>
                    </div>
                </div>
                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="Feminino" type="radio" name="genero">
                            <label for="Feminino">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="Masculino" type="radio" name="genero">
                            <label for="Masculino">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="Outros" type="radio" name="genero">
                            <label for="Outros">Outros</label>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="continue-button">
        <button type="submit" form="formUsuario"><a href="Ranking.php">Continuar</a> </button>
    </div>

</div>
</body>

</html>
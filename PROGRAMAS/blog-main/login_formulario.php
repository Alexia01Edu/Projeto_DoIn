
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login | Projeto para Web com PHP</title>
        <link rel="stylesheet" href="lib/css/Formularios/login.css">
    </head>
    <body>
    <div id="posicao">
    <div class="form-header">
        <div class="title">
            <h1>Login</h1>
        </div>
        <div class="cadastro-button">
            <button><a href="#">Cadastrar</a></button>
        </div>
    </div>
    <div class="container">
        <div class="form">
            <form method="post" action="core/usuario_repositorio.php" id="formUsuario">
            
            <input type="hidden" name="acao" value="<?php echo 'login'?>">
                <div class="input-group">

                    <div class="entrar">
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>
    <div class="continue-button">
    <button type="submit" form="formUsuario"><a href="cadastro_produto.php">Continuar</a></button>
    </div>
    </body>
</html>
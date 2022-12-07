<!-- https://undraw.co/illustrations  link para imagens--> 
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/css/Formularios/formularios.css">
    <link rel="stylesheet" href="lib/css/Formularios/exclusivoUsuario.css">
    <title>Formulário</title>
</head>

<body>
   <?php
      
    ?>
    <div id="posicao">
    <div class="form-header">
        <div class="title">
            <h1>Cadastre-se</h1>
        </div>
        <div class="login-button">
            <button><a href="login_formulario">Entrar</a></button>
        </div>
    </div>
    <div class="container">
        <div class="form-image">
            <form method = "post" action ="core/usuario_repositorio.php" enctype="multipart/form-data"  id="formUsuario">
            <input type="hidden" name="acao" value="<?php echo 'insert' ?>">
            <div class="max-width">
                <p>Escolha sua foto de Perfil</p> 
                <div class="imageContainer">
                <img src="lib/img/camera.png" alt="Selecione uma imagem" id="imgPhoto">
                </div>
            </div>

            <input type="file" id="flImage" name="imagemP" accept="image/*">
        </div>

        <div class="form">
                <div class="input-group">
                    <div class="input-box">
                        <label for="NomeC">Nome Completo</label>
                        <input id="NomeC" type="text" name="nome" placeholder="Digite seu nome" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Data Nascimento</label>
                        <input type="date" name="dataNasc" required>
                    </div>
                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="text" name="cpf" placeholder="xxx.xxx.xxx-x" required>
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
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>

                </div>
                </div>

                <div class="radio-inputs">
                    <div class="radio-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="radio-group">
                        <div class="radio-input">
                            <input id="Feminino" type="radio" name="genero" value="Feminino">
                            <label for="Feminino">Feminino</label>
                        </div>

                        <div class="radio-input">
                            <input id="Masculino" type="radio" name="genero" value="Masculino">
                            <label for="Masculino">Masculino</label>
                        </div>

                        <div class="radio-input">
                            <input id="Outros" type="radio" name="genero" value="Outros">
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
<script src="lib/js/cad_imgPerfil.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
</body>

</html>
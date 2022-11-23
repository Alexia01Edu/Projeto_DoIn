<?php
    session_start();
?>
<!-- https://undraw.co/illustrations  link para imagens--> 
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/css/style_produto.css">
    <title>Formulário</title>
</head>

<body>

<div id="posicao">
<div class="form-header">
        <div class="title">
            <h1>Cadastre seu produto</h1>
        </div>
        <div class="login-button">
            <button><a href="#">Entrar</a></button>
        </div>
</div>
    <div class="container">
        <!--Cadastro de imagens-->
        <div class="form-image">

        <form method = "post" action ="" enctype="multipart/form-data"> 
        <div class="input-group">
            <div class="imagem">
            <script>
                $("#imagens").on("change", function() {
                if ($("#imagens")[0].files.length > 2) {
                alert("You can select only 2 images");
                } else {
                $("#imageUploadForm").submit();
                }
                });
            </script>
                <label for="imagem">Imagem: </label> 
                <input multiple="multiple" type="file" name="imagens[]" id="imagens">
            </div>
            <div class="input-box">
                <label for="titulo">Descrição para as imagens</label>
                <textarea type="text" require="required" id="descricaoImg" name="descricaoImg" 
                placeholder="essa imagem mostra os filhotes de cachorros labrador que eu quero Doar/Trocar"rows="5"> </textarea>
            </div>
            
        </div>
        </form>

        </div>
        <!--final-->
        <div class="form">
            
            <form method="post" action="core/produto_repositorio.php" id="formProd">

            <input type="hidden" name="acao" value="<?php echo 'insert' ?>">

                <div class="input-group">
                    <div class="input-box">
                        <label for="name">Nome</label>
                        <input id="name" type="text" name="nome_prod" placeholder="Digite o nome" required>
                    </div>
                    <div class="input-box">
                        <label for="descricao_produto">Descrição</label>
                        <input id="descricao_produto" type="text" name="descricao" placeholder="Descreva o produto" required>
                    </div>

                        <div class="input-box">
                            <label for="estado">Estado</label></br>
                                <select id="estado" name="estado">
                                    <option value="">Selecione</option>
                                    <option value="Acre">Acre</option>
                                    <option value="Alagoas">Alagoas</option>
                                    <option value="Amapá">Amapá</option>
                                    <option value="Amazonas">Amazonas</option>
                                    <option value="Bahia">Bahia</option>
                                    <option value="Ceará">Ceará</option>
                                    <option value="Distrito Federal">Distrito Federal</option>
                                    <option value="Espirito Santo">Espirito Santo</option>
                                    <option value="Goiás">Goiás</option>
                                    <option value="Maranhão">Maranhão</option>
                                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                    <option value="Mato Grosso">Mato Grosso</option>
                                    <option value="Minas Gerais">Minas Gerais</option>
                                    <option value="Pará">Pará</option>
                                    <option value="Paraíba">Paraíba</option>
                                    <option value="Paraná">Paraná</option>
                                    <option value="Pernambuco">Pernambuco</option>
                                    <option value="Piauí">Piauí</option>
                                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                    <option value="Rondônia">Rondônia</option>
                                    <option value="Roraima">Roraima</option>
                                    <option value="Santa Catarina">Santa Catarina</option>
                                    <option value="São Paulo">São Paulo</option>
                                    <option value="Sergipe">Sergipe</option>
                                    <option value="Tocantins">Tocantins</option>
                                </select>
                        </div>
                    <div class="input-box">
                        <label for="cidade">Cidade</label>
                        <input id="cidade" type="text" name="cidade" placeholder="Digite a cidade" required>
                    </div>
                    <div class="input-box">
                        <label for="data">Data de validade</label>
                        <input type="date" id="data" name="dataValidade" >
                    </div>
                    <div class="input-box">
                        <label for="Quantidade">Quantidade</label>
                        <input id="Quantidade" type="number" min="1" step="1" name="quant" >
                    </div>

                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Modo de operação</h6>
                    </div>

                    <div class="gender-group">
                        <div>
                            <div class="gender-input">
                                <input id="Troca" type="radio" name="modoOperacao" value="Troca">
                                <label for="Troca">Troca</label>
                            </div>

                            <div class="gender-input">
                                <input id="Doação" type="radio" name="modoOperacao" value="Doação">
                                <label for="Doação">Doação</label>
                            </div>
                        </div>  
                    </div>
                </div>
                </br>
                <div class="input-box">
                    <label for="categoria">Categorias - Produtos </label></br>
                        <select id="categoria" name="fk_categoria">
                            <option value="">Selecione</option>
                            <option value="1">Beleza</option>
                            <option value="2">Saúde</option>
                            <option value="3">Casa</option>
                            <option value="4">Eletrodomésticos</option>
                            <option value="5">Móveis</option>
                            <option value="6">Decoração</option>
                            <option value="7">Alimentos</option>
                            <option value="8">Bebidas</option>
                            <option value="9">Esporte</option>
                            <option value="10">Lazer</option>
                            <option value="11">Eletrônicos</option>
                            <option value="12">Pet Animais</option>
                            <option value="13">Pet Produtos</option>
                        </select>
                    </div>
            </form>
        </div>
    </div>
    <div class="continue-button" >
        <button type="submit" form="formProd"><a href="#">Continuar</a> </button>
    </div>
</div>
</body>

</html>
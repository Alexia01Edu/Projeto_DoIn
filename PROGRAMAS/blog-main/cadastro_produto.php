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
        <div class="form-image">
            <img src="lib/img/cadastro_produto.png" alt="">
        </div>
        <div class="form">
            
            <form method="post" action="core/produto_repositorio.php" id="formProd">

            <input type="hidden" name="acao" value="<?php echo 'insert' ?>">

                <div class="input-group">
                    <div class="input-box">
                        <label for="name">Nome</label>
                        <input id="name" type="text" name="nome_prod" placeholder="Digite o nome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">Descrição</label>
                        <input id="descricao_produto" type="text" name="descricao" placeholder="Descreva o produto" required>
                    </div>

                        <div class="input-box">
                            <label for="estado">Estado</label></br>
                                <select id="arre_caixa" name="estado">
                                    <option value="">Selecione</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espirito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                        </div>
                    <div class="input-box">
                        <label for="cidade">Cidade</label>
                        <input id="cidade" type="text" name="cidade" placeholder="Digite a cidade" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Data de validade</label>
                        <input type="date" name="dataValidade" >
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
                                <input id="Troca" type="radio" name="modoOperacao">
                                <label for="Troca">Troca</label>
                            </div>

                            <div class="gender-input">
                                <input id="Doação" type="radio" name="modoOperacao">
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
        <button type="submit" form="formProd"><a href="Ranking.php">Continuar</a> </button>
    </div>
</div>
</body>

</html>
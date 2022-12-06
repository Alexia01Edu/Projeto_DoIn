
<!-- https://undraw.co/illustrations  link para imagens--> 
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="lib/css/Formularios/formularios.css">
    <link rel="stylesheet" href="lib/css/Formularios/exclusivoProd.css">
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

        <form method = "post" action ="" enctype="multipart/form-data" id="formProd"> 
        <input type="hidden" name="acao" value="<?php echo 'insert' ?>">
           
            <div class="containerimg">
                <input type="file" id="file-input" name='imagens[]' accept="image/png, image/jpeg, imagem/jpg" onchange="preview()" multiple>
                <label for="file-input">
                    <i class="fas fa-upload"></i> &nbsp; Choose A Photo
                </label>
                <p id="num-of-files">No Files Chosen</p>
                <div id="images"></div>
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
                            <option value="10">Eletrônicos</option>
                            <option value="11">Pet Animais</option>
                            <option value="12">Pet Produtos</option>
                        </select>
                    </div>
                </div>

                <div class="radio-inputs">
                    <div class="radio-title">
                        <h6>Modo de operação</h6>
                    </div>

                    <div class="radio-group">
                        <div>
                            <div class="radio-input">
                                <input id="Troca" type="radio" name="modoOperacao" value="Troca">
                                <label for="Troca">Troca</label>
                            </div>

                            <div class="radio-input">
                                <input id="Doação" type="radio" name="modoOperacao" value="Doação">
                                <label for="Doação">Doação</label>
                            </div>
                        </div>  
                    </div>
                </div>
                    <div class="descricao">
                        <div class="options">
                            <!-- Text Format -->
                            <button id="bold" class="option-button format">
                            <i class="fa-solid fa-bold"></i>
                            </button>
                            <button id="italic" class="option-button format">
                            <i class="fa-solid fa-italic"></i>
                            </button>
                            <button id="underline" class="option-button format">
                            <i class="fa-solid fa-underline"></i>
                            </button>
                            <button id="strikethrough" class="option-button format">
                            <i class="fa-solid fa-strikethrough"></i>
                            </button>
                            <button id="superscript" class="option-button script">
                            <i class="fa-solid fa-superscript"></i>
                            </button>
                            <button id="subscript" class="option-button script">
                            <i class="fa-solid fa-subscript"></i>
                            </button>
                            <!-- List -->
                            <button id="insertOrderedList" class="option-button">
                            <div class="fa-solid fa-list-ol"></div>
                            </button>
                            <button id="insertUnorderedList" class="option-button">
                            <i class="fa-solid fa-list"></i>
                            </button>
                            <!-- Undo/Redo -->
                            <button id="undo" class="option-button">
                            <i class="fa-solid fa-rotate-left"></i>
                            </button>
                            <button id="redo" class="option-button">
                            <i class="fa-solid fa-rotate-right"></i>
                            </button>
                            <!-- Link -->
                            <button id="createLink" class="adv-option-button">
                            <i class="fa fa-link"></i>
                            </button>
                            <button id="unlink" class="option-button">
                            <i class="fa fa-unlink"></i>
                            </button>
                            <!-- Alignment -->
                            <button id="justifyLeft" class="option-button align">
                            <i class="fa-solid fa-align-left"></i>
                            </button>
                            <button id="justifyCenter" class="option-button align">
                            <i class="fa-solid fa-align-center"></i>
                            </button>
                            <button id="justifyRight" class="option-button align">
                            <i class="fa-solid fa-align-right"></i>
                            </button>
                            <button id="justifyFull" class="option-button align">
                            <i class="fa-solid fa-align-justify"></i>
                            </button>
                            <button id="indent" class="option-button spacing">
                            <i class="fa-solid fa-indent"></i>
                            </button>
                            <button id="outdent" class="option-button spacing">
                            <i class="fa-solid fa-outdent"></i>
                            </button>
                            <!-- Headings -->
                            <select id="formatBlock" class="adv-option-button">
                            <option value="H1">H1</option>
                            <option value="H2">H2</option>
                            <option value="H3">H3</option>
                            <option value="H4">H4</option>
                            <option value="H5">H5</option>
                            <option value="H6">H6</option>
                            </select>
                            <div class="input-wrapper">
                            <input type="color" id="foreColor" class="adv-option-button" />
                            <label for="foreColor">Font Color</label>
                            </div>
                            </div>
                        <textarea name ='descricao' id="text-input" contenteditable="true"></textarea>
                    </div>
                </br>
            </form>
        </div>
    </div>
    <div class="continue-button" >
        <button type="submit" form="formProd"><a href="index.php">Continuar</a> </button>
    </div>
</div>
<script src="lib/js/cadastroProd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
</body>

</html>
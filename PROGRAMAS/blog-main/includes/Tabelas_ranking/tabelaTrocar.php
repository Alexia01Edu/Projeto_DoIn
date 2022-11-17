<!-- colocar o topo depois //-->
    <div class="row" style="min-height: 500px;">
        <div class="col-md-8" style="padding-top: 50px;">
            <!-- Conteúdo //-->
                <h2>Usuário</h2>
                    <?php
                        require_once 'includes/funcoes.php';
                        require_once 'core/conexao_mysql.php';
                        require_once 'core/sql.php';
                        require_once 'core/mysql.php'; 

                        foreach($_GET as $indice => $dado) {
                            $$indice = limparDados($dado);
                        }

                        $criterio = [];

                        if(!empty($busca)) {
                            $criterio[] = ['nome', 'like', "%{$busca}%"];
                        }

                        $result = buscar(
                            'usuario',
                            [
                                'usuarioID',
                                'nome',
                                'quantTrocar'
                            ],
                            $criterio,
                            'quantTrocar DESC'
                        );
                    ?>
                    <table class="table table-houver table-bordered 
                                    table-responsive{-sm|-md|-ld|-xl}">
                    
                        <thead>
                            <tr>
                                <td>Posição</td>
                                <td>Nome</td>
                                <td style="text-align: center">Quantidade de produtos Trocados</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $posicao=1;
                                foreach($result as $entidade) :
                                    //$instrucao = "SELECT * from usuario";
                                    //$conexao = conecta();
                                    //$stmt = mysqli_prepare($conexao, $instrucao);
                                    //mysqli_stmt_execute($stmt);
                                    //mysqli_stmt_store_result($stmt);
                                    //$num = mysqli_stmt_num_rows($stmt);
                                    //for($posicao=1;$posicao <= $num;$posicao++) :
                                       
                            ?>
                            <tr>
                                <td><?php echo $posicao ?></td>
                                <?php $posicao++?>
                                <td><?php echo $entidade['nome'] ?></td>
                                <td style="text-align: center"><?php echo $entidade['quantTrocar']?></td>
                            </tr>
                            <?php endforeach; ?>

                    </tbody>
                </table>
             <!-- permanece após: -->
        </div>
    </div>
<!--rodape-->
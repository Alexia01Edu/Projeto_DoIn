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
                                'quantDoar',
                                'quantTrocar',
                                '(quantDoar+quantTrocar) as total'
                            ],
                            $criterio,
                            'total DESC'
                        );
                    ?>
                    <table class="table table-houver table-bordered 
                                    table-responsive{-sm|-md|-ld|-xl}">
                    
                        <thead>
                            <tr>
                                <td>Posição</td>
                                <td>Nome</td>
                                <td style="text-align: center">Quantidade doada</td>
                                <td style="text-align: center">Quantidade trocada</td>
                                <td style="text-align: center">Quantidade total de produtos</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $posicao=1;
                                foreach($result as $entidade) :
                                       
                            ?>
                            <tr>
                                <td><?php echo $posicao ?></td>
                                <?php $posicao++?>
                                <td><?php echo $entidade['nome'] ?></td>
                                <td style="text-align: center"><?php echo $entidade['quantDoar']?></td>
                                <td style="text-align: center"><?php echo $entidade['quantTrocar']?></td>
                                <td style="text-align: center"><?php echo $entidade['total']?></td>
                            </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                <!-- permanece após: -->
        </div>
</div>
                    <!-- Rodapé //-->
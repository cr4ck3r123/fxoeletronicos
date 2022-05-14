<div class="container-fluid" style="margin-top: 1%">
    <div class="row">
        <div class="col-md-12">
            <h1 align="center"><i class="fa-brands fa-product-hunt"></i> Lista de Produtos</h1><br>
        </div>
        <div class="col-md-12" align="center">
            <form class="form-inline my-6 my-lg-0" method="post" action="">
                <input class="form-inline mr-sm-1" type="text" name="nome_pesq" id="nome_pesq" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 view_nome" type="submit">Pesquisar</button>
                <a href="" data-toggle="modal" data-target="#modal-login" style="padding-left: 10px"><button type="button" class="btn btn-info"><i class="fas fa-edit"></i> NOVO</button></a>
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">

            <table class="table table-hover">
                <thead class="thead-light" align="width">
                    <tr> 
                        <th>Codigo</th>
                        <th>Produto </th>
                        <th>Valor</th>
                        <th>Quantidade</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody align="width">
                    <?php // foreach ($paciente as $row): ?>
                    <tr>     
                        <td style="width: 3%">01<?php //echo $row['id']."<br>";      ?></td> 
                        <td style="width: 65%">  Smartphone Samsung Edge <?php //echo $row['nome']."<br>";      ?></td> 
                        <td style="width: 65%">  R$ 450,00 <?php //echo $row['nome']."<br>";      ?></td> 
                        <td style="width: 65%">  20 <?php //echo $row['nome']."<br>";      ?></td> 
                        <td style=""><a data-toggle="modal" data-target="#modal-alterar"><button type="button" class="btn btn-success view_data" id="<?php // echo $row['id'];     ?>"><i class="fas fa-edit"></i> Editar</button></a></td>
                        <td style="margin-left: 50%"><a data-toggle="modal" data-target=".bd-example-modal-lg"><button type="button" class="btn btn-info view_id" id="<?php //echo $row['id'];    ?>"><i class="fas fa-comment-alt-slash"></i> Editar</button></a></td>
                        <td style="margin-left: 50%"><a href="odontograma"><button type="button" class="btn btn-danger view_odonto" id="<?php echo $row['id']; ?>"><i class="far fa-tooth"></i> Editar</button></a></td>                    
                    </tr>                  
                    <?php //endforeach; ?>
                </tbody>

            </table>

        </div>
    </div>
</div>
<!-- Paginação -->
<div class="container" style="width: 15%">
    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="index.php?pagina=1">Primeira</a>
            </li>
            <?php
            //for($i=1;$i<=$qnt_pg;$i++){      
            //$estilo = "";
            ?>
            <li class="page-item <?php //echo $estilo="";      ?>" ><a class="page-link" href="<?php //echo "index.php?pagina=".$i;      ?>"><?php //echo $i;      ?><span class="sr-only">(atual)</span></a></li>

            <?php //}  ?>    
            <li class="page-item">
                <a class="page-link" href="index.php?pagina=<?php //echo $qnt_pg     ?>">Próximo</a>
            </li>
        </ul>
    </nav>
</div>



<!--- modal cadastro usuario -->
<div class="modal fade" id="modal-login" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastro de Produtos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <form method="post" id="form"><div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputNome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress2">Descrição</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Descrição do Produto">
                    </div>
                    
                    <div class="form-group">
                        <label>Categoria</label>
                        <select class="custom-select">
                          <option>Selecione</option>
                          <option>Eletronicos</option>
                          <option>Smartphones</option>
                          <option>Eletrodomesticos</option>
                          <option>Automotivo</option>
                          <option>Informatica</option>
                        </select>
                      </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputIdentidade">Valor</label>
                            <input type="text" class="form-control" id="txtValor" name="txtValor" placeholder="Valor">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputIdentidade">Quantidade</label>
                            <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile"></label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div align="center" class="" id="mensagem">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn-fechar" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button name="btn-cadastro" id="btn-cadastro" class="btn btn-info">Cadastrar</button>

            </div>                    
            </form>

        </div>
    </div>
</div>

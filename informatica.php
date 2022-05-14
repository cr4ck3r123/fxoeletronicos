<?php
include_once("cabecalho.php");
//if (!isset($_SESSION['nome_usuario'])) {
//    //   header('location:error.php');
//    include_once("./error.php");
//    include_once("footer.php");
//    exit();
//}
include_once("./dao-informatica.php");

//pegar a pagina atual
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 0;

//defenir itens por pagina
$itens_por_pagina = 6;

//pega a quantidade total de objetos no banco de dados
$num_total = listarInformaticaTotal();

//calcular o numero de paginas
$num_pagina = ceil($num_total/$itens_por_pagina);

//calcular o inicio da visualização
$inicio = ($itens_por_pagina*$pagina)-$itens_por_pagina;

//echo $num_pagina;


?>

<!-- Icons Ruby-->
<section class="section section-md bg-default section-top-image">
    <div class="container">
        <div class="row row-30 justify-content-center">
            <?php foreach (listarInformatica($pagina, $itens_por_pagina) as $row): ?>
                <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0s">
                    <div class="card" style="width: 20rem;">                           
                        <img class="card-img-top" src="<?php echo $row['url_foto']; ?>" alt="Card image cap">

                        <div class="card-body">
                            <form action="saiba_mais_info.php" method="GET">
                                <h5 class="card-title" name="title"><?php echo $row['nome']; ?></h5>
                                <b style="font-size: 18px;">VALOR:</b> <b style="color: red; font-size: 18px;">R$ <?php echo $row['valor']; ?> </b><br>
                                    <input type="hidden" style="display: hidden;" id="tipo" name="tipo" value="<?php echo $row['id']; ?>">                           
                                    <input  style="cursor: pointer;" class="btn btn-primary" type="submit" name="" value="Saiba Mais" />
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php 
//verificar a pagina anterior e posterior
$anterior = $pagina - 1;
$posterior = $pagina;
?>
<nav aria-label="...">
    <ul class="pagination">
         <?php if($pagina == 0){ ?>  
        <li class="page-item disabled">        
                <a class="page-link" href="?pagina=<?php echo $anterior ?>">Anterior</a>
        </li>
          <?php  }else{ ?>
        
        <li class="page-item enabled">        
                <a class="page-link" href="?pagina=<?php echo $anterior ?>" tabindex="-1">Anterior</a>
        </li>
        <?php  } ?>  
        
        
         <?php for($i=0; $i < $num_pagina + 1; $i++){?>
        <li class=" <?php if($i == $pagina){echo 'page-item active';} ?>"><a class="page-link" href="?pagina=<?php echo $i ?>"><?php echo $i ?></a></li>
         <?php } ?>         
             
<!--        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active">
            <a class="page-link" href="#">2 <span class="sr-only">(atual)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>-->
     
              <?php if($posterior == $num_pagina){ ?>  
        <li class="page-item disabled">        
                <a class="page-link" href="?pagina=<?php echo $posterior ?>">Próximo</a>
        </li>
        <?php  }else{ ?>
        
        <li class="page-item enabled">        
                <a class="page-link" href="?pagina=<?php echo $posterior+1 ?>" tabindex="+1">Próximo</a>
        </li>
        <?php  } ?> 
    </ul>
</nav>
<br>
<br>
<?php include_once("footer.php") ?>






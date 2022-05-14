<?php

include_once("cabecalho.php");
if (!isset($_SESSION['nome_usuario'])) {      
      //   header('location:error.php');
         include_once("./error.php");
         include_once("footer.php"); 
         exit();
      }  
include_once("./cadastrar-balada.php");
?>
<section class="section section-md bg-default section-top-image">
    Erro 404 - essa galeria esta em construção
    
</section>
<!-- Icons Ruby
<section class="section section-md bg-default section-top-image">
    <div class="container">
        <div class="row row-30 justify-content-center">
            <?php foreach (listarBalada() as $row): ?>
                <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0s">
                    <div class="card" style="width: 20rem;">                           
                        <img class="card-img-top" src="<?php echo $row['url_foto']; ?>" alt="Card image cap">
                   
                        <div class="card-body">
                            <form action="saiba_mais.php" method="post">
                            <h5 class="card-title" name="title"><?php echo $row['title']; ?></h5>
                            <p class="card-text"><b>LOCAL:</b> <?php echo $row['local']; ?><br>
                                <b>DATA:</b> <?php echo $row['data']; ?> <br>
                                <b>HS:</b> <?php echo $row['horas']; ?> </p>                            
                            <input type="hidden" style="display: hidden;" id="tipo" name="tipo" value="<?php echo $row['id']; ?>">                           

                            <input  style="cursor: pointer;" class="btn btn-primary" type="submit" name="saibamais" value="Saiba Mais" />
                            </form>
                           
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
-->
<?php include_once("footer.php") ?>






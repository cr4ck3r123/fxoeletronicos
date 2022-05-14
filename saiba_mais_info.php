<?php
     
include_once("cabecalho.php");
include_once("./dao-informatica.php");
$id = addslashes($_GET['tipo']);
$informatica = recuperaDadosInformatica($id);  
?>

<!-- Contact Form and Gmap-->
<section class="section section-md bg-default section-top-image">
    <div class="container">
        <div class="row row-50">
            <div class="col-lg-6">
                <img class="" src="<?php echo $informatica['url_foto']; ?>">
            
            </div>
            <div class="col-lg-6 section-map-small">
                <b style="font-size: 18px;">PRODUTO</b>
                  <h5 class="card-title"><?php echo $informatica['nome']; ?></h5>
                
                  <p class="card-text" style="font-size: 18px;"><br><br><b>DESCRIÇÃO</b><div class="card-text" style="font-size: 18px;"> <?php echo $informatica['descricao']; ?></div>
                <br>
                <br>     
                
                <b style="font-size: 18px;">ESTOQUE:</b> <b style="color: green; font-size: 18px;">Disponivel</b><br><br>
                 <b style="font-size: 18px;">VALOR:</b> <b style="color: red; font-size: 18px;">R$ <?php echo $informatica['valor']; ?> </b><br>
                 <br>
                 <input  style="cursor: pointer;" class="btn btn-primary" type="submit" name="saibamais" value="Compre já" />
            </div>
        </div>
    </div>
</section>



<?php include_once("footer.php") ?>
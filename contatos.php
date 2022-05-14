<?php include_once("cabecalho.php") ?>



 <!-- Contact Form and Gmap-->
 <section class="section section-md bg-default section-top-image">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-6 section-map-small">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14400.649230498462!2d-54.58401983022464!3d-25.53296989999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f6905014c969f5%3A0x2d3db8b2e1396730!2sCataratas%20JL%20Shopping!5e0!3m2!1spt-BR!2sbr!4v1610453837528!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              
            </div>
            <div class="col-lg-6">
              <h4 class="text-spacing-50">Contate-nós</h4>
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="enviar.php">
                <div class="row row-14 gutters-14">
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-first-name">Nome</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="telefone" type="telefoone" name="telefone" data-constraints="@Required">
                      <label class="form-label" for="contact-first-name">WhatsApp</label>
                    </div>
                  </div>  
                  <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-email">E-mail</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message">Messagem</label>
                      <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                </div>
                <button class="button button-primary button-pipaluk" type="submit">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </section>


   
      <!-- Contact information-->
      <section class="section section-md section-first bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="https://api.whatsapp.com/send?phone=+5545991174316" target="_blank">(45) 99117-4316</a></p>
                 </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="#">Av. Costa e Silva, 185 - Parque Pres. 1, Foz do Iguaçu - PR, 85863-000</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="mailto:#">fxoeletronicos@gmail.com</a></p>
                  </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <?php include_once("footer.php") ?>
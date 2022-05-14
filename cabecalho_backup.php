<?php session_start(); ?>


<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <title>FXO Eletronicos</title>
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">       
        <meta property="og:image" content="https://dc600.4shared.com/img/v29TqRedea/s23/17c2ca4a868/logo-inverse-196x42">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <meta name="description" content="Uma das melhores lojas virtuais de Eletroeletronicos, é hoje sinônimo de qualidade, solidez, garantia, conforto e bem-estar.">
        <meta name="author" content="Fernando X. de Oliveira">


        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <!-- Stylesheets-->
        <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css”>
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/style.css">
        <!--[if lt IE 10]>
        <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
        <script src="js/html5shiv.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        
    </head>
    <body>
        <audio preload="none" stop loop>
            <source src="midia/audio.mp3" type="audio/mpeg">
            <source src="midia/audio.ogg" type="audio/ogg">
            <source src="midia/audio.wav" type="audio/wav">
        </audio>
      <div class="preloader">
            <div class="preloader-body">
                <div class="cssload-container"><span></span><span></span><span></span><span></span>
                </div>
            </div>
        </div>
    
        <div class="page">
            <!-- Page Header-->
            <header class="section page-header">
                <!-- RD Navbar-->
                <div class="rd-navbar-wrap rd-navbar-modern-wrap">
                    <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="70px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                        <div class="rd-navbar-main-outer" style="background-color: #2b2a28;">
                            <div class="rd-navbar-main">
                                <!-- RD Navbar Panel-->
                                <div class="rd-navbar-panel" style="background-color: #2b2a28;">
                                    <!-- RD Navbar Toggle-->
                                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                    <!-- RD Navbar Brand-->
                                    <div class="rd-navbar-brand"><a title="Ir para a Página Inicial" class="brand" href="http://fxoeletronicos.ddns.net"><img src="images/logo-default-196x47.png" alt="" width="196" height="47"/></a></div>
                                </div>
                                <div class="rd-navbar-main-element">
                                    <div class="rd-navbar-nav-wrap">
                                        <!-- RD Navbar Search-->
                                        <div class="rd-navbar-search">
                                            <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                                            <form class="rd-search" action="#">
                                                <div class="form-wrap">
                                                    <label class="form-label" for="rd-navbar-search-form-input">Procurar...</label>
                                                    <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="search">
                                                    <button class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- RD Navbar Nav-->
                                        <ul class="rd-navbar-nav">
                                            <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Inicio</a>
                                            </li>
                                            <li class="rd-nav-item"><a class="rd-nav-link" href="sobre.php">Sobre</a>
                                            </li>
                                            <?php
                                            if (!isset($_SESSION['nome_usuario'])) {

                                                echo ' <li class="rd-nav-item"><a class="rd-nav-link" target="_blank" href="login.php">Login</a>
                                                         </li>';
                                            }
                                            ?>

                                            <li class="rd-nav-item"><a class="rd-nav-link" href="contatos.php">Contato</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                                        <div class="project-hamburger"><span class="project-hamburger-arrow-top"></span><span class="project-hamburger-arrow-center"></span><span class="project-hamburger-arrow-bottom"></span></div>
                                        <div class="project-hamburger-2"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
                                        </div>
                                        <div class="project-close"><span></span><span></span></div>
                                    </div>
                                </div>
                                <div class="rd-navbar-project rd-navbar-modern-project">

                                    <div class="rd-navbar-project-modern-header">
                                        <?php
                                        if (!isset($_SESSION['nome_usuario'])) {
                                            echo '<h4 class="rd-navbar-project-modern-title">Contate-nos</h4>';
                                        } else {
                                            echo '<div col-md-row><p><label style="font-size: 20px;">Bem Vindo ! </label><br> <i class="fas fa-cog" style="color: black;"></i> <a href="#"> Meu perfil </a> <h6 class="rd-navbar-project-modern-title"> <span class="icon fa fa-user"></span> ' . $_SESSION['nome_usuario'] . '</h6></p>
                                                   <p><span class="fas fa-sign-out-alt></span></p></div>';
                                        }
                                        ?>                                      
                                       
                                    </div>
                                    <div class="rd-navbar-project-content rd-navbar-modern-project-content">
                                        <div>
                                            <p>Siga-nos em nossas redes sociais e fique por dentro das promoções, participe
                                                para ganhar prêmios e grandes descontos!!
                                            </p>
                                           
                                            <ul class="rd-navbar-modern-contacts">
                                                <li>
                                                    <div class="unit unit-spacing-sm">
                                                        <div class="unit-left"><span class="icon fa-whatsapp"></span></div>
                                                        <div class="unit-body"><a title="Ir para o Whatssap" class="link-phone" href="https://api.whatsapp.com/send?phone=+5545991174316" target="_blank">45 99117-4316</a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="unit unit-spacing-sm">
                                                        <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                                                        <div class="unit-body"><a class="link-email" href="mailto:#">fxoeletronicos@gmail.com</a></div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="heading-6 subtitle">Siga-nos</div>
                                            <ul class="list-inline rd-navbar-modern-list-social">
                                                <li><a title="Ir para o facebook" class="icon fa fa-facebook" href="#"></a></li>
                                                <li><a title="Ir para o twitter" class="icon fa fa-twitter" href="#"></a></li>
                                                <li><a title="Ir para o google-plus" class="icon fa fa-google-plus" href="#"></a></li>
                                                <li><a title="Ir para o Instagram"class="icon fa fa-instagram" href="#"></a></li>
                                                <li><a class="icon fa fa-pinterest" href="#"></a></li>
                                            </ul>
                                            <br>
                                            <?php 
                                            
                                             if (isset($_SESSION['nome_usuario'])) {
                                            echo ' 
                                            <form class="login100-form validate-form" method="post" action="logout.php">
                                            <div class="container-login100-form-btn" style="padding-left: 30%">
                                                    <div class="wrap-login100-form-btn">
                                                        <button class="btn btn-dark" style="color: white; background-color: #2b2a28; cursor: pointer;">
                                                           Sair
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                             '; }
                                             ?>
                                           </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
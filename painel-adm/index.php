<?php
@session_start();
 if($_SESSION['nivel_usuario'] == 0){    
     header("location:../index.php");        
    }
include_once("pages/home/header.php"); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
           <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
         </div>
        -->
        <!-- Navbar -->
        <?php include_once("pages/home/navBar.php"); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container Lateral -->            
        <!-- sidebar -->
        <?php include_once("pages/home/sideBar.php"); ?>
        <!-- /.sidebar -->

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">

                </div><!-- /.container-fluid -->
            </div>
            <section class="content">
                <div class="container-fluid">
                    <?php include_once("pages/home/cards.php"); ?>
                    <div class="row">
                        <section class="col-lg-12 connectedSortable">

                            <?php
                            

                            if (isset($_GET['url'])) {
                                $explode = explode('/', $_GET['url']);
                                $file = $explode[0] . '.php';

                                if(is_file('pages/include/'.$file)){
                                    include_once 'pages/include/'.$file;
                                }else{
                                    echo 'não existe este arquivo';
                                }
                            }
                            ?>

                        </section>                       
                    </div>                    
                </div>
            </section>
        </div>


        <?php include_once("pages/home/footer.php"); ?>
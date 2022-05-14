<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light">Painel Administrativo LFA</span>
    </a>
    <!-- Sidebar menua lateral -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Administrador</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Pesquisar" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu - Lateral -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">

                <li class="nav-header">MENU</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-address-book"></i>  
                        <p>
                            CADASTROS
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="cliente" class="nav-link">
                                <i class="fa-solid fa-people-group nav-icon"></i>  
                                <p> Cliente</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="fornecedor" class="nav-link">
                                <i class="fa-solid fa-people-carry-box nav-icon"></i>
                                <p>Fornecedor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="produto" class="nav-link">
                                <i class="fa-solid fa-gift nav-icon"></i>
                                <p>Produto</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-money-bill"></i>
                        <p>
                            VENDAS
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/mailbox/mailbox.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cliente</p>
                            </a>
                        </li>              
                        <li class="nav-item">
                            <a href="url=?produto" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Produto</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-list"></i>
                        <p>
                            RELATORIOS
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/mailbox/mailbox.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cliente</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/mailbox/compose.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fornecedor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/mailbox/read-mail.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Produto</p>
                            </a>
                        </li>
                    </ul>
                </li>

        </nav>
        
        <!-- /.sidebar-menu -->
        <br><br>
        <form class="login100-form validate-form" method="post" action="../logout.php">
            <div class="container-login100-form-btn" style="padding-left: 30%">
                <div class="wrap-login100-form-btn">
                    <button class="btn btn-dark" style="color: white; background-color: #ff0000; cursor: pointer;">
                        Sair
                    </button>
                </div>
            </div>
        </form>
    </div>
</aside>
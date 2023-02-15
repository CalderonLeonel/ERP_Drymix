<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="inicio" class="brand-link">
        <img src="<?php echo base_url() ?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Sistema POS</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url() ?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block" id="usuarioLogin"><?php /*echo $_SESSION["login_usuario"]; */?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <?php /*if ($_SESSION["perfil"] == "Administrador") */{
            ?>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Usuarios
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="VUsuario" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Lista de usuarios</p>
                    </a>
                  </li>
                </ul>
              </li>

            <?php
            } ?>


            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-handshake"></i>
                <p>
                  Clientes
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="VCliente" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lista de clientes</p>
                  </a>
                </li>
              </ul>
            </li>

            <?php /*if ($_SESSION["perfil"] == "Administrador")*/ {
            ?>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-boxes"></i>
                  <p>
                    Productos
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo site_url('Products/index')?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Control de Productos</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo site_url('Products/ListProducts')?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Lista de Productos</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo site_url('Line/ListProducts')?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Lista de Lineas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo site_url('ProductType/ListProducts')?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Lista de Tipos</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo site_url('Format/ListProducts')?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Lista de Formatos</p>
                    </a>
                  </li>
                </ul>
              </li>
            <?php

            } ?>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cash-register"></i>
                <p>
                  Ventas
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="FormVenta" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Realizar venta</p>
                  </a>
                </li>

                <?php /*if ($_SESSION["perfil"] == "Administrador")*/ {
                ?>
                  <li class="nav-item">
                    <a href="VFactura" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Reporte de ventas</p>
                    </a>
                  </li>

                <?php
                } ?>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  Opciones
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="SinCatalogo" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sincronizar Catalogo</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link" onclick="registrarNuevoCUFD()">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Obtener cufd</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="salir" class="nav-link">
                <i class="fas fa-door-open nav-icon"></i>
                <p>
                  Salir
                </p>
              </a>

            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
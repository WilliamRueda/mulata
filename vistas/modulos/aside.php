<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!--logo de la mulata-->
    <a href="index3.html" class="brand-link">
        <img src="imagenes\LOGO-com.png" class="brand-image">
      <span class="imagenes\LOGO-com.png" class="brand-image">LA MULATA</span> 
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     
        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                            <a href="#" class="nav-link active" onclick="CargarContenido('vistas/panel.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Panel</p>
                            </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Gestion de Inventario
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link active" onclick="CargarContenido('vistas/Productos.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Administrar inventario</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a style="cursor: pointer;" class="nav-link active" onclick="CargarContenido('vistas/reporteInventario.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reporte de inventario</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Gestion de Empleados
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a style="cursor: pointer;" class="nav-link active" onclick="CargarContenido('vistas/admonEmpleados.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Administrar empleados</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a style="cursor: pointer;" class="nav-link active" onclick="CargarContenido('vistas/asignarTurnos.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Asignar turnos</p>
                            </a>
                        </li>

                     </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Gestion de Pedidos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a style="cursor: pointer;" class="nav-link active" onclick="CargarContenido('vistas/admonPedidos.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Administrar pedidos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a style="cursor: pointer;" class="nav-link active" onclick="CargarContenido('vistas/pedidosRealizados.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pedidos realizados</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Facturacion
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a style="cursor: pointer;" class="nav-link active" onclick="CargarContenido('vistas/admonProductos.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Administrar productos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a style="cursor: pointer;" class="nav-link active" onclick="CargarContenido('vistas/facturas.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Facturas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a style="cursor: pointer;" class="nav-link active" onclick="CargarContenido('vistas/reporteVentas.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reporte de ventas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a style="cursor: pointer;" class="nav-link active" onclick="CargarContenido('vistas/crearPromo.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Crear promo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a style="cursor: pointer;" class="nav-link active" onclick="CargarContenido('vistas/corteDia.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Corte del dia</p>
                            </a>
                        </li>
                    </ul>
                </li>
            
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
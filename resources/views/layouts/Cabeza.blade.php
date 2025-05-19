<?php 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divino Pan - Panel de Administración</title>
    <link rel="stylesheet" href="{{ asset('css/barraLateral.css') }}">
</head>
<body>
    
    <div class="menu-toggle">
        <ion-icon name="menu-outline" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" class="close-icon"></ion-icon>
    </div>

    <!-- Barra lateral -->
    <aside class="barra-lateral">
        <div class="contenido-superior">
            <div class="logo">
                <ion-icon name="cafe-outline" class="logo-icon"></ion-icon>
                <span class="nombre-app">Divino Pan</span>
            </div>
        </div>

        <!-- sector de paquetes -->
        <nav class="navegacion">
            <ul>
                <!----------------------------Cliente------------------->
                    <li class="menu-desplegable">
                    <a href="#" class="nav-link">
                    <ion-icon name="people-outline"></ion-icon>
                        <span>Administrativo</span>
                        <ion-icon class="flecha" name="chevron-down-outline"></ion-icon>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="./../Paquetes/venta__pedido.php" class="sub-menu-link"><span>Gestionar Personal</span></a></li>
                        <li><a href="./../Paquetes/venta_Seguimiento.php" class="sub-menu-link">Control de Acciones</a></li>
                    </ul>
                </li>
                <!-----------------------------inventario-->

                <!----------------------------Personal------------------->
                    <li class="menu-desplegable">
                    <a href="#" class="nav-link">
                    <ion-icon name="people-outline"></ion-icon>
                        <span>Personal</span>
                        <ion-icon class="flecha" name="chevron-down-outline"></ion-icon>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="./../Paquetes/venta__pedido.php" class="sub-menu-link">Tomar Pedido</a></li>
                        <li><a href="./../Paquetes/venta_Seguimiento.php" class="sub-menu-link">Seguimiento Pedido</a></li>
                        <li><a href="./../Paquetes/venta_Seguimiento.php" class="sub-menu-link">Agregar Cliente Codigo</a></li>
                    </ul>
                </li>
                <!-----------------------------inventario-->
                
                <!----------------------------Personal------------------->
                    <li class="menu-desplegable">
                    <a href="#" class="nav-link">
                    <ion-icon name="people-outline"></ion-icon>
                        <span>Cliente</span>
                        <ion-icon class="flecha" name="chevron-down-outline"></ion-icon>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="./../Paquetes/venta__pedido.php" class="sub-menu-link">Local</a></li>
                        <li><a href="./../Paquetes/venta_Seguimiento.php" class="sub-menu-link">Adomicilio</a></li>
                    </ul>
                </li>
                <!-----------------------------inventario-->
               
                <!----------------------------Personal------------------->
                <li class="menu-desplegable">
                    <a href="#" class="nav-link">
                    <ion-icon name="people-outline"></ion-icon>
                        <span>Reportes</span>
                        <ion-icon class="flecha" name="chevron-down-outline"></ion-icon>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="./../Paquetes/venta__pedido.php" class="sub-menu-link">Generar Reporte</a></li>
                        <li><a href="./../Paquetes/venta_Seguimiento.php" class="sub-menu-link">Facturas Pendientes</a></li>
                    </ul>
                </li>
                <!-----------------------------inventario-->

                
            </ul>
        </nav>

        <!-- Configuración y perfil -->
        <div class="contenido-inferior">
            <hr>
                <div class="interruptor">

                </div>   
            <!-- Perfil de usuario -->
            <div class="perfil-usuario">
                <!-----------------------------------------------Imagen de perfil-->
                <img src="" alt="Foto de perfil" class="avatar">
                <div class="info-usuario">
                    <div class="datos-usuario">
                       <span class="nombre-usuario">Jhonatan</span>
                       <span class="email-usuario">Jhonatan@gamil.com</span>         
                    </div>
                    <ion-icon name="ellipsis-vertical-outline" class="menu-usuario"></ion-icon>
                </div>
            </div>
            <div class="cerra">
                <a href="">cerrar session</a>
            </div>
        </div>
    </aside>```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divino Pan - Panel de Administración</title>
    <link rel="stylesheet" href="{{ asset('css/barraLateral.css') }}">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="menu-toggle">
        <ion-icon name="menu-outline" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" class="close-icon"></ion-icon>
    </div>

    <!-- Barra lateral -->
    <aside class="barra-lateral">
        <div class="contenido-superior">
            <div class="logo">
                <ion-icon name="cafe-outline" class="logo-icon"></ion-icon>
                <span class="nombre-app">Divino Pan</span>
            </div>
        </div>

        <!-- sector de paquetes -->
        <nav class="navegacion">
            <ul>
                <!----------------------------Cliente------------------->
                    <li class="menu-desplegable">
                    <a href="#" class="nav-link">
                    <ion-icon name="people-outline"></ion-icon>
                        <span>Administrativo</span>
                        <ion-icon class="flecha" name="chevron-down-outline"></ion-icon>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="./../Paquetes/venta__pedido.php" class="sub-menu-link"><span>Gestionar Personal</span></a></li>
                        <li><a href="./../Paquetes/venta_Seguimiento.php" class="sub-menu-link">Control de Acciones</a></li>
                    </ul>
                </li>
                <!-----------------------------inventario-->

                <!----------------------------Personal------------------->
                    <li class="menu-desplegable">
                    <a href="#" class="nav-link">
                    <ion-icon name="people-outline"></ion-icon>
                        <span>Personal</span>
                        <ion-icon class="flecha" name="chevron-down-outline"></ion-icon>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="./../Paquetes/venta__pedido.php" class="sub-menu-link">Tomar Pedido</a></li>
                        <li><a href="./../Paquetes/venta_Seguimiento.php" class="sub-menu-link">Seguimiento Pedido</a></li>
                        <li><a href="./../Paquetes/venta_Seguimiento.php" class="sub-menu-link">Agregar Cliente Codigo</a></li>
                    </ul>
                </li>
                <!-----------------------------inventario-->

                <!----------------------------Personal------------------->
                    <li class="menu-desplegable">
                    <a href="#" class="nav-link">
                    <ion-icon name="people-outline"></ion-icon>
                        <span>Cliente</span>
                        <ion-icon class="flecha" name="chevron-down-outline"></ion-icon>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="./../Paquetes/venta__pedido.php" class="sub-menu-link">Local</a></li>
                        <li><a href="./../Paquetes/venta_Seguimiento.php" class="sub-menu-link">Adomicilio</a></li>
                    </ul>
                </li>
                <!-----------------------------inventario-->

                <!----------------------------Personal------------------->
                <li class="menu-desplegable">
                    <a href="#" class="nav-link">
                    <ion-icon name="people-outline"></ion-icon>
                        <span>Reportes</span>
                        <ion-icon class="flecha" name="chevron-down-outline"></ion-icon>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="./../Paquetes/venta__pedido.php" class="sub-menu-link">Generar Reporte</a></li>
                        <li><a href="./../Paquetes/venta_Seguimiento.php" class="sub-menu-link">Facturas Pendientes</a></li>
                    </ul>
                </li>
                <!-----------------------------inventario-->


            </ul>
        </nav>

        <!-- Configuración y perfil -->
        <div class="contenido-inferior">
            <hr>
                <div class="interruptor">


                </div>   
            <!-- Perfil de usuario -->
            <div class="perfil-usuario">
                <!-----------------------------------------------Imagen de perfil-->
                <img src="" alt="Foto de perfil" class="avatar">
                <div class="info-usuario">
                    <div class="datos-usuario">
                       <span class="nombre-usuario">Jhonatan</span>
                       <span class="email-usuario">Jhonatan@gamil.com</span>         
                    </div>
                    <ion-icon name="ellipsis-vertical-outline" class="menu-usuario"></ion-icon>
                </div>
            </div>
            <div class="cerra">
                <a href="">cerrar session</a>
            </div>
        </div>
    </aside>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>
```
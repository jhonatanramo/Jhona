<?php 
// Aquí puedes agregar tu lógica PHP si es necesario
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divino Pan - Panel de Administración</title>
    <link rel="stylesheet" href="{{ asset('css/barraLateral.css') }}">
    <script src="https://www.paypal.com/sdk/js?client-id=TU_CLIENT_ID_AQUI&currency=USD"></script>

    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>
<body>
    <!-- Botón para menú en dispositivos móviles -->
    <div class="menu-toggle">
        <ion-icon name="menu-outline" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" class="close-icon hidden"></ion-icon>
    </div>

    <!-- Barra lateral -->
    <aside class="barra-lateral">
        <div class="contenido-superior">
            <div class="logo">
                <ion-icon name="cafe-outline" class="logo-icon"></ion-icon>
                <span class="nombre-app">Divino Pan</span>
            </div>
        </div>

        <!-- Navegación principal -->
        <nav class="navegacion">
            <ul>
                <!-- Administrativo -->
                <li class="menu-desplegable">
                    <a href="#" class="nav-link">
                        <ion-icon name="shield-half-outline"></ion-icon>
                        <span>Administrativo</span>
                        <ion-icon class="flecha" name="chevron-down-outline"></ion-icon>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="" class="sub-menu-link">Gestionar Personal</a></li>
                        <li><a href="" class="sub-menu-link">Control de Acciones</a></li>
                    </ul>
                </li>

                <!-- Personal -->
                <li class="menu-desplegable">
                    <a href="#" class="nav-link">
                        <ion-icon name="storefront-outline"></ion-icon>
                        <span>Personal</span>
                        <ion-icon class="flecha" name="chevron-down-outline"></ion-icon>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{route('personal_pedido')}}" class="sub-menu-link">Tomar Pedido</a></li>
                        <li><a href="{{route('Personal-seguimiento')}}" class="sub-menu-link">Seguimiento de Pedido</a></li>
                        <li><a href="" class="sub-menu-link">Agregar Cliente con Código</a></li>
                    </ul>
                </li>

                <!-- Cliente -->
                <li class="menu-desplegable">
                    <a href="#" class="nav-link">
                        <ion-icon name="person-outline"></ion-icon>
                        <span>Cliente</span>
                        <ion-icon class="flecha" name="chevron-down-outline"></ion-icon>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{route('cliente_local')}}" class="sub-menu-link">Local</a></li>
                        <li><a href="{{route('cliente_Adomicilio')}}" class="sub-menu-link">A domicilio</a></li>
                    </ul>
                </li>

                <!-- Reportes -->
                <li class="menu-desplegable">
                    <a href="#" class="nav-link">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                        <span>Reportes</span>
                        <ion-icon class="flecha" name="chevron-down-outline"></ion-icon>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="" class="sub-menu-link">Generar Reporte</a></li>
                        <li><a href="" class="sub-menu-link">Facturas Pendientes</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Perfil de usuario -->
        <div class="contenido-inferior">
            <hr>
            <div class="interruptor">
                <!-- Botón para modo oscuro opcional -->
            </div>
            <div class="perfil-usuario">
                <img src="" alt="Foto de perfil del usuario" class="avatar">
                <div class="info-usuario">
                    <div class="datos-usuario">
                        <span class="nombre-usuario">Jhonatan</span>
                        <span class="email-usuario">Jhonatan@gmail.com</span>         
                    </div>
                    <ion-icon name="ellipsis-vertical-outline" class="menu-usuario"></ion-icon>
                </div>
            </div>
            <div class="cerra">
                <a href="#">Cerrar sesión</a>
            </div>
        </div>
    </aside>

    @yield('contenido')

    <!-- Scripts Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Script principal -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleMenu = document.querySelector('.menu-toggle');
            const barraLateral = document.querySelector('.barra-lateral');
            const switchOscuro = document.querySelector('.interruptor');
            const circuloSwitch = document.querySelector('.circulo-interruptor');
            const logo = document.querySelector('.logo');
            const menuItems = document.querySelectorAll('.menu-desplegable');

            // Toggle menú móvil
            toggleMenu.addEventListener('click', () => {
                barraLateral.classList.toggle('max-barra-lateral');
                document.querySelector('.menu-icon').classList.toggle('hidden');
                document.querySelector('.close-icon').classList.toggle('hidden');
            });

            // Modo oscuro
            switchOscuro.addEventListener('click', () => {
                document.body.classList.toggle('oscuro');
                if (circuloSwitch) circuloSwitch.classList.toggle('active');
                localStorage.setItem('darkMode', document.body.classList.contains('oscuro'));
            });

            // Alternar tamaño barra lateral
            logo.addEventListener('click', () => {
                barraLateral.classList.toggle('mini-barra-lateral');
                const contenidoPrincipal = document.querySelector('.contenido-principal');
                if (contenidoPrincipal) {
                    contenidoPrincipal.classList.toggle('min-main');
                }
            });

            // Menús desplegables
            menuItems.forEach(item => {
                const link = item.querySelector('.nav-link');
                link.addEventListener('click', e => {
                    e.preventDefault();
                    item.classList.toggle('active');
                    menuItems.forEach(other => {
                        if (other !== item) other.classList.remove('active');
                    });
                });
            });

            // Cargar preferencia de modo oscuro
            if (localStorage.getItem('darkMode') === 'true') {
                document.body.classList.add('oscuro');
                if (circuloSwitch) circuloSwitch.classList.add('active');
            }
        });
    </script>
    <script>
        paypal.Buttons({
          createOrder: function(data, actions) {
            // Configura el monto del pago
            return actions.order.create({
              purchase_units: [{
                amount: {
                  value: '10.00' // 💵 Monto a cobrar en dólares
                }
              }]
            });
          },
          onApprove: function(data, actions) {
            // Captura el pago después de la aprobación
            return actions.order.capture().then(function(details) {
              alert('Gracias por tu compra, ' + details.payer.name.given_name + '!');
            });
          }
        }).render('#paypal-button-container');
      </script>
</body>
</html>

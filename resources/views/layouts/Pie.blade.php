</main>
<script  type = "module"  src = " https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js " > </script> 
<script  nomodule  src = " https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js " > </script>
    
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const toggleMenu = document.querySelector('.menu-toggle');
    const barraLateral = document.querySelector('.barra-lateral');
    const switchOscuro = document.querySelector('.interruptor');
    const circuloSwitch = document.querySelector('.circulo-interruptor');
    const logo = document.querySelector('.logo');
    const menuItems = document.querySelectorAll('.menu-desplegable');
    const navLinks = document.querySelectorAll('.nav-link');
    
    // Toggle menú móvil
    toggleMenu.addEventListener('click', () => {
        barraLateral.classList.toggle('max-barra-lateral');
        document.querySelector('.menu-icon').classList.toggle('hidden');
        document.querySelector('.close-icon').classList.toggle('hidden');
    });
    
    // Toggle modo oscuro
    switchOscuro.addEventListener('click', () => {
        document.body.classList.toggle('oscuro');
        circuloSwitch.classList.toggle('active');
        
        // Guardar preferencia en localStorage
        const isDarkMode = document.body.classList.contains('oscuro');
        localStorage.setItem('darkMode', isDarkMode);
    });
    
    // Toggle mini barra lateral
    logo.addEventListener('click', () => {
        barraLateral.classList.toggle('mini-barra-lateral');
        document.querySelector('.contenido-principal').classList.toggle('min-main');
    });
    
    // Menús desplegables
    menuItems.forEach(item => {
        const link = item.querySelector('.nav-link');
        const flecha = item.querySelector('.flecha');
        
        link.addEventListener('click', (e) => {
            e.preventDefault();
            item.classList.toggle('active');
            
            // Cerrar otros menús desplegables
            menuItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
        });
    });
    
    
    // Cargar preferencia de modo oscuro
    if (localStorage.getItem('darkMode') === 'true') {
        document.body.classList.add('oscuro');
        circuloSwitch.classList.add('active');
    }
    
    window.addEventListener('resize', handleHover);
    handleHover();
});
document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const usuario = document.getElementById('usuario').value;
    const contrasena = document.getElementById('contrasena').value;
    const mensajeError = document.getElementById('mensajeError');
    
    // Validación básica en el cliente
    if(usuario.trim() === '' || contrasena.trim() === '') {
      mensajeError.textContent = 'Por favor complete todos los campos';
      return;
    }
    
    // Enviar datos al servidor PHP
    fetch('http://localhost:8080/SI_CICLO1/validar_login.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: `usuario=${encodeURIComponent(usuario)}&contrasena=${encodeURIComponent(contrasena)}`
    })
    .then(response => response.json())
    .then(data => {
      if(data.exito) {
        // Redireccionar si el login es exitoso
        window.location.href = 'http://localhost:8080/SI_CICLO1/template/indexPrueba.php';
      } else {
        mensajeError.textContent = data.mensaje || 'Credenciales incorrectas';
      }
    })
    .catch(error => {
      console.error('Error:', error);
      mensajeError.textContent = 'Error al conectar con el servidor';
    });
  });
</script>
</body>
</html>
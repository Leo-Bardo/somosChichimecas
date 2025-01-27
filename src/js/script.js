document.addEventListener('DOMContentLoaded', function () {
  const menuIcon = document.querySelector('.menu-icon');
  const drawer = document.getElementById('drawer');
  const overlay = document.querySelector('.overlay');

  // Abrir y cerrar menú
  menuIcon.addEventListener('click', function () {
      drawer.classList.toggle('open');
      overlay.classList.toggle('active');
  });

  // Cerrar menú al hacer clic en el overlay
  overlay.addEventListener('click', function () {
      drawer.classList.remove('open');
      overlay.classList.remove('active');
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const logoutButton = document.querySelector('.logout-button');
  
  logoutButton.addEventListener('click', () => {
    // Confirmación opcional
    if (confirm('¿Estás seguro de que deseas cerrar sesión?')) {
      window.location.href = '/logout.php'; // Redirige a logout.php
    }
  });
});

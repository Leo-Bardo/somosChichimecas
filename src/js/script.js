document.addEventListener('DOMContentLoaded', function () {
  const menuIcon = document.querySelector('.menu-icon');
  const drawer = document.getElementById('drawer');
  const overlay = document.querySelector('.overlay');

  // Abrir y cerrar menú
  menuIcon.addEventListener('click', function () {
    drawer.classList.toggle('open');
    overlay.classList.toggle('active');
  });

  // Cerrar menú al hacer clic en el overlay (ya funciona)
  overlay.addEventListener('click', function () {
    drawer.classList.remove('open');
    overlay.classList.remove('active');
  });

  // Cerrar menú al hacer clic FUERA del drawer
  document.addEventListener('click', function (event) {
    if (drawer.classList.contains('open') && !drawer.contains(event.target) && !menuIcon.contains(event.target)) {
      drawer.classList.remove('open');
      overlay.classList.remove('active');
    }
  });
});


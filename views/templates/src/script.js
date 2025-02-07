  let index = 0;
  const slides = document.querySelectorAll('.slide');
  const totalSlides = slides.length;
  
  function changeSlide() {
    index = (index + 1) % totalSlides; // Asegura que se repita el ciclo
    const offset = -index * 100; // Mueve la imagen actual a la izquierda
    document.getElementById('slider').style.transform = `translateX(${offset}%)`;
  }

  setInterval(changeSlide, 9000); // Cambia la imagen cada 3 segundos
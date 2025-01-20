function cargarContenido(seccion) {
    // Aquí definimos las secciones y su contenido
    let contenido = '';

    switch (seccion) {
        case 'inicio':
            contenido = `
                <h1>Somos Chichimecas</h1>
                <p>Reseña sobre el pueblo Chichimeca...</p>
                <div class="background-image" style="background-image: url('chichimeca-bg.jpg'); height: 300px; background-size: cover; background-position: center;"></div>
            `;
            break;
        case 'galeria':
            contenido = `
                <h2>Galería</h2>
                <div class="carousel">
                    <div class="carousel-images">
                        <img src="image1.jpg" alt="Imagen 1">
                        <img src="image2.jpg" alt="Imagen 2">
                        <img src="image3.jpg" alt="Imagen 3">
                    </div>
                </div>
            `;
            break;
        case 'costumbres':
            contenido = `
                <h2>Costumbres</h2>
                <p>Descripción sobre las costumbres de la comunidad Chichimeca...</p>
            `;
            break;
        case 'fechas':
            contenido = `
                <h2>Fechas Importantes</h2>
                <ul>
                    <li>Fecha 1: Descripción</li>
                    <li>Fecha 2: Descripción</li>
                    <li>Fecha 3: Descripción</li>
                </ul>
            `;
            break;
        case 'aprende-uza':
            contenido = `
                <h2>Aprende Úza'</h2>
                <p>Aprende el lenguaje Chichimeca...</p>
            `;
            break;
        case 'territorio':
            contenido = `
                <h2>Territorio</h2>
                <div id="map" style="height: 400px; width: 100%;"></div>
                <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
                <script>
                    function initMap() {
                        const location = { lat: 21.318, lng: -100.365 };
                        const map = new google.maps.Map(document.getElementById("map"), {
                            zoom: 13,
                            center: location,
                        });
                        const marker = new google.maps.Marker({
                            position: location,
                            map: map,
                            title: "Misión de Chichimecas",
                        });
                    }
                </script>
            `;
            break;
        case 'organigrama':
            contenido = `
                <h2>Organigrama</h2>
                <img src="organigrama.png" alt="Organigrama">
            `;
            break;
        case 'bibliografia':
            contenido = `
                <h2>Bibliografía</h2>
                <ul>
                    <li>Libro 1: Sinopsis</li>
                    <li>Libro 2: Sinopsis</li>
                    <li>Libro 3: Sinopsis</li>
                </ul>
            `;
            break;
        case 'casa-chichimecas':
            contenido = `
                <h2>Casa de los Chichimecas</h2>
                <div class="gallery">
                    <img src="casa1.jpg" alt="Casa de los Chichimecas">
                    <img src="casa2.jpg" alt="Casa de los Chichimecas">
                </div>
                <p>Descripción del avance de la construcción.</p>
            `;
            break;
        case 'noticias':
            contenido = `
                <h2>Noticias</h2>
                <p>Lista de noticias y convocatorias.</p>
            `;
            break;
        case 'bolsa-trabajo':
            contenido = `
                <h2>Bolsa de Trabajo</h2>
                <p>Ofertas de empleo disponibles para la comunidad.</p>
            `;
            break;
        default:
            contenido = `<h2>Bienvenido a Somos Chichimecas</h2><p>Seleccione una opción del menú para obtener más información.</p>`;
    }

    // Actualizamos el contenido de la página
    document.getElementById('contenido').innerHTML = contenido;
}

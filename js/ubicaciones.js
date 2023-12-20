//información de restaurantes.
const restaurantes = [
    {
        nombre: "GreenBite Limón",
        latitud: 10.079670787892237,      
        longitud: -83.18852258113952,
        foto: "img/Ubicaciones/Limon.jpg",
        direccion: "Ruta Nacional Treciaria 803, Limón, Matina",
        telefono: "+506 2256 7832 ext. 01"
    },

    {
        nombre: "GreenBite San José",
        latitud: 9.9453109,      
        longitud: -84.0591027,
        foto: "img/Ubicaciones/SanJose.jpg",
        direccion: "San José, San José, Goicoechea, Guadalupe",
        telefono: "+506 2256 7832 ext. 02"
    },

    {
        nombre: "GreenBite Alajuela",
        latitud: 10.017155,      
        longitud: -84.216148,
        foto: "img/Ubicaciones/Alajuela.jpg",
        direccion: "Ave Tomás Guardia Alajuela",
        telefono: "+506 2256 7832 ext. 03"
    },

    {
        nombre: "GreenBite Heredia",
        latitud: 9.998070,      
        longitud: -84.118648,
        foto: "img/Ubicaciones/Heredia.jpg",
        direccion: "Heredia, Fatima",
        telefono: "+506 2256 7832 ext. 04"
    },

    {
        nombre: "GreenBite Cartago",
        latitud: 9.864424,      
        longitud: -83.917734,
        foto: "img/Ubicaciones/Cartago.jpg",
        direccion: "Avenida Central Provincia de Cartago, Cartago",
        telefono: "+506 2256 7832 ext. 05"
    },

        {
        nombre: "GreenBite Puntarenas",
        latitud: 9.9791033,      
        longitud: -84.7261737,
        foto: "img/Ubicaciones/Puntarenas.jpg",
        direccion: "Barranca, Puntarenas Province",
        telefono: "+506 2256 7832 ext. 06"
    },


];

function initMap() {
    const map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: restaurantes[0].latitud, lng: restaurantes[0].longitud },
        zoom: 10
    });

    const infowindows = [];

    restaurantes.forEach(restaurante => {
        const marker = new google.maps.Marker({
            position: { lat: restaurante.latitud, lng: restaurante.longitud },
            map: map,
            title: restaurante.nombre
        });

        const infowindow = new google.maps.InfoWindow({
            content: `
                <div>
                    <img src="${restaurante.foto}" alt="${restaurante.nombre}" style="width: 100px; height: auto;">
                    <p><strong>${restaurante.nombre}</strong></p>
                    <p>${restaurante.direccion}</p>
                    <p>Teléfono: ${restaurante.telefono}</p>
                </div>
            `
        });

        infowindows.push(infowindow);

        marker.addListener('click', function () {
            // Cerrar todos los infowindows abiertos
            infowindows.forEach(iw => iw.close());
            infowindow.open(map, marker);

            // Centrar el mapa en el marcador click
            map.setCenter(marker.getPosition());
            map.setZoom(14);  
        });
    });
}



// JSON con la información de restaurantes.
// ejemplo:
const restaurantes = [
    {
        nombre: "Restaurante 1",
        latitud: 10.079670787892237,      
        longitud: -83.18852258113952,
        foto: "img/Portada/Inicio.jpg",
        direccion: "Dirección 1",
        telefono: "123-456-7890"
    },
    // más restaurantes
];

function initMap() {
    const map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: restaurantes[0].latitud, lng: restaurantes[0].longitud },
        zoom: 10
    });

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

        marker.addListener('click', function () {
            infowindow.open(map, marker);
        });
    });
}

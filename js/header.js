document.querySelector("#frmBusqueda").onsubmit=(e)=>{
    //detener el evento submit
    e.preventDefault();
    buscarProducto(document.querySelector("#txtBuscar").value)
}


function buscarProducto(texto) {
    //crear variable de session
    sessionStorage.setItem("txtBuscar",texto)
    location.href="resultados.php"
}
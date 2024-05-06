
document.addEventListener("DOMContentLoaded", function() {
    ListarProductos();
});

function ListarProductos() {
    fetch("http://localhost:8080/APIRESTPHP/get_all_paquete.php", {
        method: "get",
    }).then(response => response.json()).then(data => {
        console.log(data); // Verificar que recibes los datos correctamente en la consola
        
        let tablaHtml = ""; // Variable para almacenar el HTML de la tabla
        
        // Iterar sobre cada elemento en los datos recibidos
        data.forEach(producto => {
            // Construir una fila de tabla para cada producto
            tablaHtml += `
                <tr>
                    <td>${producto.descripcion}</td>
                    <td>${producto.peso}</td>
                    <td>${producto.telefono}</td>
                    <td>${producto.destino}</td>
                </tr>
            `;
        });
        
        // Seleccionar el tbody por su ID y establecer su HTML con las filas de tabla construidas
        document.getElementById("Resultado").innerHTML = tablaHtml;
    }).catch(error => {
        console.error('Error al obtener los datos:', error);
    });
}

// registrar.addEventListener("click", () => {
//     fetch("registrar.php", {
//         method: "POST",
//         body: new FormData(frm)
//     }).then(response => response.text()).then(response => {
//         if (response == "ok") {
//             Swal.fire({
//                 icon: 'success',
//                 title: 'Registrado',
//                 showConfirmButton: false,
//                 timer: 1500
//             })
//             frm.reset();
//             ListarProductos();
//         }else{
//             Swal.fire({
//                 icon: 'success',
//                 title: 'Modificado',
//                 showConfirmButton: false,
//                 timer: 1500
//             })
//             registrar.value = "Registrar";
//             idp.value = "";
//             ListarProductos();
//             frm.reset();
//         }
//     })
// });
// function Eliminar(id) {
//     Swal.fire({
//         title: 'Esta seguro de eliminar?',
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#3085d6',
//         cancelButtonColor: '#d33',
//         confirmButtonText: 'Si',
//         cancelButtonText: 'NO'
//     }).then((result) => {
//         if (result.isConfirmed) {
//             fetch("eliminar.php", {
//                 method: "POST",
//                 body: id
//             }).then(response => response.text()).then(response => {
//                 if (response == "ok") {
//                    ListarProductos();
//                    Swal.fire({
//                        icon: 'success',
//                        title: 'Eliminado',
//                        showConfirmButton: false,
//                        timer: 1500
//                    })
//                 }
                
//             })
            
//         }
//     })
// }
// function Editar(id) {
//     fetch("editar.php", {
//         method: "POST",
//         body: id
//     }).then(response => response.json()).then(response => {
//         idp.value = response.id;
//         Descripcion.value = response.Descripcion;
//         peso.value = response.peso;
//         telefono.value = response.telefono;
//         destino.value = response.destino;
//         registrar.value = "Actualizar"
//     })
// }
// buscar.addEventListener("keyup", () => {
//     const valor = buscar.value;
//     if (valor == "") {
//         ListarProductos();
//     }else{
//         ListarProductos(valor);
//     }
// });

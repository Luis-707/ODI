function Eliminar_ODI(){

    //Comprobar que la interfaz se carga sin problemas.
    console.log('la inferfaz de actualizar datos cargo');

    //url base que direciona los servicios manejados por el controlador en ODI
    //const urlBase = 'http://localhost/ODI/controlador/?';

    const servicio = 'Eliminar_ODI';

    //contactena el servicio para completar la URL
    var url = urlBase+servicio;

    /* almacena en una varible en forma de cadena el metodo de respuesta que indique como se maneja 
    /* respueta del servidor o como se mostraran en las vista */
    var funcionRespuesta = 'respuestaUsuario(respuestaServidor)';

    //Se envian los datos del formulario de contrasena a la funcion para capturar datos y 
    // los almacens en la varible dataFormulario.
    var dataFormulario = capturarValoresFormulario('form_usuarios_odi');

    console.log('Datos del formulario:', dataFormulario);

    // llamada del metodo procesar
    procesar(servicio, dataFormulario, funcionRespuesta);

}

function respuestaUsuario(respuestaServidor) {
  respuesta = mapRepuesta(respuestaServidor);
  console.log(respuesta);
}

function listarODI(){
    cargarVista('vistas/lista_odi.php');
    procesar('http://localhost/ODI/controlador/?Serv_listar_ODI','listarODI(respuestaServidor)');
  }
  
  function listarODI(respuestaServidor){
    console.log(respuestaServidor);
    var data = respuestaServidor[0];
    $('#t_odi').DataTable( {
      data: data,
      columns: [
          { data: 'odi_id',title: 'CODIGO'  },
          { data: 'nombre_odi',title: 'NOMBRE DE ODI' },
          { data: 'peso',title: 'PESO' },
          { data: 'status',title: 'STATUS' }
        ]
    } );
  }

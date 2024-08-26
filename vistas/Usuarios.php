<div id="contenedo_adminUsuario">
<head>
    <title>Usuarios</title>
</head>


<body>
    <!-- Modal -->

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ingresar">
    Ingresar Usuario
</button>

    <div class="modal fade" id="ingresar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrar Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="form-ingresar">
              <div class="form-group">
                  <label for="">Nombre de Usuario: </label>
                  <input type="text" id="nombre_usuario" class="form-control">
                  <label for="">Clave: </label>
                  <input type="number" id="clave" class="form-control">
                  <label for="">Rol: </label>
                  
                 <select class="form-select" name="rol" id="rol">
                 <option value="">Seleccione una opcion</option>
                 <option value="Admin">Administrador</option>
                 <option value="Evaldr">Evaluador</option>
                 <option value="Suprv">Supervisor</option>
                
                </select>

                  <input type="hidden" id="usuario_idp">
              </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" onclick="IngresarUsuario()">Guardar</button>
        </form>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="form-editar">
              <div class="form-group">
                  <label for="">Nombre de Usuario: </label>
                  <input type="text" id="nombre_usuario" class="form-control">
                  <label for="">Clave: </label>
                  <input type="number" id="clave" class="form-control">
                  <label for="">Rol: </label>
                 <select class="form-select" name="rol" id="rol">
                 <option value="">Seleccione una opcion</option>
                 <option value="Admin">Administrador</option>
                 <option value="Evaldr">Evaluador</option>
                 <option value="Suprv">Supervisor</option>


                 </select>
                  <input type="hidden" id="usuario_idp">
              </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" onclick="ActualizarUsuario()">Guardar</button>
        </form>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="form-eliminar">
              <div class="form-group">
                  <label for="">Usuario: </label>
                  <label id="usuario_eliminar"></label>
                  <input type="hidden" id="usuario_idp">
              </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" onclick="EliminarUsuario()">Guardar</button>
        </form>
        </div>
      </div>
    </div>
  </div>



    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Registro de Usuarios</h1>
              <p class="lead"></p>
            </div>
        </div>
        <table id="t_usuarios"class="display table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre de Usuario</th>
                    <th>Clave</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
  
    
</body>

</div>
</html>
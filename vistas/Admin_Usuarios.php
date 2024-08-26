<div id="contenedo_adminUsuario">
  <header>
    <h1>Administracion de usuario</h1>
  </header>
  <main>
    <div class="page-wrapper">
        <div class="container">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
    Ingresar Usuario
</button>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Actualizar Usuario
</button>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
    Eliminar Usuario
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingresar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="form_usuarios" name="form_usuarios">

<div class="mb-3 row">
    <div class="col-4">
        <input type="number" class="form-control" name="usuario_idp" id="usuario_idp" placeholder="Ingresa el id" onkeydown="return numeros(event);">
    </div>
</div>
<div class="mb-3 row">
    <div class="col-4">
        <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" placeholder="Nombre de usuario" onkeydown="return Letras(event);" pattern="[A-Za-z]+">
    </div>
</div>
<div class="mb-3 row">
    <div class="col-4">
        <input type="password" class="form-control" name="clave" id="clave" placeholder="Contrasena" onkeydown="return numeros(event);">
    </div>
</div>
<div class="mb-3 row">
    <div class="col-4">
        <select class="form-select" name="rol" id="rol">
            <option value="">Elige una rol:</option>
            <option value="Administrador">Administrador</option>
            <option value="Evaluador">Evaluador</option>
            <option value="Supervisor">Supervisor<option>
            <option value="Evaluado">Evaluado</option>
        </select>
    </div>
</div>

<div class="modal-footer">
<div class="mb-3 row">
    <div class="col-sm-8">
        <button type="button" class="btn btn-primary" onclick="IngresarUsuario()">Enviar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
</div>
</div>

</form>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="form_usuarios_actualizar" name="form_usuarios_actualizar">

<div class="mb-3 row">
    <div class="col-4">
        <input type="number" class="form-control" name="usuario_idp" id="usuario_idp" placeholder="Ingresa el id" onkeydown="return numeros(event);">
    </div>
</div>
<div class="mb-3 row">
    <div class="col-4">
        <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario2" placeholder="Nombre de usuario" onkeydown="return Letras(event);">
    </div>
</div>
<div class="mb-3 row">
    <div class="col-4">
        <input type="password" class="form-control" name="clave" id="clave" placeholder="Contrasena" onkeydown="return numeros(event);">
    </div>
</div>
<div class="mb-3 row">
    <div class="col-4">
        <select class="form-select" name="rol" id="rol">
            <option value="">Elige una rol:</option>
            <option value="Administrador">Administrador</option>
            <option value="Evaluador">Evaluador</option>
            <option value="Supervisor">Supervisor<option>
            <option value="Evaluado">Evaluado</option>
        </select>
    </div>
</div>

<div class="modal-footer">
<div class="mb-3 row">
    <div class="col-sm-8">
        <button type="button" class="btn btn-primary" onclick="ActualizarUsuario()">Enviar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
</div>
</div>

</form>

      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="form_usuarios_eliminar" name="form_usuarios_eliminar">
        <input type="number" class="form-control" name="usuario_idp" placeholder="Ingresa el id" onkeydown="return numeros(event);">
        <div class="modal-footer">
        <div class="mb-3 row">
            <div class="col-sm-8">
                <button type="button" class="btn btn-primary" onclick="EliminarUsuario()">Enviar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
      </form>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>



        

</div>

           
  </main>
    
</div>


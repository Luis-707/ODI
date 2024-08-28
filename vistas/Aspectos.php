<div id="crud_ASP">
    <title>Factores</title>
</head>
<body>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cargar"><i class="fa fa-plus"></i></button>
    <!-- Modal -->
<div class="modal fade" id="cargar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cargar Factor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="form-cargar_asp">
              <div class="form-group">

                  <label for="">Nombre de Aspecto: </label>
                  <input type="text" id="nombre_aspecto" class="form-control">
                  <label for="">Puntuacion: </label>
                  <input type="number" id="porcentaje" class="form-control">
                  <label for="">Status: </label>
                  <select class="form-select" name="status" id="status">
                 <option value="">Seleccione una opcion</option>
                 <option value="Activo">Activo</option>
                 <option value="Inactivo">Inactivo</option>
                
                </select>
                  <input type="hidden" id="aspecto_id">
              </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" onclick="IngresarAspecto()">Guardar</button>
        </form>
        </div>
      </div>
    </div>
  </div>


 


    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">ODI</h1>
              <p class="lead"></p>
            </div>
        </div>
        <table id="t_aspecto"class="display table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Factor asignado</th>
                    <th>Codigo</th>
                    <th>Nombre de asignado</th>
                    <th>Puntuacion</th>
                    <th>Status</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
   
   

</body>



</html>

</div>
<div id="crud_FAC">
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
          <form id="form-cargar_fac">
              <div class="form-group">

              <select class="form-select" name="Cargo" id="Cargo">
                 <option value="">Seleccione una opcion</option>
                 <option value="Administrativo">Administrativo</option>
                 <option value="Obrero">Obrero</option>
                
                </select>

                  <label for="">Nombre de Factor: </label>
                  <input type="text" id="nombre_factor" class="form-control">
                  <label for="">Puntuacion: </label>
                  <input type="number" id="puntuacion" class="form-control">
                  <label for="">Status: </label>
                  <select class="form-select" name="Cargo" id="Cargo">
                 <option value="">Seleccione una opcion</option>
                 <option value="Activo">Activo</option>
                 <option value="Inactivo">Inactivo</option>
                
                </select>
                  <input type="hidden" id="Factor_id">
              </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" onclick="IngresarFactor()">Guardar</button>
        </form>
        </div>
      </div>
    </div>
  </div>


 


    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Factores</h1>
              <p class="lead"></p>
            </div>
        </div>
        <table id="t_factor"class="display table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cargo</th>
                    <th>Nombre de Factor</th>
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
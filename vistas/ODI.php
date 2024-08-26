<div id="crud_odi">
    <title>ODI</title>
</head>
<body>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cargar"><i class="fa fa-plus"></i></button>
    <!-- Modal -->
<div class="modal fade" id="cargar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cargar ODI</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="form-cargar_odi">
              <div class="form-group">
                  <label for="">Nombre de ODI: </label>
                  <input type="text" id="nombre_odi" class="form-control">
                  <label for="">Peso: </label>
                  <input type="number" id="peso" class="form-control">
                  <label for="">Status: </label>
                  <input type="number" id="status" class="form-control">
                  <input type="hidden" id="odi_id">
              </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" onclick="IngresarODI()">Guardar</button>
        </form>
        </div>
      </div>
    </div>
  </div>


 


    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">ODI</h1>
              <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            </div>
        </div>
        <table id="t_odi"class="display table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre de ODI</th>
                    <th>Peso</th>
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
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    


</head>
    <title>Registro de Empleados</title>

    
<body>

<h1>Registro de Personas</h1>

<form action="">
<div class="container-fluid h-100 bg-light text-dark">
        <div class="row justify-content-center align-items-center">


        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">

              <div class="form-group">
                    <input type="search" class="form-control" name="Cedula" placeholder="Buscar Cedula" required>
                </div>

                <div class="form-group">
                    <select class="form-control" name="T_Persona" id="T_Persona">

                         <option value="0">Seleccione una opcion</option>
                        
           
                       </select>
                     
         



        <table id="tableHorizontalWrapper" class="table table-striped table-bordered table-sm text-center" cellspacing="0"width="100%">
                <thead>
                    <tr>
                        <th>Cedula</th>
                        <th>Nombre y Apellido</th>
                        <th>Genero</th>
                        <th>Dependencia</th>
                        <th>Direccion</th>
                    </tr>
                </thead>
            </table>

            <div class="form-group">
                <div class="container">
                  <div class="row">
                    <div class="col"><button type="button" name="Cargar" class="col-6 btn btn-primary btn-sm float-left">Cargar</button></div>
                   
                    </div>
                     </div>
                      </div>
                       </div>
                       </div>
                        </div>
                         </div>
                          </div>

                   </form>
</body>



</html>
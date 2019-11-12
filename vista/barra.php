<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Reservar</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-light">Inicio </div>
      <div class="list-group list-group-flush ">
        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Reservacion</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Habitaciones</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Servicios</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Agenda</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <div class="container-fluid" >
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Reservar</h1>
            </div>
            <div class="form-group" id="user-group">
              <p>Telefono</p>
              <input type="text" class="form-control" placeholder="Numero Telefonico" name="phone"/>
            </div>
            <div class="form-group" id="user-group">
              <p>E-Mail</p>
              <input type="text" class="form-control" placeholder="example@mai.com" name="mail"/>
            </div>
            <div class="form-group" id="user-group">
              <p>Tipo de Vehiculo y Placas</p>
              <input type="text" class="form-control" placeholder="Vehiculo" name="car"/>
              <input type="text" class="form-control" placeholder="Placa" name="placa"/>
            </div>
            <div class="form-group" id="pass-group">
               <input type="text" class="form-control" placeholder="Contraseña" name="password"/>
            </div>
            <button type="submit" class="btn btn-info"><i class="fas fa-sign-in-alt"></i>  Ingresar</button>
        </form>
      </div>
    </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->


  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
</body>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>

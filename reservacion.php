<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Introduccion</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href="css/pagina2.min.css" rel="stylesheet">

</head>

<body>

  <!-- Aqui se modifica el Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">Introduccion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Acerca de Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.html">Materiales y Elaboracion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/7.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Reservar</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Aqui se controla la informacion que se muestra en la pagina -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <form class="col-12">
            <div class="form-group" id="user-group">
              <p>Nombre del huesped
              <input type="text" class="form-control" placeholder="Nombre del visitante" name="visitor"/>
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
            <button type="submit" class="btn btn-info"><i class="fas fa-sign-in-alt"></i><a href="bienvenido.php">  Ingresar</a></button>
        </form>
      </div>
    </div>
  </div>

  <hr>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>

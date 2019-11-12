<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <div class="modal-dialog text-center">
      <div class="col-sm-8 main-section">
        <div class="modal-content">
          <div class="col-12 user-img">
            <img src="Img/avatar.png"/>
          </div>
          <form action="controlador/validar.php" method="post" class="col-12">
              <div class="form-group" id="user-group">
                <input type="text" class="form-control" placeholder="Nombre de usuario" name="username"/>
              </div>
              <div class="form-group" id="password-group">
                 <input type="password" class="form-control" placeholder="Contraseña" name="password"/>
              </div>
              <button type="submit" class="btn btn-info"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

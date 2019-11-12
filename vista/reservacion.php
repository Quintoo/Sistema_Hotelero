<?php include "barra.php" ?>
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

<?php
require("conexion_db.php");
if($_POST){
  if ($_POST['password']==$_POST['password2']) {
    $user=$_POST['user'];
    //password
    $rol=$_POST['rol'];
    $nom=$_POST['nombre'];
    $ape1=$_POST['apellido1'];
    $ape2=$_POST['apellido2'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    mysqli_query($mysqli,"INSERT INTO usuarios VALUES('','$user','$password','$rol','$nom','$ape1','$ape2')");
    echo "<center><div class='alert alert-success'>Registro completado</div></center>";
  }
  else {
    echo "<center><div class='alert alert-success'>Las contraseñas no coinciden</div></center>";
  }
}
?>

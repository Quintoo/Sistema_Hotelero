<?php
session_start();
	require("conexion_db.php");
	$user=$_POST['username'];
	$pass=$_POST['password'];
  	$sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE nombre_usuario='$user'");
  	if($f=mysqli_fetch_assoc($sql)){
  		if($pass==$f['contrasena_usuario']){
				$_SESSION['username']=$f['nombre_usuario'];
  			$_SESSION['rol']=$f['rol'];
  			header("Location: ../vista/panel.php");
  		}
			else{
  			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
  			echo "<script>location.href='../index.php'</script>";
  		}
  	}
		else{
		echo '<script>alert("ESTE USUARIO NO EXISTE")</script> ';
		echo "<script>location.href='../index.php'</script>";
	}
?>

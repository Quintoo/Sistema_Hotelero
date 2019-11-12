<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="POST" action="agregar_usuario.php">
      <table>
        <tr>
          <td><label for="user">Nombre de usuario</label></td>
          <td><label for="password">Contraseña</label></td>
          <td><label for="password">Confirmar Contraseña</label></td>
          <td><label for="age">Rol:</label></td>
        </tr>
        <tr>
          <td><input type="text" name="user"></td>
          <td><input type="password" name="password"></td>
          <td><input type="password" name="password"></td>
        <td><select name='rol'>
            <option value='0'>Alumno</option>
            </select>
       </td>
  </body>
</html>

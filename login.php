<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/Estilos.css">
  <link rel="stylesheet" href="css/login.css">
  <title>Iniciar sesion</title>
</head>
<body>
<ul class="menu">
      <a href="#" class="logo"></a>
      <IMG SRC="img/logo.png" class="logo">
      <li><a href="inicio.html">Inicio</a></li>
			<li><a href="#">Acerca De</a></li>
			<li><a href="#">Contacto</a></li>
			<li><a href="#">Ubicacion</a></li>
			<li><a href="#">Servicios</a></li>
			<li><a href="registrase.php">Registrase</a></li>
</ul>
  <form action="POST1.php" method="POST"
  enctype="multiprat/data">
  <section class="formulario">
    <h><center>CAMS<center><h>
    <h4><h4>
    <hr>
    <br><label>Correo</label>
    <input class="controls" type="text" name="codigo"
    placeholder="Codigo de paciente">
    <label>Contraseña</label>
    <input class="controls" type="password" name="pass"
    placeholder="Ingrese su Contraseña">
    <input type="checkbox" name="condiciones" checked="checked" 
    <p>&nbsp; Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p> 
    <input class="botons" type="submit" value="Iniciar sesion">
    <p><a href="#">Olvide mi contraseña</a></p>
  </section>
</form>
</body>
</html>
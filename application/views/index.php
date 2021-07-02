<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in success</title>
</head>
<body style="background-color: #8CBD3A">
<nav class="navbar navbar-expand-sm navbar-light" >
  <a class="navbar-brand" href=""><img src="<?php echo base_url('img/icono_usuario.png'); ?>" width="50" height="50" class="d-inline-block align-top" alt="se supone que aquí estaba bien"></a>
  <h3>Programación WEB</h3>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto" >
      <li><a class="nav-link " > Bienvenido: <?php echo session_name(); ?> </a></li>
      <li class="nav-item">
        <a class="nav-link " href="<?php echo site_url("Login/logout")?>">Cerrar Sesion</a>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>
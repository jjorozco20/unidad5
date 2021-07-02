<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>U5 Cloud Computing</title>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center mt-5">

        <div class="col-4 text-center">
          <h2 class="text-center">Log in</h2>
          <img class="text-center" src="<?php echo base_url('img/icono_usuario.png'); ?>">
          
          <form action="<?php echo site_url('login/validate');?>" method="POST">
              <input type="email" name="email" class="form-control mt-4 mb-4" placeholder="Correo electrónico">
              <input type="password" name="contrasena" class="form-control mb-4" placeholder="Contraseña">
              <?php 
                  if (isset($msg)){
                     echo "<p class='mb-3'>".$msg."</p>";     
                  }
              ?>              
              <input type="submit">            
          </form>

        </div>

      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <script src="<?php echo base_url('js/jquery-3.6.0.min.js'); ?>"></script>

  </body>
</html>
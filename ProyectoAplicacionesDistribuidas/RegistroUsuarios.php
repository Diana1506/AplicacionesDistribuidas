<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Etiquetas meta siempre van primero -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Registro de Usuarios</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Estilos CSS personalizados -->
    <link rel="stylesheet" href="css/estilos_cli.css">

  </head>
  <body>
     <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Menú</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
             <li class="nav-item">
                <a class="nav-link" href="index.php">Página Principal</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Registrarse <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="IniciarSesion.php">Iniciar Sesión</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Proveedores.php">Trabaja con Nosotros</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
           <!-- <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>-->
            </form>
        </div>
    </nav>
    <section id="cover">
        <div id="cover-texto">
            <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="display-3">Registrate</h1>
                    <p>No importa el día ni la hora, siempre tenemos socios FixIt listos para atenderte!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="empresa">
         <div class="contenido-seccion">
             <div class="container">
                 <div class="row">
                     <div class="">
                         <div class="card-group">
                             <div class="cardita">
                                 <div class="card-block">
                                     <h4 class="card-title">REGISTRATE</h4>
                                     <h6 class="card-subtitle">Garantizamos la privacidad y seguridad total de tus datos</h6>
                                 </div>

    <form action="php/Registro.php" method="post">
      <div class="form-group">
        <span class="label label-default">¿Cuál es tu nombre?</span>
        <input type="text" name="nombre" class="form-control form-control-lg" placeholder="Nombre">
        <span class="label label-default">Tu Apellido Paterno</span>
        <input type="text" name="apellidoP" class="form-control form-control-lg" placeholder="Apellido Paterno">
        <span class="label label-default">Tu Apellido Materno</span>
        <input type="text" name="apellidoM" class="form-control form-control-lg" placeholder="Apellido Materno">
        <span class="label label-default">Tu Email</span>
        <label class="sr-only">Email</label>
        <input type="email" name="email" class="form-control form-control-lg" placeholder="Tu Correo">
        <span class="label label-default">Tu Teléfono</span>
        <label class="sr-only">Teléfono</label>
        <input type="text" name="telefono" maxlength="10" class="form-control form-control-lg" placeholder="Telefono">
        <div class="input-group mb-3">
         <span class="label label-default">Tu delegación</span>
          <select name="delegacion" class="custom-select" id="seleccionarDelegacion">
            <option selected>Selecciona tu Delegación</option>
            <?php
              $con = include "php/Conexion.php";
              $query = "SELECT * FROM Delegacion ORDER BY Delegacion";
              $resu = mysqli_query($conn, $query);
              if(mysqli_num_rows($resu) > 0){
                while($row = mysqli_fetch_assoc($resu)){
                  echo "<option value='".$row["IdDelegacion"]."'>".$row["Delegacion"]."</option>";
                    
                }
              }
              mysqli_close($conn);
            ?>
          </select>

          <span class="label label-default">Tu Calle</span>
          <label class="sr-only">Calle</label>
          <input type="text" name="calle" class="form-control form-control-lg" placeholder="Telefono">

          <span class="label label-default">Tu Código Postal</span>
          <label class="sr-only">CP</label>
          <input type="text" name="cp" maxlength="5" class="form-control form-control-lg" placeholder="Telefono">
    </div>
    </div>
     <div class="card-group">
        <div class="cardita">
            <div class="card-block">
                <h4 class="card-title">Vincula una tarjeta de Crédito a tu cuenta</h4>
                <h6 class="card-subtitle">Garantizamos la privacidad y seguridad total de tus datos</h6>
                <br>
                 <div class="form-group">
                    <label class="sr-only">Tarjeta de Credito</label>
                    <input type="text" maxlength="16" name="tarjeta" class="form-control form-control-lg" placeholder="AAAA-AAAA-AAAA-AAAA">
                    <label class="sr-only">CVC</label>
                    <input type="text" maxlength="3" name="cvc" class="form-control form-control-lg" placeholder="CVC">

                    <label class="sr-only">Mes</label>
                    <input type="number" min="1" max="12" maxlength="2" name="mes" class="form-control form-control-lg" placeholder="Mes">

                    <label class="sr-only">Año</label>
                    <input type="number" min="2019" max="2030" maxlength="4" name="anio" class="form-control form-control-lg" placeholder="Año">
                  </div>
                  <div class="form-group">
                    <span class="label label-default">Elije un nombre de Usuario</span>
                    <input type="text" name="usuario" class="form-control form-control-lg" placeholder="Nombre Usuarios">
                    <span class="label label-default">Contraseña</span>
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Contraseña">
                  </div>
            </div>
         </div>
    </form>
        <input type="submit" class="btn btn-primary" data-toggle="modal" href="RegistroUsuariosCuenta.php">Registrarse</button>
</section>

    <footer id="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <p>FIX IT! CORP</p>
                     <a href="#">Fix it Corporation MX</a>
                </div>
                <div class="col-sm-3">
                    <ul class="list-unstyled">
                       <p>¡Siguenos en todas nuestras redes sociales!</p>
                        <li><a href="">Facebook</a></li>
                        <li><a href="">Twitter</a></li>
                        <li><a href="">Youtube</a></li>
                        <li><a href="">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

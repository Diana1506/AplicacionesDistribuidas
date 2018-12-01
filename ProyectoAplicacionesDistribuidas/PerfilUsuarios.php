<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Etiquetas meta siempre van primero -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mi Perfil</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Estilos CSS personalizados -->
    <link rel="stylesheet" href="css/estilos_perfilU.css">  
  </head>
  <body>
     <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Menú</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Mi Perfil<span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="CuentaUsuario.php">Cuenta</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="index.php">Cerrar Sesión</a>
            </li>
</nav>
     <section id="cover">
        <div id="cover-texto">
            <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div>
                        <img src="img/user.png" class="rounded" width ="120px" height="120px" alt="Usuario">
                        <h5>Usuario</h5>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section> 
<section id="InformacionGeneral">
        <div class="tituloInfo" id="tituloInfo">
            <h3>Busca Servicios</h3>
            <p>Puedes buscar servicios que esten cerca de tí</p>
        </div>
<div class="cardi">
                <a href="BusquedaUsuarios.php">Buscar Ahora</a>
</div>
     <div class="tituloInfo" id="tituloInfo">
            <h3>Información Pública</h3>
            <p>La información de tu perfil público es vista por cualquier usuario de la plataforma</p>
    </div>
     <div class="cardi">
<nav class="navbar bg-light">
  <!-- Links -->
  <ul class="navbar-nav">
     <li class="nav-item">
     <span>Nickname</span>
         <p>User_1</p>
     <span>Correo Electrónico</span>
     <p>user1@null.com</p>
    <span>Delegación</span>
    <p>Magdalena Contreras</p>
    <li class="nav-item">
      <a class="nav-link" href="CuentaUsuario.php">Administra la información que compartes</a>
    </li>
  </ul>
</nav>
</div>
<section id="empresa">
  <div class="tituloInfo" id="tituloInfo">
            <h3>Información Privada</h3>
            <span>Administra la información que quieres que otros vean de tí</span>
    </div>
  <div class="cardi">
    <span>Nickname</span>
     <p>User_1</p>
     <span>Correo Electrónico</span>
     <p>user1@null.com</p>
    <span>Delegación</span>
    <p>Magdalena Contreras</p>
    <span>Saldo de tu cuenta</span>
    <p>MXN 1000</p>
    </div>
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













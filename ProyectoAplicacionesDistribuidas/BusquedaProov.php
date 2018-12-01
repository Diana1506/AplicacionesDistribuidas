<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Etiquetas meta siempre van primero -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FIX IT!-Página Principal</title>
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
                <a class="nav-link" href="RegistroUsuarios.php">Cuenta</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="index.php">Cerrar Sesión</a>
            </li>
            <form class="form-inline my-2 my-lg-0">
           <input class="form-control mr-sm-2" width="40px" type="text" placeholder="Busca servicios, proveedores etc...">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
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
            <h3>Informacion de tu perfil</h3>
    </div>
     <div class="cardi">
             <div class="card-block">
                <h4 class="card-title">Tu Información</h4>
                <h6 class="card-subtitle">Esta información solo la ves tú</h6>
             </div>
<nav class="navbar bg-light">
  <!-- Links -->
  <ul class="navbar-nav">
     <li class="nav-item">
    <p>Delegación:</p>
    <p><?php echo "GAM"; ?></p>
    <p>Saldo MXN</p>
    <p>$valorSaldo</p>
    <li class="nav-item">
      <a class="nav-link" href="#">Cambiar mi perfil</a>
    </li>
  </ul>
</nav>
        <div class="card-block">
            <p class="card-text">Tu perfil privado, la información que se muestra aquí es vista únicamente por tí</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Saber Más</button>
        </div>
    </div>
<section id="empresa">
  <div class="tituloInfo" id="tituloInfo">
            <h3>Necesito Ayuda!!</h3>
    </div>
  <div class="cardi">
    <div class="card-block">
        <h4 class="card-title">Busca Servicios</h4>
        <h6 class="card-subtitle">Puedes definir la urgencia del problema</h6>
         <input style="padding-left: 10px" type="checkbox" class="form-check-input" value="2">Urgente
    </div>
    <div class="card-block">
        <p class="card-text">Al definir una urgencia en tu solicitud nos ayudas a atenderte mejor</p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Saber Más</button>
    </div>
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













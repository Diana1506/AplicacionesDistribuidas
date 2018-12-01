<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Etiquetas meta siempre van primero -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Modificar Mi Cuenta</title>
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
             <li class="nav-item">
                <a class="nav-link" href="PerfilUsuarios.php">Mi Perfil</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="CuentaUsuario.php">Cuenta<span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="index.php">Cerrar Sesión</a>
            </li>
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
                <h6 class="card-subtitle">Aquí puedes cambiar cualquier información de tu cuenta</h6>
             </div>
              <nav class="navbar bg-light">
  <!-- Links -->
  <ul class="navbar-nav">
     <li class="nav-item">
    <span>Saldo de tu cuenta</span>
    <p>$valorSaldo</p>
      <li class="nav-item">
      <a class="nav-link" href="CuentaUsuario.php">Agregar Saldo a mi cuenta</a>
    </li>
    <span>Tu Nickname</span>
    <p>@Nickname</p>
     <input type="text"  method = "post" class="form-control form-control-lg" placeholder="Tu Nickname">
    <span>Telefono</span>
    <p>########</p>
     <input type="text"  method = "post" class="form-control form-control-lg" placeholder="Telefono">
    <span>Dirección de Correo Electronico</span>
    <p>usuario@null.com</p>
     <input type="email"  method = "post" class="form-control form-control-lg" placeholder="Email">
         <p>Delegación:</p>
         <p>Magdalena Contreras</p>
     <div class="input-group mb-3">
          <select class="custom-select" id="seleccionarDelegacion">
            <option selected>Selecciona tu Delegación</option>
            <option value="1">Alvaro Obregón</option>
            <option value="2">Azcapotzalco</option>
            <option value="3">Benito Juárez</option>
            <option value="4">Coyoacán</option>
            <option value="5">Cuajimalpa</option>
            <option value="6">Iztacalco</option>
            <option value="7">Gustavo A. Madero</option>
            <option value="8">Magdalena Contreras</option>
            <option value="9">Miguel Hidalgo</option>
            <option value="10">Milpa Alta</option>
            <option value="11">Tláhuac</option>
            <option value="12">Tlalpan</option>
            <option value="13">Venustiano Carranza</option>
            <option value="14">Xochimilco</option>      
          </select>
    </div>
  </ul>
</nav>
       <div class="card-block">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Guardar Cambios</button>
        </div>
        <div class="tituloInfo" id="tituloInfo">
            <h3>Información Básica</h3>
    </div>
      <form action="" method="post">
          <span>Nombre:</span>
             <input type="text"  method = "post" class="form-control form-control-lg" placeholder="Tu Nombre Real">
            <span>Apellido Paterno:</span>
            <input type="text"  method = "post" class="form-control form-control-lg" placeholder="Apellido Paterno">
            <span>Apellido Materno:</span>
            <input type="text"  method = "post" class="form-control form-control-lg" placeholder="Apellido Materno">
            <span>Modificar Contraseña</span>
            <input type="password"  method = "post" class="form-control form-control-lg" placeholder="Modifica tu contraseña">
      </form>
        <div class="card-block">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Guardar Cambios</button>
        </div>
    </div>
    <div class="tituloInfo" id="tituloInfo">
        <h3>Privacidad</h3>
    </div>
         <div class="cardi">
             <div class="card-block">
             <ul>
        <li>
            <span>Nombre</span>
            <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="0">Publico
        </li>
        <li>
            <span>Apellido Paterno</span>
            <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="0">Publico
        </li>
        <li>
            <span>Apellido Materno</span>
            <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="0">Publico
        </li>
        <li>
            <span>Nickname</span>
            <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="0">Publico
        </li>
        <li>
            <span>Email</span> 
            <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="0">Publico
        </li>
        <li>
           <span>Teléfono</span>
            <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="0">Publico 
        </li>
       <li>
           <span>Delegación</span>
            <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="0">Publico
       </li>
             </ul>
             <div class="card-block">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Guardar Cambios</button>
        </div>
             </div>
    </div>
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













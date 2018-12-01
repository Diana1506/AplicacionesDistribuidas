<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Etiquetas meta siempre van primero -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Resultados de la búsqueda</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Estilos CSS personalizados -->
    <link rel="stylesheet" href="css/estilos_Result.css">  
    
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
                <a class="nav-link" href="PerfilUsuarios.php">Mi Perfil<span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="CuentaUsuario.php">Cuenta</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="index.php">Cerrar Sesión</a>
            </li>
            <form class="form-inline my-2 my-lg-0" action="" method="post">
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
    <div class="wrap">
		  <div class="tituloInfo" id="tituloInfo">
            <h3>Busca un Servicio</h3>
            <div class="cardi">
    <nav class="navbar bg-light">
 
               <p>¿Qué tipo de servicio buscas?</p>    
                <li style="list-style:none">
                     <select class="custom-select" id="tipo_Servicio" name="tipo_Servicio">
                     <option selected>Selecciona un tipo</option>
                 <?php
                        $con = include "php/Conexion.php";
                        $query = "SELECT * FROM especialidades";
                        $resu = mysqli_query($con, $query);
                         if(mysqli_num_rows($resu) > 0){
                        while($row = mysqli_fetch_assoc($resu)){
                        echo "<option value='".$row["IdEspecialidad"]."'>".$row["Nombre"]."</option>";
                        }
                    }
                    mysqli_close($con);
                ?>
                    </select>
                </li>
                  <p>Delegación</p>
                <select name="selecc_delegacion" class="custom-select" id="seleccionarDelegacion">
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
           <button id="buscarS" class="btn btn-success my-2 my-sm-0" type="submit">Buscar Ahora</button> 
           <!--Llamando al script js-->
           <script type="text/jscript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/busqueda.js"></script>
    </nav>
    </div>
    </div>
</div>
</section>
    <section id="resultados">
        <div class="store-wrapper">
	    <section class="products-list">
		<div class="product-item" category="plomeros" id="contenedorR">
			
	</div>
	</div>
           </section>
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













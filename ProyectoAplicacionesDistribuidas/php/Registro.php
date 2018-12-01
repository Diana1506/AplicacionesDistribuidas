<?php
  $con = include "Conexion.php";

  $nombre = $_POST["nombre"];
  $apellidoP = $_POST["apellidoP"];
  $apellidoM = $_POST["apellidoM"];
  $correo = $_POST["email"];
  $telefono = $_POST["telefono"];
  $delegacion = $_POST["delegacion"];
  $calle = $_POST["calle"];
  $cp = $_POST["cp"];
  $tarjeta = $_POST["tarjeta"];
  $cvc = $_POST["cvc"];
  $año = $_POST["anio"];
  $mes = $_POST["mes"];
  $fecha = $año . "-" . $mes . "-01";
  $usuario = $_POST["usuario"];
  $password = $_POST["password"];

  $query = "INSERT INTO Cuentas VALUES (NULL, '$usuario', '$password')";
  Insert_Query($con,$query);

  $query = "INSERT INTO Tarjeta VALUES ('$tarjeta', '$cvc', '$fecha')";
  Insert_Query($con,$query);

  $query = "INSERT INTO Ubicaciones VALUES (NULL, '$delegacion', '$calle', '$cp')";
  Insert_Query($con,$query);

  //Extrae las IDs automáticas creadas:
  $query = "SELECT IdCuenta FROM Cuentas WHERE Usuario='$usuario'";
  $resu = mysqli_query($conn, $query);
  if(mysqli_num_rows($resu) > 0){
    while($row = mysqli_fetch_assoc($resu)){
      $idCuenta = $row["IdCuenta"];
    }
  }

  $query = "SELECT IdUbicacion FROM Ubicaciones WHERE IdDelegacion='$delegacion' AND calle='$calle' AND CP='$cp'";
  $resu = mysqli_query($conn, $query);
  if(mysqli_num_rows($resu) > 0){
    while($row = mysqli_fetch_assoc($resu)){
      $idUbicacion = $row["IdUbicacion"];
    }
  }

  $query = "INSERT INTO Clientes VALUES (NULL, '$nombre', '$apellidoP', '$apellidoM', '$correo', '$telefono', '$idUbicacion', '$tarjeta', '$idCuenta')";
  Insert_Query($con,$query);

  function Insert_Query($con,$query){
    echo $query;
    if(mysqli_query($con, $query)){
      echo "Usuario creado.";
    } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
  }

?>

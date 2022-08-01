<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prueba sic</title>
    <!-- IMPORTACIONES DE LIBRERIA BOOSTRAP --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
   include("conecta.php");
   session_start();
   $id_usuario = $_SESSION['id_usuario'];
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $nombre_solicitante = $_POST['nombre_solicitante'];
      $asunto = $_POST['asunto'];
      $texto_solicitud = $_POST['texto_solicitud'];
      
      $sqlInsert = "INSERT INTO radicaciones (id_radicacion, nombre_solicitante, fecha, asunto, texto_solicitud, fk_usuario_crea)
      VALUES (NULL, '$nombre_solicitante', NULL, '$asunto', '$texto_solicitud', '$id_usuario')";
      
      $resultInsert = mysqli_query($db,$sqlInsert);
      if($resultInsert){
        $message = "Radicado creado correctamente";
        $url = "welcome.php";
        // Crear el registro del log
        $sqlInsertLog = "INSERT INTO radicaciones_log (id_log, tipo_cambio, fecha_cambio, fk_usuario_realiza)
        VALUES (NULL, 'INSERT', NULL, '$id_usuario')";
        
        $resultInsertLog = mysqli_query($db,$sqlInsertLog);
      }else{
        $message = "Ocurrio un error al crear el radicado";
        $url = "welcome.php";
      }
      echo "<script>
        alert('".$message."');
        window.location.href='".$url."';
        </script>";
   }
?>
</body>
</html>
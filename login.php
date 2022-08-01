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
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $email = $_POST['username'];
      $password = $_POST['password']; 
      
      $sql = "SELECT id_usuario, email, nombre, estado FROM usuarios WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      if($count == 1) {
         if($row['estado'] == 1){
            $_SESSION['email'] = $email;
            $_SESSION['id_usuario'] = $row['id_usuario'];
            $_SESSION['nombre_usuario'] = $row['nombre'];
            $message = "Inicio de sesión correcto";
            $url = "welcome.php";
            // Eliminar el total de intentos ya que se autentico correctamente
            $sqlUpdate = "UPDATE  usuarios SET intentos = '0' WHERE email = '$email'";
            $resultInt = mysqli_query($db,$sqlUpdate);
         }else{
            $message = "Su usuario se encuentra bloqueado.";
            $url = "index.php";
         }
         
      }else {
          //Consultar si el correo fue el correcto
        $sqlInt = "SELECT email FROM usuarios WHERE email = '$email'";
        $resultInt = mysqli_query($db,$sqlInt);
        $rowInt = mysqli_fetch_array($resultInt,MYSQLI_ASSOC);
        $countInt = mysqli_num_rows($resultInt);
        if($countInt == 1){
            $message = "Digito la clave incorrecta. Recuerde que tiene un maximo de 3 intentos o será bloqueado el usuario";
            $url = "index.php";
            //Obtener el total de intentos para aumentar en 1
            $sqlTotal = "SELECT email, intentos FROM usuarios WHERE email = '$email'";
            $resultTotal = mysqli_query($db,$sqlTotal);
            $rowTotal = mysqli_fetch_array($resultTotal,MYSQLI_ASSOC);
            $total = $rowTotal['intentos'] + 1;
            
            //Actualizar el número de intentos
            if($total >= 3){
                $sqlUpdate = "UPDATE  usuarios SET intentos = '$total', estado='0' WHERE email = '$email'";
            }else{
                $sqlUpdate = "UPDATE  usuarios SET intentos = '$total' WHERE email = '$email'";
            }
            $resultUpdate = mysqli_query($db,$sqlUpdate);
        }else{
            $message = "El usuario no existe";
            $url = "index.php";
        }
        
      }
      echo "<script>
        alert('".$message."');
        window.location.href='".$url."';
        </script>";
   }
?>
</body>
</html>
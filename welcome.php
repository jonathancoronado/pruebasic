<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prueba sic</title>
    <!-- IMPORTACIONES DE LIBRERIA BOOSTRAP --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- IMPORTACIONES DE LIBRERIA JQUERY DATATABLE --> 
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#radicados').DataTable();
        });
    </script>
</head>
<body>
<?php
   include("conecta.php");
   session_start();
   $id_usuario = $_SESSION['id_usuario'];
   // Consulta todos los radicados asociados al usuario
    $sql = "SELECT id_radicacion, nombre_solicitante, fecha, asunto, texto_solicitud, usu.nombre 
    FROM usuarios usu
    INNER JOIN radicaciones radic ON usu.id_usuario = radic.fk_usuario_crea
     WHERE radic.fk_usuario_crea = '$id_usuario' ORDER BY 3 DESC";
    
    $result = mysqli_query($db,$sql);
   ?>
   <div class="container">
        <div><h2>Bienvenido a la prueba SIC. Se autenticó como: <?php echo $_SESSION['nombre_usuario']; ?><a href='cerrar_sesion.php'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cerrar sesión</h2></div>
        <div class="col-auto text-center">
            <a href='crear_radicado.php'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
        </svg><h3>Nueva radicación</h3></a><br>
        <p></p>
        </div>
            <div class="col-auto text-center">
                <a href='welcome.php'>REINICIAR EL CAMPO DE BUSQUEDA</a>
            </div>
        <div class="col-sm-12">
            <table id="radicados" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Fecha Registro</th>
                        <th>Nombre Solicitante</th>
                        <th>Asunto</th>
                        <th>Solicitud</th>
                        <th>Usuario Creación</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($data=mysqli_fetch_row($result)) {
                        echo "<tr>"; 
                        echo "<td>".$data[2]."</td>";
                        echo "<td>".$data[1]."</td>";
                        echo "<td>".$data[3]."</td>";
                        echo "<td>".$data[4]."</td>";
                        echo "<td>".$data[5]."</td>";
                        echo "<td><a href='editar_radicado.php?radId=".$data[0]."'>Editar</a></td>";
                        echo "</tr>";
                    } 
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Fecha Registro</th>
                        <th>Nombre Solicitante</th>
                        <th>Asunto</th>
                        <th>Solicitud</th>
                        <th>Usuario Creación</th>
                        <th>Editar</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
   <?php
   
?>
</body>
</html>
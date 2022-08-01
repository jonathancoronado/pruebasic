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
    ?>
    <div class="container">
        <form action="crear_radicado_backend.php" method="post">
            <h1>Creación del radicado</h1>
            <div>
                <label for="nombre_solicitante">Nombre Solicitante:</label>
                <input type="text" name="nombre_solicitante" id="nombre_solicitante" minlength="4" maxlength="100" required>
            </div>
            <div>
                <label for="asunto">Asunto:</label>
                <input type="text" name="asunto" id="asunto" minlength="4" maxlength="100" required>
            </div>
            <div>
                <label for="texto_solicitud">Solicitud:</label>
                <textArea name="texto_solicitud" id="texto_solicitud" rows="5" cols="90" minlength="10" maxlength="255"></textArea>
                
            </div>
            <div>
                <label for="usu_creacion">Usuario Creación:</label>
                <input type="text" name="usu_creacion" id="usu_creacion" value="<?php echo $_SESSION['nombre_usuario']; ?>" readonly>
            </div>
            <section>
                <button type="submit">Crear Radicado</button>
            </section>
        </form>
    </div>
</body>
</html>
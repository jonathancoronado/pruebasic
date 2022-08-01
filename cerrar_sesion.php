<?php
$message = "Se va a cerrar la sesión. Si desea ingresar nuevamente por favor inicie la sesión";
$url = "index.php";
echo "<script>
        alert('".$message."');
        window.location.href='".$url."';
        </script>";
?>
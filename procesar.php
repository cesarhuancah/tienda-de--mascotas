<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    echo "<h1>¡Datos Recibidos Exitosamente!</h1>";
    echo "<p><strong>Nombre del cliente:</strong> " . $nombre . "</p>";
    echo "<p><strong>Correo electrónico:</strong> " . $correo . "</p>";
    echo "<p><strong>Consulta/Mensaje:</strong> " . $mensaje . "</p>";
    echo "<br><a href='index.html'>Volver al formulario</a>";

} else {  
    echo "Error: El formulario no ha sido enviado correctamente.";
}
?>

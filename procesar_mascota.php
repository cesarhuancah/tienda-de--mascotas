<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    $nombre_mascota = htmlspecialchars($_POST['nombre_mascota'] ?? '');
    $especie        = htmlspecialchars($_POST['especie'] ?? '');
    $edad           = htmlspecialchars($_POST['edad'] ?? '');
    $propietario    = htmlspecialchars($_POST['propietario'] ?? '');
    $sintomas       = htmlspecialchars($_POST['sintomas'] ?? '');

    echo "<h1> ¡Mascota Registrada Exitosamente!</h1>";
    echo "<p><strong>Nombre de la Mascota:</strong> " . $nombre_mascota . "</p>";
    echo "<p><strong>Especie:</strong> " . $especie . "</p>";
    echo "<p><strong>Edad:</strong> " . $edad . " años</p>";
    echo "<p><strong>Propietario:</strong> " . $propietario . "</p>";
    echo "<p><strong>Síntomas / Motivo:</strong> " . nl2br($sintomas) . "</p>";
    
    echo "<br><a href='index.html'>Volver al formulario</a>";

} else {
    http_response_code(403);
    echo "<h1>Error:</h1><p>El formulario no ha sido enviado correctamente.</p>";
    echo "<br><a href='index.html'>Volver al formulario</a>";
}
?>

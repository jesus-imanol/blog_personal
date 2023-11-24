<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "jesusimanolcastillo@gmail.com";
    $subject = "Formulario de contacto";
    $message = "Nombre: " . $_POST["nombre_usuario"] . "\n";
    $message .= "Clave: " . $_POST["clave"] . "\n";
    $message .= "Opinión: " . $_POST["opinion"] . "\n";
    $message .= "Mayor de edad: " . (isset($_POST["adulto"]) ? "Sí" : "No") . "\n";
    $message .= "Sexo: " . $_POST["sexo"] . "\n";
    $message .= "Sueldo anual: " . $_POST["sueldo"] . "\n";
    // Agrega más campos según sea necesario

    $headers = "From: " . $_POST["nombre_usuario"] . "\r\n";
    $headers .= "Reply-To: " . $_POST["nombre_usuario"] . "\r\n";

    mail($to, $subject, $message, $headers);
}
?>

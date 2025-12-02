<?php
$dsn = "mysql:host=localhost;dbname=pagina";
$usuario = "root";
$contrasena = "";

try {
    $base = new PDO($dsn, $usuario, $contrasena);
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
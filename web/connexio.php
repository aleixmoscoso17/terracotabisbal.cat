<?php
$servidor = "localhost";
$usuari = "terra_user";
$contrasenya = "123456789Aleix@";
$base_dades = "terra_museu";

$connexio = new mysqli($servidor, $usuari, $contrasenya, $base_dades);

if ($connexio->connect_error) {
    die("Error de connexió: " . $connexio->connect_error);
}

$connexio->set_charset("utf8");
?>

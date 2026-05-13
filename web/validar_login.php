<?php
session_start();
include "connexio.php";

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM usuaris WHERE email = '$email' AND password = '$password'";
$resultat = $connexio->query($sql);

if ($resultat->num_rows == 1) {
    $usuari = $resultat->fetch_assoc();

    $_SESSION["usuari"] = $usuari["nom"];
    $_SESSION["rol"] = $usuari["rol"];

    header("Location: admin.php");
} else {
    header("Location: login.php");
}
?>

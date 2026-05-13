<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terracotta Museu - Visita interactiva</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>
    <div class="capcalera">
        <div class="logo">Terracotta Museu</div>
        <nav>
            <a href="index.php">Inici</a>
            <a href="peces.php">Peces QR</a>
            <a href="ceramistes.php">Ceramistes</a>
            <a href="login.php">Login</a>
            <a href="admin.php">Admin</a>
        </nav>
    </div>
</header>

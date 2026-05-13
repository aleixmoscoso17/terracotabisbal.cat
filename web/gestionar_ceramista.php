<?php
session_start();
include "connexio.php";

if (!isset($_SESSION["rol"]) || $_SESSION["rol"] != "admin") {
    header("Location: login.php");
    exit;
}

if (isset($_GET["id"]) && isset($_GET["estat"])) {
    $id = $_GET["id"];
    $estat = $_GET["estat"];

    if ($estat == "validat" || $estat == "pendent" || $estat == "rebutjat") {
        $sql = "UPDATE ceramistes SET estat = '$estat' WHERE id = $id";
        $connexio->query($sql);
    }
}

header("Location: admin.php");
exit;
?>

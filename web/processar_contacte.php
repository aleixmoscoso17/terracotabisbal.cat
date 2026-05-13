<?php
include "header.php";
include "connexio.php";
?>

<main class="contenidor">
    <section class="seccio">
        <h1>Missatge enviat</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ceramista_id = $_POST["ceramista_id"];
            $nom = $_POST["nom"];
            $email = $_POST["email"];
            $missatge = $_POST["missatge"];

            if ($nom == "" || $email == "" || $missatge == "") {
                echo "<div class='alerta'>Falten dades obligatòries.</div>";
            } else {
                $nom = $connexio->real_escape_string($nom);
                $email = $connexio->real_escape_string($email);
                $missatge = $connexio->real_escape_string($missatge);

                $sql = "INSERT INTO missatges_ceramistes (ceramista_id, nom_visitant, email_visitant, missatge)
                        VALUES ($ceramista_id, '$nom', '$email', '$missatge')";

                if ($connexio->query($sql) === TRUE) {
                    echo "<div class='missatge'>Missatge enviat correctament.</div>";
                    echo "<a class='boto' href='ceramista.php?id=$ceramista_id'>Tornar al perfil</a>";
                } else {
                    echo "<div class='alerta'>Error en enviar el missatge.</div>";
                }
            }
        }
        ?>
    </section>
</main>

<?php include "footer.php"; ?>

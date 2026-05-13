<?php
include "header.php";
include "connexio.php";
?>

<main class="contenidor">
    <section class="seccio">
        <h1>Comentari rebut</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $peca_id = $_POST["peca_id"];
            $nom = $_POST["nom"];
            $puntuacio = $_POST["puntuacio"];
            $comentari = $_POST["comentari"];

            if ($nom == "" || $comentari == "") {
                echo "<div class='alerta'>Falten dades obligatòries.</div>";
            } else {
                $nom = $connexio->real_escape_string($nom);
                $comentari = $connexio->real_escape_string($comentari);

                $sql = "INSERT INTO comentaris (peca_id, nom_visitant, puntuacio, comentari)
                        VALUES ($peca_id, '$nom', $puntuacio, '$comentari')";

                if ($connexio->query($sql) === TRUE) {
                    echo "<div class='missatge'>La valoració s'ha enviat correctament.</div>";
                    echo "<a class='boto' href='peca.php?id=$peca_id'>Tornar a la peça</a>";
                } else {
                    echo "<div class='alerta'>Error en guardar el comentari.</div>";
                }
            }
        }
        ?>
    </section>
</main>

<?php include "footer.php"; ?>

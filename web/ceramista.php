<?php
include "header.php";
include "connexio.php";

$id = 1;
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}

$sql = "SELECT * FROM ceramistes WHERE id = $id";
$resultat = $connexio->query($sql);

if ($resultat->num_rows == 0) {
    echo "<main class='contenidor'><div class='alerta'>El ceramista no existeix.</div></main>";
    include "footer.php";
    exit;
}

$ceramista = $resultat->fetch_assoc();
?>

<main class="contenidor">
    <section class="grid-2">
        <div>
            <img class="imatge-fitxa" src="<?php echo $ceramista['imatge']; ?>" alt="<?php echo $ceramista['nom']; ?>">
        </div>

        <div class="seccio">
            <span class="etiqueta">Fitxa digital del ceramista</span>
            <h1><?php echo $ceramista['nom']; ?></h1>
            <p><strong>Especialitat:</strong> <?php echo $ceramista['especialitat']; ?></p>
            <p><?php echo $ceramista['biografia']; ?></p>

            <div class="info-qr">
                Perfil públic del ceramista amb informació professional i obres relacionades amb el museu.
            </div>
        </div>
    </section>

    <section class="seccio">
        <h2>Formulari de contacte</h2>

        <form action="processar_contacte.php" method="POST">
            <input type="hidden" name="ceramista_id" value="<?php echo $ceramista['id']; ?>">

            <label>Nom complet</label>
            <input type="text" name="nom" required>

            <label>Correu electrònic</label>
            <input type="email" name="email" required>

            <label>Missatge</label>
            <textarea name="missatge" required></textarea>

            <button class="boto" type="submit">Enviar missatge</button>
        </form>
    </section>
</main>

<?php include "footer.php"; ?>

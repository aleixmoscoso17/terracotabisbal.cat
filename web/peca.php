<?php
include "header.php";
include "connexio.php";

$id = 1;
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}

$sql = "SELECT * FROM peces WHERE id = $id";
$resultat = $connexio->query($sql);

if ($resultat->num_rows == 0) {
    echo "<main class='contenidor'><div class='alerta'>La peça no existeix.</div></main>";
    include "footer.php";
    exit;
}

$peca = $resultat->fetch_assoc();

$sql_comentaris = "SELECT * FROM comentaris WHERE peca_id = $id ORDER BY data_comentari DESC";
$resultat_comentaris = $connexio->query($sql_comentaris);
?>

<main class="contenidor">
    <section class="grid-2">
        <div>
            <img class="imatge-fitxa" src="<?php echo $peca['imatge']; ?>" alt="<?php echo $peca['nom']; ?>">
        </div>

        <div class="seccio">
            <span class="etiqueta"><?php echo $peca['qr']; ?></span>
            <h1><?php echo $peca['nom']; ?></h1>
            <p><strong>Autor:</strong> <?php echo $peca['autor']; ?></p>
            <p><strong>Època:</strong> <?php echo $peca['epoca']; ?></p>
            <p><?php echo $peca['descripcio']; ?></p>
            <p><strong>Curiositat:</strong> <?php echo $peca['curiositat']; ?></p>

            <div class="info-qr">
                <strong>Fitxa digital associada al codi <?php echo $peca['qr']; ?></strong><br>
                Aquesta pàgina mostra la informació ampliada de la peça seleccionada.
            </div>

        </div>
    </section>

    <section class="seccio">
        <h2>Valoració i comentaris</h2>

        <form action="processar_comentari.php" method="POST">
            <input type="hidden" name="peca_id" value="<?php echo $peca['id']; ?>">

            <label>Nom del visitant</label>
            <input type="text" name="nom" required>

            <label>Puntuació</label>
            <select name="puntuacio" required>
                <option value="5">5 estrelles</option>
                <option value="4">4 estrelles</option>
                <option value="3">3 estrelles</option>
                <option value="2">2 estrelles</option>
                <option value="1">1 estrella</option>
            </select>

            <label>Comentari</label>
            <textarea name="comentari" required></textarea>

            <button class="boto" type="submit">Enviar valoració</button>
        </form>
    </section>

    <section class="seccio">
        <h2>Comentaris dels visitants</h2>

        <?php if ($resultat_comentaris->num_rows == 0) { ?>
            <p>Encara no hi ha comentaris per aquesta peça.</p>
        <?php } ?>

        <?php while ($comentari = $resultat_comentaris->fetch_assoc()) { ?>
            <div class="comentari">
                <p class="estrelles"><?php echo str_repeat("★", $comentari["puntuacio"]); ?></p>
                <p><strong><?php echo htmlspecialchars($comentari["nom_visitant"]); ?></strong></p>
                <p><?php echo htmlspecialchars($comentari["comentari"]); ?></p>
            </div>
        <?php } ?>
    </section>
</main>

<?php include "footer.php"; ?>

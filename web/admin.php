<?php
include "header.php";
include "connexio.php";

if (!isset($_SESSION["rol"]) || $_SESSION["rol"] != "admin") {
    echo "<main class='contenidor'><div class='alerta'>Has d'iniciar sessió com a administrador per accedir a aquesta pàgina.</div><a class='boto' href='login.php'>Anar al login</a></main>";
    include "footer.php";
    exit;
}

$total_peces = $connexio->query("SELECT COUNT(*) AS total FROM peces")->fetch_assoc()["total"];
$total_comentaris = $connexio->query("SELECT COUNT(*) AS total FROM comentaris")->fetch_assoc()["total"];
$total_missatges = $connexio->query("SELECT COUNT(*) AS total FROM missatges_ceramistes")->fetch_assoc()["total"];
$total_pendents = $connexio->query("SELECT COUNT(*) AS total FROM ceramistes WHERE estat = 'pendent'")->fetch_assoc()["total"];

$sql_ceramistes = "SELECT * FROM ceramistes ORDER BY id ASC";
$resultat_ceramistes = $connexio->query($sql_ceramistes);
?>

<main class="contenidor">
    <section class="seccio">
        <h1>Panell d'administració</h1>
        <p>Benvingut/da, <?php echo $_SESSION["usuari"]; ?>.</p>
        <a class="boto boto-secundari" href="logout.php">Tancar sessió</a>
    </section>

    <section class="grid">
        <article class="seccio">
            <h2>Peces publicades</h2>
            <p class="estrelles"><?php echo $total_peces; ?></p>
            <p>Fitxes digitals disponibles a la web.</p>
        </article>
        <article class="seccio">
            <h2>Comentaris</h2>
            <p class="estrelles"><?php echo $total_comentaris; ?></p>
            <p>Comentaris rebuts a les fitxes digitals.</p>
        </article>
        <article class="seccio">
            <h2>Missatges</h2>
            <p class="estrelles"><?php echo $total_missatges; ?></p>
            <p>Missatges enviats als ceramistes.</p>
        </article>
        <article class="seccio">
            <h2>Pendents</h2>
            <p class="estrelles"><?php echo $total_pendents; ?></p>
            <p>Ceramistes pendents de validació.</p>
        </article>
    </section>

    <section class="seccio">
        <h2>Validació de ceramistes</h2>
        <p>
            Des d'aquest panell es pot canviar l'estat dels perfils de ceramistes.
            Només els perfils amb estat <strong>validat</strong> es mostren a la part pública de la web.
        </p>

        <table class="taula">
            <tr>
                <th>Nom</th>
                <th>Especialitat</th>
                <th>Estat</th>
                <th>Accions</th>
            </tr>
            <?php while ($ceramista = $resultat_ceramistes->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $ceramista["nom"]; ?></td>
                    <td><?php echo $ceramista["especialitat"]; ?></td>
                    <td><strong><?php echo $ceramista["estat"]; ?></strong></td>
                    <td>
                        <a class="boto boto-secundari" href="gestionar_ceramista.php?id=<?php echo $ceramista['id']; ?>&estat=validat">Validar</a>
                        <a class="boto boto-secundari" href="gestionar_ceramista.php?id=<?php echo $ceramista['id']; ?>&estat=pendent">Pendent</a>
                        <a class="boto boto-secundari" href="gestionar_ceramista.php?id=<?php echo $ceramista['id']; ?>&estat=rebutjat">Rebutjar</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </section>
</main>

<?php include "footer.php"; ?>

<?php
include "header.php";
include "connexio.php";

$sql = "SELECT * FROM ceramistes WHERE estat = 'validat' ORDER BY id ASC";
$resultat = $connexio->query($sql);
?>

<main class="contenidor">
    <section class="seccio">
        <h1>Espai de ceramistes locals</h1>
        <p>
            Coneix alguns dels ceramistes locals vinculats al projecte. Cada perfil inclou informació professional,
            especialitat artística i un formulari de contacte.
        </p>
    </section>

    <section class="grid">
        <?php while ($ceramista = $resultat->fetch_assoc()) { ?>
            <article class="targeta">
                <img src="<?php echo $ceramista['imatge']; ?>" alt="<?php echo $ceramista['nom']; ?>">
                <div class="targeta-contingut">
                    <span class="etiqueta">Perfil validat</span>
                    <h2><?php echo $ceramista['nom']; ?></h2>
                    <p><strong>Especialitat:</strong> <?php echo $ceramista['especialitat']; ?></p>
                    <p><?php echo $ceramista['biografia']; ?></p>
                    <a class="boto" href="ceramista.php?id=<?php echo $ceramista['id']; ?>">Veure perfil</a>
                </div>
            </article>
        <?php } ?>
    </section>
</main>

<?php include "footer.php"; ?>

<?php
include "header.php";
include "connexio.php";

$sql = "SELECT * FROM peces ORDER BY id ASC";
$resultat = $connexio->query($sql);
?>

<main class="contenidor">
    <section class="seccio">
        <h1>Peces de ceràmica amb QR</h1>
        <p>
            Consulta una selecció de peces del museu. Cada fitxa digital permet accedir
            a informació ampliada, curiositats i valoracions dels visitants.
        </p>
    </section>

    <section class="grid">
        <?php while ($peca = $resultat->fetch_assoc()) { ?>
            <article class="targeta">
                <img src="<?php echo $peca['imatge']; ?>" alt="<?php echo $peca['nom']; ?>">
                <div class="targeta-contingut">
                    <span class="etiqueta"><?php echo $peca['qr']; ?></span>
                    <h2><?php echo $peca['nom']; ?></h2>
                    <p><strong>Autor:</strong> <?php echo $peca['autor']; ?></p>
                    <p><?php echo $peca['descripcio']; ?></p>
                    <a class="boto" href="peca.php?id=<?php echo $peca['id']; ?>">Veure fitxa</a>
                </div>
            </article>
        <?php } ?>
    </section>
</main>

<?php include "footer.php"; ?>

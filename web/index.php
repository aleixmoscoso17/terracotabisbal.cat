<?php include "header.php"; ?>

<section class="hero">
    <h1>Visita interactiva al Terracotta Museu</h1>
    <p>Descobreix la ceràmica de la Bisbal d’Empordà amb fitxes digitals, continguts multimèdia, valoracions i informació ampliada de les peces.</p>
</section>

<main class="contenidor">
    <section class="seccio">
        <h2>Benvinguts al Terracotta Museu</h2>
        <p>
            El Terracotta Museu de la Bisbal d’Empordà és un espai dedicat a la història,
            les tècniques i les tradicions de la ceràmica. Aquesta proposta digital permet ampliar
            la informació de les peces exposades i fer la visita més accessible, educativa i participativa.
        </p>
        <p>
            Els visitants poden consultar fitxes digitals, valorar peces,
            deixar comentaris i descobrir el treball dels ceramistes locals vinculats al territori.
        </p>
    </section>

    <section class="grid">
        <article class="targeta">
            <div class="targeta-contingut">
                <span class="etiqueta">QR</span>
                <h3>Fitxes digitals</h3>
                <p>Cada peça disposa d’una fitxa pròpia amb informació històrica, tècnica i multimèdia.</p>
                <a class="boto" href="peces.php">Veure peces</a>
            </div>
        </article>

        <article class="targeta">
            <div class="targeta-contingut">
                <span class="etiqueta">Interacció</span>
                <h3>Valoracions i comentaris</h3>
                <p>Els visitants poden compartir la seva opinió i puntuar les peces del museu.</p>
                <a class="boto" href="peca.php?id=1">Provar una fitxa</a>
            </div>
        </article>

        <article class="targeta">
            <div class="targeta-contingut">
                <span class="etiqueta">Ceramistes</span>
                <h3>Espai local</h3>
                <p>Un espai per donar visibilitat als ceramistes locals i a les seves obres.</p>
                <a class="boto" href="ceramistes.php">Veure ceramistes</a>
            </div>
        </article>
    </section>
</main>

<?php include "footer.php"; ?>

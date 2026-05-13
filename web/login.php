<?php include "header.php"; ?>

<main class="contenidor">
    <section class="seccio">
        <h1>Inici de sessió</h1>
        <p>
            Accés reservat per a l’administració del museu.
        </p>

        <form action="validar_login.php" method="POST">
            <label>Email</label>
            <input type="email" name="email" required>

            <label>Contrasenya</label>
            <input type="password" name="password" required>

            <button class="boto" type="submit">Entrar</button>
        </form>
    </section>
</main>

<?php include "footer.php"; ?>

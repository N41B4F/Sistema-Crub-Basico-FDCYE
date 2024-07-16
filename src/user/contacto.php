<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacto</title>
    <link rel="stylesheet" href="../../assets/css/styles.css" />
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
</head>

<body>
    <main>
        <?php include '../../templates/header.php'; ?>
        <section>
            <h2>Formulario de Contacto</h2>
            <?php
            if (!empty($mensajeConfirmacion)) {
                echo "<p class='mensaje-confirmacion'>$mensajeConfirmacion</p>";
            }
            ?>
            <form action="" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required /><br /><br />
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required /><br /><br />
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required /><br /><br />
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" required></textarea><br /><br />
                <input type="submit" value="Enviar Mensaje" />
            </form>
        </section>
        <section>
            <h2>Información de Contacto</h2>
            <p>Email: soporte@fabrica.com</p>
            <p>Teléfono: +51 456 7890</p>
            <p>Dirección: Calle 123, ciudad, País</p>
        </section>
    </main>
    <?php include '../../templates/footer.php'; ?>
</body>

</html>
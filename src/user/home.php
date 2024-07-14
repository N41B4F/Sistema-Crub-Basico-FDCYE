<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
header('Location: login.php');
exit;
}

// Verificar el rol del usuario
$role = $_SESSION['role'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Fabrica De Confecciones y Estampados</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">

</head>

<body>
    <main>
        <section id="Bienvenido">
            <h2>¡Confecciones y estampados personalizados a tu alcance!</h2>
            <p>Solicita tu presupuesto gratuito hoy mismo y descubre cómo podemos ayudarte a crear las prendas que
                siempre has deseado.</p>
        </section>
        <section id="content">
            <div id="about">
                <h2>Sobre Nosotros</h2>
                <p>Somos una empresa dedicada a la confección y estampado de prendas de alta calidad.</p>
                <img src="../../assets/img/img1.jpg" alt="Sobre Nosotros" class="about-image" />
            </div>
        </section>
        <section id="ultimas-Noticias">
            <h2>Últimas Noticias</h2>
            <div class="news-container">
                <div class="news-item">
                    <h3>Nueva Colección Primavera-Verano</h3>
                    <p>Descubre nuestra última colección de prendas estampadas para la temporada.</p>
                    <a href="../src/catalogo.php">Catalogo</a>
                </div>
                <div class="nuevo-items">
                    <h3>Promoción Especial: Descuentos del 20%</h3>
                    <p>Aprovecha nuestros descuentos especiales en todos los pedidos realizados este mes.</p>
                    <a href="../src/catalogo.php">catalogo</a>
                </div>
            </div>
        </section>


    </main>

</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>

<body>
    <?php include '../../templates/header.php'; ?>

    <main>
        <section>
            <h2>CATALOGO DE PRODUCTOS</h2>
            <div class="productos-container">
                <div class="producto">
                    <h3>Mascarillas de tela</h3>
                    <p>Mascarillas de tela reutilizables y lavables, disponibles en diversos diseños y colores.</p>
                    <img src="../../assets/img/Productos-img/Producto1.jpg" alt="Mascarillas de tela" width="850">
                    <p>Precio: s/10.00</p>
                    <form action="pedidos.php" method="post">
                        <input type="hidden" name="producto" value="Mascarillas de tela">
                        <input type="hidden" name="nombre" value="Usuario predeterminado">
                        <input type="hidden" name="email" value="email@ejemplo.com">
                        <input type="hidden" name="cantidad" value="1">
                        <input type="hidden" name="direccion" value="Dirección predeterminada">
                        <p>⭐⭐⭐⭐☆ (4/5)</p>
                        <button type="submit" class="btn-comprar">Comprar</button>
                    </form>
                </div>
                <div class="producto">
                    <h3>Polos estampados de animes</h3>
                    <p>Polos con estampados de tus animes favoritos, disponibles en varias tallas y colores.</p>
                    <img src="../../assets/img/Productos-img/Producto2.jpg" alt="Polos estampados de animes"
                        width="800">
                    <p>Precio: s/.25.00</p>
                    <form action="pedidos.php" method="post">
                        <input type="hidden" name="producto" value="Polos estampados de animes">
                        <input type="hidden" name="nombre" value="Usuario predeterminado">
                        <input type="hidden" name="email" value="email@ejemplo.com">
                        <input type="hidden" name="cantidad" value="1">
                        <input type="hidden" name="direccion" value="Dirección predeterminada">
                        <p>⭐⭐⭐⭐⭐ (5/5)</p>
                        <button type="submit" class="btn-comprar">Comprar</button>
                    </form>
                </div>
                <div class="producto">
                    <h3>Lanyards</h3>
                    <p>Estampados para lanyards, perfectos para mantener tus llaves organizadas y accesibles.</p>
                    <img src="../../assets/img/Productos-img/Producto3.jpg" alt="Lanyards" width="800">
                    <p>Precio: s/15.00</p>
                    <form action="pedidos.php" method="post">
                        <input type="hidden" name="producto" value="Lanyards">
                        <input type="hidden" name="nombre" value="Usuario predeterminado">
                        <input type="hidden" name="email" value="email@ejemplo.com">
                        <input type="hidden" name="cantidad" value="1">
                        <input type="hidden" name="direccion" value="Dirección predeterminada">
                        <p>⭐⭐⭐⭐☆ (4/5)</p>
                        <button type="submit" class="btn-comprar">Comprar</button>
                    </form>
                </div>
                <div class="producto">
                    <h3>Uniformes</h3>
                    <p>Uniformes personalizados para empresas, colegios y otras instituciones, disponibles en diferentes
                        estilos y materiales.</p>
                    <img src="../../assets/img/Productos-img/Producto4.jpg" alt="Uniformes" width="800">
                    <p>Precio: s/55.00</p>
                    <form action="pedidos.php" method="post">
                        <input type="hidden" name="producto" value="Uniformes">
                        <input type="hidden" name="nombre" value="Usuario predeterminado">
                        <input type="hidden" name="email" value="email@ejemplo.com">
                        <input type="hidden" name="cantidad" value="1">
                        <input type="hidden" name="direccion" value="Dirección predeterminada">
                        <p>⭐⭐⭐⭐⭐ (5/5)</p>
                        <button type="submit" class="btn-comprar">Comprar</button>
                    </form>
                </div>
                <div class="producto">
                    <h3>Prendas Publicitarias</h3>
                    <p>Prendas publicitarias personalizadas para promocionar tu marca o evento. Disponibles en
                        diferentes estilos y materiales, diseñados para atraer la atención y dejar una impresión
                        duradera.</p>
                    <img src="../../assets/img/Productos-img/Producto5.jpg" alt="Prendas Publicitarias" width="800">
                    <p>Precio: s/20.00</p>
                    <form action="pedidos.php" method="post">
                        <input type="hidden" name="producto" value="Prendas Publicitarias">
                        <input type="hidden" name="nombre" value="Usuario predeterminado">
                        <input type="hidden" name="email" value="email@ejemplo.com">
                        <input type="hidden" name="cantidad" value="1">
                        <input type="hidden" name="direccion" value="Dirección predeterminada">
                        <p>⭐⭐⭐⭐⭐ (5/5)</p>
                        <button type="submit" class="btn-comprar">Comprar</button>
                    </form>
                </div>
                <div class="producto">
                    <h3>Prendas de Trabajo</h3>
                    <p>Ropa de trabajo personalizada para empresas y eventos, disponible en diversos estilos y
                        materiales. Diseñada para ser duradera y cómoda, ideal para promocionar tu marca mientras
                        aseguras la comodidad y seguridad de tu equipo.</p>
                    <img src="../../assets/img/Productos-img/Producto6.jpg" alt="Prendas Publicitarias" width="800">
                    <p>Precio: s/20.00</p>
                    <form action="pedidos.php" method="post">
                        <input type="hidden" name="producto" value="Prendas Publicitarias">
                        <input type="hidden" name="nombre" value="Usuario predeterminado">
                        <input type="hidden" name="email" value="email@ejemplo.com">
                        <input type="hidden" name="cantidad" value="1">
                        <input type="hidden" name="direccion" value="Dirección predeterminada">
                        <p>⭐⭐⭐⭐⭐ (5/5)</p>
                        <button type="submit" class="btn-comprar">Comprar</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php include '../../templates/footer.php'?>
</body>

</html>
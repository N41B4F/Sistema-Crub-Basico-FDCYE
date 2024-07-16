<body>
    <header>
        <nav>
            <ul>
                <li><a href="../../src/user/home.php">Home</a></li>
                <li><a href="../../src/user/catalogo.php">Catálogo</a></li>
                <li><a href="../../src/user/contacto.php">Contacto</a></li>
                <li><a href="../../src/auth/mi-cuenta.php">Mi Cuenta</a></li>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                <li><a href="../../src/pedidos-usuarios/mis-pedidos.php">Mis Pedidos</a></li>
                <li><a href="../../src/pedidos-usuarios/crear-pedidos.php">Crear Pedidos</a></li>

                <?php if ($_SESSION['role'] === 'admin'): ?>
                <li><a href="../../src/auth/Gestion-pedidos.php">Gestión de Pedidos</a></li>
                <li><a href="../../src/sistema-crub/Lista-Usuarios.php">Gestión de Usuarios</a></li>
                <?php endif; ?>
                <?php else: ?>
                <li><a href="../../src\sistema-crub\Crear-Usuarios.php">Registro</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
</body>

</html>
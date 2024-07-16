# [ProyectoFinal-FDCYE]

```|
├── assets/
│   ├── css/
│   └── images/
├── config/
│   └── config.php
├── src/
│   ├── auth/
│   │   ├── login.php
│   │   ├── register.php
│   │   └── logout.php
│   ├── user/
│   │   ├── add_user.php
│   │   ├── delete_user.php
│   │   ├── edit_user.php
│   │   ├── lista_usuarios.php
│   │   ├── home.php
│   │   ├── catalogo.php
│   │   ├── pedidos.php
│   │   └── gestion_pedidos.php
│   ├── admin/
│   │   ├── home.php
│   │   ├── catalogo.php
│   │   ├── pedidos.php
│   │   └── gestion_pedidos.php
├── templates/
│   ├── header.php
│   └── footer.php
└── index.php

```

```|
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    role ENUM('admin', 'user') NOT NULL DEFAULT 'user'
);



CREATE TABLE contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo_electronico VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    mensaje TEXT NOT NULL,
    creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

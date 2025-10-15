<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="hola mundo con base de datos, hola + crud">
    <title>Hola con CRUD</title>
    <link rel="icon" href="<?= BASE_URL ?> rtrim(string(BASE_URL,'/')) ?> /imagenes/logo1.ico">
    <link rel="stylesheet" href="<?= BASE_URL ?> rtrim(string(BASE_URL,'/')) ?> css/estilos.css">
</head>
<body>
    <header class="container">
        <h1>
            <a href="<?= BASE_URL ? rtrim(BASE_URL,'/') : '' ?>/mensajes">Hola Mundo -  MVC + PHP + MYSQL</a>
        </h1>
        <nav>
            <a href="<?= BASE_URL ? rtrim(BASE_URL,'/') : '' ?>/mensajes">Mensajes</a>
            <a href="<?= BASE_URL ? rtrim(BASE_URL,'/') : '' ?>/mensajes/create">Crear Mensaje</a>
        </nav>
    </header>
    <main class="container">
        <?php include $viewFile; ?>
    </main>
    <footer class="container footer">
        <small>
            hecho con corazon en PHP MVC
        </small>
    </footer>

</body>
</html>

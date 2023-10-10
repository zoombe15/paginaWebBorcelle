<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro de reclamaciones</title>
    <link rel="stylesheet" href="stylelibrorecla.css" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>

        <nav class="navbar">
            <h2 class="logo"><a href="#">Borcelle</a></h2>
            <input type="checkbox" id="menu-toggle" />
            <label for="menu-toggle" id="hamburger-btn">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                    <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </label>
            <ul class="links">
                    <li><a href="welcome">Inicio</a></li>
                    <li><a href="nosotros">Contáctanos/Ubícanos</a></li>
                    <li><a href="reclamaciones">Reclamaciones</a></li>
                    <li><a href="preguntas">Preguntas Frecuentes</a></li>
                    <li><a href="sugerencias">Sugerencias</a></li>
            </ul>
            <div class="buttons">
                <a href="/login" class="signup">Iniciar Sesión</a>
            </div>
        </nav>
    
<br>
<br>
<br>

<h1>Libro de Reclamaciones </h1>
    
    <form action="procesar_reclamacion.php" method="post">
        <label for="nombre">Nombre del Cliente:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required><br><br>

        <label for="telefono">Teléfono de Contacto:</label>
        <input type="tel" id="telefono" name="telefono" required><br><br>

        <label for="fecha">Fecha de Reclamación:</label>
        <input type="date" id="fecha" name="fecha" required><br><br>

        <label for="motivo">Motivo de la Reclamación:</label><br>
        <textarea id="motivo" name="motivo" rows="4" cols="50" required></textarea><br><br>

        <label for="producto">Producto o Servicio Relacionado:</label>
        <input type="text" id="producto" name="producto" required><br><br>

        <label for="detalle">Detalles de la Reclamación:</label><br>
        <textarea id="detalle" name="detalle" rows="4" cols="50" required></textarea><br><br>

        <label for="respuesta">Respuesta Esperada:</label><br>
        <textarea id="respuesta" name="respuesta" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Enviar Reclamación">
    </form>
</body>
</html>
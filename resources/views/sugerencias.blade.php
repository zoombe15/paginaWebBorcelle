<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugerencias</title>
    <link rel="stylesheet" href="stylelibrorecla.css" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<header class="header">
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
    </header>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1>Formulario de Sugerencias </h1>

    <form action="procesar_sugerencia.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required>

        <label for="sugerencia">Sugerencia:</label>
        <textarea id="sugerencia" name="sugerencia" rows="4" cols="50" required></textarea>

        <input type="submit" value="Enviar Sugerencia">
    </form>
   
</body>
</html>


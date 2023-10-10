    <!DOCTYPE html>
    <html>
    <head>
        <title>Libro de Reclamaciones</title>
        <link rel="stylesheet" href="style.css">
        
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
        <span><strong>Preguntas Frecuentes</strong></span>
        <div class="section" id="reclamacion-section">
            <div class="bloque">
                <h2 class="reclamo">¿Como puedo realizar mi pago?</h2>
                <p class="contenido">Aceptamos los siguientes métodos de pago: Pago en linea: Visa débito/crédito. 
                    MasterCard débito/crédito. American Express débito/crédito. Tarjeta Oh! Visa/Mastercard Pago con POS: Visa 
                    débito/crédito. MasterCard débito/crédito. American Express débito/crédito. Tarjeta Oh! visa/mastercard Diners Club 
                    débito/credito Pago en efectivo: Indicando la cantidad con la que realizarás el pago.</p>
            </div>
            <div class="bloque">
                <h2 class="reclamo">¿Es necesario una receta médica para comprar mis medicamentos?</h2>
                <p class="contenido">Existen algunos medicamentos que solamente se pueden dispensar con receta médica,
                    es por ello, que estos productos tendrán la señalización de "venta con receta médica" en la imagen.
                </p>
            </div>
            <div class="bloque">
                <h2 class="reclamo">¿Cuál es el costo de envio?</h2>
                <p class="contenido">El costo de envio dependerá de la ubicación que se enviará
                    el producto, para mayor información acercarse a una de los locales.
                </p>
            </div>
            <div class="bloque">
                <h2 class="reclamo">¿Se puede modificar mi pedido?</h2>
                <p class="contenido">Esto dependerá del esta de tu pedido, para mayor información deberás acercarte
                    a una sede presencialmente.
                </p>
            </div>
        </div>

    
    <script>
                    // MOSTRAR Y OCULTAR 
                    const bloque  = document.querySelectorAll(".bloque")
                    const reclamo  = document.querySelectorAll(".reclamo")

                    /*Cuando haga click en h2;
                    Quitar la clase activo a TODOS los bloques 
                    Vamos a añadir la clase activo al BLOQUE con la posicion del h2 */
                    reclamo.forEach((cadaReclamo , i)=>{
                    reclamo[i].addEventListener("click"  , ()=>{

                    bloque.forEach((cadaBloque,i)=>{
                        bloque[i].classList.remove("activo")
            })
            bloque[i].classList.add("activo")

             })

            }) 
    </script>

</body>
</html>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Menu Borcelle </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- DE CLASE DEL PROFESOR PARA PRODUCTOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     
    <!-- DE CLASE DEL PROFESOR PARA PRODUCTOS -->
    <style type="text/css">

    .productos{
    display:flex; /*centra los objetos*/
    flex-wrap:wrap;/*salta a la siguiente fila cuando llegue a mas de 5 columnas*/
    justify-content: space-evenly;
    gap: 0.7em;

    }
    .producto{
    border: 1px solid #0033cc;
    height: 35vh;
    box-shadow: 0px 0px 15px #0066ff;
    border-radius: 10px;
    padding: 0.7em;
    text-align: center;

    }

    .producto:hover{
    background-color: #ffff99;
    transform: scale(1.05,1.05);
    }

    .producto img{
    display:block;
    width: 75%;
    height: 80%;
    margin: 10px auto;
    }

    </style>
    
    <style>
    /* Estilos para centrar y alinear el contenido de las páginas */
    .page-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .page-content h1 {
        font-size: 24px;
        text-align: center;
    }
    </style>


</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bertello icono'></i>
            <div class="logo_name">BORCELLE</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Buscar...">
                <span class="tooltip">Buscar</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Productos</span>
                </a>
                <span class="tooltip">Productos</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Clientes</span>
                </a>
                <span class="tooltip">Clientes</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Ventas</span>
                </a>
                <span class="tooltip">Ventas</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">Inventario</span>
                </a>
                <span class="tooltip">Inventario</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cart-alt'></i>
                    <span class="links_name">Administración</span>
                </a>
                <span class="tooltip">Administración</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-heart'></i>
                    <span class="links_name">Administración del sistema</span>
                </a>
                <span class="tooltip">Usuarios</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Configuración</span>
                </a>
                <span class="tooltip">Configuración</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <img src="profile.jpg" alt="profileImg">
                    <div class="name_job">
                        <div class="name">usuario</div>
                        <div class="job">rango del usuario</div>
                    </div>
                </div>
                <i class='bx bx-log-out' id="log_out"></i>
            </li>
        </ul>
    </div>

    <div id="ventas-page" style="display: none;" class="page-content">
        <h1>HOLAAA VENTAS</h1>

                <DIV class="productos">

                <script type="text/javascript">
                let codref=0;
                for(var i=1; i<=100;i++){
                codref = (++codref%9 == 0)?1:codref;
                let lispro = `

                <div class="producto" data-aos="fade-up"data-aos-duration="3000">>
                Producto${i}
                <img src="ImagenProductos/celular${codref}.png" alt=""/>
                <span> Precio ${codref*3}</span>
                </div>`;
                document.write(lispro);
                }


                </script>

                </DIV>
    </div>

    <div id="clientes-page" style="display: none;" class="page-content">
        <h1>HOLAAA clientes</h1>
    </div>
    
    <section class="home-section">
        <div class="text">CONTENIDO</div>
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
            }
        }
        

    </script>

    <script> 
    //  CODIGO PARA MOSTRAR LAS VENTAS Y CLIENTES
    let ventasPage = document.getElementById("ventas-page");
        let clientesPage = document.getElementById("clientes-page");
        let contenido = document.querySelector(".home-section .text");

        // Función para mostrar la página de Ventas
        function mostrarVentas() {
            ventasPage.style.display = "none";
            clientesPage.style.display = "block";
            contenido.style.display = "none";
        }

        // Función para mostrar la página de Clientes
        function mostrarClientes() {
            ventasPage.style.display = "block";
            clientesPage.style.display = "none";
            contenido.style.display = "none";
        }

        // Event listeners para los enlaces de Ventas y Clientes
        document.querySelector(".nav-list li:nth-child(4) a").addEventListener("click", mostrarVentas);
        document.querySelector(".nav-list li:nth-child(5) a").addEventListener("click", mostrarClientes);
       
    </script>
    

    <script>
    AOS.init();
    </script>



</body>

</html>

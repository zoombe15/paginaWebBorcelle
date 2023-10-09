<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Borcelle</title>
    <link rel="stylesheet" href="stylemenu.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <!--https://www.youtube.com/watch?v=ihfb_mlMlqk&list=PL33d8DmxxcSN2DY12udX7O64mWpeYwVfu&index=13-->
</head>
<body>
    <nav class="sidebar close">

        <!--Titulo de la barra lateral-->
        <header>

            <div class ="text logo">
                <span class="name"> Sistema</span>
                <span class="profe"> Borcelle</span>
            </div>
            <i class='bx bx-menu toggle'></i>
        </header>

        <div class="menu-bar">
            
            <div class="menu">
                
                <!--Lista ordenada-->
                <li class="search-box">
                    <!--Buscador-->
                    <i class="bx bx-search icon"></i>
                    <input type="text" placeholder="Buscar...">

                </li>

                <!--Lista no ordenada-->
                <ul class="menu-links">

                    <li class="nab-link">
                        <a href="#">
                            <!--Opcion Inicio-->
                            <i class='bx bx-clinic icon'></i>
                            <span class="text nav-text">INICIO</span>
                        </a>
                    </li>

                    <li class="nab-link">
                        <a href="productos">
                            <!--Opcion Productos-->
                            <i class='bx bx-first-aid icon'></i>
                            <span class="text nav-text">PRODUCTOS</span>
                        </a>
                    </li>

                    <li class="nab-link">
                        <a href="#">
                            <!--Opcion Clientes-->
                            <i class='bx bx-group icon'></i>
                            <span class="text nav-text">CLIENTES</span>
                        </a>
                    </li>

                    <li class="nab-link">
                        <a href="#">
                            <!--Opcion Ventas-->
                            <i class='bx bx-dollar icon'></i>
                            <span class="text nav-text">VENTAS</span>
                        </a>
                    </li>

                    <li class="nab-link">
                        <a href="#">
                            <!--Opcion Inventario-->
                            <i class='bx bx-cube icon'></i>
                            <span class="text nav-text">INVENTARIO</span>
                        </a>
                    </li>

                    <li class="nab-link">
                        <a href="#">
                            <!--Opcion Administracion-->
                            <i class='bx bx-bar-chart-square icon'></i>
                            <span class="text nav-text">ADMINISTRACION</span>
                        </a>
                    </li>

                </ul>
            </div>

            <!--SALIDA-->
            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class="bx bx-log-out icon"></i>
                        <span class="text nav-text"> CERRAR SESION</span>
                    </a>
                </li>

            </div>

        </div>      

    </nav>

    <section class="home">
        <div class="text">
          INICIO
        </div>

    </section>

    <script > 
        const body= document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle= body.querySelector('.toggle'),
            searchBtn = body.querySelector('.search-box'),
            modeSwitch = body.querySelector('.toggle-switch'),
            modeText = body.querySelector('.mode-text');

            toggle.addEventListener("click",()=>{
                sidebar.classList.toggle("close");
            })
            
            searchBtn.addEventListener("click",() =>{
                sidebar.classList.remove("close");
            })

    </script> 
</body>
</html>
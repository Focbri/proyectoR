<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--CSS-->
  <link rel="stylesheet" href="Resources/header.css">
  <link rel="stylesheet" href="Resources/login.css">
  <link rel="icon" href="Resources/img/logowhite.webp">
  <!--BOOTSTRAP 5-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
  <title>Ripley</title>
</head>
<body>
<header class="ripley-header">
    <section>
        <div class="contenedor-header">
            <div class="banner-header">
                <a href="https://simple.ripley.com.pe/minisitios/especial/app-ripley-peru" target="_blank"><img src="Resources/img/ripleyapp.webp" class="ripleyapp"></a>
            </div>
            <nav class="navbar-ripley">
                <div class="contenedor-navbar">
                    <div class="logo-ripley">
                        <a href="#"><img src="Resources/img/logowhite.webp" class="logo"></a>
                    </div>
                    <div class="contenedor-menuDesplegable">
                        <a>
                            <div class="icono-menuDesplegable">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 17h18M3 12h18M3 7h18"/></svg>
                            </div>
                        </a>
                        <div class="menu-text">
                            <span>Menú de</span>
                            <span>categorias</span>
                        </div>
                    </div>
                    <div class="buscar">
                        <div>
                            <input type="search" placeholder="Buscar productos" class="buscador">
                        </div>
                        <div>
                            <button type="submit" class="enviar"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                    <!--Boton Logeo / Carrito y formulario-->
                    <div class="usuario">
                        <div class="icon-Login">
                            <button class="icon-login" id="id-Login">
                                <i class="bi bi-person login"></i>
                            </button>
                            <div class="logeo" id="menu-logeo">
                                <p>Usuario</p>
                            </div>
                        </div>
                        <div>
                            <button class="icon-cart">
                                <i class="bi bi-cart2 cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>           
        </div>
    </section>
</header>

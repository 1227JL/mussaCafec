<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mussa Cafec</title>
    <link rel="stylesheet" href="/build/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="/src/js/app.js"></script>
    <script src="../../src/js/jquery-3.2.1.js"></script>
    <script src="../../src/js/jquery_validate.js"></script>
    <script src="/node_modules/aos/dist/aos.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <header class="header <?php echo isset($inicio) && $inicio ? 'absolute' : 'relative'?>">
        <div class="modal off" id="modal">
            <div class="close">
                <button id="closeButton">X</button>
            </div>
            <ul class="nav__link">
                <li class="nav__item">
                    <a href="/">Inicio</a>
                </li>
                <li class="nav__item">
                    <a href="/views/registro/poster-ponentes.php">Registro</a>
                </li>
                <?php if(isset($_SESSION['login']) && $_SESSION['login']): ?>
                <li class="nav__item">
                    <a href="/views/admin/Ponentes.php">Reportes</a>
                </li>
                <li class="nav__item">
                    <a href="../../includes/config/logout.php">Cerrar sesion</a>
                </li>
                <?php else: ?>
                <li class="nav__item">
                    <a href="/views/admin/index.php">Administrador</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
        <nav class="nav">
            <div class="logo">
                <img src="/build/assets/logo.png" alt="logo sena">
                <h1 class="heading">Mussa Cafec</h1>
            </div>
            <ul class="nav__link">
                <li class="nav__item">
                    <a href="/">Inicio</a>
                </li>
                <li class="nav__item">
                    <a href="/views/registro/poster-ponentes.php">Registro</a>
                </li>
                <?php if(isset($_SESSION['login']) && $_SESSION['login']): ?>
                <li class="nav__item">
                    <a href="/views/admin/Ponentes.php">Reportes</a>
                </li>
                <li class="nav__item">
                    <a href="../../includes/config/logout.php">Cerrar sesion</a>
                </li>
                <?php else: ?>
                <li class="nav__item">
                    <a href="/views/admin/index.php">Administrador</a>
                </li>
                <?php endif; ?>
            </ul>
            <img id="menu" src="/build/assets/menu.svg" alt="icono menu desplegable">
        </nav>
        <?php if(isset($inicio) && $inicio): ?>
            <div class="splide" role="group" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                    <li class="splide__slide slide-1"></li>
                    <li class="splide__slide slide-2"></li>
                    <li class="splide__slide slide-3"></li>
                    <li class="splide__slide slide-4"></li>
                    <li class="splide__slide slide-5"></li>
                    <li class="splide__slide slide-6"></li>
                    </ul>
                </div>
            </div>
        <?php endif;?>
    </header>
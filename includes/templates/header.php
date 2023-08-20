<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mussa Cafec</title>
    <link rel="stylesheet" href="/build/css/app.css">
    <link rel="stylesheet" href="node_modules/@splidejs/splide/dist/css/splide.min.css">
    <script src="node_modules/@splidejs/splide/dist/js/splide.min.js"></script>
    <script src="src/js/app.js"></script>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <h1 class="heading">Mussa Cafec</h1>
            <ul class="nav__link">
                <li class="nav__item">
                    <a href="/">Inicio</a>
                </li>
                <li class="nav__item">
                    <a href="">Evento</a>
                </li>
                <li class="nav__item">
                    <a href="">Ponentes</a>
                </li>
                <li class="nav__item">
                    <a href="">Registro</a>
                </li>
            </ul>
        </nav>
        <div class="splide" role="group" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                <li class="splide__slide slide-1"></li>
                <li class="splide__slide slide-2"></li>
                <li class="splide__slide slide-3"></li>
                </ul>
            </div>
        </div>
    </header>
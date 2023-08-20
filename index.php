<?php
    require_once 'config/config.php';
    $inicio = true;
    incluirTemplate('header', $inicio);
?>
    <main class="inicio">
        <section class="concursos">
            <div class="concurso contain">
                <img src="/build/img/splide1.jpeg" alt="">
                <div class="concurso-informacion">
                    <h1 class="heading">Ponentes</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium veniam quas dolorem excepturi explicabo! Facere eligendi, cumque hic commodi ratione vel illo tenetur, explicabo itaque vitae doloremque. Corporis, veritatis quisquam.</p>
                </div>
            </div>
            <div class="concurso contain">
                <img src="/build/img/splide1.jpeg" alt="">
                <div class="concurso-informacion">
                    <h1 class="heading">Torneo de Robótica</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium veniam quas dolorem excepturi explicabo! Facere eligendi, cumque hic commodi ratione vel illo tenetur, explicabo itaque vitae doloremque. Corporis, veritatis quisquam.</p>
                </div>
            </div>
            <div class="concurso contain">
                <img src="/build/img/splide1.jpeg" alt="">
                <div class="concurso-informacion">
                    <h1 class="heading">Ponentes</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium veniam quas dolorem excepturi explicabo! Facere eligendi, cumque hic commodi ratione vel illo tenetur, explicabo itaque vitae doloremque. Corporis, veritatis quisquam.</p>
                </div>
            </div>
        </section>
        <section class="concursos-cards">
            <h1 class="heading">Participa en nuestros concursos</h1>
            <div class="cards">
                <div class="card">
                    <button class="boton-verde-block">Inscribete</button>
                </div>
                <div class="card">
                    <button class="boton-verde-block">Inscribete</button>
                </div>
                <div class="card">
                    <button class="boton-verde-block">Inscribete</button>
                </div>
            </div>
        </section>
        <section class="concursos-cards">
            <h1 class="heading">Ponentes</h1>
            <div class="splide ponentes" role="group" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide slide-1">
                            <div class="ponente">
                                <h1>Ponente 1</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, expedita aspernatur vero nulla suscipit repudiandae, optio impedit deserunt praesentium alias, quas inventore nesciunt magni cupiditate numquam sequi nostrum consequatur reprehenderit!</p>
                            </div>
                        </li>
                        <li class="splide__slide slide-2">
                            <div class="ponente">
                                <h1>Ponente 1</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, expedita aspernatur vero nulla suscipit repudiandae, optio impedit deserunt praesentium alias, quas inventore nesciunt magni cupiditate numquam sequi nostrum consequatur reprehenderit!</p>
                            </div>
                        </li>
                        <li class="splide__slide slide-3">
                            <div class="ponente">
                                <h1>Ponente 1</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, expedita aspernatur vero nulla suscipit repudiandae, optio impedit deserunt praesentium alias, quas inventore nesciunt magni cupiditate numquam sequi nostrum consequatur reprehenderit!</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <nav class="nav nav--footer">
            <ul class="nav__link nav__link--footer">
                <li class="nav__item">
                    <a href="#">Inicio</a>
                </li>
                <li class="nav__item">
                    <a href="#">Evento</a>
                </li>
                <li class="nav__item">
                    <a href="#">Ponentes</a>
                </li>
                <li class="nav__item">
                    <a href="#">Registro</a>
                </li>
            </ul>
        </nav>
        <div class="footer__social">
            <a href="#" class="footer__icons"><img src="/build/assets/redes/facebook.png" class="footer__img"></a>
            <a href="#" class="footer__icons"><img src="/build/assets/redes/instagram.png" class="footer__img"></a>
            <a href="#" class="footer__icons"><img src="/build/assets/redes/twitter.png" class="footer__img"></a>
            <a href="#" class="footer__icons"><img src="/build/assets/redes/youtube.png" class="footer__img"></a>
        </div>
    </footer>
</body>
</html>
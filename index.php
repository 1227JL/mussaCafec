<?php
    require_once 'includes/config/funciones.php';
    $inicio = true;
    incluirTemplate('header', $inicio);
?>
    <main class="inicio">
        <section class="concursos contain">
            <h1 class="heading">¡Bienvenidos al VI Encuentro de Semilleros de Investigación SENA Regional Casanare!</h1>
            <p>El VI Encuentro Regional de Semillero de Investigación de la Orinoquia, organizado por Sena regional Casanare, busca fomentar la investigación, innovación y desarrollo tecnológico entre aprendices e instructores al divulgar y reconocer el trabajo de semilleros y grupos de investigación en la región. El evento se propone como un espacio para que empresarios, aprendices, instructores y emprendedores aborden soluciones a situaciones reales en la región Orinoquia. Este encuentro busca generar soluciones prácticas y reales para diversas áreas diarias de empresarios, agricultores y ganaderos de Casanare, impulsando la creación de nuevo conocimiento aplicado con el apoyo de SENNOVA. El evento se llevará a cabo los días <span>17 y 18 de octubre de 2023</span> e incluirá ponencias, pósters, feria empresarial y un torneo de robótica.</p>
            <div class="concurso contain">
                <img src="/build/img/academico1.jpg" alt="">
                <div class="concurso-informacion">
                    <h1 class="heading">Academico</h1>
                    <p>¡Es hora de brillar en el escenario del conocimiento en el SENA Casanare! Te animamos a inscribirte en una de nuestras dos emocionantes categorías: ¡como ponente con tus ideas innovadoras o presentando un poster impactante! No pierdas la oportunidad de compartir y aprender. ¡Inscríbete ahora y sé parte de este evento excepcional!</p>
                </div>
            </div>
            <div class="concurso contain">
                <img src="/build/img/robotica1.jpg" alt="">
                <div class="concurso-informacion">
                    <h1 class="heading">Torneo de Robótica</h1>
                    <p>¡Prepárate para un desafío emocionante en el mundo de la robótica! El SENA Casanare te invita a inscribirte en nuestro Concurso de Robótica, donde podrás demostrar tus habilidades y creatividad. Tenemos varias categorías esperándote, desde la competencia de robots autónomos hasta el diseño de soluciones robóticas innovadoras. ¡No pierdas la oportunidad de participar! Inscríbete ahora y sé parte de esta emocionante aventura tecnológica. ¡Tu ingenio nos sorprenderá!</p>
                </div>
            </div>
            <div class="concurso contain">
                <img src="/build/img/feria1.jpg" alt="">
                <div class="concurso-informacion">
                    <h1 class="heading">Feria Empresarial</h1>
                    <p>¡Prepárate para un evento increíble con el SENA Casanare! Te invitamos a ser parte de nuestra Feria Empresarial, donde la innovación y los negocios se fusionan en un espacio único. Explora una amplia gama de stands que ofrecen productos innovadores y servicios vanguardistas, mientras te sumerges en charlas inspiradoras con líderes de la industria. Ya seas emprendedor, empresario o simplemente apasionado por el mundo empresarial, esta es tu oportunidad para conectarte, aprender y crecer. Regístrate ahora para asegurar tu lugar en esta emocionante feria que promete ser una experiencia enriquecedora llena de oportunidades de networking y conocimientos clave. ¡No te lo pierdas!</p>
                </div>
            </div>
        </section>
        <section class="concursos-cards">
            <h1 class="heading">Participa en nuestros concursos</h1>
            <div class="cards">
                <div class="card">
                    <h1>Academico</h1>
                    <img src="/build/img/academico2.jpg" alt="Img academico">
                    <a href="/views/Registro/poster-ponentes.php" class="boton-verde-block">Inscribete</a>
                </div>
                <div class="card">
                    <h1>Feria Empresarial</h1>
                    <img src="/build/img/feria2.jpg" alt="Img Feria">
                    <a href="/views/Registro/feriaEmpresarial.php" class="boton-verde-block">Inscribete</a>
                </div>
                <div class="card">
                    <h1>Torneo de Robótica</h1>
                    <img src="/build/img/robotica2.jpg" alt="Img Robotica">
                    <a href="/views/Registro/Robotica.php" class="boton-verde-block">Inscribete</a>
                </div>
            </div>
        </section>
        <section class="ponentes">
            <h1 class="heading">Ponentes</h1>
            <div class="splide" role="group" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide slide-1">
                            <div>
                                <h1 class="heading">Ponente 1</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, expedita aspernatur vero nulla suscipit repudiandae, optio impedit deserunt praesentium alias, quas inventore nesciunt magni cupiditate numquam sequi nostrum consequatur reprehenderit!</p>
                            </div>
                            <img src="/build/assets/user.jpg" alt="imagen del ponente">
                        </li>
                        <li class="splide__slide slide-2">
                            <div>
                                <h1 class="heading">Ponente 1</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, expedita aspernatur vero nulla suscipit repudiandae, optio impedit deserunt praesentium alias, quas inventore nesciunt magni cupiditate numquam sequi nostrum consequatur reprehenderit!</p>
                            </div>
                            <img src="/build/assets/user.jpg" alt="imagen del ponente">
                        </li>
                        <li class="splide__slide slide-3">
                            <div>
                                <h1 class="heading">Ponente 1</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, expedita aspernatur vero nulla suscipit repudiandae, optio impedit deserunt praesentium alias, quas inventore nesciunt magni cupiditate numquam sequi nostrum consequatur reprehenderit!</p>
                            </div>
                            <img src="/build/assets/user.jpg" alt="imagen del ponente">
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <nav class="nav nav--footer">
            <p>@SENA comunica</p>
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
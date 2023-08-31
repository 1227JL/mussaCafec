<?php
    require_once 'includes/config/funciones.php';
    $inicio = true;
    incluirTemplate('header', $inicio);
?>
    <main class="inicio">
        <div class="contain">     
            <h1 class="heading">¡Bienvenidos al VI Encuentro de Semilleros de Investigación SENA Regional Casanare!</h1>
            <p>El VI Encuentro Regional de Semillero de Investigación de la Orinoquia, organizado por Sena regional Casanare, busca fomentar la investigación, innovación y desarrollo tecnológico entre aprendices e instructores al divulgar y reconocer el trabajo de semilleros y grupos de investigación en la región. El evento se propone como un espacio para que empresarios, aprendices, instructores y emprendedores aborden soluciones a situaciones reales en la región Orinoquia. Este encuentro busca generar soluciones prácticas y reales para diversas áreas diarias de empresarios, agricultores y ganaderos de Casanare, impulsando la creación de nuevo conocimiento aplicado con el apoyo de SENNOVA. El evento se llevará a cabo los días <span class="error">17 y 18 de octubre de 2023</span> e incluirá ponencias, pósters, feria empresarial y un torneo de robótica.</p>
        </div>
        <section class="concursos">
            <div class="concurso">
                <div class="contain" data-aos="fade-up">
                    <div class="card card-1">
                        <a href="/views/Registro/poster-ponentes.php">Registrate!</a>
                    </div>
                    <div class="concurso-informacion">
                        <h1 class="heading">Academico</h1>
                        <p>¡VI Encuentro Regional de Semilleros de investigación SENA Regional Casanare, desde la innovación e investigación hacia la transferencia energética, tiene el objetivo de Fomentar la investigación, innovación y desarrollo tecnológico en los aprendices e instructores del Sena Regional Casanare a través de la divulgación y reconocimiento del trabajo desarrollado desde los semilleros y grupos de investigación de la región Orinoquia.!</p>
                        <a onclick="archivoAcademico()">Términos y condiciones
                            <img src="/build/assets/arrow-right.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="concurso">
                <div class="contain" data-aos="fade-up">
                    <div class="card card-2">
                        <a href="/views/Registro/feriaEmpresarial.php">!Registrate</a>
                    </div>
                    <div class="concurso-informacion">
                        <h1 class="heading">Feria Empresarial</h1>
                        <p>Un espació que reúne en un mismo lugar a emprendedores, estudiantes y aprendices con el propósito de visibilizar sus emprendimientos, negocios o proyectos que cuenten con productos y servicios que puedan ser ofrecidos a la comunidad</p>
                        <a onclick="archivoFeria()">Términos y condiciones
                            <img src="/build/assets/arrow-right.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="concurso">
                <div class="contain" data-aos="fade-up">
                    <div class="card card-3">
                        <a href="/views/Registro/Robotica.php">Registrate!</a>
                    </div>
                    <div class="concurso-informacion">
                        <h1 class="heading">Torneo de Robótica</h1>
                        <p>1er Torneo de Robótica SENA Regional Casanare, proyecto que busca fortalecer las capacidades y habilidades en temas ciencia, tecnología, innovación, ingeniería y robótica a través de la competencia en robot seguidor de línea velocistas, robot de batalla mini-sumo, robot futbolero y robot SENABOT</p>
                        <a onclick="archivoRobotica()">Términos y condiciones
                            <img src="/build/assets/arrow-right.png" alt="">
                        </a>
                    </div>
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
                                <h1 class="heading">Eliana Maria Ruiz Bayona</h1>
                                <p>Médico Veterinario y Zootecnista, Esp. Nutrición Animal Sostenible, Candidata a Msc en Ciencias Veterinaria</p>
                                <p>Evaluación  de la efectividad de la inseminación postcervical profunda en hembras porcinas de las provincias del Tundama y Sugamuxi.</p>
                            </div>
                            <img src="/build/assets/user.jpg" alt="imagen del ponente">
                        </li>
                        <li class="splide__slide slide-2">
                            <div>
                                <h1 class="heading">Juan Humberto Sossa Azuela</h1>
                                <p>Es Doctor en Informática por el Instituto Nacional Politécnico de Grenoble, Francia, y profesor en el Instituto Politécnico Nacional. Lidera el Laboratorio de Robótica y Mecatrónica y es miembro Emérito del Sistema Nacional de Investigadores. Reconocido en la Academia Mexicana de Ciencias y la Academia de Ingeniería, es Fellow del IEEE y la Sociedad Mexicana de Inteligencia Artificial. Ha sido galardonado con el Premio Nacional de Computación y el Premio Nacional de la Academia de Ciencias de Cuba 2021. Con más de 450 publicaciones, su investigación abarca Inteligencia Artificial, Aprendizaje Automático, Robótica y Metaversos.</p>
                            </div>
                            <div class="ponente_image"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="top-footer">
            <img class="icon-footer" src="/build/img/LogoSENA_Sennova.png" alt="@SENA comunica">
            <div class="footer__social">
                <a href="https://www.facebook.com/SENACasanare" class="footer__icons" target="blank"><img src="/build/assets/redes/facebook.png" class="footer__img"></a>
                <a href="https://instagram.com/senacomunica?igshid=MzRlODBiNWFlZA==" class="footer__icons" target="blank"><img src="/build/assets/redes/instagram.png" class="footer__img"></a>
                <a href="https://twitter.com/SENACasanare?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="footer__icons" target="blank"><img src="/build/assets/redes/twitter.png" class="footer__img"></a>
                <a href="https://www.youtube.com/@SENAComunica" class="footer__icons" target="blank"><img src="/build/assets/redes/youtube.png" class="footer__img"></a>
            </div>
        </div>
        <div class="text-footer">
            <p>Desarrollado por Julian Lopez & Eduar Cruz &copy <?= date('Y') ?></p>
        </div>
    </footer>
</body>
</html>
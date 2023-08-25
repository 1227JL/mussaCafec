<?php
    require_once 'includes/config/funciones.php';
    $inicio = true;
    incluirTemplate('header', $inicio);
?>
    <main class="inicio">
        <div class="contain">     
            <h1 class="heading">¡Bienvenidos al VI Encuentro de Semilleros de Investigación SENA Regional Casanare!</h1>
            <p>El VI Encuentro Regional de Semillero de Investigación de la Orinoquia, organizado por Sena regional Casanare, busca fomentar la investigación, innovación y desarrollo tecnológico entre aprendices e instructores al divulgar y reconocer el trabajo de semilleros y grupos de investigación en la región. El evento se propone como un espacio para que empresarios, aprendices, instructores y emprendedores aborden soluciones a situaciones reales en la región Orinoquia. Este encuentro busca generar soluciones prácticas y reales para diversas áreas diarias de empresarios, agricultores y ganaderos de Casanare, impulsando la creación de nuevo conocimiento aplicado con el apoyo de SENNOVA. El evento se llevará a cabo los días <span>17 y 18 de octubre de 2023</span> e incluirá ponencias, pósters, feria empresarial y un torneo de robótica.</p>
        </div>
        <section class="concursos">
            <div class="concurso">
                <div class="contain" data-aos="fade-up">
                    <div class="card card-1">
                        <h1>Academico</h1>
                        <a href="/views/Registro/poster-ponentes.php">Inscribete</a>
                    </div>
                    <script>
                        AOS.init();
                    </script>
                    <div class="concurso-informacion">
                        <h1 class="heading">Academico</h1>
                        <p>¡Es hora de brillar en el escenario del conocimiento en el SENA Casanare! Te animamos a inscribirte en una de nuestras dos emocionantes categorías: ¡como ponente con tus ideas innovadoras o presentando un poster impactante! No pierdas la oportunidad de compartir y aprender. ¡Inscríbete ahora y sé parte de este evento excepcional!</p>
                        <a href="">Términos y condiciones
                            <img src="/build/assets/arrow-right.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="concurso">
                <div class="contain" data-aos="fade-up">
                    <div class="card card-2">
                        <h1>Feria Empresarial</h1>
                        <a href="/views/Registro/Robotica.php">Inscribete</a>
                    </div>
                    <div class="concurso-informacion">
                        <h1 class="heading">Feria Empresarial</h1>
                        <p>¡Prepárate para un evento increíble con el SENA Casanare! Te invitamos a ser parte de nuestra Feria Empresarial, donde la innovación y los negocios se fusionan en un espacio único. Explora una amplia gama de stands que ofrecen productos innovadores y servicios vanguardistas, mientras te sumerges en charlas inspiradoras con líderes de la industria. Ya seas emprendedor, empresario o simplemente apasionado por el mundo empresarial, esta es tu oportunidad para conectarte, aprender y crecer. Regístrate ahora para asegurar tu lugar en esta emocionante feria que promete ser una experiencia enriquecedora llena de oportunidades de networking y conocimientos clave. ¡No te lo pierdas!</p>
                        <a href="">Términos y condiciones
                            <img src="/build/assets/arrow-right.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="concurso">
                <div class="contain" data-aos="fade-up">
                    <div class="card card-3">
                        <h1>Torneo de Robótica</h1>
                        <a href="/views/Registro/poster-ponentes.php">Inscribete</a>
                    </div>
                    <div class="concurso-informacion">
                        <h1 class="heading">Torneo de Robótica</h1>
                        <p>¡Prepárate para un desafío emocionante en el mundo de la robótica! El SENA Casanare te invita a inscribirte en nuestro Concurso de Robótica, donde podrás demostrar tus habilidades y creatividad. Tenemos varias categorías esperándote, desde la competencia de robots autónomos hasta el diseño de soluciones robóticas innovadoras. ¡No pierdas la oportunidad de participar! Inscríbete ahora y sé parte de esta emocionante aventura tecnológica. ¡Tu ingenio nos sorprenderá!</p>
                        <a href="">Términos y condiciones
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
                            <img src="/build/assets/user.jpg" alt="imagen del ponente">
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <p>@SENA comunica</p>
        
        <div class="footer__social">
            <a href="#" class="footer__icons"><img src="/build/assets/redes/facebook.png" class="footer__img"></a>
            <a href="#" class="footer__icons"><img src="/build/assets/redes/instagram.png" class="footer__img"></a>
            <a href="#" class="footer__icons"><img src="/build/assets/redes/twitter.png" class="footer__img"></a>
            <a href="#" class="footer__icons"><img src="/build/assets/redes/youtube.png" class="footer__img"></a>
        </div>
    </footer>
</body>
</html>
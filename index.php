<?php
    require_once 'includes/config/funciones.php';
    $inicio = true;
    incluirTemplate('header', $inicio);

    // if ($_SERVER["HTTPS"] != "on") {
    //     // Redirige a la versión HTTPS de la misma página
    //     $redirect_url = "https://www.mussacafec.com/";
    //     header("Location: $redirect_url");
    //     exit();
    // }
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
                        <!-- <a href="/views/Registro/poster-ponentes.php">Registrate!</a> -->
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
                        <!-- <a href="/views/Registro/feriaEmpresarial.php">!Registrate</a> -->
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
                        <!-- <a href="/views/Registro/Robotica.php">Registrate!</a> -->
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
            <div class="concurso">
                <div class="contain" data-aos="fade-up">
                    <div class="card card-4">
                        <!-- <a href="/views/Registro/programacion.php">Registrate!</a> -->
                    </div>
                    <div class="concurso-informacion">
                        <h1 class="heading">Maraton de Programación</h1>
                        <p>Únete a nosotros para una jornada llena de desafíos y codificación, donde la creatividad y la destreza en la programación se combinan en un ambiente de aprendizaje. Tendrás la flexibilidad de trabajar en equipo o en solitario, enfrentándote a intrigantes problemas de programación que pondrán a prueba tus habilidades y tu ingenio</p>
                        <a onclick="archivoProgramacion()">Términos y condiciones
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
<?php incluirTemplate('footer'); ?>
</body>
</html>

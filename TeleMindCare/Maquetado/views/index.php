<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaguares</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,300italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/style.css">
    <!-- Agrega los estilos de Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
</head>

<body>

    <header>
    <div class="header-overlay"></div>
        <div class="contenedor">
            <nav class="menu">
                <a href="#" id="btn-acerca-de">Acerca de</a>
                <a href="#" id="btn-menu">Asociados</a>
                <a href="evaluacion.php" id="btn-galeria">Evaluación</a>
                <a href="seguimineto.php" id="btn-ubicacion">Seguimiento</a>
                <?php
    session_start();

    if (empty($_SESSION['usuario'])) {
        ?>
       
       
       <a href="login.php" id="btn-ubicacion">Iniciar Sesion</a>
       <?php
    } else {
        ?>
       
      
       <a href="../controller/cerrar_sesion.php" id="btn-ubicacion">Cerrar Sesión</a>
       <?php
    }
    ?>
               
            </nav>

            <div class="textos">
                <h1 class="nombre">TeleMindCare</h1>
                <h3>"Juntos en cada pensamiento"</h3>
            </div>
        </div>
    </header>

    <section class="main">
        <section class="acerca-de" id="acerca-de">
            <div class="contenedor">
                
                <div class="foto"><img src="../images/acerca-de.png" alt=""></div>
            </div>
            
            <article>
                <h3>ACERCA DE:</h3>
                <p>Nosotros somos un grupo de estudiantes que tienen un gran reto en frente, asi que estamos dando lo mejor de cada
                    uno de nosotros
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Deserunt, vel. Eveniet incidunt nemo quidem eos illum officia recusandae id iste earum.</p>
            </article>
        </section>
    </section>


    <main class="agenda">
        <div class="eventos">
            <h2 class="agenda__heading">
                Asociados
            </h2>
            <div class="swiper-container eventos__listado slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="" class="evento__hora">
                            Visita mi CV
                        </a>
                        <div class="evento__informacion info">
                            <h4 class="evento__nombre">
                                Psicólogo
                            </h4>
                            <p class="evento__introduccion"> Psicología Clínica y Terapia de Pareja. Más de 15 años de experiencia en terapia individual y de pareja </p>
                            <div class="evento__autor-info">
                                <picture>
                                    <source srcset="../images/speakers/0ce9a8963fdd9ddb8514c7b2c08cc4e7.webp" type="image/webp">
                                    <source srcset="../images/speakers/0ce9a8963fdd9ddb8514c7b2c08cc4e7.png" type="image/png">
                                    <img class="evento__imagen-autor" loading="lazy" width="100" height="100" src="../images/speakers/0ce9a8963fdd9ddb8514c7b2c08cc4e7.png" alt="Imagen Ponente">
                                </picture>
                                <p class="evento__autor-nombre">
                                    Magdiel Nadir Cuevas
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <a href="" class="evento__hora">
                            Visita mi CV
                        </a>
                        <div class="evento__informacion info">
                            <h4 class="evento__nombre">
                                Psicólogo
                            </h4>
                            <p class="evento__introduccion">Profesional en el analisis del comportamiento humano </p>
                            <div class="evento__autor-info">
                                <picture>
                                    <source srcset="../images/speakers/2a41a781d8ae8f0f7a1969c766276b08.webp" type="image/webp">
                                    <source srcset="../images/speakers/2a41a781d8ae8f0f7a1969c766276b08.png" type="image/png">
                                    <img class="evento__imagen-autor" loading="lazy" width="100" height="100" src="../images/speakers/2a41a781d8ae8f0f7a1969c766276b08.png" alt="Imagen Ponente">
                                </picture>
                                <p class="evento__autor-nombre">
                                    Daniel Garcia
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="evento__hora">
                            Visita mi CV
                        </a>
                        <div class="evento__informacion info">
                            <h4 class="evento__nombre">
                                Psicóloga
                            </h4>
                            <p class="evento__introduccion">Profesional en Psicologia Mental </p>
                            <div class="evento__autor-info">
                                <picture>
                                    <source srcset="../images/speakers/de6e3fa0cde8402de4c28e6be0903ada.png" type="image/png">
                                    <source srcset="../images/speakers/0ce9a8963fdd9ddb8514c7b2c08cc4e7.png" type="image/png">
                                    <img class="evento__imagen-autor" loading="lazy" width="100" height="100" src="../images/speakers/0ce9a8963fdd9ddb8514c7b2c08cc4e7.png" alt="Imagen Ponente">
                                </picture>
                                <p class="evento__autor-nombre">
                                    Daniela Garcia
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <a href="" class="evento__hora">
                            Visita mi CV
                        </a>
                        <div class="evento__informacion info" >
                            <h4 class="evento__nombre">
                                Psicóloga
                            </h4>
                            <p class="evento__introduccion">Psicología Infantil y Terapia Familiar. Amplia experiencia en el tratamiento de trastornos del desarrollo infantil y problemas familiares. </p>
                            <div class="evento__autor-info">
                                <picture>
                                    <source srcset="../images/speakers/e481bca0c512f5b4d8f76ccea2548f0d.png" type="image/png">
                                    <source srcset="../images/speakers/0ce9a8963fdd9ddb8514c7b2c08cc4e7.png" type="image/png">
                                    <img class="evento__imagen-autor" loading="lazy" width="100" height="100" src="../images/speakers/0ce9a8963fdd9ddb8514c7b2c08cc4e7.png" alt="Imagen Ponente">
                                </picture>
                                <p class="evento__autor-nombre">
                                    Lic. Carlos Rodríguez
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <a href="" class="evento__hora">
                            Visita mi CV
                        </a>
                        <div class="evento__informacion info">
                            <h4 class="evento__nombre">
                                Psicóloga
                            </h4>
                            <p class="evento__introduccion"> Psicología de la Salud y Bienestar. Experiencia en el manejo del estrés, la ansiedad y la promoción de estilos de vida saludables.</p>
                            <div class="evento__autor-info">
                                <picture>
                                    <source srcset="../images/speakers/cec8c9d7bcb4c19e87d1164bce8fe176.png" type="image/png">
                                    <source srcset="../images/speakers/0ce9a8963fdd9ddb8514c7b2c08cc4e7.png" type="image/png">
                                    <img class="evento__imagen-autor" loading="lazy" width="100" height="100" src="../images/speakers/0ce9a8963fdd9ddb8514c7b2c08cc4e7.png" alt="Imagen Ponente">
                                </picture>
                                <p class="evento__autor-nombre">
                                    Mtra. Ana Gómez
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <a href="" class="evento__hora">
                            Visita mi CV
                        </a>
                        <div class="evento__informacion info">
                            <h4 class="evento__nombre">
                                Psicóloga
                            </h4>
                            <p class="evento__introduccion">Psicología Forense y Evaluación Psicológica. Más de 10 años trabajando en el sistema legal como perito psicólogo.</p>
                            <div class="evento__autor-info">
                                <picture>
                                    <source srcset="../images/speakers/d53dde21b4cee90c367c08b89da57f23.png" type="image/png">
                                    <source srcset="../images/speakers/0ce9a8963fdd9ddb8514c7b2c08cc4e7.png" type="image/png">
                                    <img class="evento__imagen-autor" loading="lazy" width="100" height="100" src="../images/speakers/0ce9a8963fdd9ddb8514c7b2c08cc4e7.png" alt="Imagen Ponente">
                                </picture>
                                <p class="evento__autor-nombre">
                                    Dr. Andrés López
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <a href="" class="evento__hora">
                            Visita mi CV
                        </a>
                        <div class="evento__informacion info" >
                            <h4 class="evento__nombre">
                                Psicóloga
                            </h4>
                            <p class="evento__introduccion">Psicología de la Adolescencia y Orientación Vocacional. Trabajo con adolescentes y jóvenes adultos para abordar cuestiones de identidad y elección de carrera. </p>
                            <div class="evento__autor-info">
                                <picture>
                                    <source srcset="../images/speakers/de6e3fa0cde8402de4c28e6be0903ada.png" type="image/png">
                                    <source srcset="../images/speakers/0ce9a8963fdd9ddb8514c7b2c08cc4e7.png" type="image/png">
                                    <img class="evento__imagen-autor" loading="lazy" width="100" height="100" src="../images/speakers/0ce9a8963fdd9ddb8514c7b2c08cc4e7.png" alt="Imagen Ponente">
                                </picture>
                                <p class="evento__autor-nombre">
                                    Lic. María Fernández
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <a href="" class="evento__hora">
                            Visita mi CV
                        </a>
                        <div class="evento__informacion info">
                            <h4 class="evento__nombre">
                                Psicóloga
                            </h4>
                            <p class="evento__introduccion">Psicología de la Salud y Psicología Deportiva. Trabajo con atletas y personas que buscan mejorar su bienestar físico y mental.</p>
                            <div class="evento__autor-info">
                                <picture>
                                    <source srcset="../images/speakers/d697f6c454c36252d70abacd7599566c.png" type="image/png">
                                    <source srcset="../images/speakers/0ce9a8963fdd9ddb8514c7b2c08cc4e7.png" type="image/png">
                                    <img class="evento__imagen-autor" loading="lazy" width="100" height="100" src="../images/speakers/0ce9a8963fdd9ddb8514c7b2c08cc4e7.png" alt="Imagen Ponente">
                                </picture>
                                <p class="evento__autor-nombre">
                                    Dra. Carla Vargas
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <a href="" class="evento__hora">
                            Visita mi CV
                        </a>
                        <div class="evento__informacion info">
                            <h4 class="evento__nombre">
                                Psicóloga
                            </h4>
                            <p class="evento__introduccion">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati blanditiis maiores minima quod aut </p>
                            <div class="evento__autor-info">
                                <picture>
                                    <source srcset="../images/speakers/0ce9a8963fdd9ddb8514c7b2c08cc4e7.webp" type="image/webp">
                                    <source srcset="../images/speakers/0ce9a8963fdd9ddb8514c7b2c08cc4e7.png" type="image/png">
                                    <img class="evento__imagen-autor" loading="lazy" width="100" height="100" src="../images/speakers/0ce9a8963fdd9ddb8514c7b2c08cc4e7.png" alt="Imagen Ponente">
                                </picture>
                                <p class="evento__autor-nombre">
                                    Daniela Garcia
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Agrega más eventos aquí si es necesario -->
                </div>
                
            </div>
        </div>
    </main>

    <section class="contacto">
            <div class="contenedor">

                <form action="" class="formulario">
                    <h3 class="titulo"> Contacto</h3>
                    <h2>Unete a nuestro equipo</h2>

                    <div class="row">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" required>
                        </div>

                        <div class="form-group">
                            <label for="correo">Correo Electrónico:</label>
                            <input type="email" id="correo" name="correo" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telefono">Número de Teléfono:</label>
                        <input type="tel" id="telefono" name="telefono" pattern="[0-9]{10}" required>
                    </div>

                    <div class="form-group">
                        <label for="informacion">Información Adicional:</label>
                        <textarea id="informacion" name="informacion" rows="4" cols="50"></textarea>
                    </div>

                    <input type="submit" value="Enviar">

                </form>
            </div>
        </section>

    <footer>
       

        <div class="footer-content">
        <p>&copy; 2023 Tu Empresa. Todos los derechos reservados.</p>
        
    </div>
        <hr style="border: 400px;">

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var swiper = new Swiper('.eventos__listado', {
                slidesPerView: 5,
  spaceBetween: 20,

                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
    </script>
    <script src="../js/jquery-1.12.3.min.js"></script>
    <script src="../js/parallax.js"></script>
    <script src="../js/efectos.js"></script>
    
</body>

</html>
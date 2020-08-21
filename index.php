<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@400;700&family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://s.pageclip.co/v1/pageclip.css" media="screen">
    <link rel="stylesheet" href="css/uikit.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/j-logo.png" type="image/x-icon">
    <title>Jose De Avila ~ Inicio</title>
</head>
<<<<<<< HEAD:index.html
<body onscroll="scroll()" onload="showMessage()" id="body">
=======
<body onscroll="scroll()">
    <script>
    window.addEventListener('load', function(){
        let success = <?= $_GET['id']?>;
        if(success==1){
            let success_msg = document.getElementById('msg-success');
            success_msg.style.display="block";
        }
    });
    </script>
>>>>>>> c6b4c49823a127c44acbc8b657daeb23046d481c:index.php
    <div class="wsp">
        <a  href="https://api.whatsapp.com/send?phone=573015243359&text=Me%20gustaría%20contratar%20sus%20servicios" uk-icon="whatsapp" class="wsp-icon uk-icon-button" target="_blank"></a>
        <span class="texto-wsp">Contáctanos</span>
    </div>
<<<<<<< HEAD:index.html
    <div class="alert-msg" id="alert-msg">
        <div class="elements">
            <div class="close" onclick="HiddeWindowSuccess()">
                X
            </div>
            <div class="check">
                <div class="success-checkmark">
                  <div class="check-icon">
                    <span class="icon-line line-tip"></span>
                    <span class="icon-line line-long"></span>
                    <div class="icon-circle"></div>
                    <div class="icon-fix"></div>
                  </div>
                </div>
            </div>
            <div class="text">
                <p>Su mensaje se esta enviando. Si es exitoso, se redireccionará a una página de confirmación.</p>
=======
    <header id="inicio">
        <div class="header-init">
            <div class="nav">
                <nav uk-navbar id="navbar">
                    <li class="uk-logo"><a href="#">
                        <img src="img/j-logo.png" alt="" width="50" height="50">
                        <span class="text-brand">Jose De Avila</span>
                    </a></li>
                    <div class="menu">
                        <a class="uk-navbar-toggle" uk-navbar-toggle-icon onclick="mostrar()"></a>
                    </div>
                    <div class="links">
                        <ul class="list-menu" id="menu">
                            <li>
                                <a class="prueba no-scroll" href="#inicio" onclick="mostrar()">INICIO</a>
                            </li>
                            <li>
                                <a class="prueba no-scroll" href="#conocimientos" onclick="mostrar()">CONOCIMIENTOS</a>
                            </li>
                            <li>
                                <a class="prueba no-scroll" href="#relacionados" onclick="mostrar()">RELACIONADOS</a>
                            </li>
                            <li>
                                <a class="prueba no-scroll" href="#contacto" onclick="mostrar()">CONTACTO</a>
                            </li>
                        </ul>
                    </div>
                </nav>
>>>>>>> c6b4c49823a127c44acbc8b657daeb23046d481c:index.php
            </div>
        </div>
    </div>
    <header id="inicio">
        <div class="header-init">
            <nav uk-navbar id="navbar">
                <li class="uk-logo"><a href="#">
                    <img src="img/j-logo.png" alt="" width="50" height="50">
                    <span class="text-brand">Jose De Avila</span>
                </a></li>
                <div class="menu">
                    <a class="uk-navbar-toggle" id="btn-menu" onclick="mostrar()">&#61;</a>
                </div>
                <ul class="links" id="menu">
                    <li>
                        <a class="prueba no-scroll" href="#inicio" onclick="mostrar()">INICIO</a>
                    </li>
                    <li>
                        <a class="prueba no-scroll" href="#conocimientos" onclick="mostrar()">CONOCIMIENTOS</a>
                    </li>
                    <li>
                        <a class="prueba no-scroll" href="#portfolio" onclick="mostrar()">PORTFOLIO</a>
                    </li>
                    <li>
                        <a class="prueba no-scroll" href="#contacto" onclick="mostrar()">CONTACTO</a>
                    </li>
                </ul>
            </nav>
        </div><br>
        <br>
        <br>
        <div class="infor">
            <div class="img">
            </div>
            <div class="descripcion">
                <p class="nombreCompleto">Jose Luis De Avila Mercado</p>
                <p class="descrip">
                    Estudiante de ingeniería informática, con más de 5 años de experiencia
                    en el desarrollo web. Conocimiento en varias ramas de las TIC. Me gusta
                    investigar, y siempre intentar buscar una solución rápida y eficaz a los problemas.
                </p>
            </div>
        </div>
        <span class="abajo"><a href="#conocimientos" uk-icon="icon: arrow-down; ratio: 3"></a></span>
    </header>
    <hr class="uk-divider-icon" id="conocimientos">
    <main>
        <section class="conocimientos">
            <div class="img-conocimientos">
                <img src="img/conocimientos.svg" alt="Imágen Conocimientos">
            </div>
            <div class="descrip-cono">
                <h1 class="titulo-sec">Conocimientos</h1>
                <p class="elementos"><span class="cono-element" uk-tooltip="Maquetación del sitio web.">HTML5</span>
                    <span class="cono-element" uk-tooltip="Estilos del sitio web.">CSS3</span>
                    <span class="cono-element" uk-tooltip="Programación en el sitio web.">JavaScript</span>
                    <span class="cono-element" uk-tooltip="Generar código del lado del servidor.">PHP</span>
                    <span class="cono-element" uk-tooltip="Gestor de bases de datos.">MySQL</span>
                    <span class="cono-element" uk-tooltip="Framework CSS para el diseño web responsive.">Bootstrap</span>
                    <span class="cono-element" uk-tooltip="Framework para acciones y eventos de la página.">UiKit</span>
                    <span class="cono-element" uk-tooltip="Framework CSS para el diseño web responsive.">Foundation</span>
                    <span class="cono-element" uk-tooltip="Biblioteca de JavaScript para el desarrollo de interfaces.">React</span>
                    <span class="cono-element" uk-tooltip="Lenguaje de programación utilizado principalmente para el desarrollo de videojuegos.">C#</span>
                    <span class="cono-element" uk-tooltip="Lenguaje de programación extendido de C, uno de los lenguajes de programación mas potentes.">C++</span>
                    <span class="cono-element" uk-tooltip="Lenguaje de programación utilizado principalmente para inteligencia artificial y Machine Learning.">Python</span>
                    <span class="cono-element" uk-tooltip="Lenguaje de programación en interfaces y basado en objetos. Utilizado principalmente en la creación de aplicaciones móviles.">Java</span></p>
            </div>
        </section>
        <hr class="uk-divider-icon" id="portfolio">
        <h1 class="titulo-sec">PORTFOLIO</h1>
        <section class="portfolio">
            <ul class="projects">
                <a class="project notiaunar" href="http://notiaunar02.tonohost.com/" target="_blank" uk-icon="chevron-double-right">
                   <img src="img/link.svg" alt="">
                    <div class="text-project">
                        <p class="title-pag">Notiaunar</p>
                        <p class="descrip-pag">Sistema de noticias.</p>
                    </div>
                </a>
                <a class="karthus project" href="http://notiaunar02.tonohost.com/" target="_blank" uk-icon="chevron-double-right">
                    <img src="img/link.svg" alt="">
                    <div class="text-project">
                        <p class="title-pag">Karthus Company</p>
                        <p class="descrip-pag">Página informativa Karthus.</p>
                    </div>
                </a>
            </ul>
        </section>
        <hr class="uk-divider-icon" id="contacto">
        <div class="uk-alert-success" uk-alert style="display: none;" id="msg-success">
            <a class="uk-alert-close" uk-close></a>
            <p>Su mensaje ha sido enviado correctamente. Responderemos lo más pronto posible. ¡Gracias por elegirnos!</p>
        </div>
<<<<<<< HEAD:index.html
        <h1 class="titulo-sec" id="contact1">Contacto</h1>
=======
        <h1 class="titulo-sec">Contacto</h1>
>>>>>>> c6b4c49823a127c44acbc8b657daeb23046d481c:index.php
        <section class="contacto">
            <form action="https://formspree.io/mgenbedp" method="POST" target="_blank" onsubmit="showWindowSuccess()">
                <div class="nombre">
                    <label for="nombre">Nombre Completo:</label>
                    <input type="text" class="uk-input uk-form-width-large" name="nombre" id="nombre" required />
                </div>
                <div class="email">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" class="uk-input uk-form-width-large" name="_replyto" id="email" required />
                </div>
                <div class="asunto">
                    <label for="asunto">Asunto:</label>
                    <input type="text" class="uk-input uk-form-width-large" name="asunto" id="asunto" required />
                </div>
                <div class="mensaje">
                    <label for="msg">Mensaje</label>
                    <textarea name="message" class="uk-input input-msg" id="msg" cols="30" rows="10" required></textarea>
                </div>
                <div class="btn">
                    <button class="btn-enviar pageclip-form__submit--dark-loader" type="submit">
                        <span>Enviar!</span>
                    </button>
                </div>
            </form>
            <p id="my-form-status"></p>
        </section>
    </main>
    <footer>
        <div class="info-emp">
            <a href="#" class="logo"><img src="img/j-logo.png" width="100px" height="100px" alt="">Jose De Avila</a>
            <ul class="links-footer">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#conocimientos">Conocimientos</a></li>
                <li><a href="#relacionados">Relacionados</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </div>
        <div class="social-footer">
            <h2>Redes sociales</h2>
            <ul>
                <li><a target="_blank" href="https://www.facebook.com/lmillons.wilder7" uk-icon="facebook"></a></li>
                <li><a target="_blank" href="https://www.linkedin.com/in/jose-luis-de-avila-mercado-2547471a4/" uk-icon="linkedin"></a></li>
                <li><a target="_blank" href="https://twitter.com/JoseLuisDeAvi13" uk-icon="twitter"></a></li>
            </ul>
        </div>
    </footer>
<<<<<<< HEAD:index.html
<script src="https://s.pageclip.co/v1/pageclip.js" charset="utf-8"></script>
=======
>>>>>>> c6b4c49823a127c44acbc8b657daeb23046d481c:index.php
<script src="js/main.js"></script>
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
</body>
</html>
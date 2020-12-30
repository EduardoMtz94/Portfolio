<x-master :metaTagsSeo="$metaTagsSeo">
    <header>
        <div class="content">
            <div class="sidebar">
                <ul>
                    <li><a target="_blank" href="https://www.linkedin.com/in/eduardo-martinez-san/"><i class="fa fa-linkedin" aria-hidden="true"></i><span>Linkedin</span></a></li>
                    <li><a target="_blank" href="https://github.com/EduardoMtz94"><i class="fa fa-github" aria-hidden="true"></i><span>Github</span></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/el_aleman_mma/"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a></li>
                </ul>
            </div>
            <nav class="menu">
                <a href="#about" id="btn-about">Sobre m&iacute;</a>
                <a href="#portfolio" id="btn-portfolio">Portafolio</a>
                <a href="#contact" id="btn-contact">Cont&aacute;ctame</a>
            </nav>
    
            <div class="title">
                <h1>
                    <span>Hola,</span><br>
                    <span>Soy Eduardo Mart&iacute;nez,</span><br> 
                    <span>Un Apasionado Desarrollador Web</span>
                </h1>
            </div>
        </div>
    </header>
    <section class="main">
        <section class="about" id="about">
            <div class="content">
                <div class="foto">
                    <img src="/img/me.jpeg" alt="Eduardo Martinez | Web Developer | Desarrollador web">
                </div>
                <article>
                    <h2>Sobre m&iacute;</h2>
                    <div class="about-me">
                        <p>Tengo 26 años, soy un Ing. en Tenconlog&iacute;as de la informaci&oacute;n y comunicaciones, así como tambi&eacute;n 
                            soy un desarrollador web de Morelia, Michoac&aacute;n, Mex.</p>
                        <p>Durante ya casi 5 a&ntilde;os he trabajado en diferentes puestos como: Director de sistemas, Tech lead y Desarrollador backend.
                            Esto me ha dado un gran conocimiento y experiencia en manejo y entregas de proyectos, estimación de tiempos, 
                            desarrollo de software de alta calidad, uso de diferentes teconolog&iacute;as, entre otras cosas.
                        </p>
                    </div>
                </article>
            </div>
        </section>
        <section class="skills">
            <div class="content">
                <h2>Mis habilidades</h2>
                <ul>
                    <li>PHP</li>
                    <li>Laravel</li>
                    <li>Javascript</li>
                    <li>Python</li>
                    <li>MySQL</li>
                    <li>Git</li>
                    <li>SASS</li>
                    <li>Linux</li>
                    <li>HTML & CSS</li>
                </ul>
                <div class="about-skills">
                    <p>Durante mi vida laboral he desarrollado var&iacute;as habilidades dentro del campo de la tecnolog&iacute;a, entre ellas el 
                        uso de diferente lenguajes de programaci&oacute;n, manejo de servidores, desarrollo de frontend, control de versiones, entre otras.
                    </p>
                </div>
            </div>
        </section>
        <section class="portfolio" id="portfolio">
            <div class="content">
                <h2>Portafolio</h2>
                <div class="project">
                    <div class="foto">
                        <img src="/img/tweety.jpeg" alt="Tweety" width="300">
                    </div>
                    <article>
                        <h3>Tweety</h3>
                        <p>Tweety es un proyecto de un curso de Laracast, en el cual desarrolle mis habilidades sobre el framework Laravel.</p>
                        <a href="#">Ver m&aacute;s ></a>
                    </article>
                </div>
                <div class="project">
                    <div class="foto">
                        <img src="/img/restaurant.jpeg" alt="Restaurant" width="300">
                    </div>
                    <article>
                        <h3>Restaurante</h3>
                        <p>Es un proyecto de una landing page, haciendo uso de mis conocimientos adquiridos en CSS y SASS.</p>
                        <a href="#">Ver m&aacute;s ></a>
                    </article>
                </div>
                <div class="project">
                    <div class="foto">
                        <img src="/img/portfolio.jpeg" alt="Portfolio" width="300">
                    </div>
                    <article>
                        <h3>Portafolio</h3>
                        <p>Mi proyecto personal, en el cual plasmo mi informaci&oacute;n, as&iacute; como mis contactos para futuros proyectos.</p>
                        <a href="#">Ver m&aacute;s ></a>
                    </article>
                </div>
            </div>
        </section>
        <section class="contact" id="contact">
            <div class="content">
                <h2>Cont&aacute;ctame</h2>
                <p>
                    Si est&aacute;s buscando un desarrollador, tienes alguna pregunta o solamente quieres contactar conmigo,
                    sientete libre de mandarme un correo o contactarme por instagram.
                </p>
                <div class="contact-form">
                    <form action="#" method="POST">
                        @csrf
                        <div class="input-form">
                            <input class="input" type="text" name="name" id="name">
                            <label for="name">Nombre</label>
                        </div>
                        <div class="input-form">
                            <input class="input" type="email" name="email" id="email">
                            <label for="email">Correo Electr&oacute;nico</label>
                        </div>
                        <div class="input-form message">
                            <input class="input" type="text" name="message" id="message"></textarea>
                            <label for="message">Mensaje</label>
                        </div>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </section>
    </section>
    <footer>
        <p>Copyright © 2020, Eduardo Mart&iacute;nez</p> 
    </footer>
</x-master>
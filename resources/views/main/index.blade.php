<x-master>
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
                    <img src="/img/me.jpeg" alt="Eduardo Martinez">
                </div>
                <article>
                    <h2>Sobre m&iacute;</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab cupiditate dolorem debitis soluta voluptates in aliquam nemo exercitationem fugiat quia dolor tempora placeat dolores temporibus inventore consequuntur amet, ad necessitatibus.</p>
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
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae, officia amet provident nostrum sed assumenda harum modi enim autem ducimus quibusdam optio nesciunt laudantium, deleniti quod quae ut, deserunt dolor.</p>
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, eveniet.</p>
                        <a href="#">Ver m&aacute;s ></a>
                    </article>
                </div>
                <div class="project">
                    <div class="foto">
                        <img src="/img/restaurant.jpeg" alt="Restaurant" width="300">
                    </div>
                    <article>
                        <h3>Restaurante</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, unde!</p>
                        <a href="#">Ver m&aacute;s ></a>
                    </article>
                </div>
                <div class="project">
                    <div class="foto">
                        <img src="/img/portfolio.jpeg" alt="Portfolio" width="300">
                    </div>
                    <article>
                        <h3>Portafolio</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, est.</p>
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
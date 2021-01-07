<x-master :metaTagsSeo="$metaTagsSeo">
    <header>
        <div class="content">
            <div class="sidebar">
                <ul>
                    <li><a target="_blank" rel="noopener" href="https://www.linkedin.com/in/eduardo-martinez-san/"><i class="fa fa-linkedin" aria-hidden="true"></i><span>Linkedin</span></a></li>
                    <li><a target="_blank" rel="noopener" href="https://github.com/EduardoMtz94"><i class="fa fa-github" aria-hidden="true"></i><span>Github</span></a></li>
                    <li><a target="_blank" rel="noopener" href="https://www.instagram.com/el_aleman_mma/"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a></li>
                </ul>
            </div>
            <nav class="menu">
                <a href="#about" id="btn-about">@lang('text.aboutMe')</a>
                <a href="#portfolio" id="btn-portfolio">@lang('text.portfolio')</a>
                <a href="#contact" id="btn-contact">@lang('text.contactMe')</a>
            </nav>
    
            <div class="title">
                <h1>
                    <span>@lang('text.hi')</span><br>
                    <span>@lang('text.iAm')</span><br> 
                    <span>@lang('text.passionateDeveloper')</span>
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
                    <h2>@lang('text.aboutMe')</h2>
                    <div class="about-me">
                        <p>@lang('text.aboutFirst')</p>
                        <p>@lang('text.aboutSecond')
                        </p>
                    </div>
                </article>
            </div>
        </section>
        <section class="skills">
            <div class="content">
                <h2>@lang('text.mySkills')</h2>
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
                    <p>@lang('text.aboutSkills')</p>
                </div>
            </div>
        </section>
        <section class="portfolio" id="portfolio">
            <div class="content">
                <h2>@lang('text.portfolio')</h2>
                <div class="project">
                    <div class="foto">
                        <img src="/img/tweety.jpeg" alt="Tweety" width="300">
                    </div>
                    <article>
                        <h3>Tweety</h3>
                        <p>@lang('text.aboutTweety')</p>
                        <a href="#" target="_blank" rel="noopener">@lang('text.seeMore')</a>
                    </article>
                </div>
                <div class="project">
                    <div class="foto">
                        <img src="/img/restaurant.jpeg" alt="Restaurant" width="300">
                    </div>
                    <article>
                        <h3>Restaurante</h3>
                        <p>@lang('text.aboutRestaurante')</p>
                        <a href="https://restaurant.lalocodes.com/" target="_blank" rel="noopener">@lang('text.seeMore')</a>
                    </article>
                </div>
                <div class="project">
                    <div class="foto">
                        <img src="/img/portfolio.jpeg" alt="Startup" width="300">
                    </div>
                    <article>
                        <h3>Startup</h3>
                        <p>@lang('text.aboutStartup')</p>
                        <a href="https://startup.lalocodes.com/" target="_blank" rel="noopener">@lang('text.seeMore')</a>
                    </article>
                </div>
            </div>
        </section>
        <section class="contact" id="contact">
            <div class="content">
                <h2>@lang('text.contactMe')</h2>
                <p>
                    @lang('text.contactText')
                </p>
                <div class="contact-form">
                    <form action="#" method="POST">
                        @csrf
                        <div class="input-form">
                            <input class="input" type="text" name="name" id="name">
                            <label for="name">@lang('text.name')</label>
                        </div>
                        <div class="input-form">
                            <input class="input" type="email" name="email" id="email">
                            <label for="email">@lang('text.email')</label>
                        </div>
                        <div class="input-form message">
                            <input class="input" type="text" name="message" id="message"></textarea>
                            <label for="message">@lang('text.message')</label>
                        </div>
                        <button type="submit">@lang('text.send')</button>
                    </form>
                </div>
                <!--<a class="twitter-timeline"
                    href="https://twitter.com/AlemanEMS"
                    data-chrome="nofooter noborders"
                    data-width="300"
                    data-height="500">
                    Tweets by @AlemanEMS
                </a>-->
            </div>
        </section>
    </section>
    <footer>
        <p>Copyright © 2020, Eduardo Mart&iacute;nez</p> 
    </footer>
</x-master>
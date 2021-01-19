<x-master :metaTagsSeo="$metaTagsSeo">
    <section class="lc-header">
        <nav>
            <div class="container-fluid lc-container fixed-top" id="navbar">
                <div class="row">
                    <div class="col-sm-4 lc-logo">
                        <ul class="nav">
                            <li class="nav-item py-1">
                                <a class="nav-link" class="text-decoration-none" href="/">
                                    <img src="{{ asset('img/lalo-codes-black.png') }}" alt="Lalo codes logo" width="100" id="img-logo">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-8 lc-menu">
                        <ul class="nav justify-content-end">
                            <li class="nav-item py-3">
                                <a class="nav-link" class="text-decoration-none" href="#about" id="btn-about">@lang('text.aboutMe')</a>
                            </li>
                            <li class="nav-item py-3">
                                <a class="nav-link" class="text-decoration-none" href="#portfolio" id="btn-portfolio">@lang('text.portfolio')</a>
                            </li>
                            <li class="nav-item py-3">
                                <a class="nav-link" class="text-decoration-none" href="#contact" id="btn-contact">@lang('text.contactMe')</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    
        <aside>
            <div class="lc-sidebar">
                <ul>
                    <li><a target="_blank" rel="noopener" href="https://www.linkedin.com/in/eduardo-martinez-san/"><i class="fa fa-linkedin" aria-hidden="true"></i><span>Linkedin</span></a></li>
                    <li><a target="_blank" rel="noopener" href="https://github.com/EduardoMtz94"><i class="fa fa-github" aria-hidden="true"></i><span>Github</span></a></li>
                    <li><a target="_blank" rel="noopener" href="https://www.instagram.com/el_aleman_mma/"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a></li>
                </ul>
            </div>
        </aside>
    
        <header>
            <div class="container-xl lc-container">
                <div class="row">
                    <div class="col-sm-12 lc-title-section">
                        <div class="lc-title">
                            <h1>
                                <span>@lang('text.hi')</span><br>
                                <span>@lang('text.iAm')</span><br> 
                                <span>@lang('text.passionateDeveloper')</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>

    <section class="main">
        <section class="lc-about" id="about">
            <div class="container-xl lc-container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 lc-foto align-self-center">
                        <img src="{{ asset('/img/me.jpeg') }}"
                        alt="Eduardo Martinez | Web Developer | Desarrollador web">
                    </div>
                    <div class="col-sm-12 col-md-6 lc-text-about">
                        <h2>@lang('text.aboutMe')</h2>
                        <div class="lc-about-me">
                            <p>@lang('text.aboutFirst')</p>
                            <p>@lang('text.aboutSecond')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="lc-skills">
            <div class="container-xl lc-container">
                <div class="row">
                    <div class="col-12 lc-title-skills">
                        <h2>@lang('text.mySkills')</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 lc-list-skills">
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
                    </div>
                    <div class="col-sm-12 col-md-6 lc-about-skills">
                        <p>@lang('text.aboutSkills')</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="lc-portfolio" id="portfolio">
            <div class="container-xl lc-container">
                <div class="row">
                    <div class="col-12 lc-portfolio-title">
                        <h2>@lang('text.portfolio')</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4 lc-portfolio-content">
                        <div class="lc-portfolio-project">
                            <div class="lc-portfolio-foto">
                                <img src="/img/tweety.jpeg" alt="Tweety" width="300">
                            </div>
                            <article>
                                <h3>Tweety</h3>
                                <p>@lang('text.aboutTweety')</p>
                                <a href="https://tweety.lalocodes.com/" target="_blank" rel="noopener">@lang('text.seeMore')</a>
                            </article>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 lc-portfolio-content">
                        <div class="lc-portfolio-project">
                            <div class="lc-portfolio-foto">
                                <img src="/img/restaurant.png" alt="Restaurant" width="300">
                            </div>
                            <article>
                                <h3>Restaurante</h3>
                                <p>@lang('text.aboutRestaurante')</p>
                                <a href="https://restaurant.lalocodes.com/" target="_blank" rel="noopener">@lang('text.seeMore')</a>
                            </article>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 lc-portfolio-content">
                        <div class="lc-portfolio-project">
                            <div class="lc-portfolio-foto">
                                <img src="/img/startup.png" alt="Startup" width="300">
                            </div>
                            <article>
                                <h3>Startup</h3>
                                <p>@lang('text.aboutStartup')</p>
                                <a href="https://startup.lalocodes.com/" target="_blank" rel="noopener">@lang('text.seeMore')</a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="lc-contact" id="contact">
            <div class="container-xl lc-container">
                <div class="row">
                    <div class="col-12 lc-contact-title">
                        <h2>@lang('text.contactMe')</h2>
                        <p>
                            @lang('text.contactText')
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 lc-contact-mail">
                        <a href="mailto:eduardomartinezsan94@gmail.com">
                            eduardomartinezsan94@gmail.com
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 lc-contact-media">
                        <a href="https://twitter.com/messages/compose?recipient_id=1850631468&text=Hola%20Eduardo"
                        class="twitter-dm-button" data-screen-name="@AlemanEMS" data-size="large">
                            Message @AlemanEMS
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="lc-footer">
        <div class="container-xl">
            <div class="row">
                <div class="col-12">
                    <footer>
                        <p>Copyright © 2021, Eduardo Mart&iacute;nez</p> 
                    </footer>
                </div>
            </div>
        </div>
    </section>
</x-master>
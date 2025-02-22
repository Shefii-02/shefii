@extends('layouts.front-end')
@section('content')
    <!-- Animated Background -->
    <div class="bg-dark"></div>
    <!-- /Animated Background -->

    <!-- Loading animation -->



    <div class="preloader">
        <div class="preloader-animation">
            <div class="preloader-spinner">
            </div>
        </div>
    </div>

    <!-- /Loading animation -->
    <ul class="main-menu">
        <li class="active">
            <a href="#home" class="nav-anim text-decoration-none">
                <span class="menu-icon bi bi-house-door-fill"></span>
                <span class="link-text">Home</span>
            </a>
        </li>
        <li>
            <a href="#about-me" class="nav-anim text-decoration-none">
                <span class="menu-icon bi bi-person"></span>
                <span class="link-text">About Me</span>
            </a>
        </li>
        <li>
            <a href="#education" class="nav-anim text-decoration-none">
                <span class="menu-icon bi bi-patch-check"></span>
                <span class="link-text">Education</span>
            </a>
        </li>
        <li>
            <a href="#portfolio" class="nav-anim text-decoration-none">
                <span class="bi bi-file-earmark-code menu-icon" style="color: #b5b6b7;"></span>
                <span class="link-text">Portfolio</span>
            </a>
        </li>
    </ul>
    <div class="page bg-dark">
        <div class="page-content">

            <header id="site_header" class="header mobile-menu-hide">
                <div class="header-content">
                    <div class="header-photo">
                        <img src="img/dp.jpg" alt="Mohammed Shafeeque K M">
                    </div>
                    <div class="header-titles">
                        <h2>Mohammed Shafeeque K M</h2>
                        <h4>Software Engineer</h4>
                    </div>
                </div>

                <div class="social-links ">
                    <ul>
                        <li><a href="https://github.com/Shefii-02" class=" text-dark" target="_blank"><i
                                    class="bi bi-github"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/mohammed-shafeeque-km-7452591b3" class=" text-dark"
                                target="_blank"><i class="bi bi-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/shefii_02/" class=" text-dark" target="_blank"><i
                                    class="bi bi-instagram"></i></a></li>
                        <li><a href="https://wa.me/+918075261300" class=" text-dark" target="_blank"><i
                                    class="bi bi-whatsapp"></i></a></li>
                    </ul>
                </div>

                <div class="header-buttons">
                    <a href="#education" class="btn btn-light border-dark-subtle">View education</a>
                </div>

                <div class="copyrights text-dark position-relative justify-content-center w-100">© {{ date('Y') }} All rights reserved.
                </div>
            </header>

            <!-- Mobile Navigation -->
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- End Mobile Navigation -->

            <!-- Arrows Nav -->
            <!-- <div class="lmpixels-arrows-nav">
                <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
                <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
              </div> -->
            <!-- End Arrows Nav -->

            <div class="content-area">
                <div class="animated-sections">
                    <!-- Home Subpage -->
                    <section data-id="home" class="animated-section start-page">
                        <div class="section-content vcentered">

                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="header-photo">
                                        <img src="img/dp.jpg" alt="Mohammed Shafeeque K M">
                                    </div>
                                    <div class="title-block">
                                        <h1 class="text-dark fs-2 fw-medium">Mohammed Shafeeque K M</h1>
                                        <div id="designation" class="carousel slide" data-bs-ride="carousel">

                                            <!-- Slides -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="sp-subtitle text-dark">Mobile Application Developer</div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="sp-subtitle text-dark">Laravel Developer</div>
                                                </div>
                                                <div class="carousel-item">
                                                  <div class="sp-subtitle text-dark">Fullstack Developer</div>
                                              </div>
                                            </div>

                                        </div>


                                        <div class="owl-carousel text-rotation">
                                            <div class="item">
                                            </div>

                                            <div class="item">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="social-links">
                                        <ul>
                                            <li><a href="https://github.com/Shefii-02" class="text-dark" target="_blank"><i
                                                        class="bi bi-github"></i></a></li>
                                            <li><a href="https://www.linkedin.com/in/mohammed-shafeeque-km-7452591b3"
                                                    class="text-dark" target="_blank"><i class="bi bi-linkedin"></i></a>
                                            </li>
                                            <li><a href="https://www.instagram.com/shefii_02/" class="text-dark"
                                                    target="_blank"><i class="bi bi-instagram"></i></a></li>
                                            <li><a href="https://wa.me/+918075261300" class="text-dark" target="_blank"><i
                                                        class="bi bi-whatsapp"></i></a></li>
                                            <li><a href="mailto:shefii.km@gmail.com" class="text-dark" target="_blank"><i
                                                        class="bi bi-envelope"></i></a></li>

                                        </ul>
                                    </div>

                                    <div>

                                        <a href="{{ url('shefii_resume.pdf') }}" download=""
                                            class="btn btn-light rounded-pill">
                                            <i class="bi bi-file-earmark-arrow-down-fill"></i>
                                            Resume
                                        </a>

                                        <a target="_blank" href="tel:918075261300" class="btn btn-light  rounded-pill">
                                            <i class="bi bi-telephone-forward-fill"></i>
                                            Call me</a>


                                    </div>


                                </div>


                            </div>


                        </div>
                    </section>
                    <!-- End of Home Subpage -->

                    <!-- About Me Subpage -->
                    <section data-id="about-me" class="animated-section">
                        <div class="page-title pb-2">
                            <h2>About <span>Me</span></h2>
                        </div>

                        <div class="section-content text-dark">
                            <!-- Personal Information -->
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <p>I have a total of 6+ years of experience in the IT field. During my career,
                                        I have worked with various technologies and frameworks. I started with 1.5 years of
                                        experience in core PHP, where I gained a solid foundation in web development. I have
                                        experience in building web applications, implementing database functionality, and
                                        working with server-side scripting.</p>

                                    <p>Afterward, I transitioned to Laravel, a popular PHP framework, and worked with it for
                                        3 years. Laravel allowed me to develop complex web applications efficiently,
                                        following modern development practices. I have experience in building RESTful APIs,
                                        implementing authentication and authorization mechanisms, and utilizing various
                                        Laravel features to deliver high-quality software solutions.</p>

                                    <p>In addition to PHP and Laravel, I have also worked with Flutter for 6 months. Flutter
                                        is a cross-platform mobile development framework that enables building native
                                        applications for iOS and Android from a single codebase. With Flutter, I gained
                                        experience in creating visually appealing and performant mobile applications.</p>

                                    <p>I hold an MSc in Computer Science, which has provided me with a strong theoretical
                                        understanding of computer science principles, algorithms, and software engineering
                                        practices. My educational background has equipped me with the ability to approach
                                        problems analytically, design efficient solutions, and adapt to new technologies
                                        quickly.</p>

                                    <p>Overall, with my diverse experience in core PHP, Laravel, and Flutter, along with my
                                        academic qualifications, I am well-equipped to tackle software development
                                        challenges and deliver robust and innovative solutions. </p>
                                </div>


                            </div>
                            <!-- End of Personal Information -->


                            <div class="white-space-50"></div>


                        </div>
                    </section>
                    <!-- End of About Me Subpage -->

                    <!-- education Subpage -->
                    <section data-id="education" class="animated-section">
                        <div class="page-title">
                            <h2>Education</h2>
                        </div>

                        <div class="section-content">

                            <div class="row">
                                <div class="col-xs-12 col-sm-7">

                                    <div class="block-title">
                                        <h3>Education</h3>
                                    </div>

                                    <div class="timeline timeline-second-style clearfix">
                                        <div class="timeline-item clearfix">
                                            <div class="left-part">
                                                <h5 class="item-period">2023</h5>
                                                <span class="item-company">Kerala University</span>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="right-part">
                                                <h4 class="item-title">Msc Computer Science</h4>
                                                <p>I have completed Master's Degree in Computer Science from Kerala
                                                    University</p>
                                            </div>
                                        </div>

                                        <div class="timeline-item clearfix">
                                            <div class="left-part">
                                                <h5 class="item-period">2019</h5>
                                                <span class="item-company">Calicut University</span>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="right-part">
                                                <h4 class="item-title">Bsc Computer Science</h4>
                                                <p>I have completed Bachelor Degree in Computer Science from University of
                                                    Calicut</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="white-space-50"></div>

                                    <div class="block-title">
                                        <h3>Experience</h3>
                                    </div>
                                    <div class="timeline timeline-second-style clearfix">
                                        <div class="timeline-item clearfix">
                                            <div class="left-part">
                                                <h5 class="item-period">Feb 2019 - </h5>
                                                <span class="item-company">Freelancer </span>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="right-part">
                                                <h4 class="item-title">Web/App Development</h4>
                                                <p></p>
                                            </div>
                                        </div>

                                        <div class="timeline-item clearfix">
                                            <div class="left-part">
                                                <h5 class="item-period">Feb 2022 - Current</h5>
                                                <span class="item-company">INDigital Group </span>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="right-part">
                                                <h4 class="item-title">Senior Laravel Developer</h4>
                                                <p></p>
                                            </div>
                                        </div>

                                        <div class="timeline-item clearfix">
                                            <div class="left-part">
                                                <h5 class="item-period">Feb 2021 - Feb 2022</h5>
                                                <span class="item-company">Apostrofo Olive Strategic Branding & Marcom
                                                    International Pvt. Ltd</span>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="right-part">
                                                <h4 class="item-title">Senior Laravel Developer</h4>
                                                <p></p>
                                            </div>
                                        </div>

                                        <div class="timeline-item clearfix">
                                            <div class="left-part">
                                                <h5 class="item-period">Feb 2019 - Feb 2021</h5>
                                                <span class="item-company">Azalea Technologies® </span>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="right-part">
                                                <h4 class="item-title">Junior Web Developer</h4>
                                                <p></p>
                                            </div>
                                        </div>

                                        <div class="timeline-item clearfix">
                                            <div class="left-part">
                                                <h5 class="item-period">Sep 2018 - Dec 2018 </h5>
                                                <span class="item-company">Nyeste Venture Technologies Pvt. Ltd</span>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="right-part">
                                                <h4 class="item-title">Fresher-Trainer</h4>
                                                <p></p>
                                            </div>
                                        </div>


                                    </div>


                                    <div class="white-space-50"></div>

                                    <div class="block-title">
                                        <h3>Certificates</h3>
                                    </div>
                                    <div class="timeline timeline-second-style clearfix">
                                        <div class="timeline-item clearfix">
                                            <div class="left-part">
                                                <h5 class="item-company">Finedge IT Solutions Calicut</h5>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="right-part">
                                                <h4 class="item-title">PHP</h4>
                                                <p></p>
                                            </div>
                                        </div>

                                        <div class="timeline-item clearfix">
                                            <div class="left-part">
                                                <h5 class="item-company">Nyeste Venture Technologies Pvt Ltd Ernakulam</h5>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="right-part">
                                                <h4 class="item-title">Php Framework<br> (Codeigniter, Laravel)</h4>
                                                <p></p>
                                            </div>
                                        </div>

                                        <div class="timeline-item clearfix">
                                            <div class="left-part">
                                                <h5 class="item-company">Aspire IT Academy Ernakulam</h5>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="right-part">
                                                <h4 class="item-title">Python </h4>
                                                <p></p>
                                            </div>
                                        </div>

                                        <div class="timeline-item clearfix">
                                            <div class="left-part">
                                                <h5 class="item-company">Aspire IT Academy Ernakulam</h5>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="right-part">
                                                <h4 class="item-title">Software Testing</h4>
                                                <p></p>
                                            </div>
                                        </div>

                                        <div class="timeline-item clearfix">
                                            <div class="left-part">
                                                <h5 class="item-company">Just InfoTech</h5>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="right-part">
                                                <h4 class="item-title">WordPress Development</h4>
                                                <p></p>
                                            </div>
                                        </div>


                                    </div>

                                </div>

                                <!-- Skills & Certificates -->
                                <div class="col-xs-12 col-sm-5">

                                    <!-- Coding Skills -->
                                    <div class="block-title">
                                        <h3>Coding <span>Skills</span></h3>
                                    </div>

                                    <div class="skills-info skills-second-style">
                                        <!-- Skill 5 -->
                                        <div class="skill clearfix">
                                            <h4>Laravel (PHP)</h4>
                                            <div class="skill-value">100%</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                                role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                aria-valuemax="100" style="width:100%">
                                            </div>
                                        </div>

                                        <!-- End of Skill 5 -->

                                        <!-- Skill 6 -->
                                        <div class="skill clearfix">
                                            <h4>Flutter</h4>
                                            <div class="skill-value">75%</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="75" style="width:75%">
                                            </div>
                                        </div>
                                        <!-- End of Skill 6 -->

                                        <!-- Skill 7 -->
                                        <div class="skill clearfix">
                                            <h4>Android(Java)</h4>
                                            <div class="skill-value">70%</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                                role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                aria-valuemax="70" style="width:70%">
                                            </div>
                                        </div>
                                        <!-- End of Skill 7 -->

                                        <!-- Skill 8 -->
                                        <div class="skill clearfix">
                                            <h4>Firebase</h4>
                                            <div class="skill-value">90%</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                                role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                                aria-valuemax="90" style="width:90%">
                                            </div>
                                        </div>
                                        <!-- End of Skill 8 -->
                                        <!-- Skill 9 -->
                                        <div class="skill clearfix">
                                            <h4>MySql/PlSql</h4>
                                            <div class="skill-value">100%</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                                role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                aria-valuemax="100" style="width:100%">
                                            </div>
                                        </div>
                                        <!-- End of Skill 9 -->

                                        <!-- Skill 10 -->
                                        <div class="skill clearfix">
                                            <h4>HTML/CSS/Javascript</h4>
                                            <div class="skill-value">100%</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                                role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                aria-valuemax="100" style="width:100%">
                                            </div>
                                        </div>
                                        <!-- End of Skill 10 -->

                                        <!-- Skill 11 -->
                                        <div class="skill clearfix">
                                            <h4>ASP.NET</h4>
                                            <div class="skill-value">80%</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                                role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                aria-valuemax="80" style="width:80%">
                                            </div>
                                        </div>
                                        <!-- End of Skill 12 -->
                                        <!-- Skill 13 -->
                                        <div class="skill clearfix">
                                            <h4>Wordpress</h4>
                                            <div class="skill-value">50%</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                                role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="50" style="width:50%">
                                            </div>
                                        </div>
                                        <!-- End of Skill 13 -->
                                        <!-- Skill 14 -->
                                        <div class="skill clearfix">
                                            <h4>React.Js</h4>
                                            <div class="skill-value">75%</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="75" style="width:75%">
                                            </div>
                                        </div>
                                        <!-- End of Skill 14 -->
                                    </div>
                                    <!-- End of Coding Skills -->
                                    <!-- Design Skills -->
                                    <div class="block-title">
                                        <h3>Design <span>Skills</span></h3>
                                    </div>

                                    <div class="skills-info skills-second-style">
                                        <!-- Skill 1 -->
                                        <div class="skill clearfix">
                                            <h4>Mobile App Design</h4>
                                            <div class="skill-value">85%</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                                role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                                aria-valuemax="85" style="width:85%">
                                            </div>
                                        </div>

                                        <div class="skill clearfix">
                                            <h4>Website Design</h4>
                                            <div class="skill-value">100%%</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                                role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                aria-valuemax="100" style="width:100%">
                                            </div>
                                        </div>




                                    </div>
                                    <!-- End of Design Skills -->

                                    <div class="white-space-10"></div>


                                    <!-- Knowledges -->
                                    <div class="block-title">
                                        <h3>Knowledges</h3>
                                    </div>

                                    <ul class="knowledges">
                                        <li>Codeigniter</li>
                                        <li>Bootstrap</li>
                                        <li>Jquery</li>
                                        <li>Vue Js</li>
                                        <li>Adobe Photoshop</li>
                                        <li>Adobe Illustrator</li>
                                        <li>Adobe XD</li>
                                        <li>Figma</li>
                                        <li>Google Maps SDK</li>
                                        <li>Google Cloud</li>
                                        <li>Playstore</li>
                                        <li>JSON</li>
                                        <li>REST API</li>
                                        <li>Basic Python</li>
                                        <li>Payment Integration</li>
                                    </ul>
                                    <!-- End of Knowledges -->
                                </div>
                                <!-- End of Skills & Certificates -->
                            </div>

                        </div>
                    </section>
                    <!-- End of education Subpage -->

                    <!-- Portfolio Subpage -->
                    <section data-id="portfolio" class="animated-section">
                        <div class="page-title">
                            <h2>Portfolio</h2>
                        </div>

                        <div class="section-content">

                            <div class="row">
                                <div class="col">
                                    <div class="portfolio-content">

                                        <!-- Category selection buttons -->
                                        <div class="mb-3">
                                            <div class="btn-group" role="group" aria-label="Category Buttons">
                                                <button type="button" class="btn active-tab category-button"
                                                    data-category="all">All Show</button>
                                                <button type="button" class="btn  category-button"
                                                    data-category="website">Website</button>
                                                <button type="button" class="btn  category-button"
                                                    data-category="mobile-app">Mobile App</button>
                                            </div>
                                        </div>



                                        <div class="portfolio-grid row row-cols-1 row-cols-md-3 g-4">
                                            @foreach ($projects as $item)
                                                <div class="col portfolio-group-item" data-category="mobile-app">
                                                    <div class="portfolio-item">
                                                        <img src="img/portfolio/4.jpg" alt="Media Project 1"
                                                            title="" />
                                                        <a href="portfolio-4.html" class="ajax-page-load"></a>
                                                        <div class="text-center">

                                                            <span class="fw-bold mt-2">Mobile Apps</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach


                                            <!-- Add more portfolio items here -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End of Portfolio Subpage -->

                </div>
            </div>

        </div>
    </div>
@endsection

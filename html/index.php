<?php
    require '../vendor/autoload.php';
    use Mailgun\Mailgun;
    session_start();
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message =  $_POST['message'];
        # Instantiate the client.
        $mgClient = new Mailgun('key-3e522d2966a5fbb738696e453ccde349');
        $domain = "mail.laurenfazah.com";
        # Make the call to the client.
        $result = $mgClient->sendMessage($domain, array(
            'from'    => $name . ' <' . $email . '>',
            'to'      => 'Lauren <laurenfazah@gmail.com>',
            'subject' => 'Portfolio Message',
            'text'    => $message
        ));
    }
    session_destroy();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>Lauren Fazah - Full Stack Developer</title>

        <link rel="icon" type="image/png" href="img/favicon.png"/>

        <meta name="twitter:card" content="">
        <meta name="twitter:site" content="">
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="">
        <meta name="twitter:image:src" content="">

        <meta property="og:title" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>

        <link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="stylesheets/style.css">

        <script src="js/vendor/modernizr.js"></script>
    </head>

    <body>

        <nav id="nav" class="splash">
            <div class="burger">
                <img src="img/logo.svg" alt="">
            </div>
            <ul>
                <li class="scroll-to"><a href="#intro">intro</a></li>
                <li class="scroll-to"><a href="#work">work history</a></li>
                <li class="scroll-to"><a href="#portfolio">portfolio</a></li>
                <li class="scroll-to"><a href="#skills">skills</a></li>
                <li class="scroll-to"><a href="#contact">contact</a></li>
            </ul>
        </nav>

        <header id="top">
            <h1>international affairs major turned full-stack web developer</h1>
        </header>

        <main>
            <section id="intro" class="introduction info">

                <div class="who">
                    <h1>who am i?</h1>
                    <div class="left">
                        <img src="img/pitchfork.jpg">
                        <p><i>(other than a pitchfork-wielding caffeine addict)</i></p>
                    </div>
                    <div class="right">
                        <p>My road to web development was windy, but worthwhile.</p>
                        <p>After a few years in the non-profit sector, a career in web development struck me as the perfect combination of the type of creativity and continued learning I'd been yearning for.</p>
                        <p>Everything fell in place immediately after making the switch to development - I couldn't be more excited by the challenges and opportunities this field continuously provides.</p>
                        <p>Possibly my favorite aspect of development is its community of learning. It was this community that made my career switch possible; in return, I work to stay involved with others' learning and do as much as I can to encourage others to take the plunge.</p>
                    </div>
                </div>

                <!-- save for others section: -->
                <!-- article mentions -->
                <!-- http://www.boston.com/jobs/news/2015/03/08/what-like-woman-where-you-work/qWXwqrUNEixEyXWYBXaEAP/pictures.html#slide-1 -->
                <!-- http://www.boston.com/jobs/news/2015/03/09/advice-for-women-looking-break-into-the-tech-field/tVPJG1x1UhKcWzU0GoihNI/story.html -->

            </section>

            <section id="work" class="resume info">
                <h1>a little background:</h1>
                <ul>
                    <li class="card">
                        <div class="content front">
                            <div class="main-info">
                                <p>Hill Holliday</p>
                                <h2 class="location">Boston, MA</h2>
                            </div>
                        </div>
                        <div class="content back">
                            <h1>Hill Holliday</h1>
                            <div class="job">
                                <h2>Full Stack Web Developer</h2>
                                <h3>January 2015 - Present</h3>
                                <p>Involved with both internal and client, individual and group, front end and back end, as well as experimental projects.</p>
                            </div>
                        </div>
                    </li>
                    <li class="card">
                        <div class="content front">
                            <div class="main-info">
                                <p>General Assembly</p>
                                <h2 class="location">Boston, MA</h2>
                            </div>
                        </div>
                        <div class="content back">
                            <h1>General Assembly</h1>
                            <div class="job">
                                <h2>TA, Front End Web Development Course</h2>
                                <h3>September 2015 - Present</h3>
                                <p>Assisted instructors in teaching front end web development to 15-20 students during 10 week courses.</p>
                            </div>

                            <div class="job">
                                <h2>Workshop Instructor</h2>
                                <h3>May 2015 - Present</h3>
                                <a href="https://generalassemb.ly/education/the-what-why-of-apis" target="_blank" class="click-thru"><p>The What and Why of APIs</p></a>
                                <a href="https://generalassemb.ly/education/coding-for-beginners-html-and-css" target="_blank" class="click-thru"><p>Coding for Beginners: HTML and CSS</p></a>
                            </div>
                        </div>
                    </li>
                    <li class="card">
                        <div class="content front">
                            <div class="main-info">
                                <p>Freelance</p>
                                <h2 class="location">Anywhere, USA</h2>
                            </div>
                        </div>
                        <div class="content back">
                            <h1>Freelance</h1>
                            <div class="job">
                                <h2>Full Stack Web Developer</h2>
                                <h3>May 2014 - Present</h3>
                                <p>Ongoing full-stack web development on a variety of projects including blogs, ecommerce sites, and landing pages.</p>
                            </div>
                        </div>
                    </li>
                    <li class="card">
                        <div class="content front">
                            <div class="main-info">
                                <p>City Year</p>
                                <h2 class="location">Boston, MA</h2>
                            </div>
                        </div>
                        <div class="content back">
                            <h1>City Year</h1>
                            <div class="job">
                                <h2>Special Projects Assistant to the Chief Operating Officer</h2>
                                <h3>January 2013 - June 2014</h3>
                                <p>Effectively managed the COO’s daily workflow, created policy documents, drafted office-wide communications, and supported the organization’s Operating Model Transition</p>
                            </div>

                            <div class="job">
                                <h2>Special Projects Assistant to the Chief People Officer</h2>
                                <h3>April 2012 – August 2012</h3>
                                <p>Assisted the CPO with schedule management, department events, office build-out and staff promotions</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>

            <section id="portfolio" class="portfolio info">

                <div class="freelance">
                    <h1>in my free time:</h1>
                    <div class="portfolio-carousel">
                        <div class="piece roughwood">
                            <div class="info">
                                <a href="http://roughwood.luxury" target="_blank" class="click-thru title">
                                    <p class="title">Roughwood</p>
                                </a>
                                <p class="role">Lead JavaScript Developer</p>
                                <p class="description">Co-built this private ecommerce site with an AngularJS front end making API calls to Springboard and Auth0.</p>
                            </div>
                        </div>
                        <div class="piece storymaker">
                            <div class="info">
                                <a href="http://laurenfazah.github.io/storymaker/" target="_blank" class="click-thru title">
                                    <p class="title">StoryMaker</p>
                                </a>
                                <p class="role">Sole Developer</p>
                                <p class="description">Built this AngularJS app to give my mother's written bedtime stories an interactive mad-libs-style place to live.</p>
                            </div>
                        </div>
                        <div class="piece selfless">
                            <div class="info">
                                <a href="http://selflessapp.herokuapp.com/" target="_blank" class="click-thru title">
                                    <p class="title">Selfless</p>
                                </a>
                                <p class="role">Sole Developer</p>
                                <p class="description">This app was entirely built with Ruby on Rails, integrating Twilio's API.</p>
                            </div>
                        </div>
                        <div class="piece tic-tac-toe">
                            <div class="info">
                                <a href="http://laurenfazah.github.io/tic_tac_toe/" target="_blank" class="click-thru title">
                                    <p class="title">Tic Tac Toe</p>
                                </a>
                                <p class="role">Sole Developer</p>
                                <p class="description">Classic game interaction built with jQuery.</p>
                            </div>
                        </div>
                        <!--                         <div class="piece intuit">
                            <div class="info">
                                <p class="title">Intuit</p>
                                <p class="role">Sole Developer</p>
                                <p class="description">Built multiple landing pages for this company</p>
                            </div>
                        </div> -->
                    </div>
                </div>

                <div class="career">
                    <h1>on the job:</h1>
                    <div class="portfolio-carousel">
                        <div class="piece training-portal">
                            <div class="info">
                                <a href="http://training.hhcc.com/" target="_blank" class="click-thru title">
                                    <p class="title">Adcademy</p>
                                </a>
                                <p class="role">Sole Developer</p>
                                <p class="description">An internal training portal for Hill Holliday built with PHP's Codeigniter.</p>
                            </div>
                        </div>
                        <div class="piece rfid">
                            <div class="info">
                                <p class="title">RFID Scanner with API</p>
                                <p class="role">Sole Developer</p>
                                <p class="description">Developed an Arduino prototype in C that reads RFID card information and speaks to a custom inventory API built with PHP's Laravel.</p>
                            </div>
                        </div>
                        <div class="piece tvnext">
                            <div class="info">
                                <a href="http://tvnext.com" target="_blank" class="click-thru title">
                                    <p class="title">TVnext Companion Site</p>
                                </a>
                                <p class="role">Front-End Developer</p>
                                <p class="description">Built the day-of <a href="http://tvnext.com/index2" target="_blank">Companion</a> site for the 2015 TVnext conference with Craft's CMS.</p>
                            </div>
                        </div>
                        <div class="piece www">
                            <div class="info">
                                <a href="http://wholeworldwater.org/" target="_blank" class="click-thru title">
                                    <p class="title">Whole World Water</p>
                                </a>
                                <p class="role">Sole Developer</p>
                                <p class="description">Wordpress blog built for the Whole World Water charity organization.</p>
                            </div>
                        </div>
                        <div class="piece hhcc-app">
                            <div class="info">
                                <a href="http://hhcc.com/app/" target="_blank" class="click-thru title">
                                    <p class="title">Hill Holliday App Landing Page</p>
                                </a>
                                <p class="role">Sole Developer</p>
                                <p class="description">This page was built to announce the company's iOS app to all employees as well as provide installation support.</p>
                            </div>
                        </div>
                        <div class="piece passion">
                            <div class="info">
                                <a href="http://passiontoprotect.libertymutualgroup.com/" target="_blank" class="click-thru title">
                                    <p class="title">Passion to Protect</p>
                                </a>
                                <p class="role">Front-End Developer</p>
                                <p class="description">My role with this project has been both front-end and back-end bug fixes, feature built-outs, and brand updates.</p>
                            </div>
                        </div>
<!--                         <div class="piece brandfeed">
                            <div class="info">
                                <a href="https://brandfeed.io/app/" target="_blank" class="click-thru title">
                                    <p class="title">Brandfeed</p>
                                </a>
                                <p class="role">Lead JavaScript Developer</p>
                                <p class="description">In house, in-progress social analytics app built with an AngularJS front-end, speaking to a PHP back-end API.</p>
                            </div>
                        </div> -->
<!--                         <div class="piece onebostonday">
                            <div class="info">
                                <a href="http://ourcreativeshowcase.com/onebostonday/" target="_blank" class="click-thru title">
                                    <p class="title">OBD Award Submission</p>
                                </a>
                                <p class="role">Sole Developer</p>
                                <p class="description"></p>
                            </div>
                        </div> -->
                    </div>
                </div>

            </section>

            <section id="skills" class="skills info">

                <div class="container">

                    <h1>in my toolbox:</h1>

                    <ul class="skills-list languages">
                    <h2>languages:</h2>
                        <li class="high"><p>JavaScript</p></li>
                        <li class="high"><p>PHP</p></li>
                        <li class="high"><p>Ruby</p></li>
                        <li class="high"><p>HTML5</p></li>
                        <li class="high"><p>CSS3</p></li>
                        <li class="low"><p>Python</p></li>
                    </ul>

                    <ul class="skills-list frameworks">
                    <h2>frameworks:</h2>
                        <li class="high"><p>AngularJS</p></li>
                        <li class="high"><p>CodeIgniter</p></li>
                        <li class="high"><p>Rails</p></li>
                        <li class="med"><p>Laravel</p></li>
                        <li class="med"><p>Express</p></li>
                        <li class="med"><p>Backbone</p></li>
                        <li class="med"><p>Craft</p></li>
                        <li class="low"><p>WordPress</p></li>
                    </ul>

                    <ul class="skills-list libraries">
                    <h2>libraries:</h2>
                        <li class="high"><p>jQuery</p></li>
                        <li class="high"><p>Sass/SCSS</p></li>
                        <li class="high"><p>Compass</p></li>
                        <li class="high"><p>Grunt</p></li>
                        <li class="high"><p>Twitter Bootstrap</p></li>
                        <li class="high"><p>Bower</p></li>
                        <li class="high"><p>Yeoman</p></li>
                        <li class="med"><p>Bourbon</p></li>
                        <li class="med"><p>Neat</p></li>
                        <li class="med"><p>Twig</p></li>
                        <li class="low"><p>Blade</p></li>
                    </ul>

                    <ul class="skills-list databases">
                    <h2>databases:</h2>
                        <li class="high"><p>MySQL</p></li>
                        <li class="high"><p>PostgreSQL</p></li>
                        <li class="med"><p>SQL</p></li>
                        <li class="low"><p>MongoDB</p></li>
                    </ul>

                    <ul class="skills-list other">
                    <h2>other:</h2>
                        <li class="high"><p>Heroku</p></li>
                        <li class="high"><p>AJAX</p></li>
                        <li class="med"><p>Adobe Photoshop</p></li>
                        <li class="med"><p>Arduino</p></li>
                        <li class="med"><p>RFID</p></li>
                        <li class="low"><p>Node.js</p></li>
                        <li class="low"><p>Raspberry Pi</p></li>
                    </ul>

                </div>

            </section>

            <section id="contact" class="contact">

                <form  method="post" name="contact_form" action="">
                    <h1>want to chat?</h1>
                    <input type="text" name="name" placeholder="name" required>
                    <input type="email" name="email" placeholder="email" required>
                    <textarea name="message" cols="30" rows="10" placeholder="drop a message..." required></textarea>
                    <input type="submit" value="send off" name="submit">
                    <h1 class="email-thanks"></h1>
                </form>

            </section>

        </main>

        <div class="scroll-to top"><img src="img/leftarrow.svg" alt="arrow"></div>

        <footer>
            <p>built with love by lauren fazah</p>
            <p>&copy; 2015 boston, ma</p>
        </footer>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-69376823-1', 'auto');
          ga('send', 'pageview');

        </script>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
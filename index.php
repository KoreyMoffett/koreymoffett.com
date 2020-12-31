<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>

    <link rel="stylesheet" href="style/style.css">
    <title>Korey Moffett | Web Developer</title>

</head>

<body>
    <?php
    include './componets/hero.php';

    ?>

    <!-- About section -->

    <section class="section">
        <div class="container">
            <h1 class="title">About</h1><br>
            <div class="notification">
                <h1 class="subtitle">My name is Korey, I enjoy coding and tinkering with technology.<br><br>
                    <h1 class="subtitle">If you would like to contact me <a href="mailto: korey.moffett87@gmail.com">Email</a>, <a href="https://fosstodon.org/@koreymoffett">Mastodon</a> or <a href="https://twitter.com/korey_moffett">Twitter</a> are the best ways to do so.</h1>
                </h1>
            </div>
        </div>
    </section>


            <!-- Projects section -->
    </section>
    <section class="section">
        <div class="container">
            <hr>
            <h1 class="title">Projects</h1>
            <h1 class="subtitle">This section will updated as I make more projects</h1>
            <div class="notification">
                <img src="images/gimp.png">
                <p class="subtitle">Here is the source code for this site.</p>
                <a class="has-text-black" href="https://github.com/KoreyMoffett/myWeb" target="_Blank"><i class="fa fa-code fa-lg"></i></a>
                <a class="has-text-black" href="https://koreymoffett.com/" target="_Blank"><i class="fa fa-window-maximize fa-lg"></i></a>
            </div>
        </div>

    </section>
    <!--
    <section class="section">
        <div class="container">

            <div class="notification">
                <img src="images/pic1.png">
                <p class="subtitle">This is a little project i've been working about diffrent terminal shells.
                    <br> This site is still under development.
                </p>
                <a class="has-text-black" href="https://github.com/KoreyMoffett/TerminalNerd" target="_Blank"><i class="fa fa-code fa-lg"></i></a>
                <a class="has-text-black" href="https://koreymoffett.github.io/TerminalNerd/" target="_Blank"><i class="fa fa-window-maximize fa-lg"></i></a>
            </div>
        </div>
    </section>
-->

    <!-- Skills section -->

    <section class="section">
        <div class="container">
            <hr>
            <h1 class="title">Skills</h1><br>
            <div class="notification">
                <h1 class="subtitle">
                    I have worked with...<br><br>
                    <i class="fab fa-html5"></i>HTML5<br>
                    <i class="fab fa-css3-alt"></i>CSS3<br>
                    <i class="fab fa-js "></i></i>JavaScript<br>
                    <i class="fab fa-python"></i>Python<br>
                    <i class="fab fa-php"></i>PHP<br>
                    <i class="fas fa-gem"></i>Ruby
                </h1>
            </div>
        </div>
    </section>


    <?php
    include './componets/comp_blog.php';
    include './componets/support.php';
    ?>



</body>

</html>

<!DOCTYPE html>
<?php
require './instance.php';
chargerclass($c_projets);
chargerclass($c_page);
chargerclass($c_manager);
$manager = new Manager($conn);
if ($manager->getLang() == true) {
    $page = $manager->getEnPage();
    $projets = $manager->getEnProjets();
    $lang_link = "/";
} else {
    $page = $manager->getPage();
    $projets = $manager->getProjets();
    $lang_link = "/?lang=en";
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Student in second year of DUT, hard worker and passionate about web development."/>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./bootstrap-4.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/animation.css">
    <link rel="stylesheet" href="./css/svg.css">
    <link rel="stylesheet" href="./js/plugin/CreativeLinkEffects/css/component.css">
    <link rel="stylesheet" href="./node_modules/lightbox2/src/css/lightbox.css">


    <title>Pierre Monier</title>
</head>
<script>
function hideLoader(){
    document.getElementById("loader").style.display = "none";
    document.getElementById("content").style.display = "flex";
}
</script>
<body onload="hideLoader()">
<div id="loader"></div>
<video id="background" loop autoplay src="./video/Background.mp4"></video>
    <div class="container-fluid" style="background: #000000c2;">
        <div id="content" class="row" style ="display: none; min-height: 100vh;">
            <div class="col-md-3 header-info-xl justify-content-start justify-content-lg-around">
                <div class="col-md-12 box-xl text-center justify-content-center justify-content-lg-around">
                    <nav class="cl-effect-19">
                        <h1><a class="logo" href="/"><span data-hover="Pierre Monier">Pierre Monier</span></a></h1>
                    </nav>
                    <img class="portrait" src="./img/portrait.jpg" alt="portrait">
                </div>
                <div class="col-md-12 box-xl">
                    <ul class="menu-icone-social">
                        <li class="icone-social px-2"><a id="twitter" href="https://twitter.com/Todd53448016" target="_blank"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="icone-social px-2"><a id="linkedin" href="https://www.linkedin.com/in/pierre-monier-026aa3174/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="icone-social px-2"><a id="github" href="https://github.com/mohigh999" target="_blank"><i
                                    class="fab fa-github"></i></a></li>
                    </ul>
                    <p class="presentation-xl"><?php echo $page[0]->presxl() ?></p>
                </div>
                <div class="col-md-12 box-xl text-center justify-content-center justify-content-xl-around">
                    <p><?php echo $page[0]->avtel() ?> <br>+33 7 87 93 40 70</p>
                    <p>Mail : <br>contact@pierre-monier.com</p>
                    <p class="copyright">© 2019 Pierre Monier</p>
                </div>
            </div>
            <div class="col-12 col-md-9 header">
            <section class="my-4 bug">
				<nav class="">
                    <ul class="header-nav mt-3 justify-content-around">
                        <?php require './php/lang.php'?>
                        <li class="nav-items align-self-end"><a id="ini-nav" data-svg="#home" class="lien-cv-jquery d-flex justify-content-center flex-column align-items-center" data-cv="cv-php" href="#">
                            <svg class="init-svg cls-1 icon-small-nav" id="home" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 756.91 717">
                                <defs>
                                </defs>
                                <title>home_icon</title>
                                <!-- toit -->
                                <g>
                                <polygon id="toit"  points="38.49 377.74 0 333.56 379.17 0 756.91 333.56 718.42 379.17 380.59 76.97 38.49 377.74"/>
                                <!-- cheminé -->
                                <polygon id="chem" points="112.61 186.73 208.12 104.06 208.12 47.04 112.61 47.04 112.61 186.73">
                                    <animateMotion
                                        dur="6s"
                                        keyTimes="0;0.1;0.9;1"
                                        keyPoints="0;0.5;0.5;1"
                                        calcMode="linear"
                                        begin="0s"
                                        repeatCount="indefinite">
                                        <mpath xlink:href="#motionPath" />
                                    </animateMotion>
                                </polygon>
                                <!-- maison -->
                                <path  id="block" d="M543.05,157.72,808.18,392.91V722.19s0,24.24-12.83,20L625.73,745V599.6s5.7-12.82-14.26-18.53H471.78S459,583.92,459,598.18V743.57L289.32,745s-12.83,0-14.25-20l1.42-332.13Z" transform="translate(-163.88 -28)"/>
                                </g>
                                <path d="M0,0 0,-50 z"
                                    stroke="none" fill="none" id="motionPath"/>
                            </svg>
                            <?php echo $page[0]->navhome() ?></a></li>
                        <li class="nav-items align-self-end"><a data-svg="#projet" class="lien-cv-jquery d-flex justify-content-center flex-column align-items-center" data-cv="cv-projet" href="#">
                            <svg class="init-svg cls-1 icon-small-nav" id="projet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 -200 400 700">
                                <title>concept</title>
                                <g>
                                    <path d="M313.8,124.22c-1.88-2.59-14.11-16.44-16.45-18.62A129.23,129.23,0,0,0,79.89,200a135.93,135.93,0,0,0,22.39,74.4c18.88,28.94,31.47,50.14,34.28,79.9a20.64,20.64,0,0,0,11.29,16.59v54.42a16.9,16.9,0,0,0,10.91,15.78,26.61,26.61,0,0,0,26.55,25.49h47.62a26.61,26.61,0,0,0,26.55-25.49,16.9,16.9,0,0,0,10.91-15.78V370.91a20.64,20.64,0,0,0,11.29-16.59c2.81-29.76,15.4-51,34.29-79.9A136,136,0,0,0,338.35,200,128.32,128.32,0,0,0,313.8,124.22Zm-118,271.39h63v10.58H159.45V395.61h13.13a5.8,5.8,0,1,0,0-11.59H159.45V373.09H258.8V384h-63a5.8,5.8,0,1,0,0,11.59Zm58,35H164.43a5.28,5.28,0,0,1-5-5.26v-7.54H258.8v7.54A5.28,5.28,0,0,1,253.81,430.59ZM232.93,455H185.31a15,15,0,0,1-14.82-12.81h77.26A15,15,0,0,1,232.93,455Z"/>
                                    <path d="M272.78,233.38a1.69,1.69,0,0,1,1.65-1.21h4.7a13.36,13.36,0,0,0,13.34-13.34v-8.6a13.36,13.36,0,0,0-13.34-13.34h-5a1.71,1.71,0,0,1-1.65-1.18,67.15,67.15,0,0,0-5.27-12.57,1.73,1.73,0,0,1,.3-2l3.61-3.6a13.36,13.36,0,0,0,0-18.87L265,152.56a13.34,13.34,0,0,0-18.87,0l-3.6,3.6a1.73,1.73,0,0,1-2,.31,66,66,0,0,0-12.57-5.28,1.71,1.71,0,0,1-1.18-1.65v-5a13.36,13.36,0,0,0-13.34-13.34h-8.6a13.36,13.36,0,0,0-13.34,13.34v4.7a1.71,1.71,0,0,1-1.21,1.66,66.14,66.14,0,0,0-13,5.22,1.73,1.73,0,0,1-2-.33l-3.21-3.22a13.36,13.36,0,0,0-18.87,0l-6.07,6.08a13.34,13.34,0,0,0,0,18.87l2.88,2.88a1.71,1.71,0,0,1,.31,2,66.69,66.69,0,0,0-5.67,13.28,1.75,1.75,0,0,1-1.69,1.19h-3.87a13.36,13.36,0,0,0-13.34,13.34v8.6a13.36,13.36,0,0,0,13.34,13.34h3.57a1.72,1.72,0,0,1,1.67,1.19A66.52,66.52,0,0,0,150,247.07a1.71,1.71,0,0,1-.33,2l-2.48,2.48a13.34,13.34,0,0,0,0,18.87l6.07,6.07a13.34,13.34,0,0,0,18.87,0l2.48-2.48a1.71,1.71,0,0,1,2-.33,66,66,0,0,0,13.71,5.62,1.7,1.7,0,0,1,1.19,1.66v3.57a13.36,13.36,0,0,0,13.34,13.34h8.6a13.36,13.36,0,0,0,13.34-13.34v-3.87A1.75,1.75,0,0,1,228,279a66.11,66.11,0,0,0,13.28-5.67,1.72,1.72,0,0,1,2,.31l2.88,2.88a13.34,13.34,0,0,0,18.87,0l6.08-6.07a13.36,13.36,0,0,0,0-18.87l-3.22-3.21a1.73,1.73,0,0,1-.33-2A66.8,66.8,0,0,0,272.78,233.38Z"/>
                                    <path d="M209.12,172.24a42.29,42.29,0,1,0,42.29,42.29A42.34,42.34,0,0,0,209.12,172.24Z"/>
                                </g>
                            </svg>
                            <?php echo $page[0]->navprojet() ?></a></li>
                        <li class="nav-items align-self-end"><a data-svg="#cv" class="lien-cv-jquery d-flex justify-content-center flex-column align-items-center" data-cv="cv-real" href="#">
                            <svg class="init-svg cls-1 icon-small-nav" id="cv" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 578.73 709.7">
                                <defs>
                                </defs>
                                <title>cv_icon</title>
                                <path d="M263.27,747.7,841,746.78V147.93S825.39,51.49,727.11,43.22s-463.84-1.84-463.84-1.84Z" transform="translate(-262.77 -38.5)"/>
                                <g class="invert">
                                    <polygon points="73.98 491.52 73.06 449.27 502 449.27 502 492.44 73.98 491.52">
                                    </polygon>
                                    <polygon points="72.14 594.39 504.75 594.39 504.75 639.4 73.98 639.4 72.14 594.39">
                                    </polygon>
                                    <path d="M431.35,418.88H672.92l2.75-84.5s-1.84-66.13-67-79.91c0,0-6.43,27.56-57,33.07,0,0-36.73.92-56.94-32.15,0,0-60.62,14.7-63.38,74.4S431.35,418.88,431.35,418.88Z" transform="translate(-262.77 -38.5)"/>
                                    <circle id="c" cx="288.91" cy="142.49" r="67.05" transition="all 2s linear">
                                    </circle>
                                </g>
                            </svg>
                            <?php echo $page[0]->navcv() ?></a></li>
                    </ul>
                </nav>
            </section>
                <div class="nav-l-m logo-l-m">
                    <ul>
                        <li><h1><a style="color: white !important;" href="/">Pierre Monier</a></h1></li>
                        <?php require './php/lang.php'?>
                    </ul>
                </div>
                <div class="nav-show-click-s">
                    <section>
				        <nav class="cl-effect-1">
                            <ul class="mb-1 d-flex justify-content-around">
                                <li class="nav-items align-self-end"><a id="ini-mini-nav" class="lien-cv-jquery d-flex justify-content-center flex-column align-items-center" data-svg="#mini-home" data-cv="cv-php" href="#">
                                    <svg class="init-svg cls-1 icon-small-nav" id="mini-home" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 756.91 717">
                                        <defs>
                                        </defs>
                                        <title>home_icon</title>
                                        <!-- toit -->
                                        <g>
                                        <polygon id="toit"  points="38.49 377.74 0 333.56 379.17 0 756.91 333.56 718.42 379.17 380.59 76.97 38.49 377.74"/>
                                        <!-- cheminé -->
                                        <polygon id="chem" points="112.61 186.73 208.12 104.06 208.12 47.04 112.61 47.04 112.61 186.73">
                                            <animateMotion
                                                dur="6s"
                                                keyTimes="0;0.1;0.9;1"
                                                keyPoints="0;0.5;0.5;1"
                                                calcMode="linear"
                                                begin="0s"
                                                repeatCount="indefinite">
                                                <mpath xlink:href="#motionPath" />
                                            </animateMotion>
                                        </polygon>
                                        <!-- maison -->
                                        <path  id="block" d="M543.05,157.72,808.18,392.91V722.19s0,24.24-12.83,20L625.73,745V599.6s5.7-12.82-14.26-18.53H471.78S459,583.92,459,598.18V743.57L289.32,745s-12.83,0-14.25-20l1.42-332.13Z" transform="translate(-163.88 -28)"/>
                                        </g>
                                        <path d="M0,0 0,-50 z"
                                            stroke="none" fill="none" id="motionPath"/>
                                    </svg>
                                    <span><?php echo $page[0]->navhome() ?></span></a></li>
                                <li class="nav-items align-self-end"><a class="lien-cv-jquery d-flex justify-content-center flex-column align-items-center" data-svg="#mini-projet" data-cv="cv-projet" href="#">
                                <svg class="init-svg cls-1 icon-small-nav" id="mini-projet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 -200 400 700">
                                    <title>concept</title>
                                    <g>
                                        <path d="M313.8,124.22c-1.88-2.59-14.11-16.44-16.45-18.62A129.23,129.23,0,0,0,79.89,200a135.93,135.93,0,0,0,22.39,74.4c18.88,28.94,31.47,50.14,34.28,79.9a20.64,20.64,0,0,0,11.29,16.59v54.42a16.9,16.9,0,0,0,10.91,15.78,26.61,26.61,0,0,0,26.55,25.49h47.62a26.61,26.61,0,0,0,26.55-25.49,16.9,16.9,0,0,0,10.91-15.78V370.91a20.64,20.64,0,0,0,11.29-16.59c2.81-29.76,15.4-51,34.29-79.9A136,136,0,0,0,338.35,200,128.32,128.32,0,0,0,313.8,124.22Zm-118,271.39h63v10.58H159.45V395.61h13.13a5.8,5.8,0,1,0,0-11.59H159.45V373.09H258.8V384h-63a5.8,5.8,0,1,0,0,11.59Zm58,35H164.43a5.28,5.28,0,0,1-5-5.26v-7.54H258.8v7.54A5.28,5.28,0,0,1,253.81,430.59ZM232.93,455H185.31a15,15,0,0,1-14.82-12.81h77.26A15,15,0,0,1,232.93,455Z"/>
                                        <path d="M272.78,233.38a1.69,1.69,0,0,1,1.65-1.21h4.7a13.36,13.36,0,0,0,13.34-13.34v-8.6a13.36,13.36,0,0,0-13.34-13.34h-5a1.71,1.71,0,0,1-1.65-1.18,67.15,67.15,0,0,0-5.27-12.57,1.73,1.73,0,0,1,.3-2l3.61-3.6a13.36,13.36,0,0,0,0-18.87L265,152.56a13.34,13.34,0,0,0-18.87,0l-3.6,3.6a1.73,1.73,0,0,1-2,.31,66,66,0,0,0-12.57-5.28,1.71,1.71,0,0,1-1.18-1.65v-5a13.36,13.36,0,0,0-13.34-13.34h-8.6a13.36,13.36,0,0,0-13.34,13.34v4.7a1.71,1.71,0,0,1-1.21,1.66,66.14,66.14,0,0,0-13,5.22,1.73,1.73,0,0,1-2-.33l-3.21-3.22a13.36,13.36,0,0,0-18.87,0l-6.07,6.08a13.34,13.34,0,0,0,0,18.87l2.88,2.88a1.71,1.71,0,0,1,.31,2,66.69,66.69,0,0,0-5.67,13.28,1.75,1.75,0,0,1-1.69,1.19h-3.87a13.36,13.36,0,0,0-13.34,13.34v8.6a13.36,13.36,0,0,0,13.34,13.34h3.57a1.72,1.72,0,0,1,1.67,1.19A66.52,66.52,0,0,0,150,247.07a1.71,1.71,0,0,1-.33,2l-2.48,2.48a13.34,13.34,0,0,0,0,18.87l6.07,6.07a13.34,13.34,0,0,0,18.87,0l2.48-2.48a1.71,1.71,0,0,1,2-.33,66,66,0,0,0,13.71,5.62,1.7,1.7,0,0,1,1.19,1.66v3.57a13.36,13.36,0,0,0,13.34,13.34h8.6a13.36,13.36,0,0,0,13.34-13.34v-3.87A1.75,1.75,0,0,1,228,279a66.11,66.11,0,0,0,13.28-5.67,1.72,1.72,0,0,1,2,.31l2.88,2.88a13.34,13.34,0,0,0,18.87,0l6.08-6.07a13.36,13.36,0,0,0,0-18.87l-3.22-3.21a1.73,1.73,0,0,1-.33-2A66.8,66.8,0,0,0,272.78,233.38Z"/>
                                        <path d="M209.12,172.24a42.29,42.29,0,1,0,42.29,42.29A42.34,42.34,0,0,0,209.12,172.24Z"/>
                                    </g>
                                </svg>
                                    <span><?php echo $page[0]->navprojet() ?></span></a></li>
                                <li class="nav-items align-self-end"><a class="lien-cv-jquery d-flex justify-content-center flex-column align-items-center" data-svg="#mini-cv" data-cv="cv-real" href="#">
                                    <svg class="init-svg cls-1 icon-small-nav" id="mini-cv" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 578.73 709.7">
                                        <defs>
                                        </defs>
                                        <title>cv_icon</title>
                                        <path d="M263.27,747.7,841,746.78V147.93S825.39,51.49,727.11,43.22s-463.84-1.84-463.84-1.84Z" transform="translate(-262.77 -38.5)"/>
                                        <g class="invert">
                                            <polygon points="73.98 491.52 73.06 449.27 502 449.27 502 492.44 73.98 491.52">
                                            </polygon>
                                            <polygon points="72.14 594.39 504.75 594.39 504.75 639.4 73.98 639.4 72.14 594.39">
                                            </polygon>
                                            <path d="M431.35,418.88H672.92l2.75-84.5s-1.84-66.13-67-79.91c0,0-6.43,27.56-57,33.07,0,0-36.73.92-56.94-32.15,0,0-60.62,14.7-63.38,74.4S431.35,418.88,431.35,418.88Z" transform="translate(-262.77 -38.5)"/>
                                            <circle id="c" cx="288.91" cy="142.49" r="67.05" transition="all 2s linear">
                                            </circle>
                                        </g>
                                    </svg>
                                    <span><?php echo $page[0]->navcv() ?></span></a></li>
                            </ul>
                        </nav>
                    </section>
                </div>
                <div class="text-center nav-l-m">
                    <ul class="menu-icone-social">
                        <li class="icone-social px-2"><a id="twitter" href="https://twitter.com/Todd53448016" target="_blank"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="icone-social px-2"><a id="linkedin" href="https://www.linkedin.com/in/pierre-monier-026aa3174/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="icone-social px-2"><a id="github" href="https://github.com/mohigh999" target="_blank"><i
                                    class="fab fa-github"></i></a></li>
                    </ul>
                </div>
                <div class="cv-jquery cv my-5 text-center">
                <div class="cv-php">
                    <img data-child=".cv-php" class="animation inite" src="<?php echo $page[0]->cvphp() ?>" alt="cv-en-code">
                </div>
                <div class="cv-real">
                    <img data-child=".cv-real" class="animation inite my-3" src="<?php echo $page[0]->cvreal() ?>" alt="cv">
                <a id="lien-cv-canva" class="lien-cv-projet-git ani-btn" href="<?php echo $page[0]->dlink() ?>" download><span class="regular"><?php echo $page[0]->btnd() ?></span></a>
                </div>
                <div class="row cv-projet">
<?php
$i = 0;
foreach ($projets as $unProjet) {
    ?>
                <div data-child=".cv-projet" class="animation inite col-md-6  my-3 text-center">
                    <div class="titre text-left"><h2><?php echo $unProjet->titre(); ?></h2></div>
                    <h4 class="text-left"><?php echo $unProjet->detail(); ?></h4>
                    <h5 class="text-left my-3"><?php echo $unProjet->avlang(); ?> <b><?php echo $unProjet->langage(); ?></b></h5>
<?php
if ($unProjet->titre() != "Portfolio") {
        ?>
                    <a href="<?php echo $unProjet->video(); ?>" data-lightbox="<?php echo $i; ?>" data-title="<?php echo $unProjet->titre(); ?>"><img class="mw-100 img_projet my-3" id="<?php echo $i; ?>" src="<?php echo $unProjet->video(); ?>" alt="capture-projet"></a>
                    <a class="lien-cv-projet-git" target="_blank" href="<?php echo $unProjet->yt(); ?>"><span class="regular"><?php echo $unProjet->avvideo(); ?></span></a>
                    <a class="lien-cv-projet-git text-center" target="_blank" href="<?php echo $unProjet->github(); ?>"><span class="regular"><?php echo $unProjet->avcs(); ?></span></a>
<?php
}
    ?>
                </div>
<?php
$i++;
}
?>
            </div>
            </div>
            </div>
            <div class="copyright-mini d-md-none col-12 text-center">
                    <p>© 2019 Pierre Monier</p>
            </div>
        </div>
    </div>

<script type="text/javascript" src="./js/plugin/jquery/jquery-3.4.0.js"></script>
<script src="./js/cv.js"></script>
<script type="text/javascript" src="./js/plugin/CreativeLinkEffects/js/modernizr.custom.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="./node_modules/lightbox2/src/js/lightbox.js"></script>


</body>

</html>
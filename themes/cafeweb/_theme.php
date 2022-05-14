<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
        <meta name="mit" content="2019-10-28T13:18:50-03:00+169293">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?= $head; ?>

    <link rel="icon" type="image/png" href="<?= theme("/assets/images/favicon.png"); ?>"/>
    <link rel="stylesheet" href="<?= theme("/assets/style.css"); ?>"/>
    <link rel="stylesheet" href="shared/fonts/icomoon/style2.css">
    <link rel="stylesheet" href="shared/css/bootstrap.min.css">
    <link rel="stylesheet" href="shared/css/animate.css">
    <link rel="stylesheet" href="shared/css/owl.carousel.min.css">
    <link rel="stylesheet" href="shared/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="shared/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="shared/css/aos.css">
    <link rel="stylesheet" href="shared/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="shared/css/style2.css">
    <link rel="stylesheet" href="shared/css/style3.css">
    <link rel="stylesheet" href="shared/css/main.mini.css">
    <link rel="stylesheet" href="shared/fonts/flexslider.css" type="text/css" media="screen" />


</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <p class="ajax_load_box_title">Aguarde, carregando...</p>
    </div>
</div>

<!--HEADER-->
<header>
    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-lg-3">
                        <a href="index.html">
                            <img src="<?= theme("/assets/images/logo4.png"); ?>" alt="Image" class="img-fluid" width="30%" height="60%" botder="0">
                        </a>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block">

                        <div class="quick-contact-icons d-flex">
                            <div class="icon align-self-start">
                                <span class="flaticon-placeholder text-primary"></span>
                            </div>
                            <div class="text">
                                <span class="h4 d-block">Joinville/SC</span>
                                <span class="caption-text"></span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="quick-contact-icons d-flex">
                            <div class="icon align-self-start">
                                <span class="flaticon-call text-primary"></span>
                            </div>
                            <div class="text">
                                <span class="h4 d-block">+55 47 98409-2233</span>
                                <span class="caption-text"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="quick-contact-icons d-flex">
                            <div class="icon align-self-start">
                                <span class="flaticon-email text-primary"></span>
                            </div>
                            <div class="text">
                                <span class="h4 d-block">contato@nicoleconstrutora.com.br</span>
                                <span class="caption-text"></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 d-block d-lg-none text-right">
                        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                                    class="icon-menu h3"></span></a>
                    </div>
                </div>
            </div>




            <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner" id="main-navbar">
                <div class="container">
                    <div class="d-flex align-items-center">

                        <div class="mr-auto">
                            <nav class="site-navigation position-relative text-right" role="navigation">
                                <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                                    <li class="">
                                        <a class="nav-link text-left" title="Home" href="<?= url(); ?>">Home</a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-left" title="Sobre" href="<?= url("/sobre"); ?>">Sobre</a>
                                    </li>
                                    <li>
                                        <a  class="nav-link text-left" title="Lançamentos" href="<?= url("/releases"); ?>">Lançamentos</a>
                                    </li>
                                    <li >
                                        <a  class="nav-link text-left" title="Blog" href="<?= url(); ?>">Blog</a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-left" title="Contato" href="<?= url("/contato"); ?>">Contato</a>
                                    </li>
                                </ul>                                                                                                                                                                                                                                                                                          </ul>
                            </nav>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

</header>

<!--CONTENT-->
<main class="main_content">
    <?= $v->section("content"); ?>
</main>

<section class="main_optin">
        <article class="main_optin_content">

                <header>
                <h1>Quer receber todas as novidades em seu e-mail?</h1>
                <p>Informe seu nome e e-mail no campo ao lado e clique em Ok!


                </p>
                </header>

                <form class="main_optin_content form">
                    <input type="text" placeholder="Seu nome">
                    <input type="email" placeholder="Seu e-mail">
                    <button type="submit">Ok!</button>
                </form>

        </article>
</section>

<!--FOOTER-->
<footer class="main_footer">
    <div class="container content">

        <img src="<?= theme("/assets/images/logoBranco.png"); ?>" alt="Image" class="main_footer_img" width="8%" height="8%" border="0">

        <section class="main_footer_content">

            <article class="main_footer_content_item">
                <h2>Sobre:</h2>
                <p>Nicole Construtora e Incorporadora é uma empresa que está a 11 no mercado atuando com segmento da construção e vendas
                de apartamentos na cidade de Joinville. Atualmente os emprendimentos diversos já somam 18 prédios prontos e entregues.</p>
            </article>

            <article class="main_footer_content_item">
                <h2>Mais:</h2>
                <a class="link transition radius" title="Home" href="<?= url(); ?>">Home</a>
                <a class="link transition radius" title="Sobre" href="<?= url("/sobre"); ?>">Sobre</a>
                <a class="link transition radius" title="Lançamentos" <a href="<?= url("/releases"); ?>">Lançamentos</a>
                <a class="link transition radius" title="Blog" href="<?= url("/blog"); ?>">Blog</a>
                <a class="link transition radius" title="Contato" href="<?= url("/contato"); ?>">Contato</a>
            </article>

            <article class="main_footer_content_item">
                <h2>Contato:</h2>
                <p class="icon-phone"><b>Telefone:</b><br> +55 47 98409-2233</p>
                <p class="icon-envelope"><b>Email:</b><br> contato@nicolecontrutora.com.br</p>
                <p class="icon-map-marker"><b>Endereço:</b><br> Joinville, SC/Brasil</p>
            </article>

            <article class="main_footer_content_item social">
                <h2>Social:</h2>
                <a target="_blank" class="icon-facebook"
                   href="https://www.facebook.com/<?= CONF_SOCIAL_FACEBOOK_PAGE; ?>" title="Nicole Construtora no Facebook">/NicoleContrutora</a>
                <a target="_blank" class="icon-instagram"
                   href="https://www.instagram.com/<?= CONF_SOCIAL_INSTAGRAM_PAGE; ?>" title="Nicole Construtora no Instagram">@NicoleContrutora</a>
                <a target="_blank" class="icon-youtube" href="https://www.youtube.com/<?= CONF_SOCIAL_YOUTUBE_PAGE; ?>"
                   title="CafeControl no YouTube">/Nicole Contrutora</a>
            </article>
        </section>
    </div>
</footer>










<script async src="https://www.googletagmanager.com/gtag/js?id=UA-53658515-18"></script>
<script src="<?= theme("/assets/scripts.js"); ?>"></script>
<script src="shared/js/jquery-3.3.1.min.js"></script>
<script src="shared/js/jquery-migrate-3.0.1.min.js"></script>
<script src="shared/js/jquery-ui.js"></script>
<script src="shared/js/popper.min.js"></script>
<script src="shared/js/bootstrap.min.js"></script>
<script src="shared/js/owl.carousel.min.js"></script>
<script src="shared/js/jquery.stellar.min.js"></script>
<script src="shared/js/jquery.countdown.min.js"></script>
<script src="shared/js/bootstrap-datepicker.min.js"></script>
<script src="shared/js/jquery.easing.1.3.js"></script>
<script src="shared/js/aos.js"></script>
<script src="shared/js/jquery.fancybox.min.js"></script>
<script src="shared/js/jquery.sticky.js"></script>
<script src="shared/js/jquery.mb.YTPlayer.min.js"></script>
<script src="shared/js/jquery.easing.1.3.js"></script>
<script src="shared/js/jquery.fancybox.min.js"></script>
<script src="shared/js/main.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
<script defer src="shared/js/jquery.flexslider.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>









<?= $v->section("scripts"); ?>

</body>
</html>
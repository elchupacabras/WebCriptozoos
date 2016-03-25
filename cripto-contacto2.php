<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9" xmlns="http://www.w3.org/1999/xhtml" lang="es-ES"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="es-ES">
<!--<![endif]-->
<head>
    <title>Los Criptozoos Rock Band</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Seo Meta -->
    <meta name="description" content="Band - Music & Band Site Template HTML5 and CSS3">
    <meta name="keywords" content="remix, music, light, dark, multi purpose, band, css3, html5">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="styles/style.css" id="dark" media="screen" />
    <link rel="stylesheet" type="text/css" href="js/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="styles/icons/icons.css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE" />
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" type="text/css" href="styles/icons/font-awesome-ie7.min.css" />
    <![endif]-->
</head>


<header id="header" class="glue">
    <div class="row clearfix">
        <div class="little-head">

            <div class="social social-head">
                <a href="http://twitter.com/@loscriptozoos" class="bottomtip" title="Síguenos en Twitter" target="_blank"><i class="icon-twitter"></i></a>
                <a href="http://facebook.com/loscriptozoos" class="bottomtip" title="Me gusta en Facebook" target="_blank"><i class="icon-facebook"></i></a>
            </div><!-- end social -->

        </div><!-- little head -->
    </div><!-- row -->

    <div class="headdown">
        <div class="row clearfix">
            <div class="logo bottomtip" title="Los Criptozoos Rock Band">
                <a href="#"><img src="/crypto_imagenes/cripcrip.png" alt="Los Criptozoos Rock Band"></a>
            </div><!-- end logo -->

            <nav>
                <ul class="sf-menu">
                    <li>
                        <a href="index.php">Inicio<span class="sub">Comienza aquí</span></a>
                    </li>
                    <li><a href="cripto-about.php">Sobre la banda<span class="sub">Los Criptozoos</span></a></li>
                    <li><a href="cripto-musica.php">Material<span class="sub">Contenido digital</span></a>
                        <ul>
                            <li><a href="cripto-fotos.php">Galeria de fotos</a></li>
                            <li><a href="cripto-musica">Música</a></li>
                            <li><a href="cripto-videos.php">Videos</a></li>
                        </ul>

                    </li>
                    <li><a href="cripto-eventos.php">Eventos<span class="sub">Próximos eventos</span></a></li>
                    <li class="current selectedLava">
                        <a href="cripto-contacto.php">Contacto<span class="sub">Contacta con nosotros</span></a>
                    </li>
                </ul><!-- end menu -->
            </nav><!-- end nav -->
        </div><!-- row -->
    </div><!-- headdown -->
</header><!-- end header -->

    <div class="under_header">
        <img src="images/assets/breadcrumbs11.png" alt="#">
    </div><!-- under header -->

    <div class="page-content back_to_up">
        <div class="row clearfix mb">
            <div class="breadcrumbIn">
                <ul>
                    <li><a href="index.php" class="toptip" title="Homepage"> <i class="icon-home"></i> </a></li>
                    <li> Contacto </li>
                </ul>
            </div><!-- breadcrumb -->
        </div><!-- row -->

        <div class="row row-fluid clearfix mbf">
            <div class="span8 posts">
                <div class="def-block clearfix">
                    <h4> Contacta Con Nosotros </h4><span class="liner"></span>
                    <p>
                        Ésta sección es un espacio abierto, puedes dejar comentarios, sugerencias, ideas,
                        o lo que se te ocurra... deja tu correo para contactar con nosotros o recibir
                        información sobre la banda como fechas de conciertos, discos, etc.
                    </p>
<?php       include('procesar.php');
            echo'  <form method="post" id="contactForm" action="procesar.php">
                        <div class="clearfix">
                            <div class="grid_6 alpha fll"><input type="text" name="senderName" id="senderName" placeholder="Nombre *" class="requiredField" /></div>
                            <div class="grid_6 omega flr"><input type="text" name="senderEmail" id="senderEmail" placeholder="Dirección de eMail *" class="requiredField email" /></div>
                        </div>
                        <div><textarea name="message" id="message" placeholder="Mensaje *" class="requiredField" rows="8"></textarea></div>
                        <input type="submit" id="sendMessage" name="sendMessage" value="Enviar eMail" />
                        <span>  </span>
                    </form><!-- end form -->   ';
 ?>

                </div><!-- def block -->
            </div><!-- span8 posts -->

            <div class="span4 sidebar">
                <div class="def-block widget">
                    <h4> Dónde estamos </h4><span class="liner"></span>
                    <div class="widget-content">
                        <div id="map" class="mb"></div>
                     <!--   <div class ="logoseack" title="seasick managment & sound">
                         <img src="images/player/seasicklogo.jpg" alt="seasick managment & sound">
                        </div> -->

                        <p>Contacta por e-Mail</p>
                        <p>Teléfono: <strong> (+34) 674 972 798 Miguel </strong> <br>
                           Teléfono: <strong> (+34) 608 578 754 Diego </strong> <br>
                            Email: <strong><a href="mailto:info@loscriptozoos.com">info@loscriptozoos.com</a></strong><br>
                     <!--       Email: <strong><a href="mailto:seasickmanagment@gmail.com">seasickmanagment@gmail.com</a></strong> --></p>
                    </div><!-- widget content -->
                </div><!-- def block widget details -->

                <div class="def-block widget">
                    <h4> Notícias </h4><span class="liner"></span>
                    <div class="widget-content">
                        <p>
                            Si deseas recibir información acerca de los conciertos y
                            eventos de Los Criptozoos, subscríbete a nuestro boletín de notícias.
                        </p>
                        <form id="newsletters" method="post" action="#" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=sevenpsd', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
                            <input type="email" onfocus="if (this.value=='Escriba su eMail') this.value = '';" onblur="if (this.value=='') this.value = 'Escriba su eMail';" value="Escriba su eMail" placeholder="Escriba su eMail" required>
                            <button type="submit"><i class="icon-ok"></i></button>
                        </form>
                    </div><!-- widget content -->
                </div><!-- def block widget NewsLetters -->

            </div><!-- span4 sidebar -->
        </div><!-- row clearfix -->
    </div><!-- end page content -->

<footer id="footer">
    <div class="footer-last">
        <div class="row clearfix">
            <span class="copyright"><a href="http://loscriptozoos.com">Los Criptozoos</a> © 2014 </span>

            <div id="toTop"><i class="icon-angle-up"></i></div><!-- Back to top -->
            <div class="foot-menu">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="cripto-about.php">Sobre la Banda</a></li>
                    <li><a href="cripto-musica.php">Material</a></li>
                    <li><a href="cripto-eventos.php">Eventos</a></li>
                    <li><a href="cripto-contacto.php">Contacto</a></li>
                </ul><!-- end links -->
            </div><!-- end foot menu -->
        </div><!-- row -->
    </div><!-- end last -->

</footer><!-- end footer -->

</div><!-- end layout -->
<!-- Scripts -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/band.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/rs-plugin/pluginsources/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.jplayer.js"></script>
<script type="text/javascript" src="js/ttw-music-player-min.js"></script>
<script type="text/javascript" src="music/myplaylist.js"></script>
<script type="text/javascript" src="js/jquery.nanoscroller.js"></script>
<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/gmap3.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    jQuery(function () {
        jQuery("#map").gmap3({
            marker: {
                latLng: ["39.9671220423759", "-0.053241936155419625"]
            },
            map: {
                options: {
                    zoom: 11
                }
            }
        });
    });
    /* ]]> */
</script>
<script type="text/javascript" src="customize/script.js"></script><link rel="stylesheet" type="text/css" href="customize/style.css" media="screen" /><style id="themecolors" type="text/css"></style>
</body>
</html>
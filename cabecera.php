<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
        <title>XXI CONEISC - Tarapoto</title>
        <meta name="keywords" content="xxi, congreso nacional, ingenieria de sistemas y computacion, coneisc, tarapoto 2013" />
        <meta name="description" content="XXI CONEISC 2013 Tarapoto Peru" />
        <link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
        <link href="css/contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/fanbox_init.js"></script>
        <script type="text/javascript">
            jQuery(function (){jQuery(".slide_likebox").hover(function(){jQuery(".slide_likebox").stop(true, false).animate({right:"0"},"medium")},
                function(){jQuery(".slide_likebox").stop(true, false).animate({right:"-250"},"medium");},500);return false;});
            jQuery(function (){
                jQuery(".slide_likebox2").hover(function(){
                    jQuery(".slide_likebox2").stop(true, false).animate({right:"0"},"medium").css('z-index','1005');
                },
                function(){
                    jQuery(".slide_likebox2").stop(true, false).animate({right:"-250"},"medium").css('z-index','1000');
                },500);return false;
            });
        </script>
        <link rel="stylesheet" href="css/fanbox.css" type="text/css" media="screen">
        <div id='facebook_box' class="slide_likebox">
            <img src='images/fb_tab.png' style='float:left;'/>
            <div style='background: #3c5a98; height:325px; margin-left:38px;padding: 8px 5px 0pt 50px;border-radius: 0px 0px 0px 10px;'>
                <span>
                    <div class='likeboxwrap'>
                        <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fxxiconeisc&amp;width=238&amp;colorscheme=light&amp;connections=12&amp;stream=false&amp;header=false&amp;height=350" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:240px; height:320px;">
                        </iframe>
                    </div>
                </span>
            </div>
        </div>
        <div id='twitter_box' class="slide_likebox2">
            <img src='images/tw_tab.png' style='float:left;'/>
            <div style='background: #00a0e8; height:325px; margin-left:38px;padding: 8px 5px 0pt 50px;border-radius: 0px 0px 0px 10px;'>
                <span>
                    <div class='likeboxwrap'>
                        <div id="twitterfanbox">
                               <script type="text/javascript">fanbox_init("coneisc");</script>
                        </div>      
                    </div>
                </span>
            </div>
        </div>	
    </head>
    <body>
    <?php include_once("analyticstracking.php") ?>
        <div id="templatemo_wrapper_outer">
            <div id="templatemo_wrapper">

                <div id="templatemo_header">
                    <div id="site_title">
                        <a href="http://www.coneisc.pe"><img src="images/logo.png" width="400px" /></a>
                    </div> <!-- end of site_title -->

                    <ul id="social_box">
                        <li><a href="#" title="Siguenos en Facebook" onclick="window.open('http://www.facebook.com/xxiconeisc')"><img src="images/facebook.png" alt="facebook" /></a></li>
                        <li><a href="#" title="Siguenos en Twitter" onclick="window.open('http://www.twitter.com/coneisc')"><img src="images/twitter.png" alt="twitter" /></a></li>        
                    </ul>

                    <div class="cleaner"></div>
                </div>

                <div id="templatemo_menu">
                    <ul>
                        <li><a href="index.php" id="menu_inicio">Inicio</a></li>
                        <li><a href="javascript:void" id="menu_coneisc">XXI CONEISC <img src="images/down.png" /></a>
                            <ul>
                                <li><a href="coneisc.php">Presentación</a></li>
                                <li><a href="cronograma.php">Cronograma</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void" id="menu_nosotros">Nosotros <img src="images/down.png" /></a>
                            <ul>
                                <li><a href="mision_vision.php">Misión y Visión</a></li>
                                <li><a href="comision_organizadora.php">Comisión Organizadora</a></li>
                            </ul>
                        </li>
                        <li><a href="papers.php" id="menu_papers">Papers</a></li>
                        <li><a href="eventos.php" id="menu_eventos">Eventos</a></li>
                        <li><a href="inscripcion.php" id="menu_inscripcion">Inscripción</a></li>
                        <li><a href="costos.php" id="menu_costos">Costos de Vida</a></li>
                        <li><a href="galeria.php" id="menu_galeria">Galería</a></li>
                        <li><a href="contact.php" id="menu_contactenos">Contáctenos</a></li>
                    </ul>    	
                </div> <!-- end of templatemo_menu -->

                <div id="templatemo_slider_wrapper">

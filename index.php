<?php include_once("cabecera.php") ?>
<div id="mensaje">
    <button id="salir">x</button>
    <table align="center">
        <tr>
            <td><h4>Mes de Inscripción</h4></td>
            <td><h4>Estudiantes</h4></td>
            <td><h4>Profesionales</h4></td>
        </tr>
        <tr>
            <td><h5>Mayo</h5></td>
            <td><h5>S/. 95.00</h5></td>
            <td><h5>S/. 100.00</h5></td>
        </tr>
    </table>
    <div style="text-align: center">
        <img src="images/cuentas.jpg" />
    </div>
</div>
<div id="fondooscuro"></div>

<div id="templatemo_slider">

    <div id="one" class="contentslider">
        <div class="cs_wrapper">
            <div class="cs_slider">
            <ul>
                <li>
                <div class="cs_article_banner">
                    <div class="slide_banner">
                            <img src="images/slider/portada.jpg" alt="Portada" width="800px" />
                    </div>
                </div><!-- End cs_article -->
                </li>
                <li>
                    <div class="cs_article_poster">
                    <div class="slider_poster">
                        <img src="images/slider/tarapoto.jpg" alt="Tarapoto" width="800px" height="240px"/>    
                    </div>              
                    </div><!-- End cs_article -->  
                </li>
                <li>
                <div class="cs_article">
                    <div class="slider_content_wrapper">

                        <div class="slider_image">
                            <img src="images/slider/papers.jpg" alt="Papers" />
                        </div>

                        <div class="slider_content">
                            <h2>Papers</h2>
                            <p style="text-align: justify">Conoce las fechas importantes de nuestro Call For Papers, nuestro comité de programa internacional, formatos y demás</p>
                            <div class="btn_more"><a href="papers.php">Acceder</a></div>
                        </div>

                    </div>
                </div><!-- End cs_article -->
                </li>
                <li>
                    <div class="cs_article">
                    <div class="slider_content_wrapper">

                        <div class="slider_image">
                            <img src="images/slider/costos.jpg" alt="Costos" />
                        </div>

                        <div class="slider_content">
                            <h2>Costos de vida</h2>
                            <p style="text-align: justify">Contáctate con hoteles y restaurantes de la ciudad de Tarapoto, cotiza y planifica tu viaje.</p>
                            <div class="btn_more"><a href="costos.php">Acceder</a></div>
                        </div>

                    </div>
                    </div><!-- End cs_article -->  
                </li>     
                
            </ul>
            </div><!-- End cs_slider -->
        </div><!-- End cs_wrapper -->
                <a href="#" class="prev cs_leftBtn"></a>
                <a href="#" class="next cs_rightBtn"></a>
    </div><!-- End contentslider -->

    <!-- Site JavaScript -->
    <script type="text/javascript" src="js/jcarousellite.js"></script>
    <script type="text/javascript">
        $(function() {
            jQuery("#one").jCarouselLite({
                visible: 1,
                speed: 1000,
                auto: 10000,
                btnNext: '.next',
                btnPrev: '.prev'
            });
        });
    </script>
    <div class="cleaner"></div>

</div>

</div>

<div id="templatemo_content_wrapper">
    <div id="content">

        <h2>XXI CONEISC TARAPOTO 2013</h2>
        El Vigesimo Primer Congreso Nacional de Estudiantes de Ingeneria de Sistemas y Computación 
        en este año 2013 será organizado por la Facultad de Ingenería de Sistemas e Informática de la Universidad 
        Nacional de San Martin - Tarapoto desde el <strong> 12 al 17 de Agosto</strong>. <br>
         

       

        <div class="hr_divider"></div>

        <div class="col_w560">
            <h2>EVENTOS</h2>
            <div class="image_wrapper image_fl"><img src="images/presentacion.jpg" width="201" height="300"/></div>
             <p style="text-align: justify">El XXI CONEISC TARAPOTO 2013 será un evento muy enriquecedor para cada unos de los participantes, 
       brindando los información de los ultimos avances en la computación y sistemas, además integrando y confraternizando
       a los participantes. <br>
       Dentro de los eventos principales se encuentran las conferencias magistrales a cargo de reconocidos ponentes; 
       talleres, minicuros, concurso de programación, concurso de proyectos 
       científicos e innovadores, feria tecnológica, feria gastronómica y 
       artesanal; así como eventos culturales y deportivos.</p>
            
        </div>

        <div class="col_w280">
            <h2>TARAPOTO</h2>
            <blockquote>
                <p style="text-align: justify">Tarapoto es una hermosa ciudad de la amazonía peruana, las vias de acceso son diversas y accesibles. 
        Así como por medio de las Líneas Aéreas STAR PERÚ, LAN Perú, Taca Perú; 
        terrestre como : Movil Tours, Cial, Civa, Sol Peruano, GH BUSS entre otros, también se puede tomar 
        el transporte fluvial para los visitantes del departamento Loreto.</p>
            </blockquote>
        </div>

        <div class="cleaner"></div>

    </div>
    <script type="text/javascript">
        $(function(){
            $("#menu_inicio").addClass('current');
        });
            
            function salir(){
                $("#mensaje").fadeOut(300);
                $("#fondooscuro").fadeOut(300);
            }
            
            $("#fondooscuro").click(function(){
                salir();
            });
            
            $("#salir").click(function(){
                salir();
            });
            
            document.onkeydown = function(evt) {
                evt = evt || window.event;
                if (evt.keyCode == 27) {
                    salir();
                }
            };
    </script>
    <?php include_once("pie.php") ?>
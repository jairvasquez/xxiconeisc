<?php include_once("cabecera.php") ?>        
        	
        </div>
		<div id="templatemo_content_wrapper">
            <div id="content">
            	
                <h2>Contáctenos</h2>

                <p>Si tienes alguna duda o deseas informarte más sobre el XXI CONEISC Tarapoto 2013 comuniquese con nosotros.</p>
                    
                <div class="hr_divider"></div>
                
                <div class="col_w350 float_l">
                	<div id="contact_form">
                    <h4>Envíenos un Mensaje</h4>

                    <form method="post" name="contact" action="contacto.php">

						<label for="author">Nombre:</label> <input type="text" id="nombre" name="nombre" class="required input_field" />
						<div class="cleaner_h10"></div>
                        
						<label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
						<div class="cleaner_h10"></div>
						
						<label for="subject">Asunto:</label> <input type="text" name="asunto" id="asunto" class="input_field" />
						<div class="cleaner_h10"></div>
	
						<label for="text">Mensaje:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
						<div class="cleaner_h10"></div>
						
						<input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Enviar" />
						<input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Limpiar" />

                    </form>
                    
                    </div>
                </div>
                
 				<div class="col_w420 last_box">
	                <h4>Estamos ubicados en:</h4>
                        <iframe width="500" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=unsm+&amp;aq=&amp;sll=-6.487350,-76.367950&amp;sspn=0.012100,0.021100&amp;ie=UTF8&amp;hq=unsm&amp;hnear=&amp;filter=0&amp;update=1&amp;ll=-6.486454,-76.378922&amp;spn=0.012089,0.021136&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=15027587430505972592&amp;output=embed">
                        </iframe><br />
                        <small>
                            <a target="_blank" href="http://maps.google.es/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=unsm+&amp;aq=&amp;sll=-6.487350,-76.367950&amp;sspn=0.012100,0.021100&amp;ie=UTF8&amp;hq=unsm&amp;hnear=&amp;filter=0&amp;update=1&amp;ll=-6.486454,-76.378922&amp;spn=0.012089,0.021136&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=15027587430505972592" style="color:#FFF;text-align:left">Ver mapa más grande</a>
                        </small>
                    
               </div>                

                <div class="cleaner"></div>
                
        	</div>
			<script type="text/javascript">
				$(document).ready(function(){
					$("#menu_contactenos").addClass('current');
				});
			</script>
<?php include_once("pie.php") ?>
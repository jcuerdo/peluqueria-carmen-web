
<?php
include_once "page-cab.php";
?>

<script src="js/contacto.js" type="text/javascript"></script>

					<div class="post">
						<h2 class="title"><a href="#">Contacto</a></h2>
				
					<div class="entry">
			          <form id="formu_contacto" action="mail/contacto.php" method="post" enctype="multipart/form-data" >

        <div class="col1">
            <div class="texto">
                <p class="texto14">Por favor, rellene los siguientes datos del formulario</p>
                <p class="verde margin_top23"><acronym title="datos obligatorios">(*)</acronym> datos obligatorios</p>
             
                      <input type="hidden" name="idioma" value="esp"/>
                    <input type="hidden" name="accion" value="contacto"/>
                 
                    <div class="campos2 campos3 margen_izq20">
                        <label for="nombre" >Nombre <span class="verde">(*)</span></label><br/><input name="nombre" id="nombre" type="text"/><br />
                        <label for="apellidos" >Apellidos <span class="verde">(*)</span></label><br/><input name="apellidos" id="apellidos" type="text"/><br />
                        <label for="email" >Correo electrónico <span class="verde">(*)</span></label><br/><input name="email" id="email" type="text"/><br />
                        <label for="asunto">Asunto <span class="verde">(*)</span></label><br/><input name="asunto" id="asunto" type="text" /><br />
                        <label for="comentario" >Comentario</label><br/><textarea name="comentario" id="comentario" cols="50" rows="10"></textarea>	<br />

                    </div>
            
            </div>
        </div>
        <div class="cleaner">&nbsp;</div>


            <input type="submit" name="Submit" value="Enviar" class="enviar" />

    </form>

					
</div>

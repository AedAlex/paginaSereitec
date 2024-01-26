<section class="contenedor pagina" data-pagina="5">
    <div class=" contenedor contacto">
        <h1>Formas de contacto</h1>
        <p>
            Ponte en contacto con nosotros para brindarte una asesoria personalizada y siguenos en nuestras redes para 
            mantenerte informado.
        </p>
        <picture class="imagen-contacto">
            <source srcset="../build/img/imagen-contacto.webp" type="image/webp">
            <img loading="lazy" src=/build/img/imagen-contacto.png" alt="Imagen contacto">
        </picture>
        <div class="contacto-contenedor">
            <div class="contacto-datos">
                <h4>Redes Sociales</h4>
                <div class="div-info contacto-div-info">
                    <picture>
                        <source srcset="../build/img/facebooklogo.webp" type="image/webp">
                        <img loading="lazy" width="200" height="300" src="../build/img/facebooklogo.png" alt="Logo Facebook">
                    </picture>
                    <a href="https://www.facebook.com/profile.php?id=61551645877574" target="_blank" class="contacto-link-facebook">
                        <p>Síguenos en Facebook!</p>
                    </a> 
                </div>
                <h4>Telefonos / Whatsapp</h4>
                <div class="div-info contacto-div-info">
                    <picture>
                        <source srcset="../build/img/telefonologo.webp" type="image/webp">
                        <img loading="lazy" width="200" height="300" src="../build/img/telefonologo.webp" alt="Logo teléfono">
                    </picture>
                    <p>81 24 69 69 28</p>
                </div>
                <h4>Correo Electrónico</h4>
                <div class="div-info contacto-div-info">
                    <picture>
                        <source srcset="../build/img/correologo.webp" type="image/webp">
                        <img loading="lazy" width="200" height="300" src="../build/img/correologo.webp" alt="Logo correo">
                    </picture>
                    <p>ventas@sereitec.com</p>
                </div> 
            </div>
            <div class="contacto-formulario">
                <p>O si lo prefieres llena el formulario y nosotros nos comunicaremos a la brevedad.</p>
                <form action="/contacto" method="POST" class="formulario">
                    <fieldset>
                        <legend>Información Personal</legend>
                        <label for="nombre">Nombre</label>
                        <input type="text" placeholder="Tu nombre" id="nombre" name="contacto[nombre]" required >
                        <label for="telefono">Teléfono</label>
                        <input type="phone" placeholder="Tu teléfono" id="telefono" name="contacto[telefono]" required >
                        <label for="correo">Correo</label>
                        <input type="email" placeholder="Tu correo" id="correo" name="contacto[correo]" required >


                        <label for="mensaje">Mensaje:</label>
                        <textarea id="mensaje" name="contacto[mensaje]" required ></textarea>
                    </fieldset>
                    <input type="submit" value="enviar" class="boton">
                </form>
                    <?php
                    if($mensaje) { ?>
                        <p class='alerta exito'><?php echo $mensaje; ?></p>
                    <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php
    $script = "
        <script src='../build/js/app.js'></script>
    ";
?>
<section class="section" id="contact">
    <div class="container text-center">
        <p class="section-subtitle">¿Cómo te encuentro?</p>
        <h6 class="section-title mb-5">¡Contáctame!</h6>
        <!-- contact form -->
        <div class="row d-flex justify-content-center ">
            <div class="col-sm-6 col-xs-12">
                <small><label class="section-subtitle"> Presiona el correo para enviarme un Mail o presiona "Copiar" para pegarlo en el portapapeles</label></small>
                <a id="" href="mailto:tom.bascal@gmail.com" class="form-control text-center contact-input" style="background-color:#695aa6" title="Presiona para contactarme" disabled>tom.bascal@gmail.com</a>
                <input type="text" name="correo" id="correo" value="tom.bascal@gmail.com" style="opacity:0;" hidden>
            <button type="button" class="btn btn-primary mt-1" style="border-radius:5px;" id="copiar" title="Copiar a portapapeles">Copiar <i class="fas fa-copy"></i></button>
            </div>
        </div>
        <?php if(false){ ?>
        <form action="" class="contact-form col-md-10 col-lg-8 m-auto">
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <input type="text" size="50" class="form-control" placeholder="Tu nombre" required>
                </div>
                <div class="form-group col-sm-6">
                    <input type="email" class="form-control" placeholder="Tu Email" requried>
                </div>
                <div class="form-group col-sm-12">
                    <textarea name="comment" id="comment" rows="6" class="form-control" placeholder="Escribeme"></textarea>
                </div>
                <div class="form-group col-sm-12 mt-3">
                    <input type="submit" value="Enviar notificación" class="btn btn-outline-primary rounded">
                </div>
            </div>
        </form><!-- end of contact form -->
        <?php } ?>
    </div><!-- end of container -->
</section>

<script>
    document.getElementById('copiar').addEventListener("click",()=> {
        const copy = document.getElementById("correo").value ;
        document.getElementById('correo').hidden = false;
        document.getElementById('correo').disabled = false;
        document.getElementById('correo').focus();
        document.execCommand('selectAll');
        document.execCommand('copy');
        document.getElementById('correo').disabled = true;
        document.getElementById('correo').hidden = true;
        alert('Correo copiado al portapapeles');
    });
</script>
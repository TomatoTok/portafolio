<!-- Modal -->
<div class="modal fade" id="project_3" tabindex="-1" aria-labelledby="project_3Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="project_3Label">Generador de QR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-body-carr">
                <div id="model_proj_3" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#model_proj_3" data-slide-to="0" class="active"></li>
                        <li data-target="#model_proj_3" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active item_carrousel">
                            <img src="<?= base_url('assets/images/project3/init.jpg') ?>" class="img_carrousel" alt="...">
                        </div>
                        <div class="carousel-item item_carrousel">
                            <img src="<?= base_url('assets/images/project3/img1.jpg') ?>" class="img_carrousel" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev control-look" type="button" data-target="#model_proj_3" data-slide="prev">
                        <span class="carousel-control-prev-icon next-style" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next control-look" type="button" data-target="#model_proj_3" data-slide="next">
                        <span class="carousel-control-next-icon next-style" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
            <div class="container_modal">
                <h5>DESCRIPCIÓN:</h5>
                <label for="">Generador de QR con motor JS, permite crear cualquier tipo de texto a un QR tanto como una url como una frase escrita a mano.</label>
                <h5>LINKS</h5>
                <label for=""><b>GitHub repository:</b> <a href="https://github.com/TomatoTok/qr-generator" target="_blank"> Github.com/TomatoTok/QR</a></label>
                <br>
                <label for=""><b>Página Web:</b> <a href="https://tomatotok.github.io/qr-generator/" target="_blank"> Tomatotok.github.io/QR</a></label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
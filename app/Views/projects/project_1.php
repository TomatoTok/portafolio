<style>
    .img_carrousel {
        height: 400px;
    }

    .item_carrousel {
        text-align: center;
    }

    .container_modal {
        margin: 20px 150px;
    }

    .control-look {
        border: none;
        background-color: transparent;
        color: gray;
    }

    .next-style {
        border-radius: 50%;
        background-color: gray;
        padding: 5px;
    }

    .modal-body-carr {
        padding: 5px 100px;
    }

    @media screen and (max-width: 900px) {
        .container_modal {
            margin: 20px;
        }

        .img_carrousel {
            height: 25vh;
        }

        .modal-body-carr {
            padding: 15px;

        }
    }
</style>
<!-- Modal -->
<div class="modal fade" id="project_1" tabindex="-1" aria-labelledby="project_1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="project_1Label">Gestor de Usuarios Personal (GUP)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-body-carr">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active item_carrousel">
                            <img src="<?= base_url('assets/images/project1/init.jpg') ?>" class="img_carrousel" alt="...">
                        </div>
                        <div class="carousel-item item_carrousel">
                            <img src="<?= base_url('assets/images/project1/img1.jpg') ?>" class="img_carrousel" alt="...">
                        </div>
                        <div class="carousel-item item_carrousel">
                            <img src="<?= base_url('assets/images/project1/img2.jpg') ?>" class="img_carrousel" alt="...">
                        </div>
                        <div class="carousel-item item_carrousel">
                            <img src="<?= base_url('assets/images/project1/img3.jpg') ?>" class="img_carrousel" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev control-look" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                        <span class="carousel-control-prev-icon next-style" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next control-look" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                        <span class="carousel-control-next-icon next-style" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
            <div class="container_modal">
                <h5>DESCRIPCIÓN:</h5>
                <label for="">Se trata de un programa diseñado en java para almacenar toda la informacion sobre cuentas, correos, usuarios, contraseñas, etc. Pensado en una base de datos local generada en txt cifrada para su maxima proteccion.</label>
                <h5>LINKS</h5>
                <label for=""><b>GitHub repository:</b> <a href="https://github.com/TomatoTok/Gup" target="_blank"> Github.com/TomatoTok/Gup</a></label>
                <br>
                <label for=""><b>CodePen Documentacion:</b> <a href="https://codepen.io/tomatotok/full/abWZeee" target="_blank"> Codepen.io/tomatotok/Gup</a></label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
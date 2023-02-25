<style>
    .img-ex {
        cursor: pointer;
    }

    .aux-fix{
        width:36vh;
    }
    @media only screen and (max-width: 600px) {
        .aux-fix {
            width: 22vh!important;
        }
    }
</style>
<section class="section p-3" id="experience">
    <div class="container text-center">
        <p class="section-subtitle">Experiencia</p>
        <h6 class="section-title mb-2">Empresas</h6>
        <div class="row mb-4 mt-2" style="justify-content: center;">
            <div class="col-sm-4 pt-4 col-xs-6 "><img class="img-ex img-fluid" style="height:6vh;width:25vh;background-color:black;padding:5px;border-radius:3px" src="<?= base_url('assets/images/company/img1.png') ?>" alt="Blister" data-bs-toggle="tooltip" data-bs-placement="top" title="Blister Technologies"></div>
        </div>
        <div class="row pt-6 pb-3" style="justify-content: space-evenly;">
            <div class="col-sm-4 pt-4 col-6 "><img class="img-ex img-fluid" style="height:10vh;width:18vh;margin-top:-10px;" src="<?= base_url('assets/images/company/img2.png') ?>" alt="Shell"data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top"></div>
            <div class="col-sm-4 pt-4 col-6 "><img class="img-ex img-fluid" style="height:5vh;width:16vh;margin-top:10px;" src="<?= base_url('assets/images/company/img3.png') ?>" alt="Zille" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ZILLE"></div>
            <div class="col-sm-4 pt-4 col-6 "><img class="img-ex img-fluid" style="background-color:#006a56;padding:3px; height:8vh;width:8vh;border-radius:3px" src="<?= base_url('assets/images/company/img4.png') ?>" alt="Calfrac" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CALFRAC"></div>
            <div class="col-sm-4 pt-4 col-6 "><img class="img-ex img-fluid" style="height:18vh;width:20vh;margin-top:-25px;" src="<?= base_url('assets/images/company/img5.png') ?>" alt="Ministerio educacion neuquen" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Ministerio de Educacion Neuquén"></div>
            <div class="col-sm-4 pt-4 col-6 "><img class="img-ex img-fluid" style="height:10vh;width:13vh;" src="<?= base_url('assets/images/company/img6.png') ?>" alt="Contreras Hermanos" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Contreras Hermanos"></div>
            <div class="col-sm-4 pt-4 col-6 "><img class="img-ex img-fluid aux-fix" src="<?= base_url('assets/images/company/img7.png') ?>" alt="PREVENSUR" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PREVENSUR"></div>
        </div>
        <p class="mt-3 mb-2"><small style="font-size: 75%;">Dentro de <a href="https://blister.com.ar/" style="color:#695aa6;"><b>Blister Technologies</b></a> presto servicios brindando soluciones informáticas y tecnológicas a las empresas y/o compañías mencionadas</small></p>
    </div>
</section>
<script>/*
function start(){
    const elems = document.getElementsByTagName('data-bs-toggle');
    console.log(elems[i]);

    for(i = 0; i < elems.length;i++ ){
        new bootstrap.Tooltip(elems[i], options);
        console.log(elems[i]);
    }
}
start();*/
</script>
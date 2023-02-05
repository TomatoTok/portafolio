<!-- page header -->
<header id="home" class="header">
    <div class="overlay"></div>
    <div class="header-content container">
        <h1 class="header-title">
            <span class="up">HOLA!</span>
            <span class="down">Soy Tomas Bascal</span>
        </h1>
        <p class="header-subtitle">FULL STACK WEB DEVELOPER</p>
    </div>
</header><!-- end of page header -->

<style>
    #img-prom {
        border-radius: 50%;
        border: 30px solid #ffde59;
        width: 80%;
        height: 320px;
    }
    .b-text{
        color: #ffdf00;
    background-color: #6c757d;
    padding: 0px 3px;
    border-radius: 3px;
    }
    @media only screen and (max-width: 600px) {
        #img-prom {
        border-radius: 50%;
        border: 30px solid #ffde59;
        width: 80%;
        height: 250px;
    }
}

</style>

<!-- about section -->
<section class="section pt-0" id="about">
    <!-- container -->
    <div class="container text-center">
        <!-- about wrapper -->
        <div class="about">
            <div class="about-img-holder">
                <img src="assets/images/man.jpg" style="border-radius: 50%;" class="about-img" id="img-prom" alt="yang wen li, The legend of the galactic heroes character">
            </div>
            <div class="about-caption">
                <h2 class="section-title mb-3">Sobre m&iacute;</h2>
                <p>Me llamo <b class="b-text">Tomas Bascal</b> Estudiante de 3er año en <b>Lic. Sistemas de Información</b>
                    <br> Tambien soy <b>Desarrollador Web Full Stack Argentino</b> con gran pasión en generar y crear nuevas herramientas y nuevos desarrollos.</p>
                     <p>Me gusta más el <b class="b-text">FrontEnd</b> pero me llevo bien con el <b class="b-text">BackEnd</b> y <b>DB</b>.
                     <br> Más abajo vas a encontrar algunos de mis proyectos, habilidades y hobbys.</p>
                <a href="<?= base_url('/assets/uploads/cv/Tomas_Bascal_CV_feb2023.pdf') ?>" class="btn-rounded btn btn-outline-primary mt-4" download="Tomas Bascal CV feb2023">Descargar CV</a>
                <a href="https://linktr.ee/tomasbascal" target="_blank" class="btn-rounded btn btn-outline-primary ml-2 mt-4">Social Media >></a>
                <!--a href="mailto:tom.bascal@gmail.com" target="_blank" class="btn-rounded btn btn-outline-primary mt-4">Correo electrónico</a-->
            </div>
        </div><!-- end of about wrapper -->
    </div><!-- end of container -->
</section> <!-- end of about section -->

<!-- service section -->
<?php echo view('home/components/service'); ?>
<!-- end of service section -->

<!-- skills section -->
<?php echo view('home/components/skills') ?>
<!-- end of skills section -->

<!-- portfolio section -->
<?php echo view('home/components/portofolio') ?>
<!-- end of portfolio section -->

<!-- company section -->
<?php echo view('home/components/experience') ?>
<!-- end of company section -->

<!-- hobby section -->
<?php echo view('home/components/hobby') ?>
<!-- end of hobby section -->

<!-- bar section -->
<?php //echo view('home/components/bar') 
?>
<!-- end of section -->

<!-- testimonial section -->
<?php //echo view('home/components/testimonial') 
?>
<!-- end of testimonial section -->

<!-- blog section -->
<?php //echo view('home/components/blog') 
?>
<!-- end of blog section -->

<!-- contact section -->
<?php echo view('home/components/contact') ?>
<!-- end of contact section -->
<section><!-- start modals creation -->
    <?php echo view('projects/project_1'); ?>
    <?php echo view('projects/project_2'); ?>
    <?php echo view('projects/project_3'); ?>
    <?php echo view('projects/project_4'); ?>
    <?php echo view('projects/project_5'); ?>
    <?php echo view('projects/project_6'); ?>
    <?php echo view('projects/project_7'); ?>
    <?php echo view('projects/project_8'); ?>
</section><!-- the end of modalegion -->
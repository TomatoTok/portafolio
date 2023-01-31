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

<!-- about section -->
<section class="section pt-0" id="about">
    <!-- container -->
    <div class="container text-center">
        <!-- about wrapper -->
        <div class="about">
            <div class="about-img-holder">
                <img src="assets/images/man.png" class="about-img" alt="yang wen li, The legend of the galactic heroes character">
            </div>
            <div class="about-caption">
                <h2 class="section-title mb-3">Sobre m&iacute;</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae aliquid ad provident aut fuga animi soluta quae eos non cupiditate voluptates dolorem, doloremque quos dicta quibusdam impedit iure nemo a iste
                    <br>culpa! Quasi quibusdam hic recusandae delectus velit officiis explicabo voluptatibus! Nemo esse similique, voluptates labore distinctio, placeat explicabo facilis molestias, blanditiis culpa iusto voluptatem ratione eligendi a, quia temporibus velit vero ipsa sint ex voluptatum expedita aliquid! Debitis, nam!
                </p>
                <button class="btn-rounded btn btn-outline-primary mt-4">Descargar CV</button>
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

<!-- hobby section -->
<?php echo view('home/components/hobby') ?>
<!-- end of hobby section -->

<!-- bar section -->
<?php echo view('home/components/bar') ?>
<!-- end of section -->

<!-- testimonial section -->
<?php echo view('home/components/testimonial') ?>
 <!-- end of testimonial section -->

<!-- blog section -->
<?php echo view('home/components/blog') ?>
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
</section><!-- the end of modalegion -->
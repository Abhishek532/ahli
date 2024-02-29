<?php
    /*
    * Template Name: About AHLI
    */
    get_header();

    $context = Timber::get_context();
    Timber::render('templates/page-aboutahli.twig',$context);
?>
  <section class="about-ahli">
    <div class="container">
      <div class="row">

    
        <div class="about-left col-md-8">
          <h1>About AHLI</h1>
          <p>
            <?php the_field('about_us_paragraph');?>
          </p>
        </div>

        <div class="about-right col-md-4">
          <img src="<?php the_field('about_us_image');?>">
        </div>

      </div>
    </div>
  </section>

</div>

<?php

get_footer();
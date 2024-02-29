<?php
    /*
    * Template Name: Applications
    */
    get_header();

    $context = Timber::get_context();
    Timber::render('templates/page-application.twig',$context);
?>
  <section class="applications">
    <div class="container">
      <h1 class="page-heading"> <?php the_field('applications_heading') ?></h1>
      <div class="row">

        <div class="col-sm-6">
          <img width=100% src="<?php the_field('applications_image') ?>">
        </div>
        
        <div class="col-sm-6">
          <p>
          <?php the_field('applications_text') ?>
          </p>
        </div>

  

      </div>
    </div>
  </section>
<?php

get_footer();
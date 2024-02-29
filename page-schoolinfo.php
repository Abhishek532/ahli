<?php
    /*
    * Template Name: School Info
    */
    get_header();

    $context = Timber::get_context();
    Timber::render('templates/page-schoolinfo.twig',$context);
?>
  <section class="school-info">
    <div class="container">
    <h1> <?php the_field('school_info_heading') ?></h1>

      <div class="row">

        <div class="col-md-6">

          <p>
          <?php the_field('school_information_text') ?>
          </p>
        </div>

        <div class="col-md-6">
           <img src="<?php the_field('right_image') ?>">
        </div>

      </div>
    </div>
  </section>
<?php

get_footer();
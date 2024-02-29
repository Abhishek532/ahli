<?php
    /*
    * Template Name: Admissions
    */
    get_header();

    $context = Timber::get_context();
    Timber::render('templates/page-university.twig',$context);
?>
  <section class="university-info">
    <div class="container">
      <h1 class="page-heading"> <?php the_field('uni_page-heading') ?></h1>
      <div class="row">

        <div class="col-md-6">
          <h1>
            <?php the_field('content-heading') ?>
          </h1>
          <p>
            <?php the_field('paragraph-content') ?>
          </p>
        </div>

        <div class="col-md-6">
           <img src="<?php the_field('image') ?>">
        </div>

      </div>
    </div>
  </section>
<?php

get_footer();
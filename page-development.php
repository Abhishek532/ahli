<?php
    /*
    * Template Name: Development
    */
    get_header();

    $context = Timber::get_context();
    Timber::render('templates/page-development.twig',$context);
?>
  <section class="development">
    <div class="container">
      <h1 class="page-heading">
        <?php the_field('development-heading') ?>
      </h1>
      <div class="row">

        <div class="col-md-6">
          <p>
            <?php the_field('development-content') ?>
          </p>
        </div>

        <div class="col-md-6">
           <img width=100% src="<?php the_field('image') ?>">
        </div>

      </div>

      <div class="row video-banner">
        <div class="col-md-6">
          <h1>
            <?php the_field('training-heading') ?>
          </h1>
          <p>
            <?php the_field('training-content') ?>
          </p>
        </div>

        <div class="col-md-6">
          <h1>
            <?php the_field('training-video-heading') ?>
          </h1>
          
          <video controls>
            <source src="<?php the_field('video') ?>" >
          </video>
        </div>
      </div>


    </div>
  </section>
<?php

get_footer();
<?php
    /*
    * Template Name: Class
    */
    get_header();

    $context = Timber::get_context();
    Timber::render('templates/page-class.twig',$context);
?>




<section class="classroom-shots">
  <div class="container">

    <h1 class="page-heading"><?php the_field('main-heading') ?></h1>
    <p class="page-heading"><?php the_field('main-content') ?></p>

    <div class="row">

      <div class="col-md-6">
        <h2 class="heading"><?php the_field('heading1') ?></h2>
        <p class="content"><?php the_field('content1') ?></p>
        <p class="byline"><?php the_field('byline1') ?></p>
      </div>

      <div class="video col-md-6">
          <video controls>
            <source src="<?php the_field('video1') ?>" >
          </video>
      </div>

    </div>

    <div class="row">

      <div class="col-md-6">
        <h2 class="heading"><?php the_field('heading2') ?></h2>
        <p class="content"><?php the_field('content2') ?></p>
        <p class="byline"><?php the_field('byline2') ?></p>
      </div>

      <div class="video col-md-6">
          <video controls>
            <source src="<?php the_field('video2') ?>" >
          </video>
      </div>

    </div>

    <div class="row">

      <div class="col-md-6">
        <h2 class="heading"><?php the_field('heading3') ?></h2>
        <p class="content"><?php the_field('content3') ?></p>
        <p class="byline"><?php the_field('byline3') ?></p>
      </div>

      <div class="video col-md-6">
          <video controls>
            <source src="<?php the_field('video3') ?>" >
          </video>
      </div>

    </div>

    <div class="row">

      <div class="col-md-6">
        <h2 class="heading"><?php the_field('heading4') ?></h2>
        <p class="content"><?php the_field('content4') ?></p>
        <p class="byline"><?php the_field('byline4') ?></p>
      </div>

      <div class="video col-md-6">
          <video controls>
            <source src="<?php the_field('video4') ?>" >
          </video>
      </div>

    </div>

    <div class="row">

      <div class="col-md-6">
        <h2 class="heading"><?php the_field('heading5') ?></h2>
        <p class="content"><?php the_field('content5') ?></p>
        <p class="byline"><?php the_field('byline5') ?></p>
      </div>

      <div class="video col-md-6">
          <video controls>
            <source src="<?php the_field('video5') ?>" >
          </video>
      </div>

    </div>

    

  </div>
</section>




<?php


get_footer();
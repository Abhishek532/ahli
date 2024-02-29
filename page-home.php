<?php
    /*
    * Template Name: HomePage
    */
    get_header();

    $context = Timber::get_context();
    Timber::render('templates/page-home.twig',$context);
?>

<section class="banner">
  <div class="container">
    <div class="row">

      <div class="banner-left col-md-6">
      
        <h5><?php the_field('heading_small');?></h5>
        <h2><?php the_field('main_heading');?></h5>
        <p><?php the_field('banner_content');?></p>

        <div class="banner-button">
          <a class="b1-link" href="#"><button class="b1">View Course</button></a>
          <a class="b2-link" href="#"><button class="b2">Apply Now</button></a>
        </div>

      </div>

      <div class="banner-right col-md-6">
        <img src="<?php the_field('banner_image');?>">
      </div>

    </div>
  </div>
</section>

<section class="feature-part feature-part1">
  <div class="container">
    <div class="row">

        <div class="feature-item col-sm-6 col-lg-3">
          <div class="feature-img">
            <i class="fa fa-certificate"></i>
          </div>
          <div class="feature-title">
            <h3><?php the_field('card_heading_1');?></h3>
          </div>
          <div class="feature-content">
            <p><?php the_field('card_content_1');?></p>
          </div>
        </div>

        <div class="feature-item col-sm-6 col-lg-3">
          <div class="feature-img">
            <i class="fa fa-university"></i>
          </div>
          <div class="feature-title">
            <h3><?php the_field('card_heading_2');?></h3>
          </div>
          <div class="feature-content">
            <p><?php the_field('card_content_2');?></p>
          </div>
        </div>

        <div class="feature-item col-sm-6 col-lg-3">
          <div class="feature-img"> 
            <i class="fa fa-building-o"></i>
          </div>
          <div class="feature-title">
            <h3><?php the_field('card_heading_3');?></h3>
          </div>
          <div class="feature-content">
            <p><?php the_field('card_content_3');?></p>
          </div>
        </div>

        <div class="feature-item col-sm-6 col-lg-3">
          <div class="feature-img">
            <i class="fa fa-book"></i>
          </div>
          <div class="feature-title">
            <h3><?php the_field('card_heading_4');?></h3>
          </div>
          <div class="feature-content">
            <p><?php the_field('card_content_4');?></p>
          </div>
        </div>

    </div>
  </div>
</section>

<div class="swiper mySwiper" data-swiper-autoplay="2000">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide"><img src = "<?php the_field('image_1');?>"> </div>
    <div class="swiper-slide"><img src = "<?php the_field('image_2');?>"> </div>
    <div class="swiper-slide"><img src = "<?php the_field('image_3');?>"> </div>
    <div class="swiper-slide"><img src = "<?php the_field('image_4');?>"> </div>
    <div class="swiper-slide"><img src = "<?php the_field('image_5');?>"> </div>
    <div class="swiper-slide"><img src = "<?php the_field('image_6');?>"> </div>
    <div class="swiper-slide"><img src = "<?php the_field('image_7');?>"> </div>
    <div class="swiper-slide"><img src = "<?php the_field('image_8');?>"> </div>
    <div class="swiper-slide"><img src = "<?php the_field('image_9');?>"> </div>
    <div class="swiper-slide"><img src = "<?php the_field('image_10');?>"> </div>
    <div class="swiper-slide"><img src = "<?php the_field('image_11');?>"> </div>
    <div class="swiper-slide"><img src = "<?php the_field('image_12');?>"> </div>
  </div>


  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

</div>


<div class="courses">
    <div class="container">
        <h1>Course Categories</h1>
        <div class="row">

            <div class="feature-item col-sm-6 col-lg-3">
                <div class="course-img">
                    <img src = "<?php the_field('course-image_1');?>"> 
                </div>
                <h3><?php the_field('price_1');?></h3>
                <p class="course-highlight"><?php the_field('highlight_1');?></p>
                <p class="course-details"><?php the_field('details_1');?></p>
            </div>

            <div class="feature-item col-sm-6 col-lg-3">
                <div class="course-img">
                    <img src = "<?php the_field('course-image_2');?>"> 
                </div>
                <h3><?php the_field('price_2');?></h3>
                <p class="course-highlight"><?php the_field('highlight_2');?></p>
                <p class="course-details"><?php the_field('details_2');?></p>
            </div>
            
            <div class="feature-item col-sm-6 col-lg-3">
                <div class="course-img">
                    <img src = "<?php the_field('course-image_3');?>"> 
                </div>
                <h3><?php the_field('price_3');?></h3>
                <p class="course-highlight"><?php the_field('highlight_3');?></p>
                <p class="course-details"><?php the_field('details_3');?></p>
            </div>

            <div class="feature-item col-sm-6 col-lg-3">
                <div class="course-img">
                    <img src = "<?php the_field('course-image_4');?>"> 
                </div>
                <h3><?php the_field('price_4');?></h3>
                <p class="course-highlight"><?php the_field('highlight_4');?></p>
                <p class="course-details"><?php the_field('details_4');?></p>
            </div>


        </div>
    </div>
</div>
<img src="<?php echo get_header_image(); ?>">
<section class="about-ahli benefits">
    <div class="container">
    <h6>ADVANCE FEATURE</h6>

      <div class="row">

        <div class="about-left col-md-6">
          <h1><?php the_field('ben_heading');?></h1>
          <p>
            <?php the_field('ben_content');?>
          </p>
        </div>

        <div class="about-right col-md-6">
          <img src="<?php the_field('ben_image');?>">
        </div>

      </div>
    </div>
</section>

<section class="feature-part feature-part2">
  <div class="container">
    <div class="row">

        <div class="feature-item col-sm-6 col-lg-3">
          <div class="feature-img">
          <i class="fa fa-hand-paper-o" aria-hidden="true"></i>
          </div>
          <div class="feature-title">
            <h3><?php the_field('card2_heading_1');?></h3>
          </div>
          <div class="feature-content">
            <p><?php the_field('card2_content_1');?></p>
          </div>
        </div>

        <div class="feature-item col-sm-6 col-lg-3">
          <div class="feature-img">
          <i class="fa fa-money" aria-hidden="true"></i>

          </div>
          <div class="feature-title">
            <h3><?php the_field('card2_heading_2');?></h3>
          </div>
          <div class="feature-content">
            <p><?php the_field('card2_content_2');?></p>
          </div>
        </div>

        <div class="feature-item col-sm-6 col-lg-3">
          <div class="feature-img"> 
          <i class="fa fa-globe" aria-hidden="true"></i>
          </div>
          <div class="feature-title">
            <h3><?php the_field('card2_heading_3');?></h3>
          </div>
          <div class="feature-content">
            <p><?php the_field('card2_content_3');?></p>
          </div>
        </div>

        <div class="feature-item col-sm-6 col-lg-3">
          <div class="feature-img">
          <i class="fa fa-exchange" aria-hidden="true"></i>
          </div>
          <div class="feature-title">
            <h3><?php the_field('card2_heading_4');?></h3>
          </div>
          <div class="feature-content">
            <p><?php the_field('card2_content_4');?></p>
          </div>
        </div>

    </div>
  </div>
</section>
<?php wp_footer(); ?>

<?php

get_footer();
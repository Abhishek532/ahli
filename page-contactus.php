<?php
    /*
    * Template Name: Contact Us
    */
    get_header();

    $context = Timber::get_context();
    Timber::render('templates/page-contactus.twig',$context);

?>
<section class="contact-banner">
    <div class="container">
      <div class="row">

        <div class="title col-md-6">
          <h1>
            <?php the_field('contact_title') ?>
          </h1>
        </div>

        <div class="col-md-6">
           <img src="<?php the_field('contact_image') ?>">
        </div>

      </div>
    </div>
</section>

<div class="contactus-form">
    <div class="container">
        <h1> Get in Touch</h1>
        <div class="row">
            <div class="col-lg-8">
                <?php echo do_shortcode('[wpforms id="276"]'); ?>
            </div>

            <div class="col-lg-4">
                <div class="contact-side">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <div class="info">
                        <h6>27 Bernick Drive, Barrie,</h6>
                        <p>Ontario, Canada, L4M 5C1<p>
                    </div>
                </div>

                <div class="contact-side">
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                    <div class="info">
                        <h6>+1 (416) 825-6576</h6>
                        <p>Mon to Fri 9am to 6pm<p>
                    </div>
                </div>

                <div class="contact-side">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <div class="info">
                        <h6>aimhighlearninginstitute@gmail.com</h6>
                        <p>Send us your query anytime!<p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>




<?php wp_footer(); ?>
<?php
get_footer();

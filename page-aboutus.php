<?php
    /*
    * Template Name: About Us
    */
    get_header();

    $context = Timber::get_context();
    Timber::render('templates/page-aboutus.twig',$context);
?>

<?php

get_footer();
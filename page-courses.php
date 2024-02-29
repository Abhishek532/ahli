<?php
    /*
    * Template Name: Courses
    */
    get_header();

    $context = Timber::get_context();
    Timber::render('templates/page-courses.twig',$context);
?>



<div class="courses-page">
    <div class="container">

    <h1>Our Courses</h1>

        <div class="row">
            <h2 class="col-md-6">We offer a wide variety of course lorem ipsum sit dolor amet</h2>
            <img class="col-md-6" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/course_img-removebg-preview.png">
        </div>

        <div class="course-cat">
            <h1><?php the_field('subject_name1') ?> </h1>
            
            <div class="row">

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course_1_image') ?>">
                        <h2><?php the_field('course_1_name') ?> </h2>
                        <p><?php the_field('course_1_text') ?> </p>
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course_2_image') ?>">
                        <h2><?php the_field('course_2_name') ?> </h2>
                        <p><?php the_field('course_2_text') ?> </p>
                    </div>

                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course_3_image') ?>">
                        <h2><?php the_field('course_3_name') ?> </h2>
                        <p><?php the_field('course_3_text') ?> </p>
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course_4_image') ?>">
                        <h2><?php the_field('course_4_name') ?> </h2>
                        <p><?php the_field('course_4_text') ?> </p>
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course_5_image') ?>">
                        <h2><?php the_field('course_5_name') ?> </h2>
                        <p><?php the_field('course_5_text') ?> </p>'
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course_6_image') ?>">
                        <h2><?php the_field('course_6_name') ?> </h2>
                        <p><?php the_field('course_6_text') ?> </p>
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course_7_image') ?>">
                        <h2><?php the_field('course_7_name') ?> </h2>
                        <p><?php the_field('course_7_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course_8_image') ?>">
                        <h2><?php the_field('course_8_name') ?> </h2>
                        <p><?php the_field('course_8_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course_9_image') ?>">
                        <h2><?php the_field('course_9_name') ?> </h2>
                        <p><?php the_field('course_9_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course_10_image') ?>">
                        <h2><?php the_field('course_10_name') ?> </h2>
                        <p><?php the_field('course_10_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course_11_image') ?>">
                        <h2><?php the_field('course_11_name') ?> </h2>
                        <p><?php the_field('course_11_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course_12_image') ?>">
                        <h2><?php the_field('course_12_name') ?> </h2>
                        <p><?php the_field('course_12_text') ?> </p>
                        </div>
                </div>

            </div>
        </div>

        <div class="course-cat">
            <h1><?php the_field('subject_name2') ?> </h1>
            
            <div class="row">

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course1_1_image') ?>">
                        <h2><?php the_field('course1_1_name') ?> </h2>
                        <p><?php the_field('course1_1_text') ?> </p>
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course1_2_image') ?>">
                        <h2><?php the_field('course1_2_name') ?> </h2>
                        <p><?php the_field('course1_2_text') ?> </p>
                    </div>

                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course1_3_image') ?>">
                        <h2><?php the_field('course1_3_name') ?> </h2>
                        <p><?php the_field('course1_3_text') ?> </p>
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course1_4_image') ?>">
                        <h2><?php the_field('course1_4_name') ?> </h2>
                        <p><?php the_field('course1_4_text') ?> </p>
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course1_5_image') ?>">
                        <h2><?php the_field('course1_5_name') ?> </h2>
                        <p><?php the_field('course1_5_text') ?> </p>'
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course1_6_image') ?>">
                        <h2><?php the_field('course1_6_name') ?> </h2>
                        <p><?php the_field('course1_6_text') ?> </p>
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course1_7_image') ?>">
                        <h2><?php the_field('course1_7_name') ?> </h2>
                        <p><?php the_field('course1_7_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course1_8_image') ?>">
                        <h2><?php the_field('course1_8_name') ?> </h2>
                        <p><?php the_field('course1_8_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course1_9_image') ?>">
                        <h2><?php the_field('course1_9_name') ?> </h2>
                        <p><?php the_field('course1_9_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course1_10_image') ?>">
                        <h2><?php the_field('course1_10_name') ?> </h2>
                        <p><?php the_field('course1_10_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course1_11_image') ?>">
                        <h2><?php the_field('course1_11_name') ?> </h2>
                        <p><?php the_field('course1_11_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course1_12_image') ?>">
                        <h2><?php the_field('course1_12_name') ?> </h2>
                        <p><?php the_field('course1_12_text') ?> </p>
                        </div>
                </div>

            </div>
        </div>

        <div class="course-cat">
            <h1><?php the_field('subject_name3') ?> </h1>
            
            <div class="row">

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course2_1_image') ?>">
                        <h2><?php the_field('course2_1_name') ?> </h2>
                        <p><?php the_field('course2_1_text') ?> </p>
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course2_2_image') ?>">
                        <h2><?php the_field('course2_2_name') ?> </h2>
                        <p><?php the_field('course2_2_text') ?> </p>
                    </div>

                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course2_3_image') ?>">
                        <h2><?php the_field('course2_3_name') ?> </h2>
                        <p><?php the_field('course2_3_text') ?> </p>
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course2_4_image') ?>">
                        <h2><?php the_field('course2_4_name') ?> </h2>
                        <p><?php the_field('course2_4_text') ?> </p>
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course2_5_image') ?>">
                        <h2><?php the_field('course2_5_name') ?> </h2>
                        <p><?php the_field('course2_5_text') ?> </p>'
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course2_6_image') ?>">
                        <h2><?php the_field('course2_6_name') ?> </h2>
                        <p><?php the_field('course2_6_text') ?> </p>
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course2_7_image') ?>">
                        <h2><?php the_field('course2_7_name') ?> </h2>
                        <p><?php the_field('course2_7_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course2_8_image') ?>">
                        <h2><?php the_field('course2_8_name') ?> </h2>
                        <p><?php the_field('course2_8_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course2_9_image') ?>">
                        <h2><?php the_field('course2_9_name') ?> </h2>
                        <p><?php the_field('course2_9_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course2_10_image') ?>">
                        <h2><?php the_field('course2_10_name') ?> </h2>
                        <p><?php the_field('course2_10_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course2_11_image') ?>">
                        <h2><?php the_field('course2_11_name') ?> </h2>
                        <p><?php the_field('course2_11_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course2_12_image') ?>">
                        <h2><?php the_field('course2_12_name') ?> </h2>
                        <p><?php the_field('course2_12_text') ?> </p>
                        </div>
                </div>

            </div>
        </div>

        <div class="course-cat">
            <h1><?php the_field('subject_name4') ?> </h1>
            
            <div class="row">

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course3_1_image') ?>">
                        <h2><?php the_field('course3_1_name') ?> </h2>
                        <p><?php the_field('course3_1_text') ?> </p>
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course3_2_image') ?>">
                        <h2><?php the_field('course3_2_name') ?> </h2>
                        <p><?php the_field('course3_2_text') ?> </p>
                    </div>

                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course3_3_image') ?>">
                        <h2><?php the_field('course3_3_name') ?> </h2>
                        <p><?php the_field('course3_3_text') ?> </p>
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course3_4_image') ?>">
                        <h2><?php the_field('course3_4_name') ?> </h2>
                        <p><?php the_field('course3_4_text') ?> </p>
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course3_5_image') ?>">
                        <h2><?php the_field('course3_5_name') ?> </h2>
                        <p><?php the_field('course3_5_text') ?> </p>
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3 6">
                    <div class="course-card">
                        <img src="<?php the_field('course3_6_image') ?>">
                        <h2><?php the_field('course3_6_name') ?> </h2>
                        <p><?php the_field('course3_6_text') ?> </p>
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course3_7_image') ?>">
                        <h2><?php the_field('course3_7_name') ?> </h2>
                        <p><?php the_field('course3_7_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course3_8_image') ?>">
                        <h2><?php the_field('course3_8_name') ?> </h2>
                        <p><?php the_field('course3_8_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course3_9_image') ?>">
                        <h2><?php the_field('course3_9_name') ?> </h2>
                        <p><?php the_field('course3_9_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course3_10_image') ?>">
                        <h2><?php the_field('course3_10_name') ?> </h2>
                        <p><?php the_field('course3_10_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course3_11_image') ?>">
                        <h2><?php the_field('course3_11_name') ?> </h2>
                        <p><?php the_field('course3_11_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course3_12_image') ?>">
                        <h2><?php the_field('cours33_12_name') ?> </h2>
                        <p><?php the_field('course3_12_text') ?> </p>
                        </div>
                </div>

            </div>
        </div>

        <div class="course-cat">
            <h1><?php the_field('subject_name5') ?> </h1>
            
            <div class="row">

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course4_1_image') ?>">
                        <h2><?php the_field('course4_1_name') ?> </h2>
                        <p><?php the_field('course4_1_text') ?> </p>
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course4_2_image') ?>">
                        <h2><?php the_field('course4_2_name') ?> </h2>
                        <p><?php the_field('course4_2_text') ?> </p>
                    </div>

                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course4_3_image') ?>">
                        <h2><?php the_field('course4_3_name') ?> </h2>
                        <p><?php the_field('course4_3_text') ?> </p>
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course4_4_image') ?>">
                        <h2><?php the_field('course4_4_name') ?> </h2>
                        <p><?php the_field('course4_4_text') ?> </p>
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course4_5_image') ?>">
                        <h2><?php the_field('course4_5_name') ?> </h2>
                        <p><?php the_field('course4_5_text') ?> </p>'
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course4_6_image') ?>">
                        <h2><?php the_field('course4_6_name') ?> </h2>
                        <p><?php the_field('course4_6_text') ?> </p>
                    </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course4_7_image') ?>">
                        <h2><?php the_field('course4_7_name') ?> </h2>
                        <p><?php the_field('course4_7_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course4_8_image') ?>">
                        <h2><?php the_field('course4_8_name') ?> </h2>
                        <p><?php the_field('course4_8_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course4_9_image') ?>">
                        <h2><?php the_field('course4_9_name') ?> </h2>
                        <p><?php the_field('course4_9_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course4_10_image') ?>">
                        <h2><?php the_field('course4_10_name') ?> </h2>
                        <p><?php the_field('course4_10_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course4_11_image') ?>">
                        <h2><?php the_field('course4_11_name') ?> </h2>
                        <p><?php the_field('course4_11_text') ?> </p>
                        </div>
                </div>

                <div class="course-item col-sm-6 col-md-4 col-lg-3">
                    <div class="course-card">
                        <img src="<?php the_field('course4_12_image') ?>">
                        <h2><?php the_field('course4_12_name') ?> </h2>
                        <p><?php the_field('course4_12_text') ?> </p>
                        </div>
                </div>

            </div>
        </div>
    </div>
</div>
<a class="scroll-top__link" href="#">Back to Top</a>

































<?php
get_footer();
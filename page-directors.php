<?php
    /*
    * Template Name: directors
    */
    get_header();

    $context = Timber::get_context();
    Timber::render('templates/page-directors.twig',$context);

    $dir_data1 = get_field('director_info1');
    $dir_about1 = get_field('director_about1');

    $dir_data2 = get_field('director_info2');
    $dir_about2 = get_field('director_about2');

    $dir_data3 = get_field('director_info3');
    $dir_about3 = get_field('director_about3');

    $dir_data4 = get_field('director_info4');
    $dir_about4 = get_field('director_about4');

    $dir_data5 = get_field('director_info5');
    $dir_about5 = get_field('director_about5');

    $dir_data6 = get_field('director_info6');
    $dir_about6 = get_field('director_about6');

    $dir_data7 = get_field('director_info7');
    $dir_about7 = get_field('director_about7');

    $dir_data8 = get_field('director_info8');
    $dir_about8 = get_field('director_about8');

    $dir_data9 = get_field('director_info9');
    $dir_about9 = get_field('director_about9');

    $dir_data10 = get_field('director_info10');
    $dir_about10 = get_field('director_about10');
?>
  <section class="directors">
    <div class="container">

      <div class="row">
        <div class="director-left col-sm-3">
          <div class="dir-img">
             <img src="<?php echo $dir_data1['image'];?>" width=100%>
             <h3 class="name"><?php echo $dir_data1['name'];?></h3>
             <p class="role"><?php echo $dir_data1['role'];?></p>
          </div>
        </div>
        <div class="director-right col-sm-9">
          <h1 class="dir-title"><?php  echo $dir_about1['dir_role'];?></h1>
          <p class="dir-descr">
          <?php echo $dir_about1['dir_about'];?>
          </p>
        </div>
      </div>

      <div class="row">
        <div class="director-left col-sm-3">
          <div class="dir-img">
             <img src="<?php echo $dir_data2['image'];?>" width=100%>
             <h3 class="name"><?php echo $dir_data2['name'];?></h3>
             <p class="role"><?php echo $dir_data2['role'];?></p>
          </div>
        </div>
        <div class="director-right col-sm-9">
          <h1 class="dir-title"><?php  echo $dir_about2['dir_role'];?></h1>
          <p class="dir-descr">
          <?php echo $dir_about2['dir_about'];?>
          </p>
        </div>
      </div>

      <div class="row">
        <div class="director-left col-sm-3">
          <div class="dir-img">
             <img src="<?php echo $dir_data3['image'];?>" width=100%>
             <h3 class="name"><?php echo $dir_data3['name'];?></h3>
             <p class="role"><?php echo $dir_data3['role'];?></p>
          </div>
        </div>
        <div class="director-right col-sm-9">
          <h1 class="dir-title"><?php  echo $dir_about3['dir_role'];?></h1>
          <p class="dir-descr">
          <?php echo $dir_about3['dir_about'];?>
          </p>
        </div>
      </div>

      <div class="row">
        <div class="director-left col-sm-3">
          <div class="dir-img">
             <img src="<?php echo $dir_data4['image'];?>" width=100%>
             <h3 class="name"><?php echo $dir_data4['name'];?></h3>
             <p class="role"><?php echo $dir_data4['role'];?></p>
          </div>
        </div>
        <div class="director-right col-sm-9">
          <h1 class="dir-title"><?php  echo $dir_about4['dir_role'];?></h1>
          <p class="dir-descr">
          <?php echo $dir_about4['dir_about'];?>
          </p>
        </div>
      </div>

      <div class="row">
        <div class="director-left col-sm-3">
          <div class="dir-img">
             <img src="<?php echo $dir_data5['image'];?>" width=100%>
             <h3 class="name"><?php echo $dir_data5['name'];?></h3>
             <p class="role"><?php echo $dir_data5['role'];?></p>
          </div>
        </div>
        <div class="director-right col-sm-9">
          <h1 class="dir-title"><?php  echo $dir_about5['dir_role'];?></h1>
          <p class="dir-descr">
          <?php echo $dir_about5['dir_about'];?>
          </p>
        </div>
      </div>

      <div class="row">
        <div class="director-left col-sm-3">
          <div class="dir-img">
             <img src="<?php echo $dir_data6['image'];?>" width=100%>
             <h3 class="name"><?php echo $dir_data6['name'];?></h3>
             <p class="role"><?php echo $dir_data6['role'];?></p>
          </div>
        </div>
        <div class="director-right col-sm-9">
          <h1 class="dir-title"><?php  echo $dir_about6['dir_role'];?></h1>
          <p class="dir-descr">
          <?php echo $dir_about6['dir_about'];?>
          </p>
        </div>
      </div>

      <div class="row">
        <div class="director-left col-sm-3">
          <div class="dir-img">
             <img src="<?php echo $dir_data7['image'];?>" width=100%>
             <h3 class="name"><?php echo $dir_data7['name'];?></h3>
             <p class="role"><?php echo $dir_data7['role'];?></p>
          </div>
        </div>
        <div class="director-right col-sm-9">
          <h1 class="dir-title"><?php  echo $dir_about7['dir_role'];?></h1>
          <p class="dir-descr">
          <?php echo $dir_about7['dir_about'];?>
          </p>
        </div>
      </div>

      <div class="row">
        <div class="director-left col-sm-3">
          <div class="dir-img">
             <img src="<?php echo $dir_data8['image'];?>" width=100%>
             <h3 class="name"><?php echo $dir_data8['name'];?></h3>
             <p class="role"><?php echo $dir_data8['role'];?></p>
          </div>
        </div>
        <div class="director-right col-sm-9">
          <h1 class="dir-title"><?php  echo $dir_about8['dir_role'];?></h1>
          <p class="dir-descr">
          <?php echo $dir_about8['dir_about'];?>
          </p>
        </div>
      </div>

      <div class="row">
        <div class="director-left col-sm-3">
          <div class="dir-img">
             <img src="<?php echo $dir_data9['image'];?>" width=100%>
             <h3 class="name"><?php echo $dir_data9['name'];?></h3>
             <p class="role"><?php echo $dir_data9['role'];?></p>
          </div>
        </div>
        <div class="director-right col-sm-9">
          <h1 class="dir-title"><?php  echo $dir_about9['dir_role'];?></h1>
          <p class="dir-descr">
          <?php echo $dir_about9['dir_about'];?>
          </p>
        </div>
      </div>

      <div class="row">
        <div class="director-left col-sm-3">
          <div class="dir-img">
             <img src="<?php echo $dir_data10['image'];?>" width=100%>
             <h3 class="name"><?php echo $dir_data10['name'];?></h3>
             <p class="role"><?php echo $dir_data10['role'];?></p>
          </div>
        </div>
        <div class="director-right col-sm-9">
          <h1 class="dir-title"><?php  echo $dir_about10['dir_role'];?></h1>
          <p class="dir-descr">
          <?php echo $dir_about10['dir_about'];?>
          </p>
        </div>
      </div>

    </div>
  </section>
<?php

get_footer();
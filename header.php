
<header class="header__main">
	<div class="container">
		<div class="header-logo">
			<?php
				$logo = get_header_image();
			?>
			<a href="<?php echo site_url(); ?>"><img src="<?php echo get_header_image(); ?>"></a>
		</div>
		
		<?php wp_nav_menu(array(
			'theme_location' => 'primary-menu'
			, 'menu_class' => 'header-nav')) 
		?>
	
	</div>


</header>
    
<?php
/*
Template Name: default
*/
?>
<?php get_header(); ?>
<body>
	<div class="row main-header">
		<div class="small-5 columns logo"><br/>
		<img src="<?php bloginfo('template_url'); ?>/img/logo.png"/>
		</div>
		<div class="small-7 columns">
			<a href="https://www.mozilla.org/" id="tabzilla">mozilla</a>
			<br/><br/><br/><br/><br/><br/>
			<?php

			$menu = array(
				'theme_location'  => '',
				'menu'            => '',
				'container'       => 'dd',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => '',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<dl class="sub-nav">%3$s</dl>',
				'depth'           => 0,
				'walker'          => ''
			);

			wp_nav_menu( $menu );

			?>

		</div>		
	</div>
	
  	<div class="row">
	 	<hr/>	 	
  	</div>

  	<div class="row">	

  		<div class="large-12 columns">
	  		
	  		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		      	
		      	<p>
		        	<h1><?php the_title(); ?></h1>
		      	</p>	      
		      	
	      	<?php endwhile; endif; ?>

	  	</div>
  		
	  	<div class="large-12 columns">

	  		<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
		      	<br/><br/>
		      	<p>
		        	<?php the_content(); ?>
		      	</p>		      
		      	
	      	<?php endwhile; endif; ?>

	  	</div>
  	</div>

	<?php get_footer(); ?>

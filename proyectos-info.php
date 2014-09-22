<?php
/*
Template Name: Proyectos-Info
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
	 	<br/>
	 	<br/>
  	</div>

  	<div class="row">
  		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  		<div class="large-12 columns mensajeProyectoInfo">  			
  			<div class="row">
  				<div class="small-10 small-centered columns">
  					<a href="<?php echo get_home_url(); ?>"><i class="fi-arrow-left btnAtras"></i></a>
  				</div>  				
  			</div>  	
  			<div class="row">
  				<div class="large-1 columns">&nbsp;</div>
  				<div class="large-4 columns">
  					<br/><br/><h1><?php the_title(); ?></h1>
  				</div>
  				<div class="large-7 columns">&nbsp;</div>  							
  			</div>
  			<div class="row">
  				<div class="large-1 columns">&nbsp;</div>
  				<div class="large-4 columns proyectoIntro">
					<h3><?php echo get_field('proyecto-mensaje'); ?></h3>
				</div>
				<div class="large-7 columns">&nbsp;</div>  				
  			</div>  			
  			<br/>  			
  		</div>
  		<div class="large-12 columns mensajeProyectoImagen">
  			<div class="row">  				
  				<div class="small-4 columns">
  					<?php 

						$image = get_field('proyecto-imagen');

						if( !empty($image) ): ?>

							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>
  				</div>
  			</div>
  		</div>
  		<?php endwhile; endif; ?>
  		
	  	<div class="large-12 columns">
	  		<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
		      	<br/><br/>
		      	<p>
		        	<?php the_content() ?>
		      	</p>		      
		      	
	      	<?php endwhile; endif; ?>

	  	</div>
  	</div>  

	<?php get_footer(); ?>
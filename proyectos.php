<?php
/*
Template Name: Proyectos
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
  		<div class="large-12 columns mensajeProyectos">
  			<div class="row">
  				<div class="small-4 small-centered columns"><h1>Sé Creativo</h1></div>  				
  			</div>
  			<div class="row">
  				<div class="small-8 small-centered columns"><h2>¡Participa con tu tanlento en Mozilla Hispano!</h2></div>
  			</div>
  			<br/><br/>
  			<div class="row">
  				<div class="small-6 small-centered columns"><p class="btn">Conoce los proyectos en los que puedes aportar</p></div>
  			</div>
  			<div class="row">
  				<div class="small-1 small-centered columns"><p class="btnAbajo">&raquo;</p></div>
  			</div>
  			<br/>
  		</div>
	  	<div class="large-12 columns">
	  		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	  			

		      	<h1><?php the_title(); ?></h1>

		      	<p>
		        	<?php the_content() ?>
		      	</p>

	      	<?php endwhile; endif; ?>

	  	</div>
  	</div>  

	<?php get_footer(); ?>
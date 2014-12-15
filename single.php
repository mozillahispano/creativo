<?php get_header(); ?>
<body>
	<div class="row main-header">
		<div class="small-3 columns logo"><br/>
		<img src="<?php bloginfo('template_url'); ?>/img/logo.png"/>
		</div>
		<div class="small-9 columns">
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
	  	<div class="large-12 columns">
	  		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	  			<div class="row">
	  				<div class="small-11 columns"></div>
	  				<div class="small-1 columns">
	  					<h3>
	  						<a href="#" title="Share on Twitter" alt="Share on Twitter">
	  							<i class="fi-social-twitter"></i>
	  						</a>
	  					</h3>
	  				</div>
		      	</div>

		      	<div class="row">
	  				<div class="small-10 columns"></div>
	  				<div class="small-2 columns">
	  					<div class="dateBox"><span class="month"><?php the_time('F') ?> </span><span class="day"><?php the_time('jS') ?> </span>
					    	<span class="year"><?php the_time('Y') ?> </span>
		      		</div>
	  				</div>
		      	</div>

		      	<h1><?php the_title(); ?></h1>

		      	<p>
		        	<?php the_content() ?>
		      	</p>
	      	<?php endwhile; endif; ?>
	  	</div>
  	</div>  

	<?php get_footer(); ?>
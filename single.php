<?php get_header(); ?>
<body>
	<div class="row">
		<div class="small-12 columns">
			<a href="https://www.mozilla.org/" id="tabzilla">mozilla</a>
		</div>
	</div>
	<br/><br/><br/><br/>
	<div class="row">
		<div class="small-7 columns">
			<a href="<?php echo get_home_url(); ?>">
				<h1><i class="fa fa-arrow-left"></i></h1>
			</a>
		</div>
    <div class="small-5 columns"><h1><i class="fa fa-lightbulb-o"></i> Equipo Creativo</h1></div>
	</div>
	<div class="row">
	  	<hr/>
  	</div>
  	<div class="row">
	  	<div class="large-12 columns">
	  		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	  			<div class="row">
	  				<div class="small-11 columns"></div>
	  				<div class="small-1 columns">
	  					<h3>
	  						<a href="#" title="Share on Twitter" alt="Share on Twitter">
	  							<i class="fa fa-twitter"></i>
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
<?php
/*
Template Name: default
*/
?>
<?php get_header(); ?>
<body>
   
	<?php include 'header_menu.php';?>
	
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

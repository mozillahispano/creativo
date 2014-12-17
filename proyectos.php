<?php
/*
Template Name: Proyectos
*/
?>
<?php get_header(); ?>
<body>
	
    <?php include 'header_menu.php';?>
      
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
  	</div>
  	<div class="row">
  		<div class="large-12 columns listaProyectos">
	  		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
		      	
		      	<p>
		        	<?php the_content() ?>
		      	</p>
		      	
	      	<?php endwhile; endif; ?>
	  	</div>
  	</div>

	<?php get_footer(); ?>
<?php get_header(); ?>
<body class="single single-post postid-620 single-format-standard category-design" id="bg-620">
	
	<div id="framework">

  	<div id="title" class="brand-title">
      <h3><i class="fa fa-lightbulb-o"></i> Equipo Creativo</h3>
      <div class="nav">
        <a href="<?php echo get_home_url(); ?>"><i class="fa fa-arrow-left"></i></a>                
    	</div>           
    </div>

    <div class="content css-620">    	
    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	      <div class="dateBox"><span class="month"><?php the_time('F') ?></span><span class="day"><?php the_time('jS') ?></span>
				    	<span class="year"><?php the_time('Y') ?></span>
	      </div>
	      <div class="twitter"><a class="tweet popup" href="#" title="Share on Twitter" alt="Share on Twitter"><i class="fa fa-twitter"></i></a>
	      </div>

	      <h1 class="dominant"><?php the_title(); ?></h1>

	      <p>
	        <?php the_content() ?>
	      </p>
      <?php endwhile; endif; ?>
          
    

	<?php get_footer(); ?>
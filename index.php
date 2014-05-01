<?php get_header(); ?>
<body>
	<div class="row">
		<div class="small-12 columns">
			<a href="https://www.mozilla.org/" id="tabzilla">mozilla</a>
		</div>
	</div>
	<br/><br/><br/><br/>
	<div class="row">
		<div class="small-7 columns"></div>
    <div class="small-5 columns"><h1><i class="fa fa-lightbulb-o"></i> Equipo Creativo</h1></div>
	</div>
	<div class="row">
	 	<hr/>
  	</div>
  	<div class="row">

  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    	<div class="large-4 columns">
			  	
    		<div class="row post">
    			
    			<div class="large-8 columns">
    				<a href="<?php echo get_permalink(); ?>" rel="" title="">		    		

			    	<?php $imgs = get_the_post_thumbnail($post->ID);
					    /*get the img URL, delete the <img /> tag */   
					    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $imgs, $matches);
					    /*the image URL*/
					    $img = $matches [1] [0];
					    /*echo the full img*/
					    echo '<img class="screenshot" src="' . $img . '" alt="" />';
						?>		     
						
			    	</a>

    			</div>

    			<div class="large-4 columns">    				
			    	<span class="month"><?php the_time('F') ?></span>
			    	<h3><span class="day"><?php the_time('jS') ?></span></h3>
			    	<span class="year"><?php the_time('Y') ?></span>			    
    			</div>

    		</div>			    
			
		</div>
		<?php endwhile; else: ?>
		<?php _e('Sorry, no posts matched your criteria.'); ?><?php endif; ?>
  		<div class="large-4 columns"></div>
  	</div>	

	<?php get_footer(); ?>
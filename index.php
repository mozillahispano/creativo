<?php get_header(); ?>
<body class="archive category category-mozilla category-6">
	<a href="https://www.mozilla.org/" id="tabzilla">mozilla</a>
	<br/><br/>
	<div id="framework">		

  	<div id="title" class="brand-title">
      <h3><i class="fa fa-lightbulb-o"></i> Equipo Creativo</h3>            
    </div>

    <div id="container" class="content">

    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    	<div class="item">
			  <div class="category_listing">
			    <div class="dateBox"><span class="month"><?php the_time('F') ?></span><span class="day"><?php the_time('jS') ?></span>
			    	<span class="year"><?php the_time('Y') ?></span>
			    </div>
			    <a href="<?php echo get_permalink(); ?>" rel="bookmark" title="demo">		    		

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

			</div>
			<?php endwhile; else: ?>
			<?php _e('Sorry, no posts matched your criteria.'); ?><?php endif; ?>

			<?php get_footer(); ?>
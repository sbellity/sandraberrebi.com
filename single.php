<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
           
       
   		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>               

       			<div class="gridly-copy">
                <h1><?php the_title(); ?></h1>
                 <p><?php the_category(', ') ?></p>
           		 <?php the_content(); ?> 

                
                <div class="clear"></div>
                </div>


                
                
       </div>
       
		<?php endwhile; endif; ?>
       
       <div class="post-nav">
               <div class="post-prev"><?php previous_post_link('%link', 'Previous', FALSE); ?>  </div>
               <div class="home"><a href="http://sandraberrebi.com/">Back</a></div>
			   <div class="post-next"><?php next_post_link('%link', 'Next', FALSE); ?></div>
        </div>      

<?php get_footer(); ?>
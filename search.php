<?php 
require("header.php");
          

if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
	<div class="entry">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
 		<?php the_excerpt(); ?>
 	</div><?php

endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif;


require("footer.php");
          

?>
      
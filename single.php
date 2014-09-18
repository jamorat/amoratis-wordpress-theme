<?php 
require("header.php");
          if ( have_posts() ) {
            while ( have_posts() ) {
              the_post(); 
              //
              // Post Content here ?>
              <div class="entry">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <?php the_content(); ?>
            </div> <?php
              //
            } // end while
          } // end if
          ?><div class="comment list">
    <?php wp_list_comments( array( 'style' => 'div' ) ); ?>dsssss
</div> HERE IS THE FOOTER

<?php
require("footer.php");
          ?>
<?php get_header();
          if ( have_posts() ) {
            while ( have_posts() ) {
              the_post(); 
              //
              // Post Content here ?>
              <div class="entry">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <?php the_content(); ?>
              Date Posted: <?php the_date(); ?>
            </div> <?php
              //
            } // end while
          } // end if
      get_footer();
          ?>
      
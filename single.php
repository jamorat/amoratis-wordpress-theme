<?php 
require("header.php");
          if ( have_posts() ) {
            while ( have_posts() ) {
              the_post(); 
              //
              // Post Content here ?>
              <div class="entry">
              <?php the_content(); ?>
            </div> <?php
              //
            } // end while
          } // end if
require("footer.php");
          ?>
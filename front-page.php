<?php

/**
 * Front-page 
 * 
 *  @package easy2migrate
 * 
 */
get_header(  ) ;?>

<?php

if( have_posts(  )):
    while( have_posts(  )): the_post(  );?>

<h1>
    <?php the_title(  );?>
</h1>
<div>
    <?php the_content( );?>
</div>
<?php endwhile; endif;?>

<?php get_footer(  ) ;?>

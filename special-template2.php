<?php

/*
Template Name: Special Layout Two
*/
get_header();

if(have_posts()):
    while(have_posts()): the_post(); ?>
    <article class="post page">
        <h2><?php the_title(); ?></h2>

        <!-- info box -->
        <div class="info-box-two">
            <h4>Disclaiment Title Two</h4>
            <p>This is how you to create new template for curtain pages, but not all the pages dfjal ldafi ldifa dffia dfifk hfdjd dfjal ldafi ldifa dffia dfifk hfdjd dfjal ldafi ldifa </p>
        </div>

        <?php the_content(); ?>
    </article>
<?php endwhile;
    else: 
    echo '<p>No content found</p>';
endif;

get_footer();
?>
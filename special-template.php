<?php

/*
Template Name: Special Layout
*/
get_header();

if(have_posts()):
    while(have_posts()): the_post(); ?>
    <article class="post page">
        <h2><?php the_title(); ?></h2>

        <!-- info box -->
        <div class="info-box">
            <h4>Disclaiment Title</h4>
            <p>Leom dfdlk dfa dfalfd dffia dfifk hfdjd dfjal ldafi ldifa dffia dfifk hfdjd dfjal ldafi ldifa dffia dfifk hfdjd dfjal ldafi ldifa </p>
        </div>

        <?php the_content(); ?>
    </article>
<?php endwhile;
    else: 
    echo '<p>No content found</p>';
endif;

get_footer();
?>
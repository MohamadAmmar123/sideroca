<?php get_header();?>

    <div class="top"><div class="wrapper"><a class="toggle-nav" href="#">&#9776;</a><h1><?php the_title();?></h1></div></div>
    <div class="content">
        <?php if (have_posts()) : while(have_posts()) : the_post();?>
            <?php the_content();?>
        <?php endwhile; endif;?>
    </div>

<?php get_footer();?>
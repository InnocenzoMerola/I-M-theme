<?php
get_header();
get_template_part('template-parts/post-heading');
the_post();
?>
<div class="row">
    <div class="col-12 col-md-8 back">
        <h1><?php the_title(); ?></h1>
        <h2><?php the_date()?></h2>
        <?php the_content(); ?>
    </div>
    <div class="col-12 col-md-4">
        <?php get_sidebar() ?>
    </div>
</div>

<?php
get_footer();
<?php
get_header();
the_post();
?>
<div class="row">
    <div class="col-12 col-md-8">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
    <div class="col-12 col-md-4">
        <?php get_sidebar() ?>
    </div>
</div>

<?php
get_footer();
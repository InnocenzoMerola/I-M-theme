<?php
get_header();

the_post();?>

<h1><?=the_title()?></h1>
<div class="ifoa-content">
    <?php the_content() ?>
</div>

<!-- <form action="<?php site_url('submit-form.php')?>" method="post">
    <input type="text" name="name">
    <input type="email" name="email" id="">
    <button>Submit</button>
</form> -->

<?php
get_footer();

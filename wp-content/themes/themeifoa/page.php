<?php
get_header();
the_post();
?>


<h1 class="text-center">Ecco i migliori posti da esplorare</h1>

<div class="row row-gap-3 mt-4">
    <div class="col-6">
        <div class="home-post">
            <img src="<?= get_theme_file_uri('/img/New-York.jpg')?>" alt="New York">
            <h4>New York, cosa vedere e cosa fare in una settimana</h4>
        </div>
    </div>
    <div class="col-6">
        <div class="home-post">
            <img src="<?= get_theme_file_uri('/img/San-Diego.jpg')?>" alt="San Diego">
            <h4>San Diego, ecco il sapore della California</h4>
        </div>
    </div>
    <div class="col-6">
        <div class="home-post">
            <img src="<?= get_theme_file_uri('/img/Panorama-di-Napoli.jpg')?>" alt="Napoli">
            <h4>Napoli: una passeggiata dal centro storico a Positano</h4>
        </div>
    </div>
    <div class="col-6">
        <div class="home-post">
            <img src="<?= get_theme_file_uri('/img/Tokyo.jpeg')?>" alt="Tokyo">
            <h4>Viaggio nella Tokyo più chic, tra musei, design hotel e alta cucina</h4>
        </div>
    </div>
</div>

<?php
get_footer();
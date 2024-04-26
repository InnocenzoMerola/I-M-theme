<?php
get_header();
the_post();
?>

<h1><?php the_title() ?></h1>
<h2>Ecco i migliori posti da esplorare</h2>

<div class="row">
    <div class="col-6">
        <div>
            <img src="./img/Panorama-di-Napoli.jpg" alt="New York">
            <h4>New York, cosa vedere e cosa fare in una settimana</h4>
        </div>
    </div>
    <div class="col-6">
        <div>
            <img src="./img/Panorama-di-Napoli.jpg" alt="San Diego">
            <h4>San Diego, ecco il sapore della California</h4>
        </div>
    </div>
    <div class="col-6">
        <div>
            <img src="./img/Panorama-di-Napoli.jpg" alt="Napoli">
            <h4>Napoli: una passeggiata dal centro storico a Positano</h4>
        </div>
    </div>
    <div class="col-6">
        <div>
            <img src="./img/Panorama-di-Napoli.jpg" alt="Tokyo">
            <h4>Viaggio nella Tokyo più chic, tra musei, design hotel e alta cucina</h4>
        </div>
    </div>
</div>

<?php
get_footer();
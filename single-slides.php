<?php 
$slides = new WP_Query (array(
    'post_type' => 'slides',
    'post_per_page' => -1
));

 while($slides->have_posts()){
    $slides->the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php  the_post_thumbnail(); ?>


 <?php }



?>
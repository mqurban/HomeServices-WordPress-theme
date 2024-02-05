<?php 
get_header();
?>


<section class="blog section" style="padding:20px">
    <?php 
while(have_posts()){
    the_post() ?>
    <a href="<?php the_permalink(); ?>"><h3><?php echo get_the_title();  ?></h3></a>
    <p><?php echo get_the_excerpt();  ?></p>
    <p><?php echo get_the_date();  ?></p>
    <p>By: <?php echo get_the_author();  ?></hp>
    
<?php } 
?>

  </section>

<?php 
     if (has_post_thumbnail() && get_post_type() === 'slides') {
      };
get_footer();
?>
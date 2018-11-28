<?php get_header(); ?>

<div class="page-404">
    <div class="container-404">
    <a href="<?php echo home_url(); ?>"><img src="<?php the_field('image_404', 'option'); ?>" alt=""></a>
    <h4>Oops... Looks like you’ve got lost.</h4>
    <p>Get back to home by clicking the penguin.</p>
      
    </div>
</div>
<?php get_footer(); ?>
<?php get_header(); //appel du template header.php  ?>

    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
            <div class="container-content">
                <?php the_content(); ?>
            </div>
    <?php
    }
    }
    else {
    ?>
    Un pingouin a mangé la page.
    <?php
    }
    ?>

<?php get_footer(); //appel du template footer.php ?>
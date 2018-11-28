<?php
/*
Template Name: Contact
*/
?> 

<?php get_header(); //appel du template header.php  ?>

    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>      
            <div class="form-content">
                <h3><?php the_field('name_form');?></h3>
                <ul>
                
                    <li>
                        <img src="<?php the_field('logo_phone');?> " alt="logo_phone">
                    </li> 
                    <li class="legend">
                        <?php the_field('num_phone');?> 
                    </li>
    
                    <li>
                        <img src="<?php the_field('logo_mail');?> " alt="logo_mail">
                    </li>
                    <li class="legend">
                        <?php the_field('email');?> 
                    </li>
    
                    <li>
                        <img src="<?php the_field('logo_address');?> " alt="logo_adress">
                    </li>
                    <li class="legend">
                        <?php the_field('address');?>
                   </li>
                </ul>
    
                <p class="comment"><?php the_field('comment');?></p>
                <div class="content"><?php the_content(); ?></div>
            </div>
            

    <?php
    }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
    ?>

<?php get_footer(); //appel du template footer.php ?>
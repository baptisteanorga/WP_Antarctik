<?php
/*
Template Name: Explore 
*/
?>

    <?php get_header(); //appel du template header.php  ?>

    <div class="explore-page">

        <div class="explore-container">
            <div class="explore-left">
                <?php
$count = 0;
// check if the repeater field has rows of data
if( have_rows('content') ):
    
    // loop through the rows of data
    while ( have_rows('content') ) : the_row();
    $image = get_sub_field('image_presentation');
    $count++;
    ?>
                <div class="container-text-explore" data-value="<?php echo $count ?>" >
                    
                    <h4 class="titleToClick titleToClick-<?php echo $count ?>" >
                        <?php the_sub_field('title'); ?>
                    </h4>
                    <div class="textToPop">

                        <?php the_sub_field('text_content'); ?> 
                        <?php  if( have_rows('url') ):
                                while ( have_rows('url') ) : the_row();?>
                    <a href="<?php the_sub_field('url_link'); ?>"><?php the_sub_field('text_link'); ?></a>
                    <?php endwhile; else : endif;?>
                </div>
            </div>
                <?php endwhile; else : endif;?>
            </div>
            
            <?php 
            $count = 0;
            if( have_rows('content') ):
                // loop through the rows of data
                while ( have_rows('content') ) : the_row();
                $image = get_sub_field('image_presentation');
                $count++; ?>
                <div class="explore-right image-<?php echo $count ?>" data-value ="<?php echo $count ?>"  >
                    <img src="<?php echo $image['url'];?>" alt="<?php  echo $image['title']; ?>">
                </div>
            <?php endwhile; else : endif;?>
        </div>
    </div>

    <?php get_footer(); //appel du template footer.php ?>




<?php
/*
Template Name: Fauna
*/
?> 

<?php get_header(); ?>


<?php $arrow_left = get_field('arrow_left');    ?>
<?php $arrow_right = get_field('arrow_right');    ?>

<?php


    echo $arrow_left['text'];
    echo $arrow_left['image'];
    echo $arrow_left['url'];

    echo $arrow_right['text'];
    echo $arrow_right['image'];
    echo $arrow_right['url'];
 ?>

<?php 	$array_id = array();
		$args = array('post_type' => 'animal', 'category_name' => 'fauna',);

$my_query = new WP_Query($args);

if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();

	$id = get_the_ID();
	array_push($array_id, $id	);
    
endwhile;
endif;


$count=0;
$count_max=sizeof ($array_id);


?>

<div class="explore-page-fauna">
    <div class="explore-container">
        
        <div class="explore-left">
            
            <?php
            echo $count;
            $args2 = array('post_type' => 'animal', 'category_name' => 'fauna',);
            $args2['p'] = $array_id[$count];
            $my_query2 = new WP_Query($args2);
            if($my_query2->have_posts()) : while ($my_query2->have_posts() ) : $my_query2->the_post();
                    $image = get_field('image');
            ?>
                
                <div class="container-text-explore">                 
                    <div class="slides">
                        <?=$count+1?>/<?= $count_max?>        
                    </div>

                    <div class="species">
                        <?= the_field('species');?> <p class="latin"><?= the_field('latin');?></p>
                    </div>

                    <p class= content-legend>
                        Family <span class="right"><?= the_field('family');?></span>  
                    </p>

                    <p class= content-legend>
                        Endangered <span class="right"><?= the_field('endangered');?></span>
                    </p>
                    
                    <p class= content-legend>
                        Population <span class="right"><?= the_field('population');?></span>                        
                    </p>
                    
                    <p class= content-legend>
                       Summary <span class="right"><?= the_field('summary');?></span> 
                    </p>
                                    
                </div>
            </div>
        </div>
            
        <div class="explore-right-image">
            
        <?php 

            if ($count-1!=0){
            ?>
                <img class="arrow-up" src="<?php the_field('image_arrow', 'option');?>" alt="arrow">
            <?php
            }            
            if($count==$count_max-1){    
            ?>
                <img class="arrow-down" src="<?php the_field('image_arrow', 'option');?>" alt="arrow">
            <?php
            }
        ?>

            <img src="<?php echo $image['url'];?>" alt="<?php  echo $image['title']; ?>">
        </div>
        <?php endwhile; endif;?>

</div>




<script>
    (function($) {
        $(document).on( 'click', '.arrow-up', function( event ) {
            
            event.preventDefault();
            $('.explore-container').remove();
            $('.explore-right-image').remove();
            $('.explore-page-fauna').append(`
              
            <div class="explore-container">
        
                <div class="explore-left">

                <?php               
                    $count++;
                

                $args2 = array('post_type' => 'animal', 'category_name' => 'fauna',);
                $args2['p'] = $array_id[$count];
                $my_query2 = new WP_Query($args2);
                if($my_query2->have_posts()) : while ($my_query2->have_posts() ) : $my_query2->the_post();
                        $image = get_field('image');
                ?>


                    <div class="container-text-explore">                 
                    <div class="slides">
                        <?=$count+1?>/<?= sizeof ($array_id)?>        
                    </div>

                        <div class="species">
                            <?= the_field('species');?> <p class="latin"><?= the_field('latin');?></p>

                        </div>

                        <p class= content-legend>
                            Family <span class="right"><?= the_field('family');?></span>  
                        </p>



                        <p class= content-legend>
                            Endangered <span class="right"><?= the_field('endangered');?></span>
                        </p>
                        
                        <p class= content-legend>
                            Population <span class="right"><?= the_field('population');?></span>                        
                        </p>
                        
                        <p class= content-legend>
                        Summary <span class="right"><?= the_field('summary');?></span> 
                        </p>
                                    
                    </div>
                </div>
        </div>
            
        <div class="explore-right-image">
        <?php 

            if ($count!=0){
            ?>
                <img class="arrow-up" src="<?php the_field('image_arrow', 'option');?>" alt="arrow">
            <?php
            }            
            if($count==$count_max-1){    
            ?>
                <img class="arrow-down" src="<?php the_field('image_arrow', 'option');?>" alt="arrow">
            <?php
            }
        ?>

            <img src="<?php echo $image['url'];?>" alt="<?php  echo $image['title']; ?>">
        </div>
        <?php endwhile; endif;?>
    </div>


            `);
        })

        $(document).on( 'click', '.arrow-down', function( event ) {
            
            event.preventDefault();
            $('.explore-right-image').remove();
            $('.explore-container').remove();
            $('.explore-page-fauna').append(`
              
            <div class="explore-container">
        
                <div class="explore-left">

                <?php

                $count--;
                
                $args2 = array('post_type' => 'animal', 'category_name' => 'fauna',);
                $args2['p'] = $array_id[$count];
                $my_query2 = new WP_Query($args2);
                if($my_query2->have_posts()) : while ($my_query2->have_posts() ) : $my_query2->the_post();
                        $image = get_field('image');
                ?>


                    <div class="container-text-explore">                 
                    <div class="slides">
                        <?=$count+1?>/<?= $count_max?>        
                    </div>

                        <div class="species">
                            <?= the_field('species');?> <p class="latin"><?= the_field('latin');?></p>

                        </div>


                        <p class= content-legend>
                            Family <span class="right"><?= the_field('family');?></span>  
                        </p>


                        <p class= content-legend>
                            Endangered <span class="right"><?= the_field('endangered');?></span>
                        </p>
                        
                        <p class= content-legend>
                            Population <span class="right"><?= the_field('population');?></span>                        
                        </p>
                        
                        <p class= content-legend>
                        Summary <span class="right"><?= the_field('summary');?></span> 
                        </p>
                                    
                    </div>
                </div>
            </div>
        </div>
            
        <div class="explore-right-image">
        <?php 

            if ($count-1!=0){
            ?>
                <img class="arrow-up" src="<?php the_field('image_arrow', 'option');?>" alt="arrow">
            <?php
            }            
            if($count==$count_max-1){    
            ?>
                <img class="arrow-down" src="<?php the_field('image_arrow', 'option');?>" alt="arrow">
            <?php
            }
        ?>

            <img src="<?php echo $image['url'];?>" alt="<?php  echo $image['title']; ?>">
        </div>
        <?php endwhile; endif;?>
    </div>

            `);
        })
    })(jQuery);

</script>



<?php
wp_reset_postdata();


?> 

<?php get_footer(); ?>
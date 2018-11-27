<?php
/*
Template Name: Modele page de contenu 
*/
?>
 <?php get_header(); //appel du template header.php  ?>


<div class="page-template">
<?php

// check if the repeater field has rows of data
if( have_rows('content') ):
	
	// loop through the rows of data
    while ( have_rows('content') ) : the_row();
	$selector = get_sub_field('selecteur');
	
	if( $selector == 'text_center'):  // Texte centré
		?><div class="module-text-center"><?php 
		the_sub_field('text_center');
		?></div><?php 
		elseif ( $selector == 'image_center'): // Image centrée
			
			$image_center = get_sub_field('image_center');
			?><div class="module-image-center">
				<div class="container-image">
					<img src="<?php echo $image_center['url']; ?>" alt="<?php echo $image_center['title'];?>">
				</div>
			</div><?php 
			elseif ( $selector == 'text_image'): //Image + texte, changement de coté en fonction du bouton radio
				
				if( have_rows('text_image') ): 
					
					while( have_rows('text_image') ): the_row(); 

					$button = get_sub_field('button_radio'); //récupération bouton radio
					$image = get_sub_field('image_groupe');  //récupération image groupe
					
					if( $button == 'text_left'): //If bouton = texte à gauche
						?>
						<div class="module-text-image">
							<div class="text">
							<p>
								<?php the_sub_field('text_groupe'); ?>
							</p>
							</div>
							<div class="image">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
							</div>
						</div>
						<?php
						
						elseif( $button == 'text_right'): //If bouton = texte à droite
							?>
							<div class="module-text-image">
								<div class="image">
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
								</div>
								<div class="text">
								<p>
									<?php the_sub_field('text_groupe'); ?>
								</p>
								</div>
							</div>
							<?php
							
						endif; 
						
					endwhile; 
					
				endif; 
				
				elseif ( $selector == 'video'): // Vidéo
					?>
					<div class="module-video-center">
						<?php the_sub_field('video'); ?>
					</div>
					<?php
					
					elseif ( $selector == 'four_text_image'):	// 4 texte sur 1 image en background
						if( have_rows('four_text_image') ): 
							
							while( have_rows('four_text_image') ): the_row(); 
							
							$image = get_sub_field('image_four_text');  //récupération image pour mettre derriere les 4 blocs de texte
							?>
							<div class="module-image-back">
								<div class="image">
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
								</div>
								<div class="text-container">
									<div class="text">
										<p>
											<?php the_sub_field('text_1');?>
										</p>
									</div>
									<div class="text">
										<p>
											<?php the_sub_field('text_2');?>
										</p>
									</div>
									<div class="text">
										<p>
											<?php the_sub_field('text_3');?>
										</p>
									</div>
									<div class="text">
										<p>
										<?php the_sub_field('text_4');?>
										</p>
									</div>
								</div>
							</div>
							<?php
							
						endwhile; 
					endif; 
					
					elseif ( $selector == 'presentation'):	// Présentation des 2 personnes ( image + textes + color )
						if( have_rows('presentation') ): 
							while( have_rows('presentation') ): the_row(); 
							
							$image_pers1 = get_sub_field('image_first_person');
							$image_pers2 = get_sub_field('image_second_person');
							
							?>
								<div class="module-presentation">
									<div class="person person-1">
										<div class="block-color" style="background-color:<?php the_sub_field('color');?>"></div>
										<img src="<?php echo $image_pers1['url'];?>" alt="<?php echo $image_pers1['title'];  ?>">
										<?php the_sub_field('text_first_person'); ?>
									</div>
									<div class="person person-2">
										<div class="block-color" style="background-color:<?php the_sub_field('color');?>"></div>
										<img src="<?php echo $image_pers2['url'];?>" alt="<?php echo $image_pers2['title'];  ?>">
										<?php the_sub_field('text_second_person'); ?>
									</div>
								</div>
							<?php 
							
						endwhile; 
						
					endif; 
					
				endif; 
				
			endwhile;
			
			else :
				
				// There is a BUGMOTHERFUCKER
				
			endif;
	
		$args = array('post_type' => 'dyk', 'posts_per_page' => 1, 'orderby' => 'rand',);

		$my_query = new WP_Query($args);

		if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();

		?>
			<div class="module-info" >
				<div class="block-info" style="background-color:<?php the_field('color');?>">
					<h4>Did you know ? </h4>
					<div class="description" style="color:<?php the_field('color_text');?>" >
						<?php the_field('information'); ?>
					</div>
				</div>
			</div>
		<?php
  	     wp_reset_postdata();
		endwhile;
		endif; ?> 
	
	
</div>

<?php get_footer(); //appel du template footer.php ?>
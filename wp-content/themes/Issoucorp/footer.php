		<footer id="footer" style="background-color:<?php the_field('color_header', 'option');?>; color: <?php the_field('color_text', 'option');?>;">
		<a href="<?php echo home_url(); ?>">
      	<img src="<?php the_field('logo', 'option'); ?>" alt="<?php the_field('legende_logo', 'option'); ?>"></a>
			<?php $args=array(
				'theme_location' => 'footer-menu',
        		'menu' => 'footer_fr',
        		'menu_class' => 'menu_footer',
        		'menu_id' => 'menu_id');
      		wp_nav_menu($args); ?>
		
			<div class="logo_container">
				<a href="<?php the_field('link_vk', 'option');?>">
					<img src="<?php the_field('logo_vk', 'option');?>"></a>
				
				<a href="<?php the_field('link_pinterest', 'option');?>">
					<img src="<?php the_field('logo_pinterest', 'option');?>"></a>
				
				<a href="<?php the_field('link_facebook', 'option');?>">
					<img src="<?php the_field('logo_facebook', 'option');?>"></a>
				
				<a href="<?php the_field('link_twitter', 'option');?>">
					<img src="<?php the_field('logo_twitter', 'option');?>"></a>
				
				<a href="<?php the_field('link_insta', 'option');?>">
					<img src="<?php the_field('logo_insta', 'option');?>"></a>
			</div>
			<div class="copyright">
				<?php the_field('copyright', 'option');?>
			</div>
        <!-- Execution de la fonction wp_footer() obligatoire ! -->
		</footer>
        <?php wp_footer();  ?>
    </body>
</html>
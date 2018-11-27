<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="<?php the_field('meta_description', 'option');?>" />
    <title>Antarctik - <?php if(get_the_title()): the_title(); else: echo "404"; endif; ?> </title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="icon" href="<?php the_field('favicon', 'option'); ?>"/>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header" style="background-color:<?php the_field('color_header', 'option');?>; color: <?php the_field('color_text', 'option');?>;">

        <a href="<?php echo home_url(); ?>">
            <img src="<?php the_field('logo', 'option'); ?>" alt="<?php the_field('legende_logo', 'option'); ?>">
        </a>

        <?php $args=array(
        'theme_location' => 'header-menu',
        'menu' => 'header_fr',
        'menu_class' => 'menu_header',
        'menu_id' => 'menu_id');
      wp_nav_menu($args); ?>

			<button class="hamburger hamburger--elastic" type="button">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
        <nav class="nav-mobile" style="background-color:<?php echo the_field('color_header', 'option').'DD';?>; color: <?php the_field('color_text', 'option');?>;">
        <?php $args=array(
        'theme_location' => 'header-menu',
        'menu' => 'header_fr',
        'menu_class' => 'list-menu',
        'menu_id' => 'menu_id');
      wp_nav_menu($args); ?>
            </ul>
        </nav>
    </header>
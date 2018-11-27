<?php get_header();?>
<?php $top = get_field('top');?>
<?php $bot = get_field('bot');?>
<div class="frontpage">
    <?php if ($top): //First raw?>
        <div class="image-container">
        <img src="<?php echo $top['image_top']['url']; ?>" alt="<?php echo $top['image_top']['title']; ?>" class="homepage_img">
        </div>
        <div class="container-title">
            <h2><?php echo $top['title_h2']; ?></h2>
            <h1><?php echo $top['title_h1']; ?></h1>
        </div>
        <div class="container-text">
            <?php echo $top['content_text']; ?>
            <a href="<?php echo $top['url_link']; ?>"><?php echo $top['text_link']; ?></a>
        </div>
    <?php endif; ?>
  
</div>
<div class="slider-homepage">
    <?php $number=0 ;?>
    <?php if( have_rows('slider') ): while ( have_rows('slider') ) : the_row(); ?>
    <?php $number+=1;?>
    <div class="slider slider-<?= $number; ?>">
            <div class="slider-content-left">
                <div class="number-container">
                    <svg viewBox="0 0 36 36" class="circular-chart">
                        <path class="circle" stroke-width="0.5" stroke-dasharray="<?php the_sub_field('percent');?>, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831";/>
                            </svg>
                            <div class="number-percent"><?php the_sub_field('percent');?>%</div>
                        </div>
                        <div class="slider-text"><?php the_sub_field('text');?></div>
                    </div>
                    <div class="slider-content-right">
                        <img src="<?php the_sub_field('image');?>" alt="">
                        <div class="container-button">
                            <button class="w3-button w3-display-1" onclick="plusDivs(1)"></button>
                            <button class="w3-button w3-display-2" onclick="plusDivs(2)"></button>
                            <button class="w3-button w3-display-3" onclick="plusDivs(3)"></button>
                        </div>
                </div>  
    </div>
<?php endwhile; else : endif; ?>
</div>
<!-- Le bot -->
<div class="bot-homepage">
    <img src="<?php echo $bot['image_bot']['url']; ?>" alt="<?php echo $bot['image_bot']['title']; ?>" class="bot-img">
    <div class="container-text container-text-bot">
    <?php echo $bot['content_text_bot']; ?>
            <a href="<?php echo $bot['url_link']; ?>"><?php echo $bot['link_text']; ?></a>
    </div>
</div>
<?php get_footer();?>
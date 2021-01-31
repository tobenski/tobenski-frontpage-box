<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://github.com/tobenski/
 * @since      1.0.0
 *
 * @package    Tobenski_Frontpage_Box
 * @subpackage Tobenski_Frontpage_Box/public/partials
 */
?>
<div class="boxes-container">
    <div class="boxes-header">
        <h1><?php the_field('site_name', 'option'); ?></h1>
    </div>
    <div class="boxes-wrapper">
        <?php
            $args = array(
                'post_type' => 'homebox',
                'posts_per_page' => 3,
                'orderby' => 'menu_order',
                'order' => 'ASC',
            );
            $homeboxes = new WP_Query($args);
            while($homeboxes->have_posts()) {
                $homeboxes->the_post();
            ?>
            <div class="box">
                <div class="box-header">
                    <?php the_title(); ?>
                    <i class="box-pointer fas fa-arrow-right"></i>
                </div>
                <div class="box-content">
                    <?php the_content(); ?> 
                </div>
                <div class="box-footer">
                    <a href="<?php the_field('tobenski_homebox_link');?>" class="box-link">
                    <?php the_field('tobenski_homebox_button') ?>
                    </a>
                </div>
                
            </div>
        <?php } ?>
    </div>
</div>
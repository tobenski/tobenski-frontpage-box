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
<?php get_header(); ?>
        <div id="overlay" class="relative top-0 left-0 right-0 w-full h-screen">
            <video preload="auto" autoplay playsinline muted loop class="object-cover object-center w-full h-full pointer-events-none">
                <source src="<?php the_field('video_link'); ?>" type="video/mp4" />
            </video>
            <?php include plugin_dir_path( __FILE__ ) . 'tobenski-frontpage-box-view.php' ?>
        </div>
<?php get_footer() ?>
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
    <div class="flex justify-center w-full h-full px-10 mt-0 max-h-1/4 
                md:overflow-hidden md:px-2 md:w-1/3 md:max-w-1/3 md:max-h-full md:pr-2 md:items-baseline md:pt-60 md:pl-8
                lg:pl-20 lg:pr-10 lg:pt-60 lg:items-start">
        <a href="/menukort" class="text-white bg-transparent md:h-36">
            <div class="flex items-start w-full mb-3 mx-0">
                <i class="pr-3 text-xl fas fa-arrow-right sm:text-2xl lg:text-3xl md:pt-1 animate-bounce"></i>
                <div class="flex flex-col items-start">
                    <h3 class="text-xl font-bold leading-none sm:text-2xl lg:text-3xl">
                        <?php the_title(); ?>
                    </h3>
                    <p class="mb-6 text-xs sm:text-sm md:text-lg"><?php the_content(); ?></p>
                    <a href="<?php echo get_post_meta( get_the_ID(), 'tobenski_homebox_link', true ); ?>" 
                        class="px-2 py-1 mt-4 text-xs font-bold text-white bg-blue-500 rounded-lg sm:text-sm md:text-md md:py-3 md:px-4 lg:px-5 lg:text-lg hover:bg-primary-hover">
                        <?php echo get_post_meta( get_the_ID(), 'tobenski_homebox_button', true ); ?>
                    </a>
                </div>
            </div>  
        </a>
    </div>
<?php } ?>

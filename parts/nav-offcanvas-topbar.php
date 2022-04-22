<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
    <div class="top-bar-left float-left">
        <?php the_custom_logo(); ?>
    </div>
    <div class="top-bar-right show-for-large">
        <?php joints_top_nav(); ?>	
    </div>
    <div class="top-bar-right float-right show-for-small hide-for-large">
        <ul class="menu mobile-menu">
            <!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
            <li><a data-toggle="off-canvas"><?php _e('<i class="fas fa-bars"></i>', 'jointswp'); ?></a></li>
        </ul>
    </div>
</div>
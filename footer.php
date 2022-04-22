<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<footer class="footer" role="contentinfo">

    <div class="inner-footer grid-x grid-padding-x">
         <div class='small-12 medium-3 cell footer-sidebar footer-1'>
                <?php if (is_active_sidebar('footer1')) : ?>
                    <?php dynamic_sidebar('footer1'); ?>
                <?php endif; ?>
            </div>

            <div class='small-12 medium-3 cell footer-sidebar footer-1'>
                <?php if (is_active_sidebar('footer2')) : ?>
                    <?php dynamic_sidebar('footer2'); ?>
                <?php endif; ?>
            </div>

            <div class='small-12 medium-3 cell footer-sidebar footer-1'>
                <?php if (is_active_sidebar('footer3')) : ?>
                    <?php dynamic_sidebar('footer3'); ?>
                <?php endif; ?>
            </div>
            
            <div class='small-12 medium-3 cell footer-sidebar footer-1'>
                <?php if (is_active_sidebar('footer4')) : ?>
                    <?php dynamic_sidebar('footer4'); ?>
                <?php endif; ?>
            </div>
    </div>
    
</footer> <!-- end .footer -->

</div>  <!-- end .off-canvas-content -->

</div> <!-- end .off-canvas-wrapper -->

<?php wp_footer(); ?>

</body>

</html> <!-- end page -->
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */
get_header();
?>

<div class="content">

    <div class="inner-content grid-x grid-margin-x grid-padding-x">

        <main class="main small-12 cell" role="main">

            <?php get_template_part('parts/section', 'content'); ?>					

        </main> <!-- end #main -->

    </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
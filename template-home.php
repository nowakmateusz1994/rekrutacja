<?php
/*
  Template Name: Strona główna
 */

get_header();
?>

<div class="content">

    <div class="inner-content">

        <main class="main" role="main">

            <?php get_template_part('parts/section', 'home-header'); ?>
            <?php get_template_part('parts/section', 'home-section1'); ?>

        </main> <!-- end #main -->

    </div> <!-- end #inner-content --> 

</div> <!-- end #content -->

<?php get_footer(); ?>

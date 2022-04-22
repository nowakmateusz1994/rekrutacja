<?php
$enabled = get_field('home_header_enabled');
$title = get_field('home_header_title');
$subtitle = get_field('home_header_subtitle');
$form = get_field('home_header_form');
$background = get_field('home_header_background');

if ($enabled):
    ?>
    <section class="home__header lazybg" data-lazybg='<?= $background['sizes']['foundation-x-large']; ?>'>
        <div class="home__header__form grid-x">
            <?= do_shortcode($form); ?> 
        </div>
        <div class="home__header__blue">
            <div class="grid-x grid-padding-x">
                <div class="small-12 medium-7 cell">
                    <div class="home__header__title"><?= $title; ?></div>
                    <div class="home__header__subtitle"><?= $subtitle; ?></div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

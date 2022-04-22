<?php
$enabled = get_field('home_section_enabled');
$title = get_field('home_section_title');
$subtitle = get_field('home_section_subtitle');
$description = get_field('home_section_description');
$link = get_field('home_section_link');
$background = get_field('home_section_background');

if ($enabled):
    ?>
    <section class="home__section lazybg" data-lazybg='<?= $background['sizes']['foundation-x-large']; ?>'>
        <div class="grid-padding-x grid-x">
            <div class="small-12 medium-8 cell">
                <div class="home__section__title"><?= $title; ?></div>
                <div class="home__section__subtitle"><?= $subtitle; ?></div>
                <div class="home__section__description"><?= $description; ?></div>
                <div class="home__section__link"><a class="button" href='<?= $link['url'] ?>' title='<?= $link['title'] ?>'><?= $link['title'] ?></a></div>
            </div>
        </div>
    </section>
<?php endif; ?>

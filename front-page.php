<?php

//Einbinden des Templates für den Kopfbereich
get_header();

?>
<!--Einbinden Bild unter Header-->
<div class="background">
    <div class="opacity">
        <div class="gruss">
            <p>Willkommen auf der Infoseite von milouwings® zum Thema Dysmelie und Spenden!</p>
            <a href="https://milouwings.de/spenden/">Mehr dazu</a>
        </div>
    </div>
</div>

<?php
get_sidebar();
?>
<main>
    <div class="inhalt">
    <?php
        // Wenn es Beiträge gibt
        if (have_posts()) {

            // Durchlaufen aller Beiträge
            while (have_posts()) {

                // Ausgeben des Beitrags
                the_post();
            }
        }
        the_content();
    ?>
        <div class="dia"> <?php echo do_shortcode('[metaslider id="445"]'); ?> </div>
        <h1>News</h1>
        <div class="news">
        <!-- Posts auf Frontpage anzeigen -->
    <?php // Display blog posts on any page @ https://m0n.co/l
    $temp = $wp_query; $wp_query= null;
    $wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);
    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="post">
            <div class="postimg">
                <?php if(has_post_thumbnail()):?>
                    <img src="<?php the_post_thumbnail_url('smallest');?>">
                <?php endif;?>
            </div>
            <div class="posttext">
            <h2><?php the_title(); ?></h2>
                <div class="date"><?php echo get_the_date(); ?></div>
            <div class="newstext"> <?php the_excerpt() ?> </div>
            <a href="<?php the_permalink(); ?>" title="Read more">Weiterlesen</a>
            </div>
        </div>

    <?php endwhile; ?>

        </div>

    </div>
</main>
<?php

//Einbinden des Templates für den Fußbereich
get_footer();

?>
<?php

//Einbinden des Templates für den Kopfbereich
get_header ();

?>
<?php
get_sidebar();
?>
    <main>
        <div class="inhalt">
            <div class="post">
            <div class="impost">
            <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url('largest');?>">
            <?php endif;?>
            </div>
            </div>

            <h1><?= the_title(); ?></h1>

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
        </div>
    </main>
<?php

//Einbinden des Templates für den Fußbereich
get_footer ();

?>
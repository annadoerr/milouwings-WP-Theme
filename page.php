<?php

//Einbinden des Templates für den Kopfbereich
get_header ();

?>
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
        </div>
    </main>
<?php

//Einbinden des Templates für den Fußbereich
get_footer ();

?>
<?php

//Einbinden des Templates für den Kopfbereich
get_header ();

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
        ?>
        </div>
    </main>
<?php

//Einbinden des Templates für den Fußbereich
get_footer();

?>
<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body <?php body_class();?>>
        <div class="wrapper">
         <header>
             <div class="headerimg">
                 <img src="/wp-content/themes/milouwings/img/logo.png" alt="Flügel">
             </div>
             <nav id="menu">
             <a class="menu-toggle menu-open" href="#menu">&equiv;</a>
             <a class="menu-toggle menu-close" href="#top">&times;</a>
                <?php
                 wp_nav_menu([
                         'theme_location' => 'top-menu',
                         'menu_class' => 'nav'
                     ]);
             ?>
             </nav>
         </header>

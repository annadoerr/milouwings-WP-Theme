         <footer>
             <div class="footer-links">
                 <a href="http://milouwings.com/">Kommerzielle Seite von milouwings®</a>
                <?php
                      wp_nav_menu([
                            'theme_location' => 'footer-menu'
                    ]);
                 ?>
             </div>
             <div class="copyright"> Copyright 2019 © milouwings®<br>Designed by Anna Dörr</div>
         </footer>
            <?php wp_footer(); ?>
        </div>
   </body>
</html>
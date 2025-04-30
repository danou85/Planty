<footer class="site-footer">
    <div class="footer-container">
        <nav class="footer-nav">
            <?php
            // Vérifie si un menu est assigné à l'emplacement "footer"
            if (has_nav_menu('footer')) {
                wp_nav_menu(array(
                    'theme_location' => 'footer', // Emplacement du menu footer
                    'menu_class' => 'footer-menu' // Classe pour styliser le menu
                ));
            } else {
                echo '<p>Aucun menu footer assigné.</p>';
            }
            ?>
        </nav>
    </div>
</footer>

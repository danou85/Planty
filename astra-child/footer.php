<?php astra_content_bottom(); ?>
        </div> <!-- .ast-container -->
    </div> <!-- #content -->

<?php astra_content_after(); ?>

<?php astra_footer_before(); ?>

<footer class="site-footer">
    <div class="footer-container">
        <nav class="footer-nav">
            <?php
            if ( has_nav_menu('footer') ) {
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class'     => 'footer-menu'
                ));
            } else {
                echo '<p>Aucun menu footer assigné.</p>';
            }
            ?>
        </nav>
    </div>
</footer>

<?php astra_footer_after(); ?>
</div> <!-- #page -->

<?php astra_body_bottom(); ?>
<?php wp_footer(); ?>
</body>
</html>

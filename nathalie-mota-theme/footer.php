
</main>
    <footer class="footer">
        <nav class="footerNav">
    <?php wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container' => 'ul',
                    'menu_class' => 'footerNav__menu'
                ));  ?>
        </nav>
    <?php get_template_part('popup-contact'); ?>

   <?php wp_footer()  ?>

   </footer>

</body>
</html>
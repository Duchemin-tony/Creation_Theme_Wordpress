</div>
<footer>
<?php 
        wp_nav_menu([
            'theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0'
            ]) 
        ?>
</footer>

<?php wp_footer() ?>
</body>

</html>
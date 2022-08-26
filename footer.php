	<?php wp_footer(); ?>

	<footer class="footer">
		<div class="container">
			<p class="copyright">Tous droits réservés © <?php echo date("Y") ?> <?php echo get_bloginfo( 'name' ); ?> Dorian Meyer</p>

			<?php wp_nav_menu(
                array(
                    'theme_location' => 'footer',
                    'container' => 'nav',
                    'container_class' => 'links',
                    'menu_class' => '',
                )
            ); ?>
		</div>
	</footer>
</body>
</html>
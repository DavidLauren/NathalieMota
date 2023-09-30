<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
		
	astra_footer_before();
		
	astra_footer();
		
	astra_footer_after(); 
?>
	</div><!-- #page -->

<!-- Modale -->
<?php get_template_part('template_part/modal'); ?>

	<?php 
	astra_body_bottom();    
	wp_footer(); 
?>

	</body>
	<footer id="footer">
    <div class="containerFooter">
        <div id="footer-content" class="text-center">
            <a href="<?php echo home_url('/mentions-legales'); ?>">Mentions légales</a>
            <a href="<?php echo home_url('/politique-de-confidentialite'); ?>">Vie privée</a>
            <p class="copyright-text">Tous droits résérvés</p>
        </div>
    </div>
</footer>

</html>

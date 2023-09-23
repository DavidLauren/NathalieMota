<?php
function enqueue_custom_styles() {
    wp_enqueue_style('custom-styles', get_stylesheet_directory_uri() . '/assets/css/theme.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
?>
<?php get_header(); ?>

<style>
    /* Styles spécifiques à la page d'accueil */
    .hero {
        }

    /* Ajoutez d'autres styles au besoin */
</style>

<div class="hero">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/nathalie-2.webp" alt="Image d'accueil">
</div>

<!-- Le reste de votre contenu de la page d'accueil -->

<?php get_footer(); ?>

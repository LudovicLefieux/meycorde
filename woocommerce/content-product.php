<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

?>

<li class="last-product__item product-card">
    <a href="<?php the_permalink(); ?>">
        <div class="product-card__img-container">
			<?php the_post_thumbnail(); ?>
        </div>
        <div class="product-card__content">
            <div>
                <p class="product-card__content__title"><?php the_title(); ?></p>
                <div class="product-card__content__description"><?php displayTags() ?></div>
            </div>
            <div>
				<?php if( $price_html = $product->get_price_html() ): ?>
					<p class="product-card__content__price"><?php echo $price_html ?></p>
				<?php endif; ?>
            </div>
        </div>
    </a>
</li>

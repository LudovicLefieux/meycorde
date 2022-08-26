<?php get_header(); ?>

<div class="hero left-right">
    <div class="slider-container">
        <div class="slider">
            <div class="slider__img" style="background-color: red;">
                <a href="#">
                </a>
            </div>
            <div class="slider__img" style="background-color: blue;">
                <a href="#">
                </a>
            </div>
            <div class="slider__img" style="background-color: green;">
                <a href="#">
                </a>
            </div>
        </div>

        <a href="#" class="prev">&#10094;</a>
        <a href="#" class="next">&#10095;</a>

        <div class="dots">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>
    <div class="left-right__content">
        <?php $args = array('post_type' => 'page', 'pagename' => 'hero');
        $posts = get_posts($args);

        if(count($posts) > 0):
            $post = $posts[0];
            setup_postdata($post); ?>

            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <button class="button">
                <a href="/catalogue">
                    Découvrir
                </a>
            </button>
        <?php endif; wp_reset_postdata(); ?>
    </div>
</div>

<section class="last-products">
    <div class="container">
        <h2>Les nouveautés</h2>
        <ul>
            <li class="last-product__item product-card">
                <a href="#">
                    <div class="product-card__img-container">

                    </div>
                    <div class="product-card__content">
                        <div>
                            <p class="product-card__content__title">Paracord OD</p>
                            <p class="product-card__content__description">Bracelet de survie</p>
                        </div>
                        <div>
                            <p class="product-card__content__price">7.50€</p>
                        </div>
                    </div>
                </a>
            </li>
            <li class="last-product__item product-card">
                <a href="#">
                    <div class="product-card__img-container">

                    </div>
                    <div class="product-card__content">
                        <div>
                            <p class="product-card__content__title">Paracord OD</p>
                            <p class="product-card__content__description">Bracelet de survie</p>
                        </div>
                        <div>
                            <p class="product-card__content__price">7.50€</p>
                        </div>
                    </div>
                </a>
            </li>
            <li class="last-product__item product-card">
                <a href="#">
                    <div class="product-card__img-container">

                    </div>
                    <div class="product-card__content">
                        <div>
                            <p class="product-card__content__title">Paracord OD</p>
                            <p class="product-card__content__description">Bracelet de survie</p>
                        </div>
                        <div>
                            <p class="product-card__content__price">7.50€</p>
                        </div>
                    </div>
                </a>
            </li>
            <li class="last-product__item product-card">
                <a href="#">
                    <div class="product-card__img-container">

                    </div>
                    <div class="product-card__content">
                        <div>
                            <p class="product-card__content__title">Paracord OD</p>
                            <p class="product-card__content__description">Bracelet de survie</p>
                        </div>
                        <div>
                            <p class="product-card__content__price">7.50€</p>
                        </div>
                    </div>
                </a>
            </li>
            <li class="last-product__item product-card">
                <a href="#">
                    <div class="product-card__img-container">

                    </div>
                    <div class="product-card__content">
                        <div>
                            <p class="product-card__content__title">Paracord OD</p>
                            <p class="product-card__content__description">Bracelet de survie</p>
                        </div>
                        <div>
                            <p class="product-card__content__price">7.50€</p>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>

<section class="home-categories">
    <div class="container">
        <h2>Vous choisissez</h2>
        <div class="home-categories__grid">
            <div class="category-card">
                <a href="#">
                    <div class="category-card__img-container">
                </div>
                <div class="category-card__content">
                    <span class="category-card__title">Bracelets</span>
                </div>
                </a>            
            </div>
            <div class="category-card">
                <a href="#">
                    <div class="category-card__img-container">
                </div>
                <div class="category-card__content">
                    <span class="category-card__title">Bracelets</span>
                </div>
                </a>            
            </div>
            <div class="category-card">
                <a href="#">
                    <div class="category-card__img-container">
                </div>
                <div class="category-card__content">
                    <span class="category-card__title">Bracelets</span>
                </div>
                </a>            
            </div>
            <div class="seemore-card">
                <a href="#">
                    <span>Voir plus</span>
                    <span>+</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="custom left-right">
    <div class="left-right__img-container"></div>
    <div class="left-right__content">

        <?php $args = array('post_type' => 'page', 'pagename' => 'custom-paragraph');
        $posts = get_posts($args);

        if(count($posts) > 0):
            $post = $posts[0];
            setup_postdata($post); ?>

            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <button class="button">
                <a href="/personnalisation">
                    Créer
                </a>
            </button>
        <?php endif; wp_reset_postdata(); ?>

    </div>
</section>

<?php get_footer(); ?>
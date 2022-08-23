<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <div class="cache hidden" id="cache"></div>
    
    <header class="header">
        <a href="/" class="logo">
            <span>MeyCorde</span>
        </a>
        <div class="submenu">

            <a href="#" class="search" id="search">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.6576 12.7826L17.875 18" stroke="#1E1E1E" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M7.875 14C11.1887 14 13.875 11.3137 13.875 8C13.875 4.68629 11.1887 2 7.875 2C4.56129 2 1.875 4.68629 1.875 8C1.875 11.3137 4.56129 14 7.875 14Z" stroke="#1E1E1E" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>

            <div class="searchbar hidden" id="searchBar">
                <div class="searchbar__input">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.6576 12.7826L17.875 18" stroke="#727272" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M7.875 14C11.1887 14 13.875 11.3137 13.875 8C13.875 4.68629 11.1887 2 7.875 2C4.56129 2 1.875 4.68629 1.875 8C1.875 11.3137 4.56129 14 7.875 14Z" stroke="#727272" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <form action="post">
                        <input type="search" name="search" id="search" placeholder="Bracelet cobra...">
                    </form>
                </div>
            </div>

            <a href="#" class="shopping-cart" id="shoppingCart">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.31944 5.2037H17.088C17.3467 5.20371 17.6025 5.25794 17.839 5.36288C18.0755 5.46782 18.2874 5.62114 18.461 5.81298C18.6346 6.00481 18.7661 6.23089 18.8469 6.47665C18.9278 6.7224 18.9563 6.98238 18.9306 7.23982L18.375 12.7954C18.3293 13.2523 18.1155 13.676 17.775 13.9841C17.4345 14.2923 16.9916 14.4629 16.5324 14.463H7.68981C7.26155 14.4631 6.84646 14.3149 6.51522 14.0434C6.18399 13.7719 5.95709 13.394 5.87315 12.9741L4.31944 5.2037Z" stroke="#1E1E1E" stroke-width="2" stroke-linejoin="round"/>
                <path d="M4.31944 5.2037L3.56944 2.20093C3.51928 2.0007 3.40366 1.82297 3.24093 1.69598C3.0782 1.56898 2.87771 1.50001 2.67129 1.5H1.54166M7.09722 18.1667H8.94907M14.5046 18.1667H16.3565" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>

            <div class="cart hidden">
                <div class="cart__illustration">
                    <svg width="74" height="78" viewBox="0 0 74 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="37" cy="43" r="35" fill="#D9D9D9"/>
                    <g clip-path="url(#clip0_96_407)">
                    <path d="M16.6594 26.3943L53.0749 21.2765C53.8128 21.1728 54.5642 21.2249 55.2807 21.4294C55.9972 21.6339 56.6629 21.9862 57.2349 22.4638C57.8069 22.9413 58.2725 23.5334 58.6016 24.2018C58.9308 24.8703 59.1162 25.6003 59.146 26.3448L59.7884 42.4118C59.8412 43.7333 59.4011 45.0274 58.5536 46.0427C57.706 47.058 56.5114 47.7222 55.2017 47.9063L29.9829 51.4506C28.7616 51.6227 27.5183 51.3662 26.4648 50.7247C25.4114 50.0833 24.6128 49.0965 24.2051 47.9324L16.6594 26.3943Z" stroke="#4F4F4F" stroke-width="5.33333" stroke-linejoin="round"/>
                    <path d="M16.6594 26.3943L13.3169 18.1311C13.0935 17.5801 12.6926 17.1196 12.1776 16.8227C11.6626 16.5257 11.0631 16.4093 10.4744 16.4921L7.25275 16.9448M29.7773 62.2509L35.0588 61.5087M50.9031 59.2819L56.1845 58.5397" stroke="#4F4F4F" stroke-width="5.33333" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <g clip-path="url(#clip1_96_407)">
                    <path d="M45.354 27.1069C45.4992 26.9026 45.6839 26.7295 45.8972 26.5978C46.1104 26.4661 46.3479 26.3786 46.5955 26.3402C46.8432 26.3019 47.096 26.3136 47.3391 26.3747C47.5822 26.4357 47.8105 26.5449 48.0107 26.6957C48.2108 26.8466 48.3787 27.036 48.5044 27.2528C48.6301 27.4696 48.7111 27.7094 48.7425 27.9581C48.7739 28.2067 48.7552 28.4591 48.6874 28.7004C48.6196 28.9417 48.5041 29.1669 48.3478 29.3628L43.6721 35.5677C43.6659 35.5759 43.6614 35.5852 43.6588 35.5951C43.6562 35.6051 43.6556 35.6154 43.657 35.6256C43.6585 35.6358 43.6619 35.6456 43.6671 35.6544C43.6723 35.6633 43.6792 35.671 43.6875 35.6772L49.8923 40.3529C50.0912 40.5002 50.259 40.6855 50.3859 40.8979C50.5129 41.1104 50.5965 41.3459 50.632 41.5909C50.6674 41.8359 50.6541 42.0854 50.5926 42.3252C50.5312 42.5649 50.4228 42.7902 50.2739 42.9878C50.125 43.1855 49.9384 43.3518 49.7249 43.477C49.5114 43.6022 49.2752 43.6839 49.0299 43.7174C48.7847 43.7509 48.5353 43.7355 48.296 43.672C48.0568 43.6086 47.8324 43.4985 47.6359 43.348L41.4311 38.6723C41.4229 38.6661 41.4135 38.6615 41.4036 38.659C41.3936 38.6564 41.3833 38.6558 41.3731 38.6572C41.3629 38.6587 41.3531 38.6621 41.3443 38.6673C41.3354 38.6725 41.3277 38.6794 41.3215 38.6876L36.6458 44.8925C36.4985 45.0914 36.3133 45.2592 36.1008 45.3861C35.8883 45.5131 35.6528 45.5967 35.4078 45.6322C35.1629 45.6676 34.9133 45.6543 34.6736 45.5928C34.4338 45.5313 34.2086 45.423 34.0109 45.2741C33.8132 45.1252 33.647 44.9386 33.5217 44.7251C33.3965 44.5115 33.3148 44.2754 33.2813 44.0301C33.2479 43.7849 33.2633 43.5354 33.3267 43.2962C33.3901 43.0569 33.5002 42.8326 33.6508 42.6361L38.3265 36.4313C38.3327 36.4231 38.3372 36.4137 38.3398 36.4038C38.3424 36.3938 38.3429 36.3835 38.3415 36.3733C38.3401 36.3631 38.3367 36.3533 38.3314 36.3445C38.3262 36.3356 38.3193 36.3279 38.3111 36.3217L32.1062 31.646C31.7136 31.3452 31.4557 30.9014 31.3888 30.4113C31.3219 29.9212 31.4514 29.4245 31.749 29.0295C32.0467 28.6344 32.4883 28.3729 32.9779 28.302C33.4674 28.2311 33.9651 28.3566 34.3626 28.651L40.5675 33.3267C40.5757 33.3329 40.585 33.3374 40.595 33.34C40.6049 33.3425 40.6153 33.3431 40.6254 33.3417C40.6356 33.3403 40.6454 33.3368 40.6543 33.3316C40.6631 33.3264 40.6708 33.3195 40.677 33.3113L45.3527 27.1064L45.354 27.1069Z" fill="#4F4F4F"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_96_407">
                    <rect width="64" height="64" fill="white" transform="translate(0.85791 9.76495) rotate(-8)"/>
                    </clipPath>
                    <clipPath id="clip1_96_407">
                    <rect width="20" height="20" fill="white" transform="translate(29.7056 27.489) rotate(-8)"/>
                    </clipPath>
                    </defs>
                    </svg>
                </div>
                <p>Mince ! Votre panier est vide !</p>
                <button class="button button--dark">
                    <a href="#">
                        Chercher des produits
                    </a>
                </button>
            </div>

            <a href="#" class="burger-menu" id="burgerMenu">
                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.875 11H14M0.875 6H14M0.875 1H14" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <svg class="hidden" width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.5625 5L13.5625 15M3.5625 15L13.5625 5" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>

            <nav class="mobile-nav hidden" id="MobileNav">
                <ul>
                    <li class="mobile-nav__item">
                        <a href="/">
                            Accueil
                        </a>
                    </li>
                    <li class="mobile-nav__item">
                        <a href="#">
                            Catalogue
                        </a>
                    </li>
                    <li class="mobile-nav__item">
                        <a href="#">
                            Personnalisation
                        </a>
                    </li>
                    <li class="mobile-nav__item mobile-nav__item--complex" id="account">
                        <a href="#">
                            <span>Mon compte</span>
                            <span class="plus">+</span>
                        </a>
                        <ul class="mobile-nav__submenu" id="accountSubMenu">
                            <li class="mobile-nav__submenu__item">
                                <a href="#">
                                    Mes commandes
                                </a>
                            </li>
                            <li class="mobile-nav__submenu__item">
                                <a href="#">
                                    Mes informations
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mobile-nav__item">
                        <a href="#">
                            Favoris
                        </a>
                    </li>
                    <li class="mobile-nav__item">
                        <a href="#">
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
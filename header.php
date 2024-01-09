<?php

/**
 * @package WordPress
 * @subpackage Homebody
 * @since Homebody 1.0
 */

/*
 * 컴포넌트 - 헤더
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet"> -->
    
    <link rel="stylesheet" as="style" crossorigin href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard@v1.3.6/dist/web/static/pretendard.css" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6788614b36.js" crossorigin="anonymous"></script>

    <?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>

    <header class="site-header" role="header">
        <div class="container">
            <!-- 로고 -->
            <div class="site-logo-wrap">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <h1 class="site-branding">Homebody</h1>
                </a>
            </div>
            <!-- 내비게이션 메뉴 -->
            <nav id="site-navigation" class="site-navigation" role="navigation">
                <?php wp_nav_menu(array('theme_location'  => 'primary-menu')); ?>
            </nav>
            <!-- 검색창 -->
            <article id="post-95" class="post-95 page type-page status-publish hentry">
                <div class="entry-content">
                    <?php echo '<form role="search" method="get" action="'. home_url() .'" class="wp-block-search__button-outside wp-block-search__text-button wp-block-search">'?>
                        <div class="wp-block-search__inside-wrapper ">
                            <input class="wp-block-search__input" id="wp-block-search__input-1" placeholder="search" value="" type="search" name="s" required="" style="color: white;">
                            <button aria-label="검색" class="wp-block-search__button wp-element-button" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
            </article>
            <!-- subscribe menu 창 -->
            <nav id="sitee-navigation" class="site-navigation" role="navigation">
                <?php wp_nav_menu(array('theme_location'  => 'subscribe-menu')); ?>
            </nav>

            <!-- Mobile -->
            <?php echo '<div class="search-btn" onclick="location.href=\''.home_url().'/search'.'\'"><i class="fa-solid fa-magnifying-glass"></i></div>' ?>

            <div class="menu-btn">
                <!-- Moblie_nav -->
                <div class="menu-icon"></div>
            </div>
            <div class="menu-container">
                <nav class="more-navigation">
                    <div class="container">
                        <?php wp_nav_menu(array(
                            'theme_location'  => 'primary-menu',
                            'menu_class' => 'gnb',
                            'container' => '',
                        )); ?>
                        <?php wp_nav_menu(array(
                            'theme_location'  => 'subscribe-menu',
                            'menu_class' => 'gnb',
                            'container' => '',
                        )); ?>
                    </div>
                </nav>
                <div class="overlay"></div>
            </div>

        </div>
    </header>

    <!-- 페이지 공통 레이아웃 -->
    <main id="main" class="site-main" role="main">
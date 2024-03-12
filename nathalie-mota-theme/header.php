<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body>
<?php wp_body_open();  ?>

    <header id="header"class="header">
        <nav class="navBar">
            <div class="navBar__logo">   
                <?php if(has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
                <?php else : ?>
                <h2><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h2>
                <?php endif; ?>
            </div> 
                
                <?php wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => 'ul',
                    'menu_class' => 'navBar__menu'
                ));  ?>
            </nav>
        <section class="banner">
            <img class="banner__img" src="<?php echo get_theme_file_uri().'./assets/images/nathalie-0.jpeg'; ?>" alt="">
            <p class="banner__slogan hero-slogan">photographe event</p>

        </section>
        

    </header>
    <main class="container">
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); echo " | "; bloginfo('description');?></title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <!-- <link rel="stylesheet" href="css/style.min.css"> -->
    <?php
    // функция, выводящая все стили и скрипты
    // WP сам подключает то, что ему необходимо для работы
    wp_head();
    ?>
</head>

<body>
    <header>
        <div class="header-info">
            <div class="container">
                <div class="row">
                    <div class="logo col-12 col-sm-4">
                        <div class="logo__logo">
                            <a href="<?php echo get_home_url(); ?>" class="logo__link">
                            <img class="logo__img" src="<?php 
                                // получаем ссылку на логотип
                                $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
                                // выводим
                                echo $custom_logo__url[0];  
                            ?>" alt="Логотип">
                            </a>
                        </div>
                    </div>
                    <div class="contact col-6 col-sm-4 offset-md-1 col-lg-4 offset-lg-1 col-xl-4 offset-xl-1">
                        <div class="contact__text">Звоните нам ежедневно</div><a class="contact__link" href="tel:+79133691135">8 913 369 11 35</a>
                    </div>
                    <div class="header-button col-6 col-sm-4 col-md-3 col-lg-2 order-3">
                    <?php
                        if ($_SERVER['REQUEST_URI'] =="/") {
                            ?>
                        <a href="https://wa.me/79133691135" target="blank"><button class="header-button__btn btn">Заказать звонок</button></a></div>
                    <?php } else { ?>
                        <a href="#form"><button class="header-button__btn btn">Заказать звонок</button></a></div>
                    <?php } echo is_home()?>
                        
                </div>
                <div class="header-burger">
                    <!-- <div class="header-burger__item header-burger__item-top"></div> -->
                    <div class="header-burger__item header-burger__item-mid">
                        <div class="header-burger__icon"></div>
                    </div>
                    <!-- <div class="header-burger__item header-burger__item-bot"></div> -->
                </div>
                <nav class="header-menu-wrapper">
                    <?php 
                        wp_nav_menu( [
                            'menu'            => 'Main', 
                            'container'       => 'false', 
                            'menu_class'      => 'header-menu', 
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'items_wrap'      => '<ul class="row %2$s">%3$s</ul>',
                            'depth'           => 1,
                            'walker'          => '',
                        ] );
                    
                    ?>
                </nav>
                
            </div>
        </div>
    </header>
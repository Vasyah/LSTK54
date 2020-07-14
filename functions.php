<?php
// Регистрация стилей и скриптов происходит с использованием хуков, условно говоря, теперь нам не нужно
// на прямую указывать путь к файлу (в редких случаях), а мы используем функции php, для поиска файла -->
// Хуки - действие, выполняемое во время других действий
// хук, подключающий стили и скрипты
    add_action( 'wp_enqueue_scripts', 'lstk_styles');
    add_action( 'wp_enqueue_scripts', 'lstk_scripts');

    function lstk_styles(){
        wp_enqueue_style( 'lstk_styles', get_stylesheet_uri() );
    };
    function lstk_scripts(){
        wp_enqueue_script( 'lstk_jQ', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), null, true );
        wp_enqueue_script( 'lstk_jQ_migr', 'https://code.jquery.com/jquery-migrate-3.3.0.min.js', array(), null, true );
        wp_enqueue_script( 'lstk_slick', get_template_directory_uri() . '/slick/slick.min.js', array('jquery'), null, true );
        wp_enqueue_script( 'lstk_scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true );
    };
    // подключаем логотип
    add_theme_support('custom-logo');
    // подключаем изображение дял записей
    add_theme_support('post-thumbnails');
    // подключаем меню
    add_theme_support('menus');

    // добавляем фильтр, добавляющий классы меню
    // nav_menu_link_attributes - все атрибуты у имеющихся пунктов меню
    add_filter('wp_nav_menu_objects', 'css_for_nav_parrent');
    function css_for_nav_parrent( $items ){
        foreach( $items as $item ){
                $item->classes[] = 'col header__item '; // все элементы поля "classes" меню, будут совмещены и выведены в атрибут class HTML тега <li>
        }
        return $items;
    }
    add_filter('nav_menu_link_attributes','filter_nav_menu_link_attributes', 10, 3);
    function filter_nav_menu_link_attributes($atts, $item, $args) {
        if($args->menu === 'Main'){
            $atts['class'] = 'header__link';
            if($item->current) {
                $atts['class'] .= ' header__link--active';   
            }
        }
        // фильтра должна возвращать какое-то значение
        return $atts;
    }
?>
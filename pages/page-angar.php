<?php
// Эта информация нужна, для того, чтобы обозначить данный файл, как шаблон страницы
/*
Template Name: Angar
*/

?>

<?php
    get_header();
?>

<main>
    <section class="promo promo-2nd">
        <div class="container">
            <div class="row">
                <div class="col-md-11 offset-md-1"><a class="promo__link promo-2nd__home-link" href="<?php echo get_home_url();?>">На главную</a>
                    <h1 class="promo__title"><?php the_field('promo_title');?></h1>
                    <h2 class="promo__subtitle"><?php the_field('promo_subtitle_1');?></h2>
                    <h2 class="promo__subtitle"><?php the_field('promo_subtitle_2');?></h2>
                </div>
                <div class="col-md-11 offset-md-1">
                    <h3 class="promo-2nd__header">Изготовление в Новосибирске:</h3>
                    <ul class="promo-2nd__list">
                        <li class="promo-2nd__item"><?php $promo_list = get_field('promo_list'); echo $promo_list['promo_list_item_1'];?></li>
                        <li class="promo-2nd__item"><?php $promo_list = get_field('promo_list'); echo $promo_list['promo_list_item_2'];?></li>
                        <li class="promo-2nd__item"><?php $promo_list = get_field('promo_list'); echo $promo_list['promo_list_item_3'];?></li>
                    </ul>
                </div>
            </div>
            <div class="promo-cards row">
                <div class="promo-cards__item promo-cards__item-2nd col-12 col-md-6 col-lg-6">
                    <div class="promo-cards__title">От 15000 за кв. метр</div>
                    <div class="promo-cards__wrapper">
                        <div class="promo-cards__text">Материалы доставим за свой счёт!</div>
                    </div>
                </div>
                <div class="promo-cards__inner col-6 offset-3"><a href="https://wa.me/79133691135" target="blank"><button class="main-btn btn">Заказать сейчас!</button></a></div>
            </div>
        </div>
    </section>
    <section class="section-1">
        <div class="container">
            <div class="section-1__label">Регалии</div>
            <h3 class="section-1__title">Краткий список наших достижений</h3>
            <div class="section-1-cards row">
                <?php
                    $posts = get_posts( array(
                        'numberposts' => -1, // вывести все посты
                        'category_name'    => 'achievement_list', // название рубрики постов
                        'orderby'     => 'date', // по дате
                        'order'       => 'ASC', // обратный порядок
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>
                            <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-0">
                                <div class="section-1-cards__item">
                                    <div class="section-1-cards__title"> <?php the_title(); ?> </div>
                                    <div class="section-1-cards__box"><img class="section-1-cards__img" src="<?php the_post_thumbnail_url(); ?>"  alt="20 лет на рынке"></div>
                                <div class="section-1-cards__wrapper">
                                    <div class="section-1-cards__text"><?php the_content(); ?></div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                    wp_reset_postdata(); // сброс
                ?>
               
            </div>
        </div>
    </section>
    <section class="section-2">
        <div class="container-fluid">
            <div class="section-2__label">Работы</div>
            <h3 class="section-2__title">Примеры наших работ</h3>
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1">
                    <div class="slider">
                        <?php
                            $posts = get_posts( array(
                                'numberposts' => -1, // вывести все посты
                                'category_name'    => 'slider-angari', // название рубрики постов
                                'orderby'     => 'date', // по дате
                                'order'       => 'ASC', // обратный порядок
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            foreach( $posts as $post ){
                                setup_postdata($post);
                                ?>
                                    <div class="slider__item"><img class="slider__img" data-lazy="<?php the_post_thumbnail_url(); ?>" alt="1"></div>
                                <?php
                                // формат вывода the_title() ...
                            }

                            wp_reset_postdata(); // сброс
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="section-3">
        <div class="container">
            <div class="section-3__label">Алгоритм</div>
            <h3 class="section-3__title">Как мы работаем</h3>
            <div class="section-3-cards row">
                <?php
                    $posts = get_posts( array(
                        'numberposts' => -1, // вывести все посты
                        'category_name'    => 'how_we_work', // название рубрики постов
                        'orderby'     => 'date', // по дате
                        'order'       => 'ASC', // обратный порядок
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>
                            <div class="col-md-6 offset-md-0 col-lg-4 offset-lg-0">
                                <div class="section-3-cards__item">
                                    <div class="section-3-cards__title"><span class="section-3-cards__num"><?php the_field('block_number'); ?></span><?php the_title(); ?></div>
                                    <div class="section-3-cards__box"><img class="section-3-cards__img" src="<?php the_post_thumbnail_url(); ?>" alt="Заявка"></div>
                                    <div class="section-3-cards__wrapper">
                                        <div class="section-3-cards__text"><?php the_field('icon_text'); ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php
                // формат вывода the_title() ...
                    }

            wp_reset_postdata(); // сброс
        ?>                
            <div class="section-3-cards__inner col-12"><a href="https://wa.me/79133691135" target="blank"><button class="main-btn btn">Заказать сейчас!</button></a></div>
        </div>
        </div>
    </section>
    <section class="section-4">
        <div class="container">
            <div class="section-4__label">Сертификаты</div>
            <h3 class="section-4__title">С нами надежно</h3>
            <div class="section-4__wrapper row">
                <div class="section-4__col col-md-6 offset-md-3 offset-lg-0 col-lg-6"><a class="section-4__link" href="/pdf/sro1.pdf" target="blank" data-rel="_PhotoGallery1"><img class="section-4__img" src="<?php echo bloginfo('template_url')?>/assets/images/2nd/content/section-4/q-1.jpg" alt="Свидетельство-1"></a></div>
                <div class="section-4__col col-md-6 offset-md-3 offset-lg-0 col-lg-6"><a class="section-4__link" href="/pdf/sro1.pdf" target="blank"><img class="section-4__img" src="<?php echo bloginfo('template_url')?>/assets/images/2nd/content/section-4/q-2.jpg" alt="Свидетельство-2"></a></div>
            </div>
        </div>
    </section>
    <section class="section-5">
        <div class="container">
            <div class="section-5__label">Заказать</div>
            <h3 class="section-5__title">Оставьте заявку удобным для вас способом</h3>
            <div class="social section-5__social row">
                <div class="col-4 offset-2 col-sm-3 offset-sm-0">
                    <div class="social__item"><a class="social__link" href="https://vk.com/id600258419" target="blank"><img class="social__img" src="<?php echo bloginfo('template_url')?>/assets/images/common/social/vk.svg" alt="Вконтакте"></a>
                        <div class="social__text">Vkontakte</div>
                    </div>
                </div>
                <div class="col-4 col-sm-3">
                    <div class="social__item"><a class="social__link" href="https://www.instagram.com/stroisibproect/" target="blank"><img class="social__img" src="<?php echo bloginfo('template_url')?>/assets/images/common/social/instagram.svg" alt="Инстаграм"></a>
                        <div class="social__text">Instagram</div>
                    </div>
                </div>
                <div class="col-4 offset-2 col-sm-3 offset-sm-0">
                    <div class="social__item"><a class="social__link" href="https://wa.me/79133691135" target="blank"><img class="social__img" src="<?php echo bloginfo('template_url')?>/assets/images/common/social/whatsapp.svg" alt="Ватсап"></a>
                        <div class="social__text">Whatsapp</div>
                    </div>
                </div>
                <div class="col-4 col-sm-3">
                    <div class="social__item"><a class="social__link" href="tel:+79133691135" target="blank"><img class="social__img" src="<?php echo bloginfo('template_url')?>/assets/images/common/social/phone.svg" alt="Звонок"></a>
                        <div class="social__text">Позвонить</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                <?php echo do_shortcode('[contact-form-7 id="113" html_id="form" title="Форма заявки"]'); ?>
                    <!-- <form class="form-request" id="form">
                        <div class="form-request__title">Оставьте заявку</div><label for="validationDefault01">Ваше имя</label><input class="form-request__input form-control" id="validationDefault01" type="text" placeholder="Пример: Василий" required=""><label for="validationDefault02">Ваш номер телефона</label><input class="form-request__input form-control" id="validationDefault02" type="tel" placeholder="8-9xx-xxx-xx-xx" required=""><label for="validationDefault03">Электронная почта</label><input class="form-request__input form-control" id="validationDefault03" type="email" placeholder="example@mail.ru" required="">
                        <div class="form-request__inner"><button class="main-btn btn" type="submit">Отправить</button></div>
                    </form> -->
                </div>
            </div>
        </div>
    </section>
</main>

<?php
    get_footer();
?>
<?php
get_header();
?>

<main>
    <section class="promo">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="promo__title"><?php the_field('main_promo_title'); ?></h1>
                </div>
                <div class="col-12">
                    <ul class="promo-2nd__list">
                        <li class="promo-2nd__item">Каркасные дома</li>
                        <li class="promo-2nd__item">Металлоконструкции</li>
                        <li class="promo-2nd__item">Ангары</li>
                        <li class="promo-2nd__item">Архитектурные проекты</li>
            </ul>
                </div>
            </div>
            <div class="promo-cards row">
                <?php
                        $posts = get_posts( array(
                            'numberposts' => -1, // вывести все посты
                            'category_name'    => 'main_promo_list', // название рубрики постов
                            'orderby'     => 'date', // по дате
                            'order'       => 'ASC', // обратный порядок
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>
                                <div class="promo-cards__item col-md-12 col-lg-4">
                                    <div class="promo-cards__title"><?php the_title(); ?></div>
                                    <div class="promo-cards__box"><img class="promo-cards__img" src="<?php the_post_thumbnail_url(); ?>" alt="бесплатная доставка"></div>
                                    <div class="promo-cards__wrapper">
                                        <div class="promo-cards__text"><?php the_content(); ?></div>
                                    </div>
                                </div>
                <?php
                    // формат вывода the_title() ...
                        }
                    wp_reset_postdata(); // сброс
                ?>  
                <div class="promo-cards__inner col-12"><a href="https://wa.me/79133691135" target="blank"><button class="main-btn promo-cards__main-btn btn">Заказать сейчас!</button></a></div>
            </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <h2 class="about__title">О нас</h2>
                </div>
            </div>
            <div class="about__item row">
                <div class="about__text col-12">
                    <p class="about__paragraph about__paragraph--main"><b>ООО «СтройСибПроект»</b> - это фирма, оказывающая широкий спектр
                качественных строительных и монтажных услуг в <b>г.Новосибирске и Новосибирской области</b> </p>
                    <p class="about__paragraph">Результат нашей
                работы, в которой лежат отвественность и уважение к заказчику - это доверие клиентов!</p>
                    <p class="about__paragraph">За 3 года работы на
                рынке, мы добились отличных результатов. Множество довольных клиентов, множество сданных объектов, как жилых,
                 так и административных.</p>
                    <p class="about__paragraph">Мы гордимся тем, что работаем с отличными и надежными партнерами, которые
                являются ведущими поставщиками строительных материалов и оборудования в России!</p>
                </div>
            </div>
            <div class="about__item row">
                <div class="about__text col-12">
                    <p class="about__paragraph about__paragraph--main"><b>Основные направления деятельности компании:</b></p>
                    <p class="about__paragraph">- Жилищное, коммерческое и промышленное строительство;</p>
                    <p class="about__paragraph">- Монтаж любых строительных конструкций;</p>
                    <p class="about__paragraph">- Технический надзор за строительством объектов.</p>
                    <p class="about__paragraph"><b>У нас свобственное производство</b>, это позволяет
                сократить затраты на строительство. Позволяет нам контролировать качество изготавливаемой продукции. Полный
                контроль от начала проекта до сдачи «под ключ»!</p>
                </div>
            </div>
            <div class="about__item row">
                <div class="about__text col-12">
                    <p class="about__paragraph about__paragraph--main">Уровень наших специалистов соответствует самым высоким
                требованиям. Мы Обладаем всеми необходимыми строительными сертификатами и разрешительной документацией для
                выполнения индивидуальных и государственных строительных заказов.</p>
                    <p class="about__paragraph"><b>ООО «СтройСибПроект»</b> - это коллектив
                настоящих профессионалов,преданных своему делу!</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
    get_footer();
?>
</body>


</html>
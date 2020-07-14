<footer class="footer">
        <div class="header-info">
            <div class="container">
                <div class="row">
                    <div class="logo col-12 col-sm-4 order-3 order-sm-0">
                        <div class="logo__logo"><a href="<?php echo get_home_url(); ?>" class="logo__link">
                                <img class="logo__img" src="                            <?php 
                                // получаем ссылку на логотип
                                $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
                                // выводим
                                echo $custom_logo__url[0];  
                            ?>" alt="Логотип">
                            </a></div>
                    </div>
                    <div class="contact col-6 col-sm-4 offset-md-1 col-lg-3 offset-lg-2 col-xl-2 offset-xl-3 order-1order-sm-0">
                        <div class="contact__text">Звоните нам ежедневно<a class="contact__link" href="tel:+79133691135">8 913 369 11 35</a></div>
                    </div>
                    <div class="header-button col-6 col-sm-4 col-md-3 col-lg-2 order-2order-sm-0"><a href="https://wa.me/79133691135" target="blank"><button class="header-button__btn btn">Заказать сейчас</button></a></div>
                </div>
            </div>
        </div>
    </footer>

    <?php
    wp_footer();
    ?>
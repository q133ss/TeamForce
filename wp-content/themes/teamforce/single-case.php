<?php get_header(); ?>
<img 
    src="<?php echo get_template_directory_uri(); ?>/img/header-bg.png" 
    alt="header-bg" 
    class="header__bg" 
/>

        <div class="header__filler"></div>
        <nav class="breadcrumbs">
            <div class="_container">
                <ul class="breadcrumbs__items">
                    <li class="breadcrumbs__item"> 
                        <a href="/" class="breadcrumbs__link">Главная</a>
                    </li>
                    <li class="breadcrumbs__item"> 
                        <a href="/cases-own.html" class="breadcrumbs__link">Кейсы</a>
                    </li>
                    <li class="breadcrumbs__item last"> 
                        <?php if(get_field('category') == 1){ ?>
                            <a href="<?php echo get_page_link(32); ?>" class="breadcrumbs__link">Собственная разработка</a>
                        <?php }else{ ?>
                            <a href="<?php echo get_page_link(36); ?>" class="breadcrumbs__link">Заказная разработка</a>
                        <?php }?>
                    </li>
                    <li class="breadcrumbs__item last">
                        <a class="breadcrumbs__link breadcrumbs__link-marked"><?php echo get_the_title(); ?></a>
                    </li>
                </ul>
                <button class="breadcrumbs__back">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0_0_19593)">
    <path d="M15 5.01246C15 4.11226 13.9234 3.66144 13.2938 4.29798L10.1984 7.4273C8.06612 9.58289 7 10.6607 7 12C7 13.3393 8.06612 14.4171 10.1984 16.5727L13.2938 19.702C13.9234 20.3386 15 19.8877 15 18.9875C15 18.7196 14.8947 18.4625 14.7073 18.2731L11.6118 15.1437C10.5058 14.0255 9.82141 13.3276 9.38882 12.7544C8.99838 12.2371 8.99883 12.0565 8.99897 12.0028L8.99897 12L8.99897 11.9973C8.99883 11.9435 8.99838 11.7629 9.38882 11.2456C9.8214 10.6724 10.5058 9.97446 11.6118 8.85627L14.7073 5.72695C14.8947 5.53745 15 5.28044 15 5.01246Z" fill="#F15A29"/>
    </g>
    <defs>
    <clipPath id="clip0_0_19593">
    <rect width="24" height="24" fill="white"/>
    </clipPath>
    </defs>
</svg>
    
                </button>
            </div>
        </nav>

        <main class="main" id="main">
            <img 
    src="<?php echo get_template_directory_uri(); ?>/img/center-circle-bg-mobile.png" 
    alt="center-circle-bg-mobile"
    class="center-initial__bg-circles-mobile practice-initial__bg-mobile" 
/>
<section class="case-about">
    <img 
        src="<?php echo get_template_directory_uri(); ?>/img/case-page-about-bg.png" 
        alt="case-page-about-bg" 
        class="case-about__bg _desktop" 
    />
    <div class="case-about__img">
        <img 
            src="<?php echo get_field('img_detail'); ?>" 
            alt="case-page-main-img" 
        />
    </div>
    <div class="case-about__main _grey-section">
        <div class="_container">
            <div class="case-about__main-content ">
                <?php if(!empty(get_field('about'))){ ?>
                <h2 class="case-about__title _title">
                    О проекте
                </h2>
                <?php $about_value = get_field('about'); ?>
                <p class="case-about__text">
                    <?php
                    $lines = explode("\n", $about_value);
                    echo $lines[0];
                    ?>
                </p>
                <p class="case-about__text">
                    <?php
                    // Исключаем первую строку и выводим остальные строки
                    $remaining_lines = array_slice($lines, 1);
                    foreach ($remaining_lines as $line) {
                        echo $line . '<br>';
                    }
                    ?>
                </p>
                <?php } ?>


                <?php if(!empty(get_field('how'))): ?>
                <h2 class="case-about__title _title">
                    Как это работает
                </h2>
                <p class="case-about__text">
                    <?php echo get_field('how'); ?>
                </p>
                <?php endif; ?>

                <?php if(!empty(get_field('main_dirs'))): ?>
                <h2 class="case-about__title _title">
                    Основные направления
                </h2>
                <ul class="case-about__list">
                    <?php foreach(get_field('main_dirs') as $dir): ?>
                    <li class="case-about__list-element"><?php echo $dir['dir']; ?></li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>


                <?php if(!empty(get_field('advs'))): ?>
                <h2 class="case-about__title _title">
                    Преимущества 
                </h2>
                <ul class="case-about__list">
                    <?php foreach(get_field('advs') as $adv): ?>
                    <li class="case-about__list-element"><?php echo $adv['adv']; ?></li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>

                <div class="case-about__bot">
                    <p class="case-about__text-small"><?php echo get_field('ps'); ?></p>
                    <a href="<?php echo get_field('page_url'); ?>" target="_blank" class="case-about__link">
                        Страница проекта
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0_470_15083)">
    <path d="M9 5.01246C9 4.11226 10.0766 3.66144 10.7062 4.29798L13.8016 7.4273C15.9339 9.58289 17 10.6607 17 12C17 13.3393 15.9339 14.4171 13.8016 16.5727L10.7062 19.702C10.0766 20.3386 9 19.8877 9 18.9875C9 18.7196 9.1053 18.4625 9.29274 18.2731L12.3882 15.1437C13.4942 14.0255 14.1786 13.3276 14.6112 12.7544C15.0016 12.2371 15.0012 12.0565 15.001 12.0028L15.001 12L15.001 11.9973C15.0012 11.9435 15.0016 11.7629 14.6112 11.2456C14.1786 10.6724 13.4942 9.97446 12.3882 8.85627L9.29274 5.72695C9.1053 5.53745 9 5.28044 9 5.01246Z" fill="white"/>
    <path d="M9 5.01246C9 4.11226 10.0766 3.66144 10.7062 4.29798L13.8016 7.4273C15.9339 9.58289 17 10.6607 17 12C17 13.3393 15.9339 14.4171 13.8016 16.5727L10.7062 19.702C10.0766 20.3386 9 19.8877 9 18.9875C9 18.7196 9.1053 18.4625 9.29274 18.2731L12.3882 15.1437C13.4942 14.0255 14.1786 13.3276 14.6112 12.7544C15.0016 12.2371 15.0012 12.0565 15.001 12.0028L15.001 12L15.001 11.9973C15.0012 11.9435 15.0016 11.7629 14.6112 11.2456C14.1786 10.6724 13.4942 9.97446 12.3882 8.85627L9.29274 5.72695C9.1053 5.53745 9 5.28044 9 5.01246Z" stroke="white"/>
    </g>
    <defs>
    <clipPath id="clip0_470_15083">
    <rect width="24" height="24" fill="white"/>
    </clipPath>
    </defs>
</svg>     
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
            <section class="case-more _grey-section">
    <div class="case-more__bg">
        <svg width="103" height="639" viewBox="0 0 103 639" fill="none" xmlns="http://www.w3.org/2000/svg">
    <ellipse cx="26.0638" cy="449.613" rx="1.69607" ry="1.69666" transform="rotate(-90 26.0638 449.613)" fill="#9198A0"/>
    <ellipse cx="26.0638" cy="636.454" rx="1.69607" ry="1.69666" transform="rotate(-90 26.0638 636.454)" fill="#9198A0"/>
    <ellipse cx="26.0638" cy="412.3" rx="1.69607" ry="1.69666" transform="rotate(-90 26.0638 412.3)" fill="#9198A0"/>
    <ellipse cx="26.0638" cy="599.142" rx="1.69607" ry="1.69666" transform="rotate(-90 26.0638 599.142)" fill="#9198A0"/>
    <ellipse cx="26.0638" cy="374.988" rx="1.69607" ry="1.69666" transform="rotate(-90 26.0638 374.988)" fill="#9198A0"/>
    <ellipse cx="26.0638" cy="561.827" rx="1.69607" ry="1.69666" transform="rotate(-90 26.0638 561.827)" fill="#9198A0"/>
    <ellipse cx="26.0638" cy="337.673" rx="1.69607" ry="1.69666" transform="rotate(-90 26.0638 337.673)" fill="#9198A0"/>
    <ellipse cx="26.0638" cy="524.515" rx="1.69607" ry="1.69666" transform="rotate(-90 26.0638 524.515)" fill="#9198A0"/>
    <ellipse cx="26.0638" cy="300.361" rx="1.69607" ry="1.69666" transform="rotate(-90 26.0638 300.361)" fill="#9198A0"/>
    <ellipse cx="26.0638" cy="487.2" rx="1.69607" ry="1.69666" transform="rotate(-90 26.0638 487.2)" fill="#9198A0"/>
    <ellipse cx="26.0638" cy="263.046" rx="1.69607" ry="1.69666" transform="rotate(-90 26.0638 263.046)" fill="#9198A0"/>
    <ellipse cx="26.0638" cy="225.734" rx="1.69607" ry="1.69666" transform="rotate(-90 26.0638 225.734)" fill="#9198A0"/>
    <ellipse cx="26.0638" cy="188.419" rx="1.69607" ry="1.69666" transform="rotate(-90 26.0638 188.419)" fill="#9198A0"/>
    <ellipse cx="26.0638" cy="151.107" rx="1.69607" ry="1.69666" transform="rotate(-90 26.0638 151.107)" fill="#9198A0"/>
    <ellipse cx="26.0638" cy="113.792" rx="1.69607" ry="1.69666" transform="rotate(-90 26.0638 113.792)" fill="#9198A0"/>
    <ellipse cx="26.0638" cy="76.4797" rx="1.69607" ry="1.69666" transform="rotate(-90 26.0638 76.4797)" fill="#9198A0"/>
    <ellipse cx="26.0638" cy="39.1653" rx="1.69607" ry="1.69666" transform="rotate(-90 26.0638 39.1653)" fill="#9198A0"/>
    <ellipse cx="26.0638" cy="1.85276" rx="1.69607" ry="1.69666" transform="rotate(-90 26.0638 1.85276)" fill="#9198A0"/>
    <ellipse cx="63.431" cy="449.613" rx="1.69607" ry="1.69666" transform="rotate(-90 63.431 449.613)" fill="#9198A0"/>
    <ellipse cx="63.431" cy="636.454" rx="1.69607" ry="1.69666" transform="rotate(-90 63.431 636.454)" fill="#9198A0"/>
    <ellipse cx="63.431" cy="412.3" rx="1.69607" ry="1.69666" transform="rotate(-90 63.431 412.3)" fill="#9198A0"/>
    <ellipse cx="63.431" cy="599.142" rx="1.69607" ry="1.69666" transform="rotate(-90 63.431 599.142)" fill="#9198A0"/>
    <ellipse cx="63.431" cy="374.988" rx="1.69607" ry="1.69666" transform="rotate(-90 63.431 374.988)" fill="#9198A0"/>
    <ellipse cx="63.431" cy="561.827" rx="1.69607" ry="1.69666" transform="rotate(-90 63.431 561.827)" fill="#9198A0"/>
    <ellipse cx="63.431" cy="337.673" rx="1.69607" ry="1.69666" transform="rotate(-90 63.431 337.673)" fill="#9198A0"/>
    <ellipse cx="63.431" cy="524.515" rx="1.69607" ry="1.69666" transform="rotate(-90 63.431 524.515)" fill="#9198A0"/>
    <ellipse cx="63.431" cy="300.361" rx="1.69607" ry="1.69666" transform="rotate(-90 63.431 300.361)" fill="#9198A0"/>
    <ellipse cx="63.431" cy="487.2" rx="1.69607" ry="1.69666" transform="rotate(-90 63.431 487.2)" fill="#9198A0"/>
    <ellipse cx="63.431" cy="263.046" rx="1.69607" ry="1.69666" transform="rotate(-90 63.431 263.046)" fill="#9198A0"/>
    <ellipse cx="63.431" cy="225.734" rx="1.69607" ry="1.69666" transform="rotate(-90 63.431 225.734)" fill="#9198A0"/>
    <ellipse cx="63.431" cy="188.419" rx="1.69607" ry="1.69666" transform="rotate(-90 63.431 188.419)" fill="#9198A0"/>
    <ellipse cx="63.431" cy="151.107" rx="1.69607" ry="1.69666" transform="rotate(-90 63.431 151.107)" fill="#9198A0"/>
    <ellipse cx="63.431" cy="113.792" rx="1.69607" ry="1.69666" transform="rotate(-90 63.431 113.792)" fill="#9198A0"/>
    <ellipse cx="63.431" cy="76.4797" rx="1.69607" ry="1.69666" transform="rotate(-90 63.431 76.4797)" fill="#9198A0"/>
    <ellipse cx="63.431" cy="39.1653" rx="1.69607" ry="1.69666" transform="rotate(-90 63.431 39.1653)" fill="#9198A0"/>
    <ellipse cx="63.431" cy="1.85276" rx="1.69607" ry="1.69666" transform="rotate(-90 63.431 1.85276)" fill="#9198A0"/>
    <ellipse cx="100.798" cy="449.613" rx="1.69607" ry="1.69666" transform="rotate(-90 100.798 449.613)" fill="#9198A0"/>
    <ellipse cx="100.798" cy="636.454" rx="1.69607" ry="1.69666" transform="rotate(-90 100.798 636.454)" fill="#9198A0"/>
    <ellipse cx="100.798" cy="412.3" rx="1.69607" ry="1.69666" transform="rotate(-90 100.798 412.3)" fill="#9198A0"/>
    <ellipse cx="100.798" cy="599.142" rx="1.69607" ry="1.69666" transform="rotate(-90 100.798 599.142)" fill="#9198A0"/>
    <ellipse cx="100.798" cy="374.988" rx="1.69607" ry="1.69666" transform="rotate(-90 100.798 374.988)" fill="#9198A0"/>
    <ellipse cx="100.798" cy="561.827" rx="1.69607" ry="1.69666" transform="rotate(-90 100.798 561.827)" fill="#9198A0"/>
    <ellipse cx="100.798" cy="337.673" rx="1.69607" ry="1.69666" transform="rotate(-90 100.798 337.673)" fill="#9198A0"/>
    <ellipse cx="100.798" cy="524.515" rx="1.69607" ry="1.69666" transform="rotate(-90 100.798 524.515)" fill="#9198A0"/>
    <ellipse cx="100.798" cy="300.361" rx="1.69607" ry="1.69666" transform="rotate(-90 100.798 300.361)" fill="#9198A0"/>
    <ellipse cx="100.798" cy="487.2" rx="1.69607" ry="1.69666" transform="rotate(-90 100.798 487.2)" fill="#9198A0"/>
    <ellipse cx="100.798" cy="263.046" rx="1.69607" ry="1.69666" transform="rotate(-90 100.798 263.046)" fill="#9198A0"/>
    <ellipse cx="100.798" cy="225.734" rx="1.69607" ry="1.69666" transform="rotate(-90 100.798 225.734)" fill="#9198A0"/>
    <ellipse cx="100.798" cy="188.419" rx="1.69607" ry="1.69666" transform="rotate(-90 100.798 188.419)" fill="#9198A0"/>
    <ellipse cx="100.798" cy="151.107" rx="1.69607" ry="1.69666" transform="rotate(-90 100.798 151.107)" fill="#9198A0"/>
    <ellipse cx="100.798" cy="113.792" rx="1.69607" ry="1.69666" transform="rotate(-90 100.798 113.792)" fill="#9198A0"/>
    <ellipse cx="100.798" cy="76.4797" rx="1.69607" ry="1.69666" transform="rotate(-90 100.798 76.4797)" fill="#9198A0"/>
    <ellipse cx="100.798" cy="39.1653" rx="1.69607" ry="1.69666" transform="rotate(-90 100.798 39.1653)" fill="#9198A0"/>
    <ellipse cx="100.798" cy="1.85276" rx="1.69607" ry="1.69666" transform="rotate(-90 100.798 1.85276)" fill="#9198A0"/>
</svg> 
    </div>
    <div class="case-more__content _container">
        <h2 class="case-more__title _title">
            Смотреть еще
        </h2>
        <ul class="case-more__items">
            <?php
                // Аргументы для запроса похожих записей
                $related_args = array(
                    'post_type' => 'case', // Замените 'your_custom_post_type' на ваш тип записи
                    'posts_per_page' => 5, // Количество похожих записей для вывода
                    'post__not_in' => array(get_the_ID()), // Исключаем текущую запись
                    'orderby' => 'rand', // Случайный порядок
                );

                // Создаем запрос
                $related_query = new WP_Query($related_args);

                // Проверяем наличие похожих записей
                if ($related_query->have_posts()) {
                    $count = 0;
                    while ($related_query->have_posts()) {
                        $related_query->the_post();
                        $count++;
            ?>
            <li class="case-more__item">
                <a href="<?php echo get_the_permalink(); ?>">
                    <div class="case-more__info">
                        <p class="case-more__number">0<?php echo $count; ?></p>
                        <div class="case-more__details">
                            <h4 class="case-more__text"><?php echo get_the_title(); ?></h4>
                            <p class="case-more__link">
                                Подробнее
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_470_15083)">
                                    <path d="M9 5.01246C9 4.11226 10.0766 3.66144 10.7062 4.29798L13.8016 7.4273C15.9339 9.58289 17 10.6607 17 12C17 13.3393 15.9339 14.4171 13.8016 16.5727L10.7062 19.702C10.0766 20.3386 9 19.8877 9 18.9875C9 18.7196 9.1053 18.4625 9.29274 18.2731L12.3882 15.1437C13.4942 14.0255 14.1786 13.3276 14.6112 12.7544C15.0016 12.2371 15.0012 12.0565 15.001 12.0028L15.001 12L15.001 11.9973C15.0012 11.9435 15.0016 11.7629 14.6112 11.2456C14.1786 10.6724 13.4942 9.97446 12.3882 8.85627L9.29274 5.72695C9.1053 5.53745 9 5.28044 9 5.01246Z" fill="white"/>
                                    <path d="M9 5.01246C9 4.11226 10.0766 3.66144 10.7062 4.29798L13.8016 7.4273C15.9339 9.58289 17 10.6607 17 12C17 13.3393 15.9339 14.4171 13.8016 16.5727L10.7062 19.702C10.0766 20.3386 9 19.8877 9 18.9875C9 18.7196 9.1053 18.4625 9.29274 18.2731L12.3882 15.1437C13.4942 14.0255 14.1786 13.3276 14.6112 12.7544C15.0016 12.2371 15.0012 12.0565 15.001 12.0028L15.001 12L15.001 11.9973C15.0012 11.9435 15.0016 11.7629 14.6112 11.2456C14.1786 10.6724 13.4942 9.97446 12.3882 8.85627L9.29274 5.72695C9.1053 5.53745 9 5.28044 9 5.01246Z" stroke="white"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_470_15083">
                                    <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>     
                            </p>
                        </div>
                        <div class="case-more__user">
                            <div class="case-more__user-avatar">
                                <img src="<?php echo get_field('more_icone'); ?>" alt="avatar-image">
                            </div>
                            <div class="case-more__user-info">
                                <p class="case-more__user-name"><?php echo get_field('more_title'); ?></p>
                                <p class="case-more__user-description"><?php echo get_field('more_text'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="case-more__img">
                        <img src="<?php echo get_field('more_img') ?>" alt="case-more-item">
                    </div>
                </a>
            </li>
            <?php } wp_reset_postdata(); } ?>
        </ul>
    </div>
</section>
            <section class="quote _grey-section _relative">
    <div class="_container">
        <div class="quote__content _grey-section__content">
            <svg width="126" height="125" viewBox="0 0 126 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.8" d="M28.9 67.297C28.9 79.197 19.318 88.829 7.482 88.829V115.461C33.972 115.461 55.391 93.929 55.391 67.297V1H1V61.63H28.9V67.297ZM98.51 67.297C98.51 79.197 88.927 88.829 77.09 88.829V115.462C103.582 115.462 125 93.929 125 67.297V1H70.61V61.63H98.51V67.297Z" stroke="white" stroke-opacity="0.15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div class="quote__info">
                <p class="quote__text">
                    <?php echo get_field('comment'); ?>
                </p>
                <div class="quote__user">
                    <div class="quote__user-avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/quote-user-avatar.png" alt="quote-user-avatar" />
                    </div>
                    <div class="quote__user-info">
                        <p class="quote__user-name">Руслан Ложкин</p>
                        <p class="quote__user-description">Руководитель службы информационной безопасности АКБ « Россельхозбанк»</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            <section class="project-call _grey-section">
    <div class="project-call__content _container">
        <form class="project-call__form" data-contact-form="project-call">
            <h3 class="project-call__title _title">Реализуем ваш проект</h3>
            <p class="project-call__text">Оставьте заявку, и мы свяжемся в течение рабочего дня.</p>
            <div class="project-call__row">
                <input 
                    type="tel" 
                    class="project-call__input _input" 
                    placeholder="Номер телефона"
                    data-required=""
                    data-input-required="project-call"
                />
                <button disabled class="project-call__submit _button _button-orange _text-medium" type="submit">Оставить заявку</button>
            </div>
            <label class="project-call__checkbox _checkbox">
                <input type="checkbox" hidden checked data-input-required="project-call" />
                <div class="project-call__box _checkbox-box">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7071 6.65422C20.0976 7.04475 20.0976 7.67791 19.7071 8.06843L10.7071 17.0684C10.3166 17.459 9.68342 17.459 9.29289 17.0684L4.29289 12.0684C3.90237 11.6779 3.90237 11.0447 4.29289 10.6542C4.68342 10.2637 5.31658 10.2637 5.70711 10.6542L10 14.9471L18.2929 6.65422C18.6834 6.2637 19.3166 6.2637 19.7071 6.65422Z" fill="white"/>
                    </svg>                            
                </div>
                <p class="project-call__text-checkbox _checkbox-text">
                    Я выражаю свое согласие на 
                    <a href="#" target="_blank" class="_text-orange">
                        обработку персональных данных
                    </a>
                </p>
            </label>
        </form>
        <img 
            src="<?php echo get_template_directory_uri(); ?>/img/project-call-bg.png" 
            alt="project-call-bg" 
            class="project-call__bg" 
        />
        <img 
        src="<?php echo get_template_directory_uri(); ?>/img/project-call-bg-gradient.png" 
        alt="project-call-bg-gradient" 
        class="project-call__bg-gradient" 
    />
    </div>
</section>
            <?php get_template_part('inc/contact-form'); ?>
        </main>
<?php get_footer(); ?>
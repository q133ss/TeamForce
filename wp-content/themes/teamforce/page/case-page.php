<?php
/* Template Name: Кейсы */
get_header();
?>
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
                    <li class="breadcrumbs__item last">
                        <a href="/cases-own.html" class="breadcrumbs__link">Кейсы</a>
                    </li>
                    <li class="breadcrumbs__item last">
                        <a class="breadcrumbs__link breadcrumbs__link-marked">Собственная разработка</a>
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
            <section class="cases _grey-section">
    <img src="<?php echo get_template_directory_uri(); ?>/img/products-top-bg.png" alt="products-top-bg" class="products__bg" />
    <div class="_container">
        <div class="cases__content _grey-section__content">
            <h2 class="cases__title _grey-section__title">
                Кейсы
            </h2>
            <ul class="cases__row">
                <?php
                $firstArgs = array(
                    'post_type' => 'case', // Тип записи
                    'posts_per_page' => 1,
                    'orderby' => 'post_date',
                    'order' => 'ASC',
                    'meta_query' => array(
                        array(
                            'key' => 'category', // Имя поля ACF
                            'value' => '1', // Значение поля ACF, которое вы ищете
                            'compare' => '=', // Оператор сравнения
                            'type' => 'NUMERIC', // Тип значения (NUMERIC, BINARY, CHAR, DATE, DATETIME, DECIMAL, SIGNED, TIME, UNSIGNED)
                        ),
                    ),
                );
    
                $caseFirstQuery = new WP_Query($firstArgs);
                if ($caseFirstQuery->have_posts()) {
                    while ($caseFirstQuery->have_posts()) {
                        $caseFirstQuery->the_post();
                ?>
                <li class="cases__item cases__item-big cases__item-tall">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <div class="cases__item-info">
                            <h4 class="cases__item-title"><?php echo get_the_title(); ?></h4>
                            <p class="cases__item-text">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                            <p class="cases__item-link">
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
                        <div class="cases__item-image cases__item-image-own-first">
                            <img src="<?php echo get_field('list_img'); ?>" alt="dig-ref-project" />
                        </div>
                    </a>
                </li>
                <?php
                    }
                    wp_reset_postdata();
                }
                ?>
            </ul>
            <ul class="cases__row">

            <?php
                $allArgs = array(
                    'post_type' => 'case', // Тип записи
                    'posts_per_page' => -1,
                    'orderby' => 'post_date',
                    'order' => 'ASC',
                    'meta_query' => array(
                        array(
                            'key' => 'category', // Имя поля ACF
                            'value' => '1', // Значение поля ACF, которое вы ищете
                            'compare' => '=', // Оператор сравнения
                            'type' => 'NUMERIC', // Тип значения (NUMERIC, BINARY, CHAR, DATE, DATETIME, DECIMAL, SIGNED, TIME, UNSIGNED)
                        ),
                    ),
                );
    
                $caseAllQuery = new WP_Query($allArgs);
                $count = 0;
                if ($caseAllQuery->have_posts()) {
                    $total_posts = $caseAllQuery->found_posts;
                    while ($caseAllQuery->have_posts()) {
                        $caseAllQuery->the_post();
                        if ($caseAllQuery->current_post > 0 && $caseAllQuery->current_post < $total_posts - 1) {
                            if($count % 2){
            ?>

                <li class="cases__item cases__item-medium cases__item-orange cases__item-tall">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <div class="cases__item-info">
                            <h4 class="cases__item-title"><?php echo get_the_title(); ?></h4>
                            <p class="cases__item-text">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                            <p class="cases__item-link">
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
                        <div class="cases__item-image _grayscale _luminosity">
                            <!-- /img/smart-sap-project.png -->
                            <img src="<?php echo get_field('list_img'); ?>" alt="smart-sap-project" />
                        </div>
                    </a>
                </li>
                <?php }else{ ?>
                <li class="cases__item cases__item-small cases__item-tall">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <div class="cases__item-info">
                            <h4 class="cases__item-title"><?php echo get_the_title(); ?></h4>
                            <p class="cases__item-text">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                            <p class="cases__item-link">
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
                        <div class="cases__item-image _grayscale">
                            <!-- /img/skills-cloud-project.png -->
                            <img src="<?php echo get_field('list_img'); ?>" alt="skills-cloud-project" />
                        </div>
                    </a>
                </li>
                <?php
                            }
                            $count++;
                        }
                    }
                    wp_reset_postdata();
                }
                ?>
            </ul>
            <ul class="cases__row cases__row--mobile-reverse">
                <li class="cases__item cases__item-mini cases__item-orange-mobile">
                    <a href="<?php echo get_page_link(36); ?>">
                        <div class="cases__item-info">
                            <h4 class="cases__item-title">Заказная <br /> разработка</h4>
                            <p class="cases__item-link">
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
                        <div class="cases__item-image _grayscale">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/cases-own-image-link.png" alt="cases-own-image-link" />
                        </div> 
                    </a>
                </li>

                <?php
                $lastArgs = array(
                    'post_type' => 'case', // Тип записи
                    'posts_per_page' => 1,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'meta_query' => array(
                        array(
                            'key' => 'category', // Имя поля ACF
                            'value' => '1', // Значение поля ACF, которое вы ищете
                            'compare' => '=', // Оператор сравнения
                            'type' => 'NUMERIC', // Тип значения (NUMERIC, BINARY, CHAR, DATE, DATETIME, DECIMAL, SIGNED, TIME, UNSIGNED)
                        ),
                    ),
                );
    
                $caseLastQuery = new WP_Query($lastArgs);
                if ($caseLastQuery->have_posts()) {
                while ($caseLastQuery->have_posts()) {
                    $caseLastQuery->the_post();
                ?>
                <li class="cases__item cases__item-medium cases__item-white">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <div class="cases__item-info">
                            <h4 class="cases__item-title"><?php echo get_the_title(); ?></h4>
                            <p class="cases__item-text">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                            <p class="cases__item-link">
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
                        <div class="cases__item-image _grayscale">
                        <!-- /img/thousand-juns-project.png -->
                            <img src="<?php echo get_template_directory_uri(); ?>/img/thousand-juns-project.png" alt="thousand-juns-project" />
                        </div>
                    </a>
                </li>
                <?php
                    }
                    wp_reset_postdata();
                }
                ?>
            </ul>
        </div>
    </div>
    <svg class="cases__dots" width="63" height="638" viewBox="0 0 63 638" fill="none" xmlns="http://www.w3.org/2000/svg">
        <ellipse cx="1.69666" cy="449.456" rx="1.69607" ry="1.69666" transform="rotate(-90 1.69666 449.456)" fill="#9198A0"/>
        <ellipse cx="1.69666" cy="636.296" rx="1.69607" ry="1.69666" transform="rotate(-90 1.69666 636.296)" fill="#9198A0"/>
        <ellipse cx="1.69666" cy="412.144" rx="1.69607" ry="1.69666" transform="rotate(-90 1.69666 412.144)" fill="#9198A0"/>
        <ellipse cx="1.69666" cy="598.984" rx="1.69607" ry="1.69666" transform="rotate(-90 1.69666 598.984)" fill="#9198A0"/>
        <ellipse cx="1.69666" cy="374.831" rx="1.69607" ry="1.69666" transform="rotate(-90 1.69666 374.831)" fill="#9198A0"/>
        <ellipse cx="1.69666" cy="561.671" rx="1.69607" ry="1.69666" transform="rotate(-90 1.69666 561.671)" fill="#9198A0"/>
        <ellipse cx="1.69666" cy="337.515" rx="1.69607" ry="1.69666" transform="rotate(-90 1.69666 337.515)" fill="#9198A0"/>
        <ellipse cx="1.69666" cy="524.359" rx="1.69607" ry="1.69666" transform="rotate(-90 1.69666 524.359)" fill="#9198A0"/>
        <ellipse cx="1.69666" cy="300.202" rx="1.69607" ry="1.69666" transform="rotate(-90 1.69666 300.202)" fill="#9198A0"/>
        <ellipse cx="1.69666" cy="487.042" rx="1.69607" ry="1.69666" transform="rotate(-90 1.69666 487.042)" fill="#9198A0"/>
        <ellipse cx="1.69666" cy="262.89" rx="1.69607" ry="1.69666" transform="rotate(-90 1.69666 262.89)" fill="#9198A0"/>
        <ellipse cx="1.69666" cy="225.577" rx="1.69607" ry="1.69666" transform="rotate(-90 1.69666 225.577)" fill="#9198A0"/>
        <ellipse cx="1.69666" cy="188.261" rx="1.69607" ry="1.69666" transform="rotate(-90 1.69666 188.261)" fill="#9198A0"/>
        <ellipse cx="1.69666" cy="150.948" rx="1.69607" ry="1.69666" transform="rotate(-90 1.69666 150.948)" fill="#9198A0"/>
        <ellipse cx="1.69666" cy="113.636" rx="1.69607" ry="1.69666" transform="rotate(-90 1.69666 113.636)" fill="#9198A0"/>
        <ellipse cx="1.69666" cy="76.3235" rx="1.69607" ry="1.69666" transform="rotate(-90 1.69666 76.3235)" fill="#9198A0"/>
        <ellipse cx="1.69666" cy="39.0071" rx="1.69607" ry="1.69666" transform="rotate(-90 1.69666 39.0071)" fill="#9198A0"/>
        <ellipse cx="1.69666" cy="1.69456" rx="1.69607" ry="1.69666" transform="rotate(-90 1.69666 1.69456)" fill="#9198A0"/>
        <ellipse cx="39.0228" cy="449.456" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0228 449.456)" fill="#9198A0"/>
        <ellipse cx="39.0228" cy="636.296" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0228 636.296)" fill="#9198A0"/>
        <ellipse cx="39.0228" cy="412.144" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0228 412.144)" fill="#9198A0"/>
        <ellipse cx="39.0228" cy="598.984" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0228 598.984)" fill="#9198A0"/>
        <ellipse cx="39.0228" cy="374.831" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0228 374.831)" fill="#9198A0"/>
        <ellipse cx="39.0228" cy="561.671" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0228 561.671)" fill="#9198A0"/>
        <ellipse cx="39.0228" cy="337.515" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0228 337.515)" fill="#9198A0"/>
        <ellipse cx="39.0228" cy="524.359" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0228 524.359)" fill="#9198A0"/>
        <ellipse cx="39.0228" cy="300.202" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0228 300.202)" fill="#9198A0"/>
        <ellipse cx="39.0228" cy="487.042" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0228 487.042)" fill="#9198A0"/>
        <ellipse cx="39.0228" cy="262.89" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0228 262.89)" fill="#9198A0"/>
        <ellipse cx="39.0228" cy="225.577" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0228 225.577)" fill="#9198A0"/>
        <ellipse cx="39.0228" cy="188.261" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0228 188.261)" fill="#9198A0"/>
        <ellipse cx="39.0228" cy="150.948" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0228 150.948)" fill="#9198A0"/>
        <ellipse cx="39.0228" cy="113.636" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0228 113.636)" fill="#9198A0"/>
        <ellipse cx="39.0228" cy="76.3235" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0228 76.3235)" fill="#9198A0"/>
        <ellipse cx="39.0228" cy="39.0071" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0228 39.0071)" fill="#9198A0"/>
        <ellipse cx="39.0228" cy="1.69456" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0228 1.69456)" fill="#9198A0"/>
        </svg>
        
</section>
            <?php get_template_part('inc/contact-form'); ?>
        </main>
<?php
	get_footer();
?>
<?php
/* Template Name: Главная */
get_header();
?>

<img 
    src="<?php echo get_template_directory_uri(); ?>/img/header-bg.png" 
    alt="header-bg" 
    class="header__bg" 
/>


        <main class="main" id="main">
            <section class="initial">
    <div class="initial__content">
        <div class="initial__info _container">
            <div class="initial__info-left">
                <h1 class="initial__info-title">
                    <span class="_text-orange">Команды</span> 
                    <br />
                    и open source 
                </h1>
                <p class="initial__info-text">15 лет объединяем ИТ-МСП для цифровизации крупного бизнеса</p>
                <div class="initial__info-buttons">
                    <button class="initial__info-button _button-orange-border" data-modal-button="modal-enter">
                        <span>Вступить в альянс</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_1052)">
                            <path d="M3 13.0001C2.44772 13.0001 2 12.5524 2 12.0001C2 11.4478 2.44771 11.0001 3 11.0001L18.1486 11C17.2671 10.2871 15.8853 9.46331 13.8246 8.22689L12.0581 7.16701C11.863 7.04998 11.6743 6.93679 11.4916 6.8274L11.4834 6.82251C11.1839 6.64175 11.0015 6.31985 11.0002 5.97005L11.0002 5.96156C11.0002 5.9617 11.0002 5.96194 11.0002 5.95873C11.0045 5.38364 11.4828 5.00397 12 5.00003C12.4259 4.99679 12.7353 5.24095 13.0871 5.45202L14.8536 6.5119L14.9318 6.55885C18.9645 8.97838 21 10.1996 21 11.9999C21 13.8001 18.9645 15.0213 14.9318 17.4409L14.8536 17.4878L13.0871 18.5477C12.7355 18.7586 12.4256 19.0033 12 19C11.4828 18.9961 11.0045 18.6161 11.0002 18.041C11.0002 18.0375 11.0002 18.0381 11.0002 18.0382L11.0002 18.0296C11.0015 17.6799 11.1839 17.358 11.4834 17.1772L11.4916 17.1723C11.6743 17.0629 11.863 16.9497 12.0581 16.8327L13.8246 15.7728C15.8849 14.5366 17.2666 13.7129 18.1482 13L3 13.0001Z" fill="#F15A29"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_1_1052">
                            <rect width="24" height="24" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>                            
                    </button>
                    <a href="#" class="initial__info-button">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2941 18.874L17.1302 18.3723C18.535 17.5295 19.4523 16.9825 20.0265 16.5106C20.3008 16.2852 20.422 16.1375 20.4732 16.0557C20.5055 16.004 20.5055 15.9959 20.4732 15.9442C20.422 15.8624 20.3008 15.7147 20.0265 15.4893C19.4523 15.0174 18.535 14.4704 17.1302 13.6276L16.2941 13.1259C14.9077 12.294 14.0058 11.7623 13.3349 11.4841C13.0086 11.3488 12.837 11.3173 12.7597 11.3129C12.7237 11.3815 12.6624 11.5447 12.6106 11.8942C12.504 12.6127 12.5 13.6528 12.5 15.2697L12.5 16.7303C12.5 18.3471 12.504 19.3872 12.6106 20.1057C12.6624 20.4552 12.7237 20.6184 12.7597 20.687C12.837 20.6826 13.0086 20.6512 13.3349 20.5158C14.0058 20.2376 14.9077 19.7059 16.2941 18.874ZM22 15.9999C22 14.7921 20.625 13.9752 17.9019 12.3413L17.0659 11.8397C14.38 10.2282 13.0292 9.42242 12.0146 9.99688C11 10.5713 11 12.1374 11 15.2697V16.7303C11 19.8625 11 21.4286 12.0146 22.003C13.0292 22.5775 14.38 21.7717 17.0659 20.1602L17.9019 19.6586C20.625 18.0247 22 17.2078 22 15.9999Z" fill="white"/>
                        </svg>                            
                        <span>Презентация</span>
                    </a>
                </div>
            </div>
            <ul class="initial__info-pages" data-scrollbar="">
                <?php
                    $menu_name = 'MainMenu'; // Замените на фактическое название вашего меню

                    $menu_object = wp_get_nav_menu_object($menu_name);

                    if ($menu_object) {
                        $menu_items = wp_get_nav_menu_items($menu_object->term_id);

                        if ($menu_items) {

                    // Перебор элементов меню
                    foreach ($menu_items as $menu_item) {
                ?>
                <li class="initial__info-page">
                    <a href="<?php echo esc_url($menu_item->url); ?>" class="initial__info-link">
                        <?php echo esc_html($menu_item->title); ?>
                    </a>
                </li>
                <?php       }
                        }
                    }
                ?>
            </ul>
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/main-page-initial-bg.png" 
                alt="main-page-initial-bg" 
                class="initial__bg" 
            />
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/main-page-initial-bg-mobile.png" 
                alt="main-page-initial-bg" 
                class="initial__bg-mobile" 
            />
        </div>
        <div class="initial__partners">
            <ul class="initial__partners-items">
                <li class="initial__partners-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner-img-1.svg" alt="partner-img-1">
                </li>
                <li class="initial__partners-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner-img-2.svg" alt="partner-img-2">
                </li>
                <li class="initial__partners-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner-img-3.svg" alt="partner-img-3">
                </li>
                <li class="initial__partners-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner-img-4.svg" alt="partner-img-4">
                </li>
                <li class="initial__partners-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner-img-5.svg" alt="partner-img-5">
                </li>
                <li class="initial__partners-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner-img-6.svg" alt="partner-img-6">
                </li>
                <li class="initial__partners-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner-img-7.svg" alt="partner-img-7">
                </li>
                <li class="initial__partners-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner-img-8.svg" alt="partner-img-8">
                </li>
                <li class="initial__partners-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner-img-9.svg" alt="partner-img-9">
                </li>
            </ul>
            <ul class="initial__partners-items">
                <li class="initial__partners-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner-img-1.svg" alt="partner-img-1">
                </li>
                <li class="initial__partners-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner-img-2.svg" alt="partner-img-2">
                </li>
                <li class="initial__partners-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner-img-3.svg" alt="partner-img-3">
                </li>
                <li class="initial__partners-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner-img-4.svg" alt="partner-img-4">
                </li>
                <li class="initial__partners-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner-img-5.svg" alt="partner-img-5">
                </li>
                <li class="initial__partners-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner-img-6.svg" alt="partner-img-6">
                </li>
                <li class="initial__partners-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner-img-7.svg" alt="partner-img-7">
                </li>
                <li class="initial__partners-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner-img-8.svg" alt="partner-img-8">
                </li>
                <li class="initial__partners-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner-img-9.svg" alt="partner-img-9">
                </li>
            </ul>
        </div>
        <div class="_container">
            <button class="initial__enter _button-orange-border" data-modal-button="modal-enter">
                Вступить в альянс
            </button>
        </div>
    </div>
</section>
<?php get_template_part('inc/contact-form'); ?>
        </main>

    <?php echo get_footer(); ?>
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TeamForce
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://api-maps.yandex.ru/v3/?apikey=a85e20e4-dff9-4a7e-a40f-2fad4d25d3f6&lang=ru_RU"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-page="<?php echo is_front_page() ? 'main-page' : get_post_field('post_name', get_post()); ?>">
<?php wp_body_open(); ?>
<div class="wrapper">

	<header class="header">
    <div class="header__content _container">
        <div class="header__top">
            <a href="/" class="header__logo _logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/tf-logo.png" alt="tf-logo" />

                <svg class="_mobile-logo" width="30" height="21" viewBox="0 0 30 21" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M29.05 1V0.95H29H1H0.95V1V6.77778V6.82778H1H29H29.05V6.77778V1ZM7.12916 8.17222H7.07916V8.22222V20V20.05H7.12916H13.7255H13.7755V20V8.22222V8.17222H13.7255H7.12916ZM15.5036 20V20.05H15.5536H22.1499H22.1999V20V14.05H29H29.05V14V8.22222V8.17222H29H15.5536H15.5036V8.22222V20Z" fill="white" stroke="white" stroke-width="0.1"/>
</svg>
    
            </a>
            <div class="header__buttons">
                <a href="#contactForm" data-anchor-scroll="" class="header__buttons-item _button-blur">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_462_10216)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.0008 5.33398C13.9343 5.33398 12.131 5.42417 10.5938 5.55763C7.8947 5.79198 6.54514 5.90916 4.82598 7.63421C3.10683 9.35925 2.99896 10.653 2.78323 13.2404C2.71108 14.1057 2.66699 15.0312 2.66699 16.0007C2.66699 16.9702 2.71109 17.8957 2.78325 18.7611C2.99898 21.3485 3.10685 22.6421 4.82598 24.3672C6.5451 26.0922 7.89461 26.2094 10.5936 26.4437C12.1308 26.5772 13.9342 26.6674 16.0008 26.6674C18.0667 26.6674 19.8696 26.5773 21.4066 26.4439C24.1068 26.2095 25.4568 26.0923 27.1761 24.367C28.8954 22.6416 29.0031 21.3473 29.2186 18.7587C29.2906 17.894 29.3346 16.9693 29.3346 16.0007C29.3346 15.0322 29.2906 14.1076 29.2186 13.2429C29.0031 10.6541 28.8954 9.35973 27.1761 7.63438C25.4568 5.90903 24.1066 5.79185 21.4063 5.55749C19.8694 5.42411 18.0666 5.33398 16.0008 5.33398ZM10.8245 8.2143C12.2856 8.08744 14.012 8.00065 16.0008 8.00065C17.9889 8.00065 19.7148 8.08738 21.1757 8.21417C22.6145 8.33903 23.3124 8.41222 23.8738 8.58522C24.2903 8.71357 24.6906 8.918 25.2872 9.51668C25.671 9.90186 25.8918 10.2008 26.0326 10.4653C25.7388 10.6864 25.3889 10.9339 24.9426 11.2491C24.3038 11.7002 23.615 12.1533 22.894 12.5794C22.2529 12.9582 21.5701 13.3252 20.8795 13.6725C18.2576 14.991 17.5006 15.3305 16.0006 15.3305C14.5006 15.3305 13.7436 14.991 11.1217 13.6725C10.4311 13.3252 9.74834 12.9582 9.10722 12.5794C8.3862 12.1533 7.69746 11.7002 7.05863 11.2491C6.61249 10.9341 6.26274 10.6867 5.96908 10.4656C6.10984 10.2011 6.33067 9.90206 6.71482 9.51659C7.31144 8.91793 7.71168 8.71355 8.12788 8.58527C8.68896 8.41233 9.38637 8.33917 10.8245 8.2143ZM5.44785 13.3761C5.44548 13.4044 5.44309 13.433 5.44068 13.4619C5.3741 14.2604 5.33366 15.1117 5.33366 16.0007C5.33366 16.8897 5.37411 17.741 5.44069 18.5395C5.55597 19.9221 5.62318 20.5694 5.7867 21.094C5.90642 21.4781 6.10449 21.8723 6.71482 22.4848C7.31145 23.0834 7.71167 23.2878 8.12784 23.4161C8.68888 23.589 9.38625 23.6622 10.8243 23.7871C12.2855 23.914 14.0119 24.0008 16.0008 24.0008C17.9891 24.0008 19.715 23.914 21.176 23.7872C22.6146 23.6623 23.3125 23.5891 23.8738 23.4161C24.2903 23.2878 24.6906 23.0834 25.2872 22.4847C25.8974 21.8723 26.0955 21.4779 26.2153 21.0934C26.3788 20.5684 26.446 19.9206 26.5612 18.5374C26.6276 17.7395 26.6679 16.889 26.6679 16.0007C26.6679 15.1125 26.6276 14.262 26.5612 13.4641C26.5587 13.4344 26.5562 13.4049 26.5538 13.3758L26.4808 13.4274C25.7925 13.9134 25.043 14.4069 24.2506 14.8752C23.5471 15.2909 22.8098 15.6867 22.0776 16.0549C19.5027 17.3497 18.2152 17.9971 16.0006 17.9971C13.786 17.9971 12.4986 17.3497 9.92365 16.0549C9.19146 15.6867 8.45416 15.2909 7.75061 14.8752C6.95824 14.4069 6.20867 13.9134 5.52042 13.4274L5.44785 13.3761Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_462_10216">
                        <rect width="32" height="32" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>                        
                    <span>Связаться с нами</span>
                </a>
                <button class="header__buttons-item _button-blur _menu-button" data-menu-button="">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7 9C7 7.89543 7.89543 7 9 7C10.1046 7 11 7.89543 11 9C11 10.1046 10.1046 11 9 11C7.89543 11 7 10.1046 7 9ZM7 16C7 14.8954 7.89543 14 9 14C10.1046 14 11 14.8954 11 16C11 17.1046 10.1046 18 9 18C7.89543 18 7 17.1046 7 16ZM16 7C14.8954 7 14 7.89543 14 9C14 10.1046 14.8954 11 16 11C17.1046 11 18 10.1046 18 9C18 7.89543 17.1046 7 16 7ZM14 16C14 14.8954 14.8954 14 16 14C17.1046 14 18 14.8954 18 16C18 17.1046 17.1046 18 16 18C14.8954 18 14 17.1046 14 16ZM23 7C21.8954 7 21 7.89543 21 9C21 10.1046 21.8954 11 23 11C24.1046 11 25 10.1046 25 9C25 7.89543 24.1046 7 23 7ZM21 16C21 14.8954 21.8954 14 23 14C24.1046 14 25 14.8954 25 16C25 17.1046 24.1046 18 23 18C21.8954 18 21 17.1046 21 16ZM9 21C7.89543 21 7 21.8954 7 23C7 24.1046 7.89543 25 9 25C10.1046 25 11 24.1046 11 23C11 21.8954 10.1046 21 9 21ZM14 23C14 21.8954 14.8954 21 16 21C17.1046 21 18 21.8954 18 23C18 24.1046 17.1046 25 16 25C14.8954 25 14 24.1046 14 23ZM23 21C21.8954 21 21 21.8954 21 23C21 24.1046 21.8954 25 23 25C24.1046 25 25 24.1046 25 23C25 21.8954 24.1046 21 23 21Z" fill="white"/>
                    </svg>                        
                </button>
            </div>
        </div>
        <div class="header__bot">
            <nav class="header__nav">
                <ul class="header__nav-items">
                    <li class="header__nav-item">
                        <a href="/services.html" class="header__nav-link" data-page-link="smart-staffing">СмартСтаффинг</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="/tfa-showcase.html" class="header__nav-link" data-page-link="tfa-showcase">Цифровизация</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="/about-us.html" class="header__nav-link" data-page-link="open-source">Open Source</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="/alliance.html" class="header__nav-link" data-page-link="alliance">Альянс</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="/alliance.html#investitions" class="header__nav-link" data-page-link="alliance">Фонд</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="/about-us.html" class="header__nav-link" data-page-link="about-us">О нас</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <nav class="header__menu">
        <div class="header__menu-content">
            <div class="header__menu-col">
                <a href="/products.html" class="header__menu-title">Продукты</a>
                <ul class="header__menu-items">
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">
                            ТИМФОРС 360
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">
                            B2BCLOUD
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">
                            ALLIANCERP
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">
                            FinAxio
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">
                            Imaginarium
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">
                            Incommand
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">
                            НОТА
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">
                            Финейтив
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">
                            Енисей
                        </a>
                    </li>
                </ul>
            </div>
            <div class="header__menu-col">
                <a href="/services.html" class="header__menu-title">Сервисы</a>
                <ul class="header__menu-items">
                    <li class="header__menu-item">
                        <a href="/project-center.html" class="header__menu-link">
                            Проектный центр
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="/resource-center.html" class="header__menu-link">
                            Ресурсный центр
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">
                            Внедрение решений партнеров
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">
                            Бизнес-консалтинг
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="/education-center.html" class="header__menu-link">
                            Образовательный центр
                        </a>
                    </li>
                </ul>
            </div>
            <div class="header__menu-col">
                <a href="/about-us.html" class="header__menu-title">О нас</a>
                <ul class="header__menu-items">
                    <li class="header__menu-item">
                        <a href="/mission.html" class="header__menu-link">
                            Миссия и ценности
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="/codex.html" class="header__menu-link">
                            Кодекс
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">
                            Штаб квартира
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="/welcome-book.html" class="header__menu-link">
                            Welcomebook
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="/revards.html" class="header__menu-link">
                            Награды и достижения
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="/licences.html" class="header__menu-link">
                            Лицензии и сертификаты
                        </a>
                    </li>
                    </li>
                    <li class="header__menu-item">
                        <a href="/about-us.html#team" class="header__menu-link">
                            Команда
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="/practice.html" class="header__menu-link">
                            Практика
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="/internship.html" class="header__menu-link">
                            Стажировка
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="/vacancies.html" class="header__menu-link">
                            Вакансии
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="/media.html" class="header__menu-link">
                            Медиа
                        </a>
                    </li>
                </ul>
            </div>
            <div class="header__menu-col">
                <a href="/investitions.html" class="header__menu-title">Фонд</a>
                <ul class="header__menu-items">
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">
                            Компаниям
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">
                            Инвесторам
                        </a>
                    </li>
                </ul>
            </div>
            <div class="header__menu-col">
                <a href="/alliance.html" class="header__menu-title">Альянс</a>
                <ul class="header__menu-items">
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">
                            Бизнес-сообщество
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">
                            Проектная кооперация
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">
                            Инвестиции
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">
                            Партнеры
                        </a>
                    </li>
                </ul>
            </div>
            <div class="header__menu-col">
                <a href="/cases-own.html" class="header__menu-title">Кейсы</a>
                <ul class="header__menu-items">
                    <li class="header__menu-item">
                        <a href="/cases-own.html" class="header__menu-link">
                            Собственная разработка
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="/cases-order.html" class="header__menu-link">
                            Заказная разработка
                        </a>
                    </li>
                </ul>
            </div>
            <div class="header__menu-col">
                <a href="#" class="header__menu-title">Пресс-центр</a>
                <ul class="header__menu-items">
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">
                            Пресс-кит
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">
                            Бренд-бук
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">
                            Логотипы
                        </a>
                    </li>
                </ul>
            </div>
            <div class="header__menu-col">
                <a href="/contacts.html" class="header__menu-title">Контакты</a>
            </div>
        </div>
    </nav>
    <nav class="header__pages">
        <ul class="header__pages-items">
            <li class="header__pages-item">
                <a href="#" class="header__pages-link">
                    Бизнес-слеты
                </a>
            </li>
            <li class="header__pages-item">
                <a href="/resource-center.html" class="header__pages-link">
                    Ресурсный центр
                </a>
            </li>
            <li class="header__pages-item">
                <a href="#" class="header__pages-link">
                    Витрина ТФА
                </a>
            </li>
            <li class="header__pages-item">
                <a href="/project-center.html" class="header__pages-link">
                    Проектный центр
                </a>
            </li>
            <li class="header__pages-item">
                <a href="/products.html" class="header__pages-link">
                    Продукты
                </a>
            </li>
            <li class="header__pages-item">
                <a href="/services.html" class="header__pages-link">
                    Сервисы
                </a>
            </li>
            <li class="header__pages-item">
                <a href="/about-us.html" class="header__pages-link">
                    О нас
                </a>
            </li>
            <li class="header__pages-item">
                <a href="/media.html" class="header__pages-link">
                    Медиа
                </a>
            </li>
            <li class="header__pages-item">
                <a href="#" class="header__pages-link">
                    Привлечение инвестиций
                </a>
            </li>
            <li class="header__pages-item">
                <a href="#" class="header__pages-link">
                    Увеличение капитала
                </a>
            </li>
        </ul>
    </nav>
    <nav class="header__ui">
        <ul class="header__ui-items">
            <li class="header__ui-item">
                <a href="/" class="header__ui-button">
                    <svg width="31" height="28" viewBox="0 0 31 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.04307 8.26642C6.09068 8.79553 5.5 9.79939 5.5 10.8889V21C5.5 22.6569 6.84315 24 8.5 24H13.5V17C13.5 16.4477 13.9477 16 14.5 16H16.5C17.0523 16 17.5 16.4477 17.5 17V24H22.5C24.1569 24 25.5 22.6569 25.5 21V10.8889C25.5 9.79939 24.9093 8.79552 23.9569 8.26642L16.9569 4.37753C16.0509 3.87416 14.9491 3.87416 14.0431 4.37753L7.04307 8.26642Z" fill="#757E87"/>
                    </svg>                        
                </a>
            </li>
            <li class="header__ui-item">
                <button class="header__ui-button">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.50024 6C4.50024 5.44772 4.94796 5 5.50024 5H19.5C20.0523 5 20.5 5.44772 20.5 6C20.5 6.55228 20.0523 7 19.5 7H5.50024C4.94796 7 4.50024 6.55228 4.50024 6Z" fill="#757E87"/>
                        <path d="M4.5 18C4.5 17.4477 4.94772 17 5.5 17L19.5 17C20.0523 17 20.5 17.4477 20.5 18C20.5 18.5523 20.0523 19 19.5 19L5.5 19C4.94772 19 4.5 18.5523 4.5 18Z" fill="#757E87"/>
                        <path d="M4.5 11C3.94772 11 3.5 11.4477 3.5 12C3.5 12.5523 3.94772 13 4.5 13H20.5C21.0523 13 21.5 12.5523 21.5 12C21.5 11.4477 21.0523 11 20.5 11H4.5Z" fill="#757E87"/>
                    </svg>                                               
                </button>
            </li>
            <li class="header__ui-item">
                <button class="header__ui-button" data-menu-button="">
                    <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 9C7.5 7.89543 8.39543 7 9.5 7C10.6046 7 11.5 7.89543 11.5 9C11.5 10.1046 10.6046 11 9.5 11C8.39543 11 7.5 10.1046 7.5 9ZM7.5 16C7.5 14.8954 8.39543 14 9.5 14C10.6046 14 11.5 14.8954 11.5 16C11.5 17.1046 10.6046 18 9.5 18C8.39543 18 7.5 17.1046 7.5 16ZM16.5 7C15.3954 7 14.5 7.89543 14.5 9C14.5 10.1046 15.3954 11 16.5 11C17.6046 11 18.5 10.1046 18.5 9C18.5 7.89543 17.6046 7 16.5 7ZM14.5 16C14.5 14.8954 15.3954 14 16.5 14C17.6046 14 18.5 14.8954 18.5 16C18.5 17.1046 17.6046 18 16.5 18C15.3954 18 14.5 17.1046 14.5 16ZM23.5 7C22.3954 7 21.5 7.89543 21.5 9C21.5 10.1046 22.3954 11 23.5 11C24.6046 11 25.5 10.1046 25.5 9C25.5 7.89543 24.6046 7 23.5 7ZM21.5 16C21.5 14.8954 22.3954 14 23.5 14C24.6046 14 25.5 14.8954 25.5 16C25.5 17.1046 24.6046 18 23.5 18C22.3954 18 21.5 17.1046 21.5 16ZM9.5 21C8.39543 21 7.5 21.8954 7.5 23C7.5 24.1046 8.39543 25 9.5 25C10.6046 25 11.5 24.1046 11.5 23C11.5 21.8954 10.6046 21 9.5 21ZM14.5 23C14.5 21.8954 15.3954 21 16.5 21C17.6046 21 18.5 21.8954 18.5 23C18.5 24.1046 17.6046 25 16.5 25C15.3954 25 14.5 24.1046 14.5 23ZM23.5 21C22.3954 21 21.5 21.8954 21.5 23C21.5 24.1046 22.3954 25 23.5 25C24.6046 25 25.5 24.1046 25.5 23C25.5 21.8954 24.6046 21 23.5 21Z" fill="#757E87"/>
                    </svg>                                           
                </button>
            </li>
        </ul>
    </nav>
</header>
<?php
/*
 * Template name: Альянс
 */

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
                    <li class="breadcrumbs__item last"> 
                        <a href="/" class="breadcrumbs__link">Главная</a>
                    </li>
                    <li class="breadcrumbs__item last">
                        <a class="breadcrumbs__link last breadcrumbs__link-marked">Альянс</a>
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
            <section class="center-initial alliance-initial">
    <div class="center-initial__content _container">
        <div class="center-initial__left">
            <h1 class="center-initial__title _title-initial">
                Наш Альянс
            </h1>
            <p class="center-initial__text _text-initial">
                Кооперация и интеграция субъектов ИТ-МСП 
                для усиления роста и командного ЦФА-IPO
            </p>
        </div>
        <div class="center-initial__bg">
            <div class="center-initial__bg-first alliance-initial__bg-first _luminosity _desktop">
                <img 
                    src="<?php echo get_template_directory_uri(); ?>/img/alliance-bg-first.png" 
                    alt="alliance-bg-first"
                    class="alliance-initial__bg-first-current" 
                />
            </div>
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/alliance-bg-first-mobile.png" 
                alt="alliance-bg-first"
                class="center-initial__bg-first alliance-initial__bg-first _luminosity _mobile" 
            />
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/center-circle-bg.png" 
                alt="resource-center-bg-first"
                class="center-initial__bg-circles alliance-initial__bg-circles" 
            />
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/center-circle-bg-mobile.png" 
                alt="center-circle-bg-mobile"
                class="center-initial__bg-circles-mobile" 
            />
        </div>
    </div>
</section>
            <section class="alliance-main">
    <div class="alliance-main__content _container">
        <div class="alliance-main__line">
            <svg width="56" height="60" viewBox="0 0 56 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.1">
                <rect y="1.99976" width="56" height="56" rx="28" fill="#F15A29"/>
                </g>
                <g opacity="0.2">
                <rect x="11.1992" y="13.2" width="33.6" height="33.6" rx="16.8" fill="#F15A29"/>
                </g>
                <rect x="22.3984" y="24.3999" width="11.2" height="11.2" rx="5.6" fill="#F15A29"/>
            </svg>  
            <div class="alliance-main__line-line">

            </div>              
        </div>
        <div class="alliance-main__main">
            <h2 class="alliance-main__title">
                Бизнес сообщество
                <span class="_text-orange">Бенефиты и правила</span>
            </h2>
            <p class="alliance-main__text">
                Уникальное b2b-сообщество, где каждый партнёр может раскрыть свой потенциал и достичь своих целей вместе с остальными <br /> участниками. 
            </p>
            <div class="alliance-main__grid-wrapper">
                <div class="alliance-main__grid">
                    <div class="alliance-main__item alliance-main__item-small">
                        <h4 class="alliance-main__item-title">
                            Инвестиционные возможности
                        </h4>
                        <p class="alliance-main__item-text alliance-main__item-text">
                            Доступ к инвествозможностям
                            ЗПИФ <br />  ТФ Альянс
                            (по <br /> индивидуальным условиям)
                        </p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/alliance-business-img-1.png" alt="alliance-business-img-1" class="alliance-main__item-right">
                    </div>
                    <a href="#" class="alliance-main__item alliance-main__item-md">
                        <h4 class="alliance-main__item-title alliance-main__item-fixed">
                            Привилегированный доступ к продуктам
                        </h4>
                        <p class="alliance-main__item-text alliance-main__item-fixed">
                        </p>
                        <ul class="center-page__item-list alliance-main__item-fixed">
                            <li class="center-page__item-pos">
                                доступ к линейке продуктов других участников ТФА по специальным тарифам.  
                            </li>
                            <li class="center-page__item-pos">
                                <span>
                                    <span class="_text-orange _text-bold">B2Bcloud </span>  – базовый функционал 
                                </span>
                            </li>
                            <li class="center-page__item-pos">
                                <span>
                                    <span class="_text-orange _text-bold">ТФ360 </span>  – базовый функционал 
                                </span>
                            </li>
                            <li class="center-page__item-pos">
                                <span>
                                    <span class="_text-orange _text-bold">AlliancERP </span>  – базовый функционал.
                                </span>
                            </li>
                        </ul>                      
                    </a>
                </div>
                <div class="alliance-main__grid">
                    <div class="alliance-main__item alliance-main__item-md">
                        <h4 class="alliance-main__item-title alliance-main__item-fixed">
                            Доступ к мероприятиям с возможностью принять в них <br /> участие 
                        </h4>
                        <p class="alliance-main__item-text alliance-main__item-fixed">
                            Сбор единомышленников, на котором участники партнерской сети <br />
                            собираются вместе и обмениваются опытом, а также находят новые <br /> 
                            траектории взаимовыгодного сотрудничества.
                        </p>
                        <p class="alliance-main__item-text alliance-main__item-fixed">
                            <a href="<?php echo get_page_link(87); ?>" class="_text-orange _text-bold">Посмотреть</a> как проходят бизнес-слеты
                        </p>                       
                    </div>
                    <div class="alliance-main__item alliance-main__item-small">
                        <h4 class="alliance-main__item-title">
                            Доступ к информационным каналам
                        </h4>
                        <p class="alliance-main__item-text alliance-main__item-text-small">
                            в т.ч. закрытым каналам других участников ТФА
                        </p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/alliance-business-img-2.png" alt="alliance-business-img-2" class="alliance-main__item-right">
                    </div>
                </div>
                <div class="alliance-main__grid">
                    <div class="alliance-main__item alliance-main__item-big">
                        <h4 class="alliance-main__item-title">
                            Консалтинг и Поддержка
                        </h4>
                        <p class="alliance-main__item-text">
                            Консалтинг по ОЭЗ и комплаенсу, регистрации товарных знаков, в реестрах российского ПО, регистрации программ для ЭВМ и баз данных 
                            в Роспатенте, по подготовке заявок о вступлении в ОЭЗ по специальным тарифам. 
                        </p>
                        <br />
                        <p class="alliance-main__item-text">
                            Запросите полный список услуг и специальные тарифы по адресу <a href="mailto:partnership@teamforce.ru." class="_text-orange _text-bold">partnership@teamforce.ru.</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            <section class="quote alliance-quote _grey-section">
    <div class="_container">
        <div class="quote__content _grey-section__content">
            <svg width="126" height="125" viewBox="0 0 126 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.8" d="M28.9 67.297C28.9 79.197 19.318 88.829 7.482 88.829V115.461C33.972 115.461 55.391 93.929 55.391 67.297V1H1V61.63H28.9V67.297ZM98.51 67.297C98.51 79.197 88.927 88.829 77.09 88.829V115.462C103.582 115.462 125 93.929 125 67.297V1H70.61V61.63H98.51V67.297Z" stroke="white" stroke-opacity="0.15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div class="quote__info alliance-quote__info-big">
                <p class="quote__text">
                    <span class="_text-orange _text-bold">1+1=11.</span> Мы верим в то, что успех приходит благодаря сотрудничеству.
                     Мы за уникальные подходы, основанные на взаимодействии и <br /> 
                     синергии. Резонировать в успехе вместе!Наше кредо — резонировать <br />
                    в успехе! Вместе с нашими партнёрами по ТФ Альянсу успешно <br /> 
                    воплотили в жизнь множество задумок. Работаем в смартсорсинг- <br />
                    парадигме, открыты к продуктовым идеям и не перестаем осваивать <br /> 
                    новые функциональные ареалы и географии, чтобы предоставить <br /> 
                    нашим заказчикам наилучшие ИТ-решения.
                </p>
            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/alliance-quote-bg-first.png" alt="alliance-quote-bg-first" class="alliance-quote__bg-first">
    <img src="<?php echo get_template_directory_uri(); ?>/img/alliance-quote-bg.png" alt="alliance-quote-bg" class="alliance-quote__bg">
</section>
            <section class="codex-interpretation alliance-codex _grey-section">
    <div class="codex-interpretation__dots">
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
    <img src="<?php echo get_template_directory_uri(); ?>/img/codex-interpretation-bg.png" alt="codex-interpretation-bg" class="codex-interpretation__bg">
    <div class="codex-interpretation__content _container">
        <h2 class="codex-interpretation__title _title">
            Как стать официальным членом ТФА
        </h2>
        <ul class="codex-interpretation__grid alliance-codex__grid">
            <li class="codex-interpretation__item">
                <p class="codex-interpretation__item-number">
                    <span>1</span>
                    <svg width="40" height="40" viewPort="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <circle fill="#2c2b30" r="15" cx="20" cy="20" stroke="#F15A29" stroke-width="2px" stroke-dasharray="94.2px" stroke-dashoffset="70.65px">
                        </circle>
                    </svg>
                </p>
                <h4 class="codex-interpretation__item-title">
                    Заполните анкету-заявление
                </h4>
                <p class="codex-interpretation__item-text">
                    См. файл <a href="https://docs.google.com/document/d/17CkQV8iQT5hqcXgmQiukc19G3ogCKKsh/edit" target="_blank" class="_text-orange _text-bold">«Правила ТФА партнерская сеть»  </a>
                    для анкеты
                </p>
            </li>
            <li class="codex-interpretation__item">
                <p class="codex-interpretation__item-number">
                    <span>2</span>
                    <svg width="40" height="40" viewPort="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <circle fill="#2c2b30" r="15" cx="20" cy="20" stroke="#F15A29" stroke-width="2px" stroke-dasharray="94.2px" stroke-dashoffset="47.1px">
                        </circle>
                    </svg>
                </p>
                <h4 class="codex-interpretation__item-title">
                    Отправьте нам заявку
                </h4>
                <p class="codex-interpretation__item-text">
                    Подпишите анкету-заявление и отправьте на почту <a href="mailto:partnership@teamforce.ru" target="_blank" class="_text-orange _text-bold">partnership@teamforce.ru</a> вместе с списком необходимых документов
                </p>
            </li>
            <li class="codex-interpretation__item">
                <p class="codex-interpretation__item-number">
                    <span>3</span>
                    <svg width="40" height="40" viewPort="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <circle fill="#2c2b30" r="15" cx="20" cy="20" stroke="#F15A29" stroke-width="2px" stroke-dasharray="94.2px" stroke-dashoffset="0">
                        </circle>
                    </svg>
                </p>
                <h4 class="codex-interpretation__item-title">
                    Получите подтверждение
                </h4>
                <p class="codex-interpretation__item-text">
                    Ждите подтверждения о вступлении в партнерскую сеть ТИМ ФОРС Альянс.
                </p>
            </li>
        </ul>
    </div>
</section>
            <section class="alliance-main">
    <div class="alliance-main__content _container">
        <div class="alliance-main__line">
            <svg width="56" height="60" viewBox="0 0 56 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.1">
                <rect y="1.99976" width="56" height="56" rx="28" fill="#F15A29"/>
                </g>
                <g opacity="0.2">
                <rect x="11.1992" y="13.2" width="33.6" height="33.6" rx="16.8" fill="#F15A29"/>
                </g>
                <rect x="22.3984" y="24.3999" width="11.2" height="11.2" rx="5.6" fill="#F15A29"/>
            </svg>  
            <div class="alliance-main__line-line">

            </div>              
        </div>
        <div class="alliance-main__main">
            <h2 class="alliance-main__title">
                Проектная кооперация
            </h2>
            <p class="alliance-main__text">
                Вместе сильнее. 15 лет объединяем десятки IT-компаний вокруг знаковых  проектов <br /> в финтехе и нефтегазе
            </p>
            <div class="alliance-main__grid-wrapper">
                <div class="alliance-main__grid">
                    <div class="alliance-main__item alliance-main__item-big">
                        <h4 class="alliance-main__item-title alliance-main__item-fixed-small">
                            Консорциум
                        </h4>
                        <p class="alliance-main__item-text alliance-main__item-fixed-small">
                            Кооперация для участия в тендерах - консолидация опыта, экспертизы и команды, позволяет нам <br /> и нашим партнерам участвовать в крупных конкурсах
                        </p>
                        <ol class="welcome-book-stages__item-list alliance-main__item-list alliance-main__item-fixed-small">
                            <li class="welcome-book-stages__item-pos">
                                <p class="welcome-book-stages__item-order">1/</p>
                                <p class="welcome-book-stages__item-text">
                                    Полный цикл тендерного сопровождения
                                </p>
                            </li>
                            <li class="welcome-book-stages__item-pos">
                                <p class="welcome-book-stages__item-order">2/</p>
                                <p class="welcome-book-stages__item-text">
                                    Генеральный подряд с субординированной ответственностью
                                </p>
                            </li>
                            <li class="welcome-book-stages__item-pos">
                                <p class="welcome-book-stages__item-order">3/</p>
                                <p class="welcome-book-stages__item-text">
                                    Сбор проектной команды под фактическую потребность
                                </p>
                            </li>
                            <li class="welcome-book-stages__item-pos">
                                <p class="welcome-book-stages__item-order">4/</p>
                                <p class="welcome-book-stages__item-text">
                                    Обеспечение будущих запросов для обеих сторон в случае победы в тендере и отсутствие простоя кадров!
                                </p>
                            </li>
                        </ol>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/alliance-project-1.png" alt="alliance-project-1" class="alliance-main__item-bg">                       
                    </div>
                </div>
                <div class="alliance-main__grid">
                    <div class="alliance-main__item alliance-main__item-big">
                        <h4 class="alliance-main__item-title alliance-main__item-fixed-small">
                            Перераспределение
                        </h4>
                        <p class="alliance-main__item-text alliance-main__item-fixed-small">
                            Совместная реализация проектов в сфере IT - аутстаффинг и аутсорсинг по системе white label
                        </p>
                        <ol class="welcome-book-stages__item-list alliance-main__item-list alliance-main__item-fixed-small">
                            <li class="welcome-book-stages__item-pos">
                                <p class="welcome-book-stages__item-order">1/</p>
                                <p class="welcome-book-stages__item-text">
                                    Совместное выполнение сложных, масштабных проектов, требующих консолидации экспертизы
                                </p>
                            </li>
                            <li class="welcome-book-stages__item-pos">
                                <p class="welcome-book-stages__item-order">2/</p>
                                <p class="welcome-book-stages__item-text">
                                    Перераспределение временно свободного  персонала внутри партнёрского пула компаний
                                </p>
                            </li>
                            <li class="welcome-book-stages__item-pos">
                                <p class="welcome-book-stages__item-order">3/</p>
                                <p class="welcome-book-stages__item-text">
                                    Уход от традиционной модели управления к «виртуализации» трудовых ресурсов
                                </p>
                            </li>
                            <li class="welcome-book-stages__item-pos">
                                <p class="welcome-book-stages__item-order">4/</p>
                                <p class="welcome-book-stages__item-text">
                                    Минимизацию простоев штатных специалистов. 
                                </p>
                            </li>
                            <li class="welcome-book-stages__item-pos">
                                <p class="welcome-book-stages__item-order">5/</p>
                                <p class="welcome-book-stages__item-text">
                                    Проектное перераспределение компетенций и наработок
                                </p>
                            </li>
                        </ol>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/alliance-project-2.png" alt="alliance-project-2" class="alliance-main__item-bg">                       
                    </div>
                </div>
            </div>
            <a href="/services.html" class="_text-orange cases__item-link" style="margin: 32px 0 0 0;">
                Подробнее
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1123_13612)">
                    <path d="M9 5.01246C9 4.11226 10.0766 3.66144 10.7062 4.29798L13.8016 7.4273C15.9339 9.58289 17 10.6607 17 12C17 13.3393 15.9339 14.4171 13.8016 16.5727L10.7062 19.702C10.0766 20.3386 9 19.8877 9 18.9875C9 18.7196 9.1053 18.4625 9.29274 18.2731L12.3882 15.1437C13.4942 14.0255 14.1786 13.3276 14.6112 12.7544C15.0016 12.2371 15.0012 12.0565 15.001 12.0028L15.001 12L15.001 11.9973C15.0012 11.9435 15.0016 11.7629 14.6112 11.2456C14.1786 10.6724 13.4942 9.97446 12.3882 8.85627L9.29274 5.72695C9.1053 5.53745 9 5.28044 9 5.01246Z" fill="#F15A29"/>
                    <path d="M9 5.01246C9 4.11226 10.0766 3.66144 10.7062 4.29798L13.8016 7.4273C15.9339 9.58289 17 10.6607 17 12C17 13.3393 15.9339 14.4171 13.8016 16.5727L10.7062 19.702C10.0766 20.3386 9 19.8877 9 18.9875C9 18.7196 9.1053 18.4625 9.29274 18.2731L12.3882 15.1437C13.4942 14.0255 14.1786 13.3276 14.6112 12.7544C15.0016 12.2371 15.0012 12.0565 15.001 12.0028L15.001 12L15.001 11.9973C15.0012 11.9435 15.0016 11.7629 14.6112 11.2456C14.1786 10.6724 13.4942 9.97446 12.3882 8.85627L9.29274 5.72695C9.1053 5.53745 9 5.28044 9 5.01246Z" stroke="#F15A29"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_1123_13612">
                    <rect width="24" height="24" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
            </a>
            
        </div>
    </div>
</section>
            <section class="quote alliance-quote _grey-section">
    <div class="_container">
        <div class="quote__content _grey-section__content">
            <svg width="126" height="125" viewBox="0 0 126 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.8" d="M28.9 67.297C28.9 79.197 19.318 88.829 7.482 88.829V115.461C33.972 115.461 55.391 93.929 55.391 67.297V1H1V61.63H28.9V67.297ZM98.51 67.297C98.51 79.197 88.927 88.829 77.09 88.829V115.462C103.582 115.462 125 93.929 125 67.297V1H70.61V61.63H98.51V67.297Z" stroke="white" stroke-opacity="0.15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div class="quote__info">
                <p class="quote__text">
                    ТФА - надежный портфель растущих ИТ-компаний. Мы в ИТ — уже 15 лет. Понимаем ИТ-рынок, разговариваем на одном языке с «коллегами по цеху». Идентифицируем компании с потенциалом роста. Фонд «ТИМ ФОРС Альянс» и партнёры (ТФА) — прогрессивный формат инвестиций в малый и средний российский ИТ-бизнес. 
                </p>
                <div class="quote__user">
                    <div class="quote__user-avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/quote-user-avatar.png" alt="quote-user-avatar" />
                    </div>
                    <div class="quote__user-info">
                        <p class="quote__user-name">Руслан Гайнанов</p>
                        <p class="quote__user-description">
                            Генеральный директор компании ТИМ ФОРС, Основатель фонда «ТИМ ФОРС Альянс».
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/alliance-quote-bg.png" alt="alliance-quote-bg" class="alliance-quote__bg">
</section>
            <section class="alliance-main" id="investitions">
    <div class="alliance-main__content _container">
        <div class="alliance-main__line">
            <svg width="56" height="60" viewBox="0 0 56 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.1">
                <rect y="1.99976" width="56" height="56" rx="28" fill="#F15A29"/>
                </g>
                <g opacity="0.2">
                <rect x="11.1992" y="13.2" width="33.6" height="33.6" rx="16.8" fill="#F15A29"/>
                </g>
                <rect x="22.3984" y="24.3999" width="11.2" height="11.2" rx="5.6" fill="#F15A29"/>
            </svg>  
            <div class="alliance-main__line-line">

            </div>              
        </div>
        <div class="alliance-main__main">
            <h2 class="alliance-main__title">
                Инвестиции
            </h2>
            <p class="alliance-main__text">
                Наша цель — Национальный бизнес чемпион в ИТ.
            </p>
            <div class="alliance-main__grid-wrapper">
                <div class="alliance-main__grid">
                    <a href="#" class="alliance-main__item alliance-main__item-big">
                        <h4 class="alliance-main__item-title alliance-main__item-fixed-small">
                            Инвесторам
                        </h4>
                        <p class="alliance-main__item-text alliance-main__item-fixed-small">
                            Консолидируем субъекты ИТ-МСП с потенциалом роста для последующего выхода на ЦФА-IPO.
                        </p>
                        <p class="alliance-main__item-text alliance-main__item-fixed-small _text-bold">
                            На горизонте трёх лет ЦФА-IPO «портфеля» МСП-бизнесов:
                        </p>
                        <ol class="welcome-book-stages__item-list alliance-main__item-list alliance-main__item-fixed-small">
                            <li class="welcome-book-stages__item-pos">
                                <p class="welcome-book-stages__item-order">1/</p>
                                <p class="welcome-book-stages__item-text">
                                    Сбалансированный «портфель»  МСП-бизнесов со стабильным денежным потоком
                                </p>
                            </li>
                            <li class="welcome-book-stages__item-pos">
                                <p class="welcome-book-stages__item-order">2/</p>
                                <p class="welcome-book-stages__item-text">
                                    Гарантированный рента-доход в привязке к проценту от выручки «портфеля», перекрывает инфляцию
                                </p>
                            </li>
                            <li class="welcome-book-stages__item-pos">
                                <p class="welcome-book-stages__item-order">3/</p>
                                <p class="welcome-book-stages__item-text">
                                    Рост рента-доходов вместе с органическим ростом выручки «портфеля» МСП-бизнесов
                                </p>
                            </li>
                        </ol>
                        <p class="_text-orange cases__item-link" style="margin: 32px 0 0 0; width: fit-content;">
                            Подробнее
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1123_13612)">
                                <path d="M9 5.01246C9 4.11226 10.0766 3.66144 10.7062 4.29798L13.8016 7.4273C15.9339 9.58289 17 10.6607 17 12C17 13.3393 15.9339 14.4171 13.8016 16.5727L10.7062 19.702C10.0766 20.3386 9 19.8877 9 18.9875C9 18.7196 9.1053 18.4625 9.29274 18.2731L12.3882 15.1437C13.4942 14.0255 14.1786 13.3276 14.6112 12.7544C15.0016 12.2371 15.0012 12.0565 15.001 12.0028L15.001 12L15.001 11.9973C15.0012 11.9435 15.0016 11.7629 14.6112 11.2456C14.1786 10.6724 13.4942 9.97446 12.3882 8.85627L9.29274 5.72695C9.1053 5.53745 9 5.28044 9 5.01246Z" fill="#F15A29"/>
                                <path d="M9 5.01246C9 4.11226 10.0766 3.66144 10.7062 4.29798L13.8016 7.4273C15.9339 9.58289 17 10.6607 17 12C17 13.3393 15.9339 14.4171 13.8016 16.5727L10.7062 19.702C10.0766 20.3386 9 19.8877 9 18.9875C9 18.7196 9.1053 18.4625 9.29274 18.2731L12.3882 15.1437C13.4942 14.0255 14.1786 13.3276 14.6112 12.7544C15.0016 12.2371 15.0012 12.0565 15.001 12.0028L15.001 12L15.001 11.9973C15.0012 11.9435 15.0016 11.7629 14.6112 11.2456C14.1786 10.6724 13.4942 9.97446 12.3882 8.85627L9.29274 5.72695C9.1053 5.53745 9 5.28044 9 5.01246Z" stroke="#F15A29"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1123_13612">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/alliance-investitions-1.png" alt="alliance-investitions-1" class="alliance-main__item-bg">                       
                    </a>
                </div>
                <div class="alliance-main__grid">
                    <a href="#" class="alliance-main__item alliance-main__item-big">
                        <h4 class="alliance-main__item-title alliance-main__item-fixed-small">
                            ИТ-компаниям
                        </h4>
                        <p class="alliance-main__item-text alliance-main__item-fixed-small">
                            Объединяем МСП для кратного роста. ТФА инвестирует в миноритарные <br />
                            доли без потери бенефициарами операционного контроля и предоставляем <br />
                            МСП качественно новые возможности
                        </p>
                        <p class="alliance-main__item-text alliance-main__item-fixed-small _text-bold">
                            Частичный «кэш-аут» для бенефициаров без потери операционного контроля:
                        </p>
                        <ol class="welcome-book-stages__item-list alliance-main__item-list alliance-main__item-fixed-small">
                            <li class="welcome-book-stages__item-pos">
                                <p class="welcome-book-stages__item-order">1/</p>
                                <p class="welcome-book-stages__item-text">
                                    Оценка стоимости бизнеса – по выручке за последние три года
                                </p>
                            </li>
                            <li class="welcome-book-stages__item-pos">
                                <p class="welcome-book-stages__item-order">2/</p>
                                <p class="welcome-book-stages__item-text">
                                    Обязательства – процент с выручки без требования «кратного масштабирования»
                                </p>
                            </li>
                            <li class="welcome-book-stages__item-pos">
                                <p class="welcome-book-stages__item-order">3/</p>
                                <p class="welcome-book-stages__item-text">
                                    Единая точка синергии роста Рост рента-доходов вместе с органическим ростом выручки «портфеля» МСП-бизнесов
                                </p>
                            </li>
                            <li class="welcome-book-stages__item-pos">
                                <p class="welcome-book-stages__item-order">4/</p>
                                <p class="welcome-book-stages__item-text">
                                    Минимизацию простоев штатных специалистов. 
                                </p>
                            </li>
                            <li class="welcome-book-stages__item-pos">
                                <p class="welcome-book-stages__item-order">5/</p>
                                <p class="welcome-book-stages__item-text">
                                    Проектное перераспределение компетенций и наработок
                                </p>
                            </li>
                        </ol>
                        <p class="_text-orange cases__item-link" style="margin: 32px 0 0 0; width: fit-content;">
                            Подробнее
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1123_13612)">
                                <path d="M9 5.01246C9 4.11226 10.0766 3.66144 10.7062 4.29798L13.8016 7.4273C15.9339 9.58289 17 10.6607 17 12C17 13.3393 15.9339 14.4171 13.8016 16.5727L10.7062 19.702C10.0766 20.3386 9 19.8877 9 18.9875C9 18.7196 9.1053 18.4625 9.29274 18.2731L12.3882 15.1437C13.4942 14.0255 14.1786 13.3276 14.6112 12.7544C15.0016 12.2371 15.0012 12.0565 15.001 12.0028L15.001 12L15.001 11.9973C15.0012 11.9435 15.0016 11.7629 14.6112 11.2456C14.1786 10.6724 13.4942 9.97446 12.3882 8.85627L9.29274 5.72695C9.1053 5.53745 9 5.28044 9 5.01246Z" fill="#F15A29"/>
                                <path d="M9 5.01246C9 4.11226 10.0766 3.66144 10.7062 4.29798L13.8016 7.4273C15.9339 9.58289 17 10.6607 17 12C17 13.3393 15.9339 14.4171 13.8016 16.5727L10.7062 19.702C10.0766 20.3386 9 19.8877 9 18.9875C9 18.7196 9.1053 18.4625 9.29274 18.2731L12.3882 15.1437C13.4942 14.0255 14.1786 13.3276 14.6112 12.7544C15.0016 12.2371 15.0012 12.0565 15.001 12.0028L15.001 12L15.001 11.9973C15.0012 11.9435 15.0016 11.7629 14.6112 11.2456C14.1786 10.6724 13.4942 9.97446 12.3882 8.85627L9.29274 5.72695C9.1053 5.53745 9 5.28044 9 5.01246Z" stroke="#F15A29"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1123_13612">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/alliance-investitions-2.png" alt="alliance-investitions-2" class="alliance-main__item-bg">                       
                    </a>
                </div>
            </div>
            <a href="#" class="alliance-main__file">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="32" height="32" rx="16" fill="#2C3135"/>
                        <path d="M16.25 18.5C16.6642 18.5 17 18.8359 17 19.2501C17 19.6643 16.6642 20.0001 16.25 20.0001H13.75C13.3358 20.0001 13 19.6643 13 19.2501C13 18.8359 13.3358 18.5 13.75 18.5H16.25Z" fill="white"/>
                        <path d="M16 16.2506C16 15.8364 15.6642 15.5006 15.25 15.5006H13.75C13.3358 15.5006 13 15.8364 13 16.2506C13 16.6648 13.3358 17.0006 13.75 17.0006H15.25C15.6642 17.0006 16 16.6648 16 16.2506Z" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 23.0001C16.7025 23.0001 17.364 22.9617 17.965 22.9028C19.3012 22.772 19.9693 22.7066 20.813 21.8646C21.6566 21.0226 21.7234 20.3538 21.8571 19.016C21.9415 18.1714 22 17.1655 22 16.0001C22 15.2937 21.9985 14.5876 21.989 13.8813C21.9862 13.6678 21.8792 13.4457 21.7199 13.2461C21.4411 12.8968 20.8342 12.1364 19.7921 11.1259C18.5553 9.92675 17.9247 9.38787 17.5941 9.19695C17.4632 9.12137 17.2311 9.00358 17.0794 9.00248C16.0629 8.99514 15.0492 8.99812 14.0363 9.09715C12.6994 9.22785 12.0309 9.2932 11.1871 10.1353C10.3433 10.9773 10.2765 11.6465 10.1428 12.985C10.0585 13.8294 10 14.8351 10 16.0001C10 17.1654 10.0585 18.1713 10.1429 19.0159C10.2765 20.3537 10.3433 21.0226 11.187 21.8646C12.0307 22.7066 12.6988 22.772 14.0351 22.9028C14.6361 22.9617 15.2975 23.0001 16 23.0001ZM15.5 11.0001C15.5 11.8057 15.6028 12.5861 15.6964 13.1351C15.6994 13.153 15.7027 13.1747 15.7065 13.1996C15.7476 13.4708 15.8478 14.132 16.3579 14.6422C16.868 15.1523 17.5293 15.2525 17.8005 15.2936C17.8254 15.2974 17.847 15.3007 17.865 15.3037C18.4139 15.3972 19.1943 15.5001 20 15.5001C20.1684 15.5001 20.3357 15.4956 20.5 15.4876L20.5 16.0001C20.5 17.1152 20.444 18.0713 20.3645 18.8669C20.2928 19.5843 20.2532 19.914 20.1709 20.1745C20.1138 20.3553 20.0269 20.5299 19.7534 20.8029C19.4795 21.0762 19.3049 21.1626 19.1245 21.2193C18.8644 21.3009 18.5354 21.3398 17.8188 21.41C17.2606 21.4646 16.6483 21.5001 16 21.5001C15.3518 21.5001 14.7394 21.4646 14.1812 21.41C13.4646 21.3398 13.1356 21.3009 12.8755 21.2193C12.6951 21.1626 12.5204 21.0762 12.2466 20.8029C11.9731 20.5299 11.8862 20.3553 11.8291 20.1745C11.7468 19.914 11.7071 19.5842 11.6355 18.8668C11.556 18.0712 11.5 17.1151 11.5 16.0001C11.5 14.8854 11.556 13.9295 11.6354 13.134C11.7071 12.4163 11.7467 12.0863 11.829 11.8256C11.8862 11.6446 11.9731 11.47 12.2467 11.197C12.5205 10.9238 12.6951 10.8373 12.8757 10.7807C13.136 10.699 13.4653 10.6601 14.1823 10.59C14.5981 10.5494 15.0438 10.5194 15.5121 10.5067C15.5044 10.6689 15.5 10.834 15.5 11.0001ZM17.0087 10.6149C17.0031 10.7425 17 10.8713 17 11.0001C17 11.6891 17.089 12.3782 17.1751 12.8832C17.2373 13.2487 17.2684 13.4314 17.4186 13.5815C17.5687 13.7316 17.7514 13.7628 18.1169 13.825C18.6219 13.9111 19.3109 14.0001 20 14.0001C20.1317 14.0001 20.2635 13.9968 20.3939 13.991C20.0796 13.6033 19.5653 12.9954 18.748 12.2029C18.1373 11.6108 17.692 11.197 17.3671 10.9136C17.2166 10.7823 17.0992 10.6853 17.0087 10.6149Z" fill="white"/>
                    </svg>                    
                    <span>Решение о выпуске ЦФА</span>
            </a>
        </div>
    </div>
</section>
            <section class="alliance-form _grey-section">
    <div class="alliance-form__content _container">
        <form class="alliance-form__form" data-contact-form="alliance-enter">
            <h2 class="alliance-form__title _title">
                Присоединяйтесь к ТИМ ФОРС Альянс
            </h2>
            <p class="alliance-form__text">Откройте новые возможности для роста вашего бизнеса вместе с нами!</p>
            <div class="alliance-form__row project-call__row">
                <input 
                    type="email" 
                    placeholder="Ваш Email" 
                    class="alliance-form__input _input" 
                    data-input-required="alliance-enter" 
                />
                <button disabled class="alliance-form__button _button-orange" type="submit">Оставить заявку</button>
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
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/alliance-form-bg.png" alt="alliance-form-bg" class="alliance-form__bg" />
</section>
            <?php get_template_part('/inc/contact-form'); ?>
        </main>
<?php get_footer(); ?>
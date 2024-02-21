<?php
/*
 * Template name: TFA
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
                        <a href="/about-us.html" class="breadcrumbs__link breadcrumbs__link-marked last">Цифровизация</a>
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
            <section class="center-initial tfa-showcase-initial">
    <div class="services-main__mobile-text">
        <svg width="36" height="274" viewBox="0 0 36 274" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.5" d="M38 272.59H38.5V272.09V254.164C38.5 249.723 37.467 246.17 35.3405 243.565C33.2275 240.959 30.6372 239.623 27.5899 239.623C26.285 239.623 25.0543 239.891 23.9036 240.43C22.7677 240.937 21.8547 241.527 21.1885 242.212C20.5496 242.869 19.9922 243.612 19.5159 244.441C19.1686 245.024 18.9031 245.506 18.7326 245.876C18.5556 245.597 18.334 245.3 18.0727 244.984L18.0716 244.983C17.6327 244.456 17.1347 243.941 16.5786 243.437C15.9805 242.877 15.2041 242.417 14.2678 242.046C13.294 241.649 12.2744 241.451 11.2129 241.451C8.41243 241.451 6.01718 242.726 4.04317 245.194C2.05511 247.679 1.08985 251.035 1.08985 255.205L1.08985 272.09L1.08986 272.59H1.58985H38ZM24.6529 253.314L24.6581 253.308C25.106 252.818 25.6412 252.582 26.2949 252.582C26.9492 252.582 27.4958 252.819 27.9624 253.314C28.4243 253.804 28.6641 254.421 28.6641 255.205V259.91H23.9512V255.205C23.9512 254.421 24.191 253.804 24.6529 253.314ZM11.4966 254.994L11.503 254.987L11.509 254.98C11.8541 254.595 12.2688 254.41 12.7871 254.41C13.306 254.41 13.7328 254.596 14.097 254.987C14.4359 255.352 14.6231 255.841 14.6231 256.5V259.91H10.9512V256.5C10.9512 255.846 11.1436 255.36 11.4966 254.994ZM1.08985 234.664V235.164H1.58985H38H38.5V234.664L38.5 224.787V224.543L38.3072 224.393L21.784 211.525H38H38.5V211.025V199.32V198.82H38H1.58985H1.08985L1.08985 199.32L1.08985 209.197L1.08985 209.442L1.28257 209.592L17.8317 222.484H1.58985H1.08985V222.984L1.08985 234.664ZM1.08985 194.369L1.08985 194.869H1.58985H12.2539H12.7539V194.369V185.246H38H38.5V184.746V173.041V172.541H38H12.7539V163.418V162.918H12.2539H1.58985H1.08985L1.08985 163.418L1.08985 194.369ZM1.08985 158.492L1.08985 158.992H1.58985H38H38.5V158.492V146.812V146.312H38H28.6231V141.354C28.6231 137.017 27.3447 133.49 24.7489 130.823L24.3906 131.172L24.7489 130.823C22.1425 128.146 18.836 126.812 14.8691 126.812C10.8866 126.812 7.5796 128.145 4.98941 130.823C2.3769 133.489 1.08985 137.017 1.08985 141.354L1.08985 158.492ZM1.08985 121.828L1.08985 122.328H1.58985H38H38.5V121.828V111.951V111.707L38.3072 111.557L21.784 98.6895H38H38.5V98.1895V86.4844V85.9844H38H1.58985H1.08985V86.4844L1.08985 96.3613V96.6056L1.28256 96.7558L17.8317 109.648H1.58985H1.08985L1.08985 110.148L1.08985 121.828ZM1.58984 43.8613H1.08985V44.3613L1.08985 56.0664V56.5664H1.58984H13.8359V66.4844H1.58985H1.08985L1.08985 66.9844L1.08985 78.6641L1.08985 79.1641H1.58985H38H38.5V78.6641V66.9844V66.4844H38H25.2461V56.5664H38H38.5V56.0664V44.3613V43.8613H38H1.58984ZM38.5 28.5176V28.1445L38.1424 28.0383L31.4922 26.0625V16.3997L38.1408 14.4485L38.5 14.3431V13.9688V1.47656V0.762457L37.829 1.00672L1.41881 14.2606L1.08984 14.3804V14.7305L1.08984 27.7305L1.08984 28.0806L1.41881 28.2003L37.829 41.4542L38.5 41.6985V40.9844V28.5176ZM17.2129 146.312H12.5V142.115C12.5 141.331 12.7398 140.714 13.2017 140.224C13.6683 139.729 14.2149 139.492 14.8691 139.492C15.5221 139.492 16.0678 139.728 16.5338 140.221C16.9795 140.71 17.2129 141.329 17.2129 142.115V146.312ZM21.6309 23.1816L14.8575 21.2328L21.6309 19.303V23.1816Z" stroke="white"/>
        </svg>        
    </div>
    <div class="center-initial__content _container">
        <div class="center-initial__left">
            <h1 class="center-initial__title _title-initial">
                Витрина ТФА 
            </h1>
            <p class="center-initial__text _text-initial">
                Улучшаем бизнес-процессы и обеспечиваем 
                <br />
                устойчивый рост в динамичной бизнес-среде.
                <br style="display: block !important;"  />
                <br style="display: block !important;"  />

                Хотите попасть на витрину ТФА - <br /> 
                <span class="_text-orange _text-bold _pointer">вступайте</span> в ТИМ ФОРС Альянс
            </p>
        </div>
        <div class="center-initial__bg">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/tfa-showcase-initial-bg-first.png" 
                alt="tfa-showcase-initial-bg-first"
                class="center-initial__bg-first tfa-showcase-initial__bg _centered" 
                style="mix-blend-mode: luminosity;"
            />
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/center-circle-bg.png" 
                alt="tfa-showcase-initial-bg-circles"
                class="center-initial__bg-circles" 
            />
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/center-circle-bg-mobile.png" 
                alt="center-circle-bg-mobile"
                class="center-initial__bg-circles-mobile" 
            />
        </div>
    </div>
</section>
            <section class="tfa-grid">
    <div class="tfa-grid__content _container">
        <div class="tfa-grid__items">
            <div class="tfa-grid__row">
                <div class="tfa-grid__item">
                    <h4 class="tfa-grid__item-title">
                        Рекрутмент
                    </h4>
                    <p class="tfa-grid__item-text">
                        Поиск и отбор квалифицированных специалистов для последующего привлечения кандидатов в рамках проектов заказчиков.
                    </p>
                    <div class="tfa-grid__item-buttons">
                        <a href="#contactForm" class="tfa-grid__item-button _button-orange _text-medium" data-anchor-scroll>
                            Оставить заявку
                        </a>
                        <a href="#" class="tfa-grid__item-button _button-orange-border">
                            Подробнее
                        </a>
                    </div>
                </div>
                <div class="tfa-grid__item">
                    <h4 class="tfa-grid__item-title">
                        Закупки
                    </h4>
                    <p class="tfa-grid__item-text">
                        Скидки от поставщиков на кооперативный закуп (лизинг, страхование, ДМС и др.)
                    </p>
                    <div class="tfa-grid__item-buttons">
                        <a href="#contactForm" class="tfa-grid__item-button _button-orange _text-medium" data-anchor-scroll>
                            Оставить заявку
                        </a>
                    </div>
                </div>
            </div>
            <a href="<?php echo get_page_link(82); ?>" class="tfa-grid__item tfa-grid__item-big">
                <h4 class="tfa-grid__item-title">
                    ПРОДУКТЫ И РЕШЕНИЯ
                </h4>
                <p class="tfa-grid__item-text">
                    Цифровые инструменты ТФА и партнеров для роста бизнеса
                </p>
                <svg class="_desktop" xmlns="http://www.w3.org/2000/svg" width="172" height="30" viewBox="0 0 172 30" fill="none">
                    <path d="M171.414 16.4142C172.195 15.6332 172.195 14.3668 171.414 13.5858L158.686 0.857864C157.905 0.0768156 156.639 0.0768156 155.858 0.857864C155.077 1.63891 155.077 2.90524 155.858 3.68629L167.172 15L155.858 26.3137C155.077 27.0948 155.077 28.3611 155.858 29.1421C156.639 29.9232 157.905 29.9232 158.686 29.1421L171.414 16.4142ZM0 17H170V13H0V17Z" fill="#FAFAFA"/>
                </svg>
                <div class="_mobile">
                    <div class="tfa-grid__item-buttons">
                        <div class="tfa-grid__item-button _button-orange-border">
                            Подробнее
                        </div>
                    </div>
                </div>
                <img 
                    src="<?php echo get_template_directory_uri(); ?>/img/tfa-showcase-grid-item-bg.png" 
                    alt="tfa-showcase-grid-item-bg" 
                    class="tfa-grid__item-bg _luminosity" 
                />
            </a>
        </div>
    </div>
</section>
            <section class="tfa-complieance _grey-section">
    <div class="tfa-complieance__content _container">
        <div class="tfa-complieance__info">
            <h2 class="tfa-complieance__title _title-medium">
                КОМПЛАЕНС ТФА
            </h2>
            <p class="tfa-complieance__text">
                Контроль соответствия деятельности компании корпоративным требованиям, бизнес-этики, нормам законодательства
            </p>
            <h3 class="tfa-complieance__title-small">
                Участие  в особых экономических зонах
            </h3>
            <p class="tfa-complieance__text">
                Услуги комплаенса для ОЭЗ могут быть  адаптированными к требованиям и особенностям экономической зоны.  <br />
                Конкретный перечень услуг будет зависеть от потребностей и задач вашей компании в соответствии с законодательством.
            </p>
            <ul class="tfa-complieance__tags">
                <li class="tfa-complieance__tag">ИНТЦ МГУ Воробьевы горы</li>
                <li class="tfa-complieance__tag">Сколково</li>
                <li class="tfa-complieance__tag">Иннополис</li>
            </ul>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/tfa-complieance-bg-gradient.png" alt="tfa-complieance-bg-gradient" class="tfa-complieance__bg-gradient" />
    <img src="<?php echo get_template_directory_uri(); ?>/img/tfa-showcase-complieance-bg.png" alt="tfa-showcase-complieance-bg" class="tfa-complieance__bg _luminosity" />
</section>
            <section class="welcome-book-about _grey-section">
    <div class="_container">
        <h2 class="tfa-advantages__title _title _mobile">Преимущества</h2>
        <div class="welcome-book-about__row tfa-advantages__row">
            <div class="welcome-book-about__item item-dark-big tfa-advantages__item">
                <h4 class="welcome-book-about__item-title">
                    Преимущества
                </h4>   
                <img src="<?php echo get_template_directory_uri(); ?>/img/tfa-showcase-advantages-bg.png" alt="tfa-showcase-advantages-bg" class="welcome-book-about__item-img tfa-advantages__bg _luminosity">            
                <img
                     src="<?php echo get_template_directory_uri(); ?>/img/tfa-showcase-advantages-bg-gradient.png" 
                     alt="tfa-showcase-advantages-bg-gradient" 
                     class="tfa-advantages__bg-gradient" 
                />            
            </div>
            <ul class="welcome-book-about__grid tfa-advantages__list">
                <li class="welcome-book-about__small tfa-advantages__pos">
                    Использование инфраструктуры, включая мощности лабораторий, суперкомпьютеры и т.д.
                </li>
                <li class="welcome-book-about__small tfa-advantages__pos">
                    Взаимодействие внутри экосистемы с другими инновационными компаниями
                </li>
                <li class="welcome-book-about__small tfa-advantages__pos">
                    Привлечение экспертизы
                </li>
                <li class="welcome-book-about__small tfa-advantages__pos">
                    Снижение налоговой нагрузки на участников
                </li>
            </ul>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/tfa-showcase-advantages-bg.png" alt="tfa-showcase-advantages-bg" class="tfa-advantages__bg _luminosity _mobile">  
</section>
            <section class="for-companies-roadmap _grey-section">
    <div class="for-companies-roadmap__content _container">
        <h2 class="for-companies-roadmap__title _title">
            Основные этапы комплаенса
        </h2>
        <ul class="for-companies-roadmap__row">
            <li class="for-companies-roadmap__item for-companies-roadmap__item-small">
                <p class="for-companies-roadmap__item-number tfa-stages__item-number">
                    1
                </p>
                <h4 class="for-companies-roadmap__item-title tfa-stages__item-title">
                    Анализ соответствия требованиям соискателя на статус участника проекта
                </h4>
            </li>
            <li class="for-companies-roadmap__item for-companies-roadmap__item-medium">
                <p class="for-companies-roadmap__item-number tfa-stages__item-number">
                    2
                </p>
                <h4 class="for-companies-roadmap__item-title tfa-stages__item-title">
                    Разработка заявки, получение статуса
                </h4>
            </li>
        </ul>
        <ul class="for-companies-roadmap__row">
            <li class="for-companies-roadmap__item for-companies-roadmap__item-big">
                <p class="for-companies-roadmap__item-number tfa-stages__item-number">
                    3
                </p>
                <h4 class="for-companies-roadmap__item-title tfa-stages__item-title">
                    Разработка и внедрение политики и процедур комплаенса, обновление политик и процедур в связи с изменениями законодательства, в том числе по интеллектуальной собственности
                </h4>
            </li>
        </ul>
        <ul class="for-companies-roadmap__row">
            <li class="for-companies-roadmap__item for-companies-roadmap__item-mini">
                <p class="for-companies-roadmap__item-number tfa-stages__item-number">
                    4
                </p>
                <h4 class="for-companies-roadmap__item-title tfa-stages__item-title">
                    Сопровождение статуса
                </h4>
            </li>
            <li class="for-companies-roadmap__item for-companies-roadmap__item-mini">
                <p class="for-companies-roadmap__item-number tfa-stages__item-number">
                    5
                </p>
                <h4 class="for-companies-roadmap__item-title tfa-stages__item-title">
                    Консультации 
                    и обучение
                </h4>
            </li>
            <li class="for-companies-roadmap__item for-companies-roadmap__item-half">
                <p class="for-companies-roadmap__item-number tfa-stages__item-number">
                    6
                </p>
                <h4 class="for-companies-roadmap__item-title tfa-stages__item-title">
                    Сотрудничество с регуляторами и внешними сторонами
                </h4>
            </li>
        </ul>
    </div>
</section>
            <section class="tfa-intellect">
    <div class="tfa-intellect__content _container">
        <h2 class="tfa-intellect__title _title-medium">
            Интеллектуальная собственность
        </h2>
        <div class="tfa-intellect__items">
            <ul class="tfa-intellect__row">
                <li class="tfa-intellect__item">
                    <h4 class="tfa-intellect__item-title">
                        Регистрация в реестре российского ПО
                    </h4>
                    <p class="tfa-intellect__item-text">
                        2 записи в реестре: B2BCloud, TF360
                    </p>
                </li>
                <li class="tfa-intellect__item">
                    <h4 class="tfa-intellect__item-title">
                        Права на РИД в трудовых договорах и договорах 
                        с подрядчиками
                    </h4>
                    <p class="tfa-intellect__item-text">
                        Шаблоны договоров
                    </p>
                </li>
            </ul>
            <ul class="tfa-intellect__row">
                <li class="tfa-intellect__item">
                    <h4 class="tfa-intellect__item-title">
                        Заявки на регистрацию товарных знаков (в т.ч. международных)
                        Защита товарных знаков
                    </h4>
                    <p class="tfa-intellect__item-text">
                        13 действующих товарных знаков
                        3+ заявки
                    </p>
                </li>
                <li class="tfa-intellect__item">
                    <h4 class="tfa-intellect__item-title">
                        Документооборот учёта НМА в бухгалтерском учёте 
                    </h4>
                    <p class="tfa-intellect__item-text">
                        Методика ведения документоообора
                    </p>
                </li>
            </ul>
            <ul class="tfa-intellect__row">
                <li class="tfa-intellect__item">
                    <h4 class="tfa-intellect__item-title">
                        Регистрация баз данных
                    </h4>
                    <p class="tfa-intellect__item-text">
                        2 базы: B2BCloud, SmartBackOffice
                    </p>
                </li>
                <li class="tfa-intellect__item">
                    <h4 class="tfa-intellect__item-title">
                        Регистрация программ для ЭВМ
                    </h4>
                    <p class="tfa-intellect__item-text">
                        20+ программ для ЭВМ
                    </p>
                </li>
            </ul>
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/tfa-showcase-intellect-lamp.png" 
                alt="tfa-showcase-intellect-lamp" 
                class="tfa-intellect__bg-lamp _luminosity" 
            />
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/tfa-showcase-intellect-circles.png" 
                alt="tfa-showcase-intellect-circles" 
                class="tfa-intellect__bg-circles" 
            />
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/tfa-showcase-intellect-orange-circle.png" 
                alt="tfa-showcase-intellect-orange-circle" 
                class="tfa-intellect__bg-orange" 
            />
        </div>
    </div>
    <img 
        src="<?php echo get_template_directory_uri(); ?>/img/tfa-showcase-intellect-bg-gradient.png" 
        alt="tfa-showcase-intellect-bg-gradient" 
        class="tfa-intellect__bg-gradient" 
    />
    <img 
        src="<?php echo get_template_directory_uri(); ?>/img/tfa-showcase-intellect-bg-gradient-mobile.png" 
        alt="tfa-showcase-intellect-bg-gradient-mobile" 
        class="tfa-intellect__bg-gradient-mobile" 
    />
</section>
           <?php get_template_part('/inc/contact-form'); ?>
        </main>
<?php get_footer(); ?>
<?php
/*
 * Template name: Практика
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
                    <li class="breadcrumbs__item"> 
                        <a href="/" class="breadcrumbs__link">Главная</a>
                    </li>
                    <li class="breadcrumbs__item last"> 
                        <a href="<?php echo get_page_link(97); ?>" class="breadcrumbs__link last">О нас</a>
                    </li>
                    <li class="breadcrumbs__item last"> 
                        <a class="breadcrumbs__link breadcrumbs__link-marked">Практика</a>
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
<div class="services-main__mobile-text">
    <svg width="26" height="307" viewBox="0 0 26 307" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.5" d="M1.58985 270.541H1.08985L1.08985 271.041L1.08986 305.09L1.08986 305.59H1.58986H38H38.5V305.09V293.41V292.91H38H12.5L12.5 283.246H38H38.5V282.746V271.041V270.541H38H1.58985ZM1.08985 263.246L1.08985 263.746H1.58985H38H38.5V263.246V251.566V251.066H38H28.6231V246.107C28.6231 241.771 27.3447 238.243 24.7489 235.577L24.3906 235.926L24.7489 235.577C22.1425 232.9 18.836 231.566 14.8692 231.566C10.8866 231.566 7.57961 232.899 4.98941 235.577C2.37691 238.243 1.08985 241.771 1.08985 246.107L1.08985 263.246ZM38.5 221.682V221.309L38.1424 221.202L31.4922 219.227L31.4922 209.564L38.1408 207.613L38.5 207.507V207.133V194.641V193.927L37.829 194.171L1.41882 207.425L1.08985 207.544L1.08985 207.895L1.08985 220.895V221.245L1.41882 221.364L37.829 234.618L38.5 234.863V234.148L38.5 221.682ZM1.58985 179.059H1.08985L1.08985 179.559L1.08985 191.238L1.08985 191.738H1.58985H38H38.5V191.238V179.559V179.059H38H29.3392L26.114 176.483L38.2676 168.784L38.5 168.636V168.361V155.361V154.452L37.7321 154.939L16.7109 168.278L1.90879 156.017L1.41397 155.607H1.58985H12.2539H12.7539V155.107V145.984H38H38.5V145.484V133.779V133.279H38H12.7539V124.156V123.656H12.2539H1.58985H1.08985L1.08985 124.156L1.08985 155.107V155.339L1.08985 155.607L1.08985 156.402L1.08985 169.352V169.589L1.27349 169.739L12.6799 179.059H1.58985ZM1.08985 119.23V119.73H1.58985H38H38.5V119.23V109.354V109.109L38.3072 108.959L21.784 96.0918H38H38.5V95.5918V83.8867V83.3867H38H1.58985H1.08985L1.08985 83.8867L1.08985 93.7637L1.08985 94.008L1.28256 94.1581L17.8317 107.051H1.58985H1.08985V107.551L1.08985 119.23ZM1.58985 63.8867H1.08985L1.08985 64.3867L1.08985 76.0664L1.08985 76.5664H1.58985H38H38.5V76.0664V64.3867V63.8867H38H29.3392L26.114 61.3107L38.2676 53.6118L38.5 53.4646V53.1895V42.1985V41.4844V40.1895V39.28V29.0176V28.6445L38.1424 28.5383L31.4922 26.5625V16.8997L38.1408 14.9485L38.5 14.8431V14.4688V1.97656V1.26246L37.829 1.50672L1.41881 14.7606L1.08984 14.8804V15.2305L1.08984 28.2305L1.08984 28.5806L1.41881 28.7003L35.5773 41.1346L16.7109 53.1057L1.90879 40.8454L1.08984 40.1671L1.08984 41.2305L1.08985 54.1797V54.4168L1.27348 54.5669L12.6799 63.8867H1.58985ZM17.2129 251.066H12.5V246.869C12.5 246.085 12.7398 245.468 13.2017 244.978C13.6683 244.483 14.2149 244.246 14.8692 244.246C15.5221 244.246 16.0678 244.482 16.5338 244.975C16.9795 245.464 17.2129 246.082 17.2129 246.869V251.066ZM21.6309 216.346L14.8576 214.397L21.6309 212.467V216.346ZM21.6309 23.6816L14.8575 21.7328L21.6309 19.803V23.6816Z" stroke="white"/>
    </svg>            
</div>
<section class="center-initial practice-initial">
    <img 
        src="<?php echo get_template_directory_uri(); ?>/img/practice-first-bg-mobile.png" 
        alt="practice-first-bg-mobile"
        class="center-initial__bg-first practice-initial__bg-first practice-initial__bg-mobile" 
    />
    <div class="center-initial__content _container">
        <div class="center-initial__left">
            <h1 class="center-initial__title _title-initial">
                Практика <br />
                в сильной
                команде
            </h1>
            <p class="center-initial__text _text-initial">
                Получи профессиональные умения и опыт <br /> 
                профессиональной деятельности
            </p>
        </div>
        <div class="center-initial__bg">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/practice-first-bg.png" 
                alt="practice-first-bg"
                class="center-initial__bg-first practice-initial__bg-first practice-initial__bg-desktop _centered" 
            />
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/center-circle-bg.png" 
                alt="resource-center-bg-first"
                class="center-initial__bg-circles" 
            />
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/center-circle-bg-mobile.png" 
                alt="center-circle-bg-mobile"
                class="center-initial__bg-circles-mobile practice-initial__bg-desktop" 
            />
        </div>
    </div>
</section>
            <section class="practice-journey journey-section _grey-section">
    <div class="journey-section__dots">
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
    <img src="<?php echo get_template_directory_uri(); ?>/img/journey-section-bg.png" alt="journey-section-bg" class="journey-section__bg">
    <div class="_container">
        <div class="practice-journey__content _grey-section__content">
            <h2 class="practice-journey__title journey-section__title _grey-section__title">Твой путь</h2>
            <ol class="practice-journey__grid journey-section__grid">
                <li class="journey-section__item">
                    <p class="journey-section__item-circle">
                        01
                    </p>
                    Заявка 
                    на практику
                </li>
                <li class="journey-section__item">
                    <p class="journey-section__item-circle">
                        02
                    </p>
                    Рассмотрение заявки
                </li>
                <li class="journey-section__item">
                    <p class="journey-section__item-circle">
                        03
                    </p>
                    Собеседование с командой
                </li>
                <li class="journey-section__item">
                    <p class="journey-section__item-circle">
                        04
                    </p>
                    Подписание договора
                </li>
            </ol>
        </div>
    </div>
</section>
            <section class="teamforce-this _grey-section">
    <div class="teamforce-this__content _container">
        <h2 class="teamforce-this__title _title-medium">
            <span class="_text-orange">ТИМ ФОРС</span> это
        </h2>
        <ul class="teamforce-this__items teamforce-this__items-big">
            <li class="teamforce-this__item center-page__item">
                <div class="center-page__item-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/chart-icon.png" alt="chart-icon" />
                </div>
                <h4 class="center-page__item-title">
                    Сильная команда
                </h4>
                <p class="center-page__item-text">
                    Правильные люди в правильном месте. Одновременно, мы готовы формировать и модифицировать роль под человека.
                </p>
            </li>
            <li class="teamforce-this__item center-page__item">
                <div class="center-page__item-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/chat-icon.png" alt="chat-icon" />
                </div>
                <h4 class="center-page__item-title">
                    Профессиональное развитие
                </h4>
                <p class="center-page__item-text">
                    Тренинги и воркшопы, участие
                    в конференциях.
                </p>
            </li>
            <li class="teamforce-this__item center-page__item">
                <div class="center-page__item-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/check-icon.png" alt="check-icon" />
                </div>
                <h4 class="center-page__item-title">
                    Менторство
                </h4>
                <p class="center-page__item-text">
                    Опытный наставник поможет влиться 
                    в проект и справиться с трудностями.
                </p>
            </li>
            <li class="teamforce-this__item center-page__item">
                <div class="center-page__item-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gear-icon.png" alt="gear-icon" />
                </div>
                <h4 class="center-page__item-title">
                    Гибкие рабочие условия
                </h4>
                <p class="center-page__item-text">
                    График и локация зависят от выбранного проекта.
                </p>
            </li>
            <li class="teamforce-this__item center-page__item">
                <div class="center-page__item-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-icon.png" alt="profile-icon" />
                </div>
                <h4 class="center-page__item-title">
                    Работа над крупнейшими проектами страны
                </h4>
                <p class="center-page__item-text">
                    100+ проектов для крупных компаний: Сбербанк, ВТБ, Россельхозбанк и т.д.
                </p>
            </li>
            <li class="teamforce-this__item center-page__item">
                <div class="center-page__item-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/calendar-icon.png" alt="calendar-icon" />
                </div>
                <h4 class="center-page__item-title">
                    Тимбилдинги
                </h4>
                <p class="center-page__item-text">
                    Совместные праздники, митапы и другие мероприятия.
                </p>
            </li>
        </ul>
    </div>
</section>
            <section class="quote _grey-section">
    <div class="_container">
        <div class="quote__content _grey-section__content">
            <div class="quote__wrapper">
                <div class="quote__wrapper-content">
                    <svg width="126" height="125" viewBox="0 0 126 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.8" d="M28.9 67.297C28.9 79.197 19.318 88.829 7.482 88.829V115.461C33.972 115.461 55.391 93.929 55.391 67.297V1H1V61.63H28.9V67.297ZM98.51 67.297C98.51 79.197 88.927 88.829 77.09 88.829V115.462C103.582 115.462 125 93.929 125 67.297V1H70.61V61.63H98.51V67.297Z" stroke="white" stroke-opacity="0.15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="quote__info">
                        <p class="quote__text">
                            Мы развиваемся, экспериментируем и учимся на практике — в этом сила <br />
                            нашей команды. За свои ошибки мы уже заплатили. Ценности, которые нас объединяют, описаны в Кодексе ТИМ ФОРС.
                        </p>
                        <div class="quote__user">
                            <div class="quote__user-avatar">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/gainanov-avatar.png" alt="gainanov-avatar" />
                            </div>
                            <div class="quote__user-info">
                                <p class="quote__user-name">Руслан Гайнанов</p>
                                <p class="quote__user-description">Генеральный директор компании ТИМ ФОРС, Основатель фонда «ТИМ ФОРС Альянс».</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/codex.html" class="quote__link _button-orange">
                    Кодекс
                    <svg xmlns="http://www.w3.org/2000/svg" width="86" height="15" viewBox="0 0 86 15" fill="none">
                        <path d="M85.7071 8.20711C86.0976 7.81658 86.0976 7.18342 85.7071 6.79289L79.3431 0.428932C78.9526 0.0384078 78.3195 0.0384078 77.9289 0.428932C77.5384 0.819457 77.5384 1.45262 77.9289 1.84315L83.5858 7.5L77.9289 13.1569C77.5384 13.5474 77.5384 14.1805 77.9289 14.5711C78.3195 14.9616 78.9526 14.9616 79.3431 14.5711L85.7071 8.20711ZM0 8.5H85V6.5H0V8.5Z" fill="#FAFAFA"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
            <section class="directions-section _grey-section">
    <div class="_container">
        <div class="_grey-section__content">
            <h2 class="_grey-section__title">Направления</h2>
            <ul class="directions-section__items">
                <li class="directions-section__item">
                    <a class="directions-section__item-link" data-response-modal="1">
                        Программирование
                        <svg width="86" height="16" viewBox="0 0 86 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M85.7071 8.70711C86.0976 8.31658 86.0976 7.68342 85.7071 7.29289L79.3431 0.928932C78.9526 0.538408 78.3195 0.538408 77.9289 0.928932C77.5384 1.31946 77.5384 1.95262 77.9289 2.34315L83.5858 8L77.9289 13.6569C77.5384 14.0474 77.5384 14.6805 77.9289 15.0711C78.3195 15.4616 78.9526 15.4616 79.3431 15.0711L85.7071 8.70711ZM0 9H85V7H0V9Z" fill="#FAFAFA"/>
                        </svg>    
                    </a>
                    <div class="directions-section__item-modal"  data-response-modal-info="1">
                        <p>Форма: Практика программирование</p>
                    </div>
                </li>
                <li class="directions-section__item">
                    <a class="directions-section__item-link" data-response-modal="2">
                        Бизнес-аналитика
                        <svg width="86" height="16" viewBox="0 0 86 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M85.7071 8.70711C86.0976 8.31658 86.0976 7.68342 85.7071 7.29289L79.3431 0.928932C78.9526 0.538408 78.3195 0.538408 77.9289 0.928932C77.5384 1.31946 77.5384 1.95262 77.9289 2.34315L83.5858 8L77.9289 13.6569C77.5384 14.0474 77.5384 14.6805 77.9289 15.0711C78.3195 15.4616 78.9526 15.4616 79.3431 15.0711L85.7071 8.70711ZM0 9H85V7H0V9Z" fill="#FAFAFA"/>
                        </svg>    
                    </a>
                    <div class="directions-section__item-modal"  data-response-modal-info="2">
                        <p>Форма: Бизнес-аналитика</p>
                    </div>
                </li>
                <li class="directions-section__item">
                    <a class="directions-section__item-link" data-response-modal="3">
                        UX/UI дизайн
                        <svg width="86" height="16" viewBox="0 0 86 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M85.7071 8.70711C86.0976 8.31658 86.0976 7.68342 85.7071 7.29289L79.3431 0.928932C78.9526 0.538408 78.3195 0.538408 77.9289 0.928932C77.5384 1.31946 77.5384 1.95262 77.9289 2.34315L83.5858 8L77.9289 13.6569C77.5384 14.0474 77.5384 14.6805 77.9289 15.0711C78.3195 15.4616 78.9526 15.4616 79.3431 15.0711L85.7071 8.70711ZM0 9H85V7H0V9Z" fill="#FAFAFA"/>
                        </svg>    
                    </a>
                    <div class="directions-section__item-modal"  data-response-modal-info="3">
                        <p>Форма: Бизнес-аналитика</p>
                    </div>
                </li>
                <li class="directions-section__item">
                    <a class="directions-section__item-link" data-response-modal="4">
                        Маркетинг
                        <svg width="86" height="16" viewBox="0 0 86 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M85.7071 8.70711C86.0976 8.31658 86.0976 7.68342 85.7071 7.29289L79.3431 0.928932C78.9526 0.538408 78.3195 0.538408 77.9289 0.928932C77.5384 1.31946 77.5384 1.95262 77.9289 2.34315L83.5858 8L77.9289 13.6569C77.5384 14.0474 77.5384 14.6805 77.9289 15.0711C78.3195 15.4616 78.9526 15.4616 79.3431 15.0711L85.7071 8.70711ZM0 9H85V7H0V9Z" fill="#FAFAFA"/>
                        </svg>    
                    </a>
                    <div class="directions-section__item-modal"  data-response-modal-info="4">
                        <p>Форма: Бизнес-аналитика</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/directions-bg.png" alt="directions-bg" class="directions-section__bg _desktop" />
    <img src="<?php echo get_template_directory_uri(); ?>/img/directions-bg-mobile.png" alt="directions-bg-mobile" class="directions-section__bg _mobile" />
    <div class="directions-section__dots">
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
</section>
            <?php get_template_part('/inc/contact-form'); ?>
        </main>

        <div class="modal-enter _modal" data-modal="modal-enter">
    <div class="modal-enter__content _modal-content" data-scrollbar="">
        <button class="modal-enter__close _modal-close" data-modal-button="modal-enter">
            <img src="<?php echo get_template_directory_uri(); ?>/img/close-icon.png" alt="close-icon">
        </button>
        <h3 class="modal-enter__title">Вступить в Альянс</h3>
        <form class="modal-enter__form" data-contact-form="enter">
            <div class="modal-enter__row">
                <input 
                    type="text" 
                    placeholder="Ваше имя"
                    maxlength="30"
                    class="modal-enter__input _input" 
                    data-input-required="enter"
                />
                <input 
                    type="email" 
                    placeholder="Ваш Email"
                    class="modal-enter__input _input"
                    data-input-required="enter" 
                />
            </div>
            <div class="modal-enter__row">
                <input 
                    type="tel" 
                    placeholder="+7 (000) 000-00-00"
                    class="modal-enter__input _input"
                    data-input-required="enter" 
                />
                <input 
                    type="text" 
                    placeholder="Название вашего проекта"
                    maxlength="50"
                    class="modal-enter__input _input" 
                />
            </div>
            <textarea class="modal-enter__textarea _textarea" placeholder="Задайте ваш вопрос"></textarea>
            <label class="modal-enter__checkbox _checkbox">
                <input type="checkbox" hidden data-input-required="enter" />
                <div class="modal-enter__box _checkbox-box">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7071 6.65422C20.0976 7.04475 20.0976 7.67791 19.7071 8.06843L10.7071 17.0684C10.3166 17.459 9.68342 17.459 9.29289 17.0684L4.29289 12.0684C3.90237 11.6779 3.90237 11.0447 4.29289 10.6542C4.68342 10.2637 5.31658 10.2637 5.70711 10.6542L10 14.9471L18.2929 6.65422C18.6834 6.2637 19.3166 6.2637 19.7071 6.65422Z" fill="white"/>
                    </svg>                            
                </div>
                <p class="modal-enter__text _checkbox-text">
                    Я выражаю свое согласие на 
                    <a href="#" target="_blank" class="_text-orange">
                        обработку персональных данных
                    </a>
                </p>
            </label>
            <label class="modal-enter__checkbox _checkbox">
                <input type="checkbox" hidden checked />
                <div class="modal-enter__box _checkbox-box">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7071 6.65422C20.0976 7.04475 20.0976 7.67791 19.7071 8.06843L10.7071 17.0684C10.3166 17.459 9.68342 17.459 9.29289 17.0684L4.29289 12.0684C3.90237 11.6779 3.90237 11.0447 4.29289 10.6542C4.68342 10.2637 5.31658 10.2637 5.70711 10.6542L10 14.9471L18.2929 6.65422C18.6834 6.2637 19.3166 6.2637 19.7071 6.65422Z" fill="white"/>
                    </svg>                            
                </div>
                <p class="modal-enter__text _checkbox-text">
                    Я соглашаюсь с подпиской на новостную рассылку
                </p>
            </label>
            <button type="submit" disabled class="modal-enter__submit _button-submit _button-big">
                Отправить
            </button>
        </form>
    </div>
</div>
        <div class="modal-enter _modal" data-modal="modal-response">
    <div class="modal-enter__content _modal-content" data-scrollbar="">
        <button class="modal-enter__close _modal-close" data-modal-button="modal-response">
            <img src="<?php echo get_template_directory_uri(); ?>/img/close-icon.png" alt="close-icon">
        </button>
        <h3 class="modal-enter__title">Отклик</h3>
        <form class="modal-enter__form" data-contact-form="response">
            <input 
                type="text" 
                value="Форма: " 
                hidden 
                data-response-form-type="" 
            />
            <h4 class="modal-enter__title-small">Контактная информация</h4>
            <div class="modal-enter__row">
                <input 
                    type="text" 
                    placeholder="Фамилия"
                    maxlength="30"
                    class="modal-enter__input _input" 
                    data-input-required="response"
                /> 
                <input 
                    type="text" 
                    placeholder="Имя"
                    class="modal-enter__input _input"
                    data-input-required="response" 
                />
                <input 
                    type="text" 
                    placeholder="Отчество"
                    class="modal-enter__input _input"
                    data-input-required="response" 
                />
            </div>
            <div class="modal-enter__row">
                <input 
                    type="tel" 
                    placeholder="+7 (000) 000-00-00"
                    class="modal-enter__input _input"
                    data-input-required="response" 
                />
                <input 
                    type="email" 
                    placeholder="Email"
                    maxlength="50"
                    class="modal-enter__input _input" 
                    data-input-required="response" 
                />
                <input 
                    type="text" 
                    placeholder="Город"
                    maxlength="30"
                    class="modal-enter__input _input" 
                    data-input-required="response" 
                />
            </div>
            <h4 class="modal-enter__title-small">Образование</h4>
            <div class="modal-enter__row">
                <input 
                    type="text" 
                    placeholder="Название Вуза"
                    class="modal-enter__input _input"
                    data-input-required="response" 
                />
            </div>
            <div class="modal-enter__row">
                <input 
                    type="text" 
                    placeholder="Специальность"
                    class="modal-enter__input _input"
                    data-input-required="response" 
                />
                <input 
                    type="text" 
                    placeholder="Год выпуска"
                    class="modal-enter__input _input"
                    data-input-required="response" 
                />
            </div>
            <h4 class="modal-enter__title-small">Резюме</h4>
            <div class="modal-enter__drag-area">
                <p class="modal-enter__drag-first">
                    Перетащите резюме сюда <br />
                    или <span class="_text-orange">выберите из папки</span>
                </p>
                <input type="file" accept=".pdf,.doc,.docx,.rtf" />
            </div>
            <p class="modal-enter__drag-text">Допустимые форматы: .pdf, .doc, .docx, .rtf</p>
            <div class="modal-enter__row">
                <input 
                    type="text" 
                    placeholder="Или укажите ссылку на портфолио (github, behance, dribbble)"
                    class="modal-enter__input _input"
                />
            </div>
            <h4 class="modal-enter__title-small">Сопроводительное письмо</h4>
            <textarea style="min-height: 80px;" class="modal-enter__textarea _textarea" placeholder="Расскажи, чем тебя заинтересовала стажировка, какие навыки или достижения у тебя есть.  Любая информация, которую сочтешь нужной."></textarea>
            <label class="modal-enter__checkbox _checkbox">
                <input type="checkbox" hidden checked data-input-required="response" />
                <div class="modal-enter__box _checkbox-box">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7071 6.65422C20.0976 7.04475 20.0976 7.67791 19.7071 8.06843L10.7071 17.0684C10.3166 17.459 9.68342 17.459 9.29289 17.0684L4.29289 12.0684C3.90237 11.6779 3.90237 11.0447 4.29289 10.6542C4.68342 10.2637 5.31658 10.2637 5.70711 10.6542L10 14.9471L18.2929 6.65422C18.6834 6.2637 19.3166 6.2637 19.7071 6.65422Z" fill="white"/>
                    </svg>                            
                </div>
                <p class="modal-enter__text _checkbox-text">
                    Я выражаю свое согласие на 
                    <a href="#" target="_blank" class="_text-orange">
                        обработку персональных данных
                    </a>
                </p>
            </label>
            <label class="modal-enter__checkbox _checkbox">
                <input type="checkbox" hidden checked />
                <div class="modal-enter__box _checkbox-box">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7071 6.65422C20.0976 7.04475 20.0976 7.67791 19.7071 8.06843L10.7071 17.0684C10.3166 17.459 9.68342 17.459 9.29289 17.0684L4.29289 12.0684C3.90237 11.6779 3.90237 11.0447 4.29289 10.6542C4.68342 10.2637 5.31658 10.2637 5.70711 10.6542L10 14.9471L18.2929 6.65422C18.6834 6.2637 19.3166 6.2637 19.7071 6.65422Z" fill="white"/>
                    </svg>                            
                </div>
                <p class="modal-enter__text _checkbox-text">
                    Я соглашаюсь с подпиской на новостную рассылку
                </p>
            </label>
            <button type="submit" disabled class="modal-enter__submit _button-submit _button-big">
                Отправить
            </button>
        </form>
    </div>
</div>
<?php get_footer(); ?>
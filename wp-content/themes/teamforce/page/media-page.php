<?php
/*
 * Template name: Медиа
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
                        <a class="breadcrumbs__link breadcrumbs__link-marked">Медиа</a>
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
           
            <section class="media-search _grey-section">
    <div class="_container">
        <div class="media-search__content _grey-section__content">
            <h1 class="_grey-section__title">МЕДИА</h1>
            <form class="media-search__form">
                <div class="media-search__form-input">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 18C14.866 18 18 14.866 18 11C18 7.13401 14.866 4 11 4C7.13401 4 4 7.13401 4 11C4 14.866 7.13401 18 11 18Z" stroke="#6B6B6B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 20L16 16" stroke="#6B6B6B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                    
                    <input 
                        type="text"
                        placeholder="Поиск" 
                    />
                    <button type="submit" class="media-search__form-submit _button-orange">
                        Искать
                    </button>
                </div>
            </form>
            <ul class="media-search__tags">
                <li class="media-search__tags-item">
                    <a href="#" class="media-search__tags-link media-search__tag">
                        <span>🎥</span> 
                        Видео
                    </a>
                </li>
                <li class="media-search__tags-item">
                    <a href="#" class="media-search__tags-link media-search__tag">
                        <span>🎥</span> 
                        Видео
                    </a>
                </li>
                <li class="media-search__tags-item">
                    <a href="#" class="media-search__tags-link media-search__tag">
                        <span>🎥</span> 
                        Видео
                    </a>
                </li>
                <li class="media-search__tags-item">
                    <a href="#" class="media-search__tags-link media-search__tag">
                        <span>🚀️</span> 
                        Акселератор
                    </a>
                </li>
            </ul>
            <ul class="media-search__row media-search__row-big">
                <li class="media-search__item media-search__item-white">
                    <div class="media-search__item-content">
                        <p class="media-search__item-date">17.05.2021</p>
                        <h4 class="media-search__item-title">
                            Шаги к новым высотам 
                            в обсуждении перспектив ИТ-МСП
                        </h4>
                        <p class="media-search__item-text">
                            14 октября в Сколково мы провели пятый закрытый бизнес-слёт «Инвестиции в рост ИТ-МСП» для бенефициаров ИТ-МСП и лидеров инвестиционного рынка.
                            В рамках слета основатель компании «ТИМ ФОРС» Гайнанов Руслан Шамильевич представил фонд «ТИМ ФОРС Альянс» и его стратегию, 
                            а приглашенные эксперты обсудили перспективы этого фонда, инструменты роста ИТ-МСП бизнеса, 
                            а также поздравили ТИМ ФОРС с 15-летием!
                        </p>
                    </div>
                    <ul class="media-search__item-tags">
                        <li class="media-search__item-tag media-search__tag">
                            <span>💼️️</span>
                            Бизнес
                        </li>
                        <li class="media-search__item-tag media-search__tag">
                            <span>💼️️</span>
                            Бизнес-технологии
                        </li>
                        <li class="media-search__item-tag media-search__tag">
                            <span>💼️️</span>
                            Среднее професиональное образование
                        </li>
                    </ul>
                </li>
                <li class="media-search__item media-search__item-blur">
                    <div class="media-search__item-content">
                        <p class="media-search__item-date">17.05.2021</p>
                        <h4 class="media-search__item-title">
                            Шаги к новым высотам 
                            в обсуждении перспектив ИТ-МСП
                        </h4>
                        <p class="media-search__item-text">
                            14 октября в Сколково мы провели пятый закрытый бизнес-слёт «Инвестиции в рост ИТ-МСП» для бенефициаров ИТ-МСП и лидеров инвестиционного рынка.
                            В рамках слета основатель компании «ТИМ ФОРС» Гайнанов Руслан Шамильевич представил фонд «ТИМ ФОРС Альянс» и его стратегию, 
                            а приглашенные эксперты обсудили перспективы этого фонда, инструменты роста ИТ-МСП бизнеса, 
                            а также поздравили ТИМ ФОРС с 15-летием!
                        </p>
                    </div>
                    <ul class="media-search__item-tags">
                        <li class="media-search__item-tag media-search__tag">
                            <span>💼️️</span>
                            Бизнес
                        </li>
                        <li class="media-search__item-tag media-search__tag">
                            <span>💼️️</span>
                            Бизнес-технологии
                        </li>
                        <li class="media-search__item-tag media-search__tag">
                            <span>💼️️</span>
                            Среднее професиональное образование
                        </li>
                    </ul>
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/img/about-us-team-img.jpg" 
                        alt="media-search-bg" 
                        class="media-search__item-bg" 
                    />
                </li>
                <li class="media-search__item media-search__item-orange">
                    <div class="media-search__item-content">
                        <p class="media-search__item-date">17.05.2021</p>
                        <h4 class="media-search__item-title">
                            Шаги к новым высотам 
                            в обсуждении перспектив ИТ-МСП
                        </h4>
                        <p class="media-search__item-text">
                            14 октября в Сколково мы провели пятый закрытый бизнес-слёт «Инвестиции в рост ИТ-МСП» для бенефициаров ИТ-МСП и лидеров инвестиционного рынка.
                            В рамках слета основатель компании «ТИМ ФОРС» Гайнанов Руслан Шамильевич представил фонд «ТИМ ФОРС Альянс» и его стратегию, 
                            а приглашенные эксперты обсудили перспективы этого фонда, инструменты роста ИТ-МСП бизнеса, 
                            а также поздравили ТИМ ФОРС с 15-летием!
                        </p>
                    </div>
                    <ul class="media-search__item-tags">
                        <li class="media-search__item-tag media-search__tag">
                            <span>💼️️</span>
                            Бизнес
                        </li>
                        <li class="media-search__item-tag media-search__tag">
                            <span>💼️️</span>
                            Бизнес-технологии
                        </li>
                        <li class="media-search__item-tag media-search__tag">
                            <span>💼️️</span>
                            Среднее професиональное образование
                        </li>
                    </ul>
                </li>
                <li class="media-search__item">
                    <div class="media-search__item-content">
                        <p class="media-search__item-date">17.05.2021</p>
                        <h4 class="media-search__item-title">
                            Шаги к новым высотам 
                            в обсуждении перспектив ИТ-МСП
                        </h4>
                        <p class="media-search__item-text">
                            14 октября в Сколково мы провели пятый закрытый бизнес-слёт «Инвестиции в рост ИТ-МСП» для бенефициаров ИТ-МСП и лидеров инвестиционного рынка.
                            В рамках слета основатель компании «ТИМ ФОРС» Гайнанов Руслан Шамильевич представил фонд «ТИМ ФОРС Альянс» и его стратегию, 
                            а приглашенные эксперты обсудили перспективы этого фонда, инструменты роста ИТ-МСП бизнеса, 
                            а также поздравили ТИМ ФОРС с 15-летием!
                        </p>
                    </div>
                    <ul class="media-search__item-tags">
                        <li class="media-search__item-tag media-search__tag">
                            <span>💼️️</span>
                            Бизнес
                        </li>
                        <li class="media-search__item-tag media-search__tag">
                            <span>💼️️</span>
                            Бизнес-технологии
                        </li>
                        <li class="media-search__item-tag media-search__tag">
                            <span>💼️️</span>
                            Среднее професиональное образование
                        </li>
                    </ul>
                </li>
                <li class="media-search__item">
                    <div class="media-search__item-content">
                        <p class="media-search__item-date">17.05.2021</p>
                        <h4 class="media-search__item-title">
                            Шаги к новым высотам 
                            в обсуждении перспектив ИТ-МСП
                        </h4>
                        <p class="media-search__item-text">
                            14 октября в Сколково мы провели пятый закрытый бизнес-слёт «Инвестиции в рост ИТ-МСП» для бенефициаров ИТ-МСП и лидеров инвестиционного рынка.
                            В рамках слета основатель компании «ТИМ ФОРС» Гайнанов Руслан Шамильевич представил фонд «ТИМ ФОРС Альянс» и его стратегию, 
                            а приглашенные эксперты обсудили перспективы этого фонда, инструменты роста ИТ-МСП бизнеса, 
                            а также поздравили ТИМ ФОРС с 15-летием!
                        </p>
                    </div>
                    <ul class="media-search__item-tags">
                        <li class="media-search__item-tag media-search__tag">
                            <span>💼️️</span>
                            Бизнес
                        </li>
                        <li class="media-search__item-tag media-search__tag">
                            <span>💼️️</span>
                            Бизнес-технологии
                        </li>
                        <li class="media-search__item-tag media-search__tag">
                            <span>💼️️</span>
                            Среднее професиональное образование
                        </li>
                    </ul>
                </li>
                <li class="media-search__item">
                    <div class="media-search__item-content">
                        <p class="media-search__item-date">17.05.2021</p>
                        <h4 class="media-search__item-title">
                            Шаги к новым высотам 
                            в обсуждении перспектив ИТ-МСП
                        </h4>
                        <p class="media-search__item-text">
                            14 октября в Сколково мы провели пятый закрытый бизнес-слёт «Инвестиции в рост ИТ-МСП» для бенефициаров ИТ-МСП и лидеров инвестиционного рынка.
                            В рамках слета основатель компании «ТИМ ФОРС» Гайнанов Руслан Шамильевич представил фонд «ТИМ ФОРС Альянс» и его стратегию, 
                            а приглашенные эксперты обсудили перспективы этого фонда, инструменты роста ИТ-МСП бизнеса, 
                            а также поздравили ТИМ ФОРС с 15-летием!
                        </p>
                    </div>
                    <ul class="media-search__item-tags">
                        <li class="media-search__item-tag media-search__tag">
                            <span>💼️️</span>
                            <span>Бизнес</span>
                        </li>
                        <li class="media-search__item-tag media-search__tag">
                            <span>💼️️</span>
                            Бизнес-технологии
                        </li>
                        <li class="media-search__item-tag media-search__tag">
                            <span>💼️️</span>
                            Среднее професиональное образование
                        </li>
                    </ul>
                </li>
            </ul>
            <a href="#" class="media-search__main">
                <div class="media-search__main-info">
                    <p class="media-search__main-date">17.05.2021</p>
                    <h4 class="media-search__main-title">
                        Шаги к новым высотам 
                        в обсуждении перспектив 
                        ИТ-МСП
                    </h4>
                    <p class="media-search__main-text">
                        4 октября в Сколково мы провели пятый закрытый бизнес-слёт «Инвестиции в рост ИТ-МСП» для бенефициаров ИТ-МСП и лидеров инвестиционного рынка. 
                    </p>
                    <p class="media-search__main-text">
                        В рамках слета основатель компании «ТИМ ФОРС» Гайнанов Руслан Шамильевич представил фонд «ТИМ ФОРС Альянс» и его стратегию, а приглашенные эксперты обсудили перспективы этого фонда, инструменты роста ИТ-МСП бизнеса, а также поздравили ТИМ ФОРС с 15-летием!
                    </p>
                    <ul class="media-search__item-tags">
                        <li class="media-search__item-tag media-search__tag">
                            <span>💼️️</span>
                            <span>Бизнес</span>
                        </li>
                        <li class="media-search__item-tag media-search__tag">
                            <span>💼️️</span>
                            Бизнес-технологии
                        </li>
                        <li class="media-search__item-tag media-search__tag">
                            <span>💼️️</span>
                            Среднее професиональное образование
                        </li>
                    </ul>
                </div>
                <img 
                    src="<?php echo get_template_directory_uri(); ?>/img/about-us-team-img.jpg" 
                    alt="media-search-main-bg"  
                    class="media-search__main-img" 
                />
            </a>
        </div>
    </div>
</section>
            <section class="media-form _grey-section">
    <img 
        src="<?php echo get_template_directory_uri(); ?>/img/media-contact-bg.png" 
        alt="media-contact-bg" 
        class="media-form__bg" 
    />
    <div class="media-form__content _container">
        <form class="media-form__form" data-contact-form="media-contact">
            <h2 class="media-form__title">Будьте в курсе новостей</h2>
            <p class="media-form__text">
                Первыми узнавайте актуальную информацию нашей компании
            </p>
            <div class="media-form__row">
                <input 
                    type="email" 
                    class="media-form__input _input"
                    data-input-required="media-contact" 
                    placeholder="Ваш Email"
                />
                <button class="media-form__submit _button-orange">
                    Подписаться
                </button>
            </div>
            <label class="contact-form__checkbox _checkbox">
                <input 
                    type="checkbox" 
                    hidden 
                    data-input-required="media-contact" 
                />
                <div class="contact-form__box _checkbox-box">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7071 6.65422C20.0976 7.04475 20.0976 7.67791 19.7071 8.06843L10.7071 17.0684C10.3166 17.459 9.68342 17.459 9.29289 17.0684L4.29289 12.0684C3.90237 11.6779 3.90237 11.0447 4.29289 10.6542C4.68342 10.2637 5.31658 10.2637 5.70711 10.6542L10 14.9471L18.2929 6.65422C18.6834 6.2637 19.3166 6.2637 19.7071 6.65422Z" fill="white"/>
                    </svg>                            
                </div>
                <p class="contact-form__text _checkbox-text">
                    Я выражаю свое согласие на 
                    <a href="#" target="_blank" class="_text-orange">
                        обработку персональных данных
                    </a>
                </p>
            </label>
            <label class="contact-form__checkbox _checkbox">
                <input 
                    type="checkbox" 
                    hidden 
                />
                <div class="contact-form__box _checkbox-box">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7071 6.65422C20.0976 7.04475 20.0976 7.67791 19.7071 8.06843L10.7071 17.0684C10.3166 17.459 9.68342 17.459 9.29289 17.0684L4.29289 12.0684C3.90237 11.6779 3.90237 11.0447 4.29289 10.6542C4.68342 10.2637 5.31658 10.2637 5.70711 10.6542L10 14.9471L18.2929 6.65422C18.6834 6.2637 19.3166 6.2637 19.7071 6.65422Z" fill="white"/>
                    </svg>                            
                </div>
                <p class="contact-form__text _checkbox-text">
                    Я соглашаюсь с подпиской на новостную рассылку
                </p>
            </label>
        </form>
    </div>
</section>
            <?php get_template_part('/inc/contact-form'); ?>
        </main>
<?php
get_footer();
?>
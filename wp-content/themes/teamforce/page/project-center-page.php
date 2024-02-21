<?php
/*
 * Template name: Проектный центр 
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
                        <a href="<?php echo get_page_link(77); ?>" class="breadcrumbs__link">Cервисы</a>
                    </li>
                    <li class="breadcrumbs__item last">
                        <a class="breadcrumbs__link breadcrumbs__link-marked">Проектный центр</a>
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
<section class="center-initial project-center-initial">
    <div class="services-main__mobile-text">
        <svg width="37" height="279" viewBox="0 0 37 279" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.5" d="M2.58985 242.541H2.08985V243.041L2.08985 277.09V277.59H2.58985H39H39.5V277.09V265.41V264.91H39H13.5L13.5 255.246H39H39.5V254.746V243.041V242.541H39H2.58985ZM2.08985 235.246V235.746H2.58985H39H39.5V235.246L39.5 223.566V223.066H39H29.623V218.107C29.623 213.771 28.3447 210.243 25.7489 207.577L25.3906 207.926L25.7489 207.577C23.1425 204.9 19.836 203.566 15.8691 203.566C11.8866 203.566 8.5796 204.899 5.98941 207.577C3.3769 210.243 2.08985 213.771 2.08985 218.107L2.08985 235.246ZM26.7111 174.229L26.7129 174.23C28.3264 175.844 29.1309 177.806 29.1309 180.148C29.1309 182.473 28.3271 184.436 26.7113 186.068C25.0973 187.681 23.1437 188.484 20.8203 188.484C18.4783 188.484 16.5159 187.68 14.9024 186.066C13.2701 184.434 12.459 182.471 12.459 180.148C12.459 177.808 13.2707 175.846 14.9007 174.232L14.9041 174.229C16.5181 172.599 18.4799 171.787 20.8203 171.787C23.1428 171.787 25.0965 172.598 26.7111 174.229ZM34.7401 165.178L34.3789 165.523L34.7401 165.178C30.8585 161.123 26.2019 159.082 20.7949 159.082C15.3886 159.082 10.7405 161.122 6.87588 165.177C2.98909 169.22 1.04883 174.213 1.04883 180.123C1.04883 186.033 2.98905 191.034 6.87511 195.094C10.7402 199.132 15.3886 201.164 20.7949 201.164C26.2011 201.164 30.8576 199.132 34.7394 195.095L34.7409 195.093C38.6097 191.033 40.541 186.032 40.541 180.123C40.541 174.214 38.6097 169.221 34.7401 165.178ZM29.377 123.967H28.877V124.467V141.664H25.459V129.164V128.664H24.959H16.123H15.623V129.164V141.664H12.7129L12.7129 125V124.5H12.2129H2.58984H2.08984V125L2.08984 153.844V154.344H2.58984H39H39.5V153.844L39.5 124.467V123.967H39H29.377ZM2.58984 106.32H2.08984V106.82L2.08984 118.5V119H2.58984H39H39.5V118.5V106.82V106.32H39H30.3392L27.114 103.744L39.2676 96.0454L39.5 95.8982V95.623V82.623V81.7136L38.7321 82.2009L17.7109 95.5393L2.90878 83.279L2.41396 82.8691H2.58984H13.2539H13.7539V82.3691L13.7539 73.2461H39H39.5V72.7461V61.041V60.541H39H13.7539L13.7539 51.418V50.918H13.2539H2.58984H2.08984V51.418L2.08984 82.3691L2.08984 82.6007L2.08984 82.8691L2.08984 83.6641L2.08984 96.6133V96.8504L2.27348 97.0005L13.6798 106.32H2.58984ZM2.58984 0.492189L2.08984 0.492189V0.992188L2.08984 12.6973V13.1973H2.58984L39 13.1973H39.5V12.6973V0.992188V0.492188H39L2.58984 0.492189ZM39 46.9922H39.5V46.4922V29.8613C39.5 25.5252 38.2216 21.9973 35.6258 19.3309L35.6258 19.3309C33.0194 16.654 29.713 15.3203 25.7461 15.3203C21.7633 15.3203 18.456 16.6534 15.8658 19.3315C13.2704 21.9979 11.9922 25.5256 11.9922 29.8613V34.3125H2.58984H2.08984V34.8125L2.08984 46.4922V46.9922H2.58984H39ZM18.2129 223.066H13.5V218.869C13.5 218.085 13.7398 217.468 14.2017 216.978C14.6683 216.483 15.2149 216.246 15.8691 216.246C16.5221 216.246 17.0678 216.482 17.5338 216.975C17.9795 217.464 18.2129 218.082 18.2129 218.869V223.066ZM25.7461 28.0254C26.3991 28.0254 26.9448 28.2612 27.4109 28.7542C27.8565 29.243 28.0898 29.8618 28.0898 30.6484V34.3125H23.3769V30.6484C23.3769 29.8647 23.6168 29.2469 24.0786 28.7571C24.5453 28.2622 25.0918 28.0254 25.7461 28.0254Z" stroke="white"/>
        </svg>            
    </div>
    <div class="center-initial__content _container">
        <div class="center-initial__left">
            <h1 class="center-initial__title _title-initial">
                Проектный центр
            </h1>
            <p class="center-initial__text _text-initial">
                Развиваем Open Source, <br /> 
                вовлекаем Альянс, формируем <br /> 
                процессы, контролируем задачи, <br /> 
                отвечаем за результат
            </p>
        </div>
        <div class="center-initial__bg">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/project-center-bg-first.png" 
                alt="resource-center-bg-first"
                class="center-initial__bg-first _luminosity _desktop project-center-initial__bg" 
            />
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/project-center-bg-first-mobile.png" 
                alt="resource-center-bg-first"
                class="center-initial__bg-first _luminosity _mobile project-center-initial__bg" 
            />
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/center-circle-bg.png" 
                alt="resource-center-bg-first"
                class="center-initial__bg-circles" 
            />
        </div>
    </div>
</section>
            <section class="teamforce-this _grey-section">
    <div class="teamforce-this__content _container">
        <h2 class="teamforce-this__title _title-medium">
            <span class="_text-orange">ТИМ ФОРС</span> это
        </h2>
        <ul class="teamforce-this__items">
            <li class="teamforce-this__item center-page__item">
                <div class="center-page__item-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/chart-icon.png" alt="chart-icon" />
                </div>
                <h4 class="center-page__item-title">
                    Опыт
                </h4>
                <p class="center-page__item-text">
                    <span class="_text-orange">435+</span> проектов в разных сферах: финтех, ритейл, энергетика и т.д
                </p>
            </li>
            <li class="teamforce-this__item center-page__item">
                <div class="center-page__item-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-icon.png" alt="profile-icon" />
                </div>
                <h4 class="center-page__item-title">
                    Люди
                </h4>
                <p class="center-page__item-text">
                    <span class="_text-orange">350+</span> IT специалистов, <span class="_text-orange">45+</span> специалистов бэк-офиса
                </p>
            </li>
            <li class="teamforce-this__item center-page__item">
                <div class="center-page__item-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/check-icon.png" alt="check-icon" />
                </div>
                <h4 class="center-page__item-title">
                    Гарантии
                </h4>
                <p class="center-page__item-text">
                    Разработка актуальных для рынка продуктов с полным сопровождением
                </p>
            </li>
            <li class="teamforce-this__item center-page__item">
                <div class="center-page__item-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gear-icon.png" alt="gear-icon" />
                </div>
                <h4 class="center-page__item-title">
                    Подбор команд
                </h4>
                <p class="center-page__item-text">
                    Оперативный подбор кандидатов под задачи ваших проектов
                </p>
            </li>
        </ul>
    </div>
</section>
            <section class="smart-staffing _grey-section">
    <svg class="smart-staffing__dots" width="323" height="638" viewBox="0 0 323 638" fill="none" xmlns="http://www.w3.org/2000/svg">
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
        <ellipse cx="76.349" cy="449.456" rx="1.69607" ry="1.69666" transform="rotate(-90 76.349 449.456)" fill="#9198A0"/>
        <ellipse cx="76.349" cy="636.296" rx="1.69607" ry="1.69666" transform="rotate(-90 76.349 636.296)" fill="#9198A0"/>
        <ellipse cx="76.349" cy="412.144" rx="1.69607" ry="1.69666" transform="rotate(-90 76.349 412.144)" fill="#9198A0"/>
        <ellipse cx="76.349" cy="598.984" rx="1.69607" ry="1.69666" transform="rotate(-90 76.349 598.984)" fill="#9198A0"/>
        <ellipse cx="76.349" cy="374.831" rx="1.69607" ry="1.69666" transform="rotate(-90 76.349 374.831)" fill="#9198A0"/>
        <ellipse cx="76.349" cy="561.671" rx="1.69607" ry="1.69666" transform="rotate(-90 76.349 561.671)" fill="#9198A0"/>
        <ellipse cx="76.349" cy="337.515" rx="1.69607" ry="1.69666" transform="rotate(-90 76.349 337.515)" fill="#9198A0"/>
        <ellipse cx="76.349" cy="524.359" rx="1.69607" ry="1.69666" transform="rotate(-90 76.349 524.359)" fill="#9198A0"/>
        <ellipse cx="76.349" cy="300.202" rx="1.69607" ry="1.69666" transform="rotate(-90 76.349 300.202)" fill="#9198A0"/>
        <ellipse cx="76.349" cy="487.042" rx="1.69607" ry="1.69666" transform="rotate(-90 76.349 487.042)" fill="#9198A0"/>
        <ellipse cx="76.349" cy="262.89" rx="1.69607" ry="1.69666" transform="rotate(-90 76.349 262.89)" fill="#9198A0"/>
        <ellipse cx="76.349" cy="225.577" rx="1.69607" ry="1.69666" transform="rotate(-90 76.349 225.577)" fill="#9198A0"/>
        <ellipse cx="76.349" cy="188.261" rx="1.69607" ry="1.69666" transform="rotate(-90 76.349 188.261)" fill="#9198A0"/>
        <ellipse cx="76.349" cy="150.948" rx="1.69607" ry="1.69666" transform="rotate(-90 76.349 150.948)" fill="#9198A0"/>
        <ellipse cx="76.349" cy="113.636" rx="1.69607" ry="1.69666" transform="rotate(-90 76.349 113.636)" fill="#9198A0"/>
        <ellipse cx="76.349" cy="76.3235" rx="1.69607" ry="1.69666" transform="rotate(-90 76.349 76.3235)" fill="#9198A0"/>
        <ellipse cx="76.349" cy="39.0071" rx="1.69607" ry="1.69666" transform="rotate(-90 76.349 39.0071)" fill="#9198A0"/>
        <ellipse cx="76.349" cy="1.69456" rx="1.69607" ry="1.69666" transform="rotate(-90 76.349 1.69456)" fill="#9198A0"/>
        <ellipse cx="113.677" cy="449.456" rx="1.69607" ry="1.69666" transform="rotate(-90 113.677 449.456)" fill="#9198A0"/>
        <ellipse cx="113.677" cy="636.296" rx="1.69607" ry="1.69666" transform="rotate(-90 113.677 636.296)" fill="#9198A0"/>
        <ellipse cx="113.677" cy="412.144" rx="1.69607" ry="1.69666" transform="rotate(-90 113.677 412.144)" fill="#9198A0"/>
        <ellipse cx="113.677" cy="598.984" rx="1.69607" ry="1.69666" transform="rotate(-90 113.677 598.984)" fill="#9198A0"/>
        <ellipse cx="113.677" cy="374.831" rx="1.69607" ry="1.69666" transform="rotate(-90 113.677 374.831)" fill="#9198A0"/>
        <ellipse cx="113.677" cy="561.671" rx="1.69607" ry="1.69666" transform="rotate(-90 113.677 561.671)" fill="#9198A0"/>
        <ellipse cx="113.677" cy="337.515" rx="1.69607" ry="1.69666" transform="rotate(-90 113.677 337.515)" fill="#9198A0"/>
        <ellipse cx="113.677" cy="524.359" rx="1.69607" ry="1.69666" transform="rotate(-90 113.677 524.359)" fill="#9198A0"/>
        <ellipse cx="113.677" cy="300.202" rx="1.69607" ry="1.69666" transform="rotate(-90 113.677 300.202)" fill="#9198A0"/>
        <ellipse cx="113.677" cy="487.042" rx="1.69607" ry="1.69666" transform="rotate(-90 113.677 487.042)" fill="#9198A0"/>
        <ellipse cx="113.677" cy="262.89" rx="1.69607" ry="1.69666" transform="rotate(-90 113.677 262.89)" fill="#9198A0"/>
        <ellipse cx="113.677" cy="225.577" rx="1.69607" ry="1.69666" transform="rotate(-90 113.677 225.577)" fill="#9198A0"/>
        <ellipse cx="113.677" cy="188.261" rx="1.69607" ry="1.69666" transform="rotate(-90 113.677 188.261)" fill="#9198A0"/>
        <ellipse cx="113.677" cy="150.948" rx="1.69607" ry="1.69666" transform="rotate(-90 113.677 150.948)" fill="#9198A0"/>
        <ellipse cx="113.677" cy="113.636" rx="1.69607" ry="1.69666" transform="rotate(-90 113.677 113.636)" fill="#9198A0"/>
        <ellipse cx="113.677" cy="76.3235" rx="1.69607" ry="1.69666" transform="rotate(-90 113.677 76.3235)" fill="#9198A0"/>
        <ellipse cx="113.677" cy="39.0071" rx="1.69607" ry="1.69666" transform="rotate(-90 113.677 39.0071)" fill="#9198A0"/>
        <ellipse cx="113.677" cy="1.69456" rx="1.69607" ry="1.69666" transform="rotate(-90 113.677 1.69456)" fill="#9198A0"/>
        <ellipse cx="151.001" cy="449.456" rx="1.69607" ry="1.69666" transform="rotate(-90 151.001 449.456)" fill="#9198A0"/>
        <ellipse cx="151.001" cy="636.296" rx="1.69607" ry="1.69666" transform="rotate(-90 151.001 636.296)" fill="#9198A0"/>
        <ellipse cx="151.001" cy="412.144" rx="1.69607" ry="1.69666" transform="rotate(-90 151.001 412.144)" fill="#9198A0"/>
        <ellipse cx="151.001" cy="598.984" rx="1.69607" ry="1.69666" transform="rotate(-90 151.001 598.984)" fill="#9198A0"/>
        <ellipse cx="151.001" cy="374.831" rx="1.69607" ry="1.69666" transform="rotate(-90 151.001 374.831)" fill="#9198A0"/>
        <ellipse cx="151.001" cy="561.671" rx="1.69607" ry="1.69666" transform="rotate(-90 151.001 561.671)" fill="#9198A0"/>
        <ellipse cx="151.001" cy="337.515" rx="1.69607" ry="1.69666" transform="rotate(-90 151.001 337.515)" fill="#9198A0"/>
        <ellipse cx="151.001" cy="524.359" rx="1.69607" ry="1.69666" transform="rotate(-90 151.001 524.359)" fill="#9198A0"/>
        <ellipse cx="151.001" cy="487.042" rx="1.69607" ry="1.69666" transform="rotate(-90 151.001 487.042)" fill="#9198A0"/>
        <ellipse cx="151.001" cy="262.89" rx="1.69607" ry="1.69666" transform="rotate(-90 151.001 262.89)" fill="#9198A0"/>
        <ellipse cx="151.001" cy="225.577" rx="1.69607" ry="1.69666" transform="rotate(-90 151.001 225.577)" fill="#9198A0"/>
        <ellipse cx="151.001" cy="188.261" rx="1.69607" ry="1.69666" transform="rotate(-90 151.001 188.261)" fill="#9198A0"/>
        <ellipse cx="151.001" cy="150.948" rx="1.69607" ry="1.69666" transform="rotate(-90 151.001 150.948)" fill="#9198A0"/>
        <ellipse cx="151.001" cy="113.636" rx="1.69607" ry="1.69666" transform="rotate(-90 151.001 113.636)" fill="#9198A0"/>
        <ellipse cx="151.001" cy="76.3235" rx="1.69607" ry="1.69666" transform="rotate(-90 151.001 76.3235)" fill="#9198A0"/>
        <ellipse cx="151.001" cy="39.0071" rx="1.69607" ry="1.69666" transform="rotate(-90 151.001 39.0071)" fill="#9198A0"/>
        <ellipse cx="151.001" cy="1.69456" rx="1.69607" ry="1.69666" transform="rotate(-90 151.001 1.69456)" fill="#9198A0"/>
        <ellipse cx="188.329" cy="449.456" rx="1.69607" ry="1.69666" transform="rotate(-90 188.329 449.456)" fill="#9198A0"/>
        <ellipse cx="188.329" cy="636.296" rx="1.69607" ry="1.69666" transform="rotate(-90 188.329 636.296)" fill="#9198A0"/>
        <ellipse cx="188.329" cy="412.144" rx="1.69607" ry="1.69666" transform="rotate(-90 188.329 412.144)" fill="#9198A0"/>
        <ellipse cx="188.329" cy="598.984" rx="1.69607" ry="1.69666" transform="rotate(-90 188.329 598.984)" fill="#9198A0"/>
        <ellipse cx="188.329" cy="374.831" rx="1.69607" ry="1.69666" transform="rotate(-90 188.329 374.831)" fill="#9198A0"/>
        <ellipse cx="188.329" cy="561.671" rx="1.69607" ry="1.69666" transform="rotate(-90 188.329 561.671)" fill="#9198A0"/>
        <ellipse cx="188.329" cy="337.515" rx="1.69607" ry="1.69666" transform="rotate(-90 188.329 337.515)" fill="#9198A0"/>
        <ellipse cx="188.329" cy="524.359" rx="1.69607" ry="1.69666" transform="rotate(-90 188.329 524.359)" fill="#9198A0"/>
        <ellipse cx="188.329" cy="300.202" rx="1.69607" ry="1.69666" transform="rotate(-90 188.329 300.202)" fill="#9198A0"/>
        <ellipse cx="188.329" cy="487.042" rx="1.69607" ry="1.69666" transform="rotate(-90 188.329 487.042)" fill="#9198A0"/>
        <ellipse cx="188.329" cy="262.89" rx="1.69607" ry="1.69666" transform="rotate(-90 188.329 262.89)" fill="#9198A0"/>
        <ellipse cx="188.329" cy="225.577" rx="1.69607" ry="1.69666" transform="rotate(-90 188.329 225.577)" fill="#9198A0"/>
        <ellipse cx="188.329" cy="188.261" rx="1.69607" ry="1.69666" transform="rotate(-90 188.329 188.261)" fill="#9198A0"/>
        <ellipse cx="188.329" cy="150.948" rx="1.69607" ry="1.69666" transform="rotate(-90 188.329 150.948)" fill="#9198A0"/>
        <ellipse cx="188.329" cy="113.636" rx="1.69607" ry="1.69666" transform="rotate(-90 188.329 113.636)" fill="#9198A0"/>
        <ellipse cx="188.329" cy="76.3235" rx="1.69607" ry="1.69666" transform="rotate(-90 188.329 76.3235)" fill="#9198A0"/>
        <ellipse cx="188.329" cy="39.0071" rx="1.69607" ry="1.69666" transform="rotate(-90 188.329 39.0071)" fill="#9198A0"/>
        <ellipse cx="188.329" cy="1.69456" rx="1.69607" ry="1.69666" transform="rotate(-90 188.329 1.69456)" fill="#9198A0"/>
        <ellipse cx="225.697" cy="449.456" rx="1.69607" ry="1.69666" transform="rotate(-90 225.697 449.456)" fill="#9198A0"/>
        <ellipse cx="225.697" cy="636.296" rx="1.69607" ry="1.69666" transform="rotate(-90 225.697 636.296)" fill="#9198A0"/>
        <ellipse cx="225.697" cy="412.144" rx="1.69607" ry="1.69666" transform="rotate(-90 225.697 412.144)" fill="#9198A0"/>
        <ellipse cx="225.697" cy="598.984" rx="1.69607" ry="1.69666" transform="rotate(-90 225.697 598.984)" fill="#9198A0"/>
        <ellipse cx="225.697" cy="374.831" rx="1.69607" ry="1.69666" transform="rotate(-90 225.697 374.831)" fill="#9198A0"/>
        <ellipse cx="225.697" cy="561.671" rx="1.69607" ry="1.69666" transform="rotate(-90 225.697 561.671)" fill="#9198A0"/>
        <ellipse cx="225.697" cy="337.515" rx="1.69607" ry="1.69666" transform="rotate(-90 225.697 337.515)" fill="#9198A0"/>
        <ellipse cx="225.697" cy="524.359" rx="1.69607" ry="1.69666" transform="rotate(-90 225.697 524.359)" fill="#9198A0"/>
        <ellipse cx="225.697" cy="300.202" rx="1.69607" ry="1.69666" transform="rotate(-90 225.697 300.202)" fill="#9198A0"/>
        <ellipse cx="225.697" cy="487.042" rx="1.69607" ry="1.69666" transform="rotate(-90 225.697 487.042)" fill="#9198A0"/>
        <ellipse cx="225.697" cy="262.89" rx="1.69607" ry="1.69666" transform="rotate(-90 225.697 262.89)" fill="#9198A0"/>
        <ellipse cx="225.697" cy="225.577" rx="1.69607" ry="1.69666" transform="rotate(-90 225.697 225.577)" fill="#9198A0"/>
        <ellipse cx="225.697" cy="188.261" rx="1.69607" ry="1.69666" transform="rotate(-90 225.697 188.261)" fill="#9198A0"/>
        <ellipse cx="225.697" cy="150.948" rx="1.69607" ry="1.69666" transform="rotate(-90 225.697 150.948)" fill="#9198A0"/>
        <ellipse cx="225.697" cy="113.636" rx="1.69607" ry="1.69666" transform="rotate(-90 225.697 113.636)" fill="#9198A0"/>
        <ellipse cx="225.697" cy="76.3235" rx="1.69607" ry="1.69666" transform="rotate(-90 225.697 76.3235)" fill="#9198A0"/>
        <ellipse cx="225.697" cy="39.0071" rx="1.69607" ry="1.69666" transform="rotate(-90 225.697 39.0071)" fill="#9198A0"/>
        <ellipse cx="225.697" cy="1.69456" rx="1.69607" ry="1.69666" transform="rotate(-90 225.697 1.69456)" fill="#9198A0"/>
        <ellipse cx="263.064" cy="449.456" rx="1.69607" ry="1.69666" transform="rotate(-90 263.064 449.456)" fill="#9198A0"/>
        <ellipse cx="263.064" cy="636.296" rx="1.69607" ry="1.69666" transform="rotate(-90 263.064 636.296)" fill="#9198A0"/>
        <ellipse cx="263.064" cy="412.144" rx="1.69607" ry="1.69666" transform="rotate(-90 263.064 412.144)" fill="#9198A0"/>
        <ellipse cx="263.064" cy="598.984" rx="1.69607" ry="1.69666" transform="rotate(-90 263.064 598.984)" fill="#9198A0"/>
        <ellipse cx="263.064" cy="374.831" rx="1.69607" ry="1.69666" transform="rotate(-90 263.064 374.831)" fill="#9198A0"/>
        <ellipse cx="263.064" cy="561.671" rx="1.69607" ry="1.69666" transform="rotate(-90 263.064 561.671)" fill="#9198A0"/>
        <ellipse cx="263.064" cy="337.515" rx="1.69607" ry="1.69666" transform="rotate(-90 263.064 337.515)" fill="#9198A0"/>
        <ellipse cx="263.064" cy="524.359" rx="1.69607" ry="1.69666" transform="rotate(-90 263.064 524.359)" fill="#9198A0"/>
        <ellipse cx="263.064" cy="300.202" rx="1.69607" ry="1.69666" transform="rotate(-90 263.064 300.202)" fill="#9198A0"/>
        <ellipse cx="263.064" cy="487.042" rx="1.69607" ry="1.69666" transform="rotate(-90 263.064 487.042)" fill="#9198A0"/>
        <ellipse cx="263.064" cy="262.89" rx="1.69607" ry="1.69666" transform="rotate(-90 263.064 262.89)" fill="#9198A0"/>
        <ellipse cx="263.064" cy="225.577" rx="1.69607" ry="1.69666" transform="rotate(-90 263.064 225.577)" fill="#9198A0"/>
        <ellipse cx="263.064" cy="188.261" rx="1.69607" ry="1.69666" transform="rotate(-90 263.064 188.261)" fill="#9198A0"/>
        <ellipse cx="263.064" cy="150.948" rx="1.69607" ry="1.69666" transform="rotate(-90 263.064 150.948)" fill="#9198A0"/>
        <ellipse cx="263.064" cy="113.636" rx="1.69607" ry="1.69666" transform="rotate(-90 263.064 113.636)" fill="#9198A0"/>
        <ellipse cx="263.064" cy="76.3235" rx="1.69607" ry="1.69666" transform="rotate(-90 263.064 76.3235)" fill="#9198A0"/>
        <ellipse cx="263.064" cy="39.0071" rx="1.69607" ry="1.69666" transform="rotate(-90 263.064 39.0071)" fill="#9198A0"/>
        <ellipse cx="263.064" cy="1.69456" rx="1.69607" ry="1.69666" transform="rotate(-90 263.064 1.69456)" fill="#9198A0"/>
        <ellipse cx="300.433" cy="449.456" rx="1.69607" ry="1.69666" transform="rotate(-90 300.433 449.456)" fill="#9198A0"/>
        <ellipse cx="300.433" cy="636.296" rx="1.69607" ry="1.69666" transform="rotate(-90 300.433 636.296)" fill="#9198A0"/>
        <ellipse cx="300.433" cy="412.144" rx="1.69607" ry="1.69666" transform="rotate(-90 300.433 412.144)" fill="#9198A0"/>
        <ellipse cx="300.433" cy="598.984" rx="1.69607" ry="1.69666" transform="rotate(-90 300.433 598.984)" fill="#9198A0"/>
        <ellipse cx="300.433" cy="374.831" rx="1.69607" ry="1.69666" transform="rotate(-90 300.433 374.831)" fill="#9198A0"/>
        <ellipse cx="300.433" cy="561.671" rx="1.69607" ry="1.69666" transform="rotate(-90 300.433 561.671)" fill="#9198A0"/>
        <ellipse cx="300.433" cy="337.515" rx="1.69607" ry="1.69666" transform="rotate(-90 300.433 337.515)" fill="#9198A0"/>
        <ellipse cx="300.433" cy="524.359" rx="1.69607" ry="1.69666" transform="rotate(-90 300.433 524.359)" fill="#9198A0"/>
        <ellipse cx="300.433" cy="300.202" rx="1.69607" ry="1.69666" transform="rotate(-90 300.433 300.202)" fill="#9198A0"/>
        <ellipse cx="300.433" cy="487.042" rx="1.69607" ry="1.69666" transform="rotate(-90 300.433 487.042)" fill="#9198A0"/>
        <ellipse cx="300.433" cy="262.89" rx="1.69607" ry="1.69666" transform="rotate(-90 300.433 262.89)" fill="#9198A0"/>
        <ellipse cx="300.433" cy="225.577" rx="1.69607" ry="1.69666" transform="rotate(-90 300.433 225.577)" fill="#9198A0"/>
        <ellipse cx="300.433" cy="188.261" rx="1.69607" ry="1.69666" transform="rotate(-90 300.433 188.261)" fill="#9198A0"/>
        <ellipse cx="300.433" cy="150.948" rx="1.69607" ry="1.69666" transform="rotate(-90 300.433 150.948)" fill="#9198A0"/>
        <ellipse cx="300.433" cy="113.636" rx="1.69607" ry="1.69666" transform="rotate(-90 300.433 113.636)" fill="#9198A0"/>
        <ellipse cx="300.433" cy="76.3235" rx="1.69607" ry="1.69666" transform="rotate(-90 300.433 76.3235)" fill="#9198A0"/>
        <ellipse cx="300.433" cy="39.0071" rx="1.69607" ry="1.69666" transform="rotate(-90 300.433 39.0071)" fill="#9198A0"/>
        <ellipse cx="300.433" cy="1.69456" rx="1.69607" ry="1.69666" transform="rotate(-90 300.433 1.69456)" fill="#9198A0"/>
    </svg>        
    <div class="smart-staffing__content _container">
        <div class="smart-staffing__wrapper">
            <div class="smart-staffing__item smart-staffing__item-orange">
                <h4 class="smart-staffing__item-title">
                    Реализуем ваши идеи 
                </h4>
                <p class="smart-staffing__item-text">
                    руководствуясь 15-летним опытом разработки ПО, с помощью профессиональных IT-специалистов
                </p>
                <a href="#contactForm" class="smart-staffing__item-button big" data-anchor-scroll>
                    Оставить заявку
                </a>
            </div>
            <div class="smart-staffing__col">
                <ul class="smart-staffing__row smart-staffing__row-middle">
                    <li class="smart-staffing__item smart-staffing__item-medium">
                        <h4 class="smart-staffing__item-title">
                            Управляем 
                        </h4>
                        <p class="smart-staffing__item-text">
                            производством <br />
                            в рамках технологических проектов полного цикла
                        </p>
                    </li>
                    <li class="smart-staffing__item smart-staffing__item-small">
                        <h4 class="smart-staffing__item-title">
                            Снижаем  
                        </h4>
                        <p class="smart-staffing__item-text">
                            расходы <br />
                            на эксплуатацию сервисов</p>
                    </li>
                    <li class="smart-staffing__item smart-staffing__item-small">
                        <h4 class="smart-staffing__item-title">
                            Сокращаем 
                        </h4>
                        <p class="smart-staffing__item-text">
                            период простоя сервисов, реализуем проекты в краткие сроки
                        </p>
                    </li>
                </ul>
                <ul class="smart-staffing__row smart-staffing__row-main">
                    <li class="smart-staffing__item smart-staffing__item-middle">
                        <h4 class="smart-staffing__item-title">
                            Максимально концентрируемся 
                        </h4>
                        <p class="smart-staffing__item-text">
                            на основных бизнес-задачах
                        </p>
                    </li>
                    <li class="smart-staffing__item smart-staffing__item-middle">
                        <h4 class="smart-staffing__item-title">
                            Реализуем
                        </h4>
                        <p class="smart-staffing__item-text">сложные IT-услуги без крупного штата собственных сотрудников</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
            <?php get_template_part('inc/contact-form'); ?>
        </main>
<?php get_footer(); ?>
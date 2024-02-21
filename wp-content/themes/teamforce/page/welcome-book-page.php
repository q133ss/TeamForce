<?php
/*
 * Template name: welcome-book
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
                        <a href="/about-us.html" class="breadcrumbs__link">О нас</a>
                    </li>
                    <li class="breadcrumbs__item last">
                        <a class="breadcrumbs__link breadcrumbs__link-marked">Welcomebook</a>
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
            <section class="center-initial welcome-book-initial">
    <div class="services-main__mobile-text">
        <svg width="37" height="290" viewBox="0 0 37 290" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.5">
            <mask id="path-1-outside-1_1311_37447" maskUnits="userSpaceOnUse" x="0.548828" y="0.619141" width="41" height="289" fill="black">
            <rect fill="white" x="0.548828" y="0.619141" width="41" height="289"/>
            <path d="M39 253.951L20.7949 259.918L39 265.91V276.041L2.58985 288L2.58985 275.508L22.0899 270.049L2.58985 264.59L2.58985 255.246L22.0898 249.787L2.58985 244.328L2.58985 231.836L39 243.795V253.951ZM29.377 216.246L29.377 198.549H39V227.926H2.58985L2.58985 199.082H12.2129L12.2129 216.246H16.1231L16.1231 203.246H24.959L24.959 216.246H29.377ZM39 165.541V192.582H2.58985L2.58985 180.902H28.3359L28.3359 165.541H39ZM14.5234 150.484C16.2161 152.211 18.3151 153.074 20.8203 153.074C23.3086 153.074 25.3991 152.211 27.0918 150.484C28.7845 148.741 29.6309 146.566 29.6309 143.959C29.6309 142.96 29.4954 141.97 29.2246 140.988C28.9538 139.99 28.6068 139.152 28.1836 138.475C27.7604 137.798 27.3457 137.205 26.9395 136.697C26.5163 136.173 26.1693 135.766 25.8984 135.479L25.4922 135.123L32.7539 128.268C32.957 128.403 33.2279 128.615 33.5664 128.902C33.888 129.173 34.472 129.808 35.3184 130.807C36.1478 131.805 36.8841 132.872 37.5273 134.006C38.1706 135.123 38.7461 136.613 39.2539 138.475C39.7786 140.337 40.041 142.249 40.041 144.213C40.041 150.002 38.1536 154.877 34.3789 158.838C30.5872 162.782 26.0592 164.754 20.7949 164.754C15.5306 164.754 11.0111 162.782 7.23633 158.838C3.44466 154.877 1.54883 150.002 1.54883 144.213C1.54883 142.232 1.80274 140.337 2.31055 138.525C2.81836 136.714 3.42774 135.216 4.13867 134.031C4.84961 132.846 5.56055 131.805 6.27149 130.908C6.98242 130.011 7.5918 129.351 8.09961 128.928L8.83594 128.369L16.123 135.377C16.0215 135.479 15.8776 135.622 15.6914 135.809C15.4883 135.978 15.1497 136.35 14.6758 136.926C14.1849 137.484 13.7617 138.077 13.4063 138.703C13.0339 139.329 12.7038 140.125 12.416 141.09C12.1113 142.038 11.959 142.994 11.959 143.959C11.959 146.566 12.8138 148.741 14.5234 150.484ZM14.5488 112.475C16.2585 114.184 18.349 115.039 20.8203 115.039C23.2747 115.039 25.3568 114.184 27.0664 112.475C28.776 110.748 29.6309 108.658 29.6309 106.203C29.6309 103.732 28.776 101.641 27.0664 99.9316C25.3568 98.2051 23.2747 97.3418 20.8203 97.3418C18.349 97.3418 16.2585 98.2051 14.5488 99.9316C12.8223 101.641 11.959 103.732 11.959 106.203C11.959 108.658 12.8223 110.748 14.5488 112.475ZM7.23633 91.5781C11.0111 87.6172 15.5306 85.6367 20.7949 85.6367C26.0592 85.6367 30.5872 87.6172 34.3789 91.5781C38.1536 95.5221 40.041 100.389 40.041 106.178C40.041 111.967 38.1536 116.842 34.3789 120.803C30.5872 124.747 26.0592 126.719 20.7949 126.719C15.5306 126.719 11.0111 124.747 7.23633 120.803C3.44466 116.842 1.54883 111.967 1.54883 106.178C1.54883 100.389 3.44466 95.5221 7.23633 91.5781ZM19.5 50.5215L30.6719 59.3574L19.5 68.2188H39V79.8984H2.58984L2.58984 69.5137L15.5898 59.3574L2.58984 49.2266L2.58984 38.8164H39V50.5215H19.5ZM29.3769 19.3164V1.61914L39 1.61914V30.9961L2.58984 30.9961L2.58984 2.15235L12.2129 2.15234L12.2129 19.3164H16.123L16.123 6.31641L24.959 6.31641V19.3164H29.3769Z"/>
            </mask>
            <path d="M39 253.951L20.7949 259.918L39 265.91V276.041L2.58985 288L2.58985 275.508L22.0899 270.049L2.58985 264.59L2.58985 255.246L22.0898 249.787L2.58985 244.328L2.58985 231.836L39 243.795V253.951ZM29.377 216.246L29.377 198.549H39V227.926H2.58985L2.58985 199.082H12.2129L12.2129 216.246H16.1231L16.1231 203.246H24.959L24.959 216.246H29.377ZM39 165.541V192.582H2.58985L2.58985 180.902H28.3359L28.3359 165.541H39ZM14.5234 150.484C16.2161 152.211 18.3151 153.074 20.8203 153.074C23.3086 153.074 25.3991 152.211 27.0918 150.484C28.7845 148.741 29.6309 146.566 29.6309 143.959C29.6309 142.96 29.4954 141.97 29.2246 140.988C28.9538 139.99 28.6068 139.152 28.1836 138.475C27.7604 137.798 27.3457 137.205 26.9395 136.697C26.5163 136.173 26.1693 135.766 25.8984 135.479L25.4922 135.123L32.7539 128.268C32.957 128.403 33.2279 128.615 33.5664 128.902C33.888 129.173 34.472 129.808 35.3184 130.807C36.1478 131.805 36.8841 132.872 37.5273 134.006C38.1706 135.123 38.7461 136.613 39.2539 138.475C39.7786 140.337 40.041 142.249 40.041 144.213C40.041 150.002 38.1536 154.877 34.3789 158.838C30.5872 162.782 26.0592 164.754 20.7949 164.754C15.5306 164.754 11.0111 162.782 7.23633 158.838C3.44466 154.877 1.54883 150.002 1.54883 144.213C1.54883 142.232 1.80274 140.337 2.31055 138.525C2.81836 136.714 3.42774 135.216 4.13867 134.031C4.84961 132.846 5.56055 131.805 6.27149 130.908C6.98242 130.011 7.5918 129.351 8.09961 128.928L8.83594 128.369L16.123 135.377C16.0215 135.479 15.8776 135.622 15.6914 135.809C15.4883 135.978 15.1497 136.35 14.6758 136.926C14.1849 137.484 13.7617 138.077 13.4063 138.703C13.0339 139.329 12.7038 140.125 12.416 141.09C12.1113 142.038 11.959 142.994 11.959 143.959C11.959 146.566 12.8138 148.741 14.5234 150.484ZM14.5488 112.475C16.2585 114.184 18.349 115.039 20.8203 115.039C23.2747 115.039 25.3568 114.184 27.0664 112.475C28.776 110.748 29.6309 108.658 29.6309 106.203C29.6309 103.732 28.776 101.641 27.0664 99.9316C25.3568 98.2051 23.2747 97.3418 20.8203 97.3418C18.349 97.3418 16.2585 98.2051 14.5488 99.9316C12.8223 101.641 11.959 103.732 11.959 106.203C11.959 108.658 12.8223 110.748 14.5488 112.475ZM7.23633 91.5781C11.0111 87.6172 15.5306 85.6367 20.7949 85.6367C26.0592 85.6367 30.5872 87.6172 34.3789 91.5781C38.1536 95.5221 40.041 100.389 40.041 106.178C40.041 111.967 38.1536 116.842 34.3789 120.803C30.5872 124.747 26.0592 126.719 20.7949 126.719C15.5306 126.719 11.0111 124.747 7.23633 120.803C3.44466 116.842 1.54883 111.967 1.54883 106.178C1.54883 100.389 3.44466 95.5221 7.23633 91.5781ZM19.5 50.5215L30.6719 59.3574L19.5 68.2188H39V79.8984H2.58984L2.58984 69.5137L15.5898 59.3574L2.58984 49.2266L2.58984 38.8164H39V50.5215H19.5ZM29.3769 19.3164V1.61914L39 1.61914V30.9961L2.58984 30.9961L2.58984 2.15235L12.2129 2.15234L12.2129 19.3164H16.123L16.123 6.31641L24.959 6.31641V19.3164H29.3769Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1_1311_37447)"/>
            </g>
        </svg>        
    </div>
    <div class="center-initial__content _container">
        <div class="center-initial__left">
            <h1 class="center-initial__title _title-initial">
                WelcomeBook
            </h1>
            <p class="center-initial__text _text-initial">
                От имени команды - добро пожаловать на борт! Мы верим, что <br /> усилия каждого - результат нашего общего успеха!
            </p>
        </div>
        <div class="center-initial__bg">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-first-bg.png" 
                alt="resource-center-bg-first"
                class="center-initial__bg-first _desktop _luminosity" 
            />
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-first-bg-mobile.png" 
                alt="resource-center-bg-first"
                class="center-initial__bg-first welcome-book-initial__bg-first _mobile _luminosity" 
            />
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/center-circle-bg.png" 
                alt="resource-center-bg-first"
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
            <section class="welcome-book-gallery">
    <ul class="welcome-book-gallery__items">
        <li class="welcome-book-gallery__item">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-gallery-item-1.png" 
                alt="welcome-book-gallery-item-1" 
                class="welcome-book-gallery__img" 
            />
        </li>
        <li class="welcome-book-gallery__item">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-gallery-item-2.png" 
                alt="welcome-book-gallery-item-2" 
                class="welcome-book-gallery__img" 
            />
        </li>
        <li class="welcome-book-gallery__item">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-gallery-item-3.png" 
                alt="welcome-book-gallery-item-3" 
                class="welcome-book-gallery__img" 
            />
        </li>
    </ul>
    <ul class="welcome-book-gallery__items">
        <li class="welcome-book-gallery__item">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-gallery-item-1.png" 
                alt="welcome-book-gallery-item-1" 
                class="welcome-book-gallery__img" 
            />
        </li>
        <li class="welcome-book-gallery__item">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-gallery-item-2.png" 
                alt="welcome-book-gallery-item-2" 
                class="welcome-book-gallery__img" 
            />
        </li>
        <li class="welcome-book-gallery__item">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-gallery-item-3.png" 
                alt="welcome-book-gallery-item-3" 
                class="welcome-book-gallery__img" 
            />
        </li>
    </ul>
</section>
            <section class="welcome-book-tabs _grey-section">
    <ul class="welcome-book-tabs__items">
        <li class="welcome-book-tabs__item active" data-welcome-tab="office">
            <h3 class="welcome-book-tabs__item-title">Офис ТИМ ФОРС</h3>
            <p class="welcome-book-tabs__item-text">Внутренняя команда ТФ</p>
        </li>
        <li class="welcome-book-tabs__item" data-welcome-tab="project">
            <h3 class="welcome-book-tabs__item-title">Выход на проект</h3>
            <p class="welcome-book-tabs__item-text">Внешняя команда ТФ</p>
        </li>
    </ul>
</section>
            <div data-welcome-tab-content="office">
                <section class="welcome-book-about _grey-section">
    <div class="_container">
        <div class="welcome-book-about__row">
            <a href="<?php echo get_page_link(97); ?>" class="welcome-book-about__item item-dark-big">
                <h4 class="welcome-book-about__item-title">
                    О компании
                </h4>
                <p class="welcome-book-about__item-text">
                    Компания ТИМ ФОРС уже более 15 лет оперирует на рынке IT-услуг по основным направлениям
                </p>
                <svg width="86" height="16" viewBox="0 0 86 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M85.7071 8.70711C86.0976 8.31658 86.0976 7.68342 85.7071 7.29289L79.3431 0.928932C78.9526 0.538408 78.3195 0.538408 77.9289 0.928932C77.5384 1.31946 77.5384 1.95262 77.9289 2.34315L83.5858 8L77.9289 13.6569C77.5384 14.0474 77.5384 14.6805 77.9289 15.0711C78.3195 15.4616 78.9526 15.4616 79.3431 15.0711L85.7071 8.70711ZM0 9H85V7H0V9Z" fill="#FAFAFA"/>
                </svg>        
                <img src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-about-img.png" alt="welcome-book-about-img" class="welcome-book-about__item-img">            
            </a>
            <ul class="welcome-book-about__grid">
                <li class="welcome-book-about__small">
                    Аутсорсинг и аутстаффинг
                </li>
                <li class="welcome-book-about__small">
                    Заказная 
                    и внутренняя разработка ПО
                </li>
                <li class="welcome-book-about__small">
                    Консалтинг 
                    и тендерное сопровождение
                </li>
                <li class="welcome-book-about__small">
                    Развитие 
                    и поддержка 
                    ИТ-МСП через 
                    ТИМ ФОРС Альянс
                </li>
            </ul>
        </div>
    </div>
</section>
                <section class="welcome-book-products _grey-section">
    <img src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-products-bg.png" alt="welcome-book-products-bg" class="welcome-book-products__bg">
    <svg class="welcome-book-products__dots" width="323" height="638" viewBox="0 0 323 638" fill="none" xmlns="http://www.w3.org/2000/svg">
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
        <ellipse cx="39.0248" cy="449.456" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0248 449.456)" fill="#9198A0"/>
        <ellipse cx="39.0248" cy="636.296" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0248 636.296)" fill="#9198A0"/>
        <ellipse cx="39.0248" cy="412.144" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0248 412.144)" fill="#9198A0"/>
        <ellipse cx="39.0248" cy="598.984" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0248 598.984)" fill="#9198A0"/>
        <ellipse cx="39.0248" cy="374.831" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0248 374.831)" fill="#9198A0"/>
        <ellipse cx="39.0248" cy="561.671" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0248 561.671)" fill="#9198A0"/>
        <ellipse cx="39.0248" cy="337.515" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0248 337.515)" fill="#9198A0"/>
        <ellipse cx="39.0248" cy="524.359" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0248 524.359)" fill="#9198A0"/>
        <ellipse cx="39.0248" cy="300.202" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0248 300.202)" fill="#9198A0"/>
        <ellipse cx="39.0248" cy="487.042" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0248 487.042)" fill="#9198A0"/>
        <ellipse cx="39.0248" cy="262.89" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0248 262.89)" fill="#9198A0"/>
        <ellipse cx="39.0248" cy="225.577" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0248 225.577)" fill="#9198A0"/>
        <ellipse cx="39.0248" cy="188.261" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0248 188.261)" fill="#9198A0"/>
        <ellipse cx="39.0248" cy="150.948" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0248 150.948)" fill="#9198A0"/>
        <ellipse cx="39.0248" cy="113.636" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0248 113.636)" fill="#9198A0"/>
        <ellipse cx="39.0248" cy="76.3235" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0248 76.3235)" fill="#9198A0"/>
        <ellipse cx="39.0248" cy="39.0071" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0248 39.0071)" fill="#9198A0"/>
        <ellipse cx="39.0248" cy="1.69456" rx="1.69607" ry="1.69666" transform="rotate(-90 39.0248 1.69456)" fill="#9198A0"/>
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
        <ellipse cx="300.431" cy="449.456" rx="1.69607" ry="1.69666" transform="rotate(-90 300.431 449.456)" fill="#9198A0"/>
        <ellipse cx="300.431" cy="636.296" rx="1.69607" ry="1.69666" transform="rotate(-90 300.431 636.296)" fill="#9198A0"/>
        <ellipse cx="300.431" cy="412.144" rx="1.69607" ry="1.69666" transform="rotate(-90 300.431 412.144)" fill="#9198A0"/>
        <ellipse cx="300.431" cy="598.984" rx="1.69607" ry="1.69666" transform="rotate(-90 300.431 598.984)" fill="#9198A0"/>
        <ellipse cx="300.431" cy="374.831" rx="1.69607" ry="1.69666" transform="rotate(-90 300.431 374.831)" fill="#9198A0"/>
        <ellipse cx="300.431" cy="561.671" rx="1.69607" ry="1.69666" transform="rotate(-90 300.431 561.671)" fill="#9198A0"/>
        <ellipse cx="300.431" cy="337.515" rx="1.69607" ry="1.69666" transform="rotate(-90 300.431 337.515)" fill="#9198A0"/>
        <ellipse cx="300.431" cy="524.359" rx="1.69607" ry="1.69666" transform="rotate(-90 300.431 524.359)" fill="#9198A0"/>
        <ellipse cx="300.431" cy="300.202" rx="1.69607" ry="1.69666" transform="rotate(-90 300.431 300.202)" fill="#9198A0"/>
        <ellipse cx="300.431" cy="487.042" rx="1.69607" ry="1.69666" transform="rotate(-90 300.431 487.042)" fill="#9198A0"/>
        <ellipse cx="300.431" cy="262.89" rx="1.69607" ry="1.69666" transform="rotate(-90 300.431 262.89)" fill="#9198A0"/>
        <ellipse cx="300.431" cy="225.577" rx="1.69607" ry="1.69666" transform="rotate(-90 300.431 225.577)" fill="#9198A0"/>
        <ellipse cx="300.431" cy="188.261" rx="1.69607" ry="1.69666" transform="rotate(-90 300.431 188.261)" fill="#9198A0"/>
        <ellipse cx="300.431" cy="150.948" rx="1.69607" ry="1.69666" transform="rotate(-90 300.431 150.948)" fill="#9198A0"/>
        <ellipse cx="300.431" cy="113.636" rx="1.69607" ry="1.69666" transform="rotate(-90 300.431 113.636)" fill="#9198A0"/>
        <ellipse cx="300.431" cy="76.3235" rx="1.69607" ry="1.69666" transform="rotate(-90 300.431 76.3235)" fill="#9198A0"/>
        <ellipse cx="300.431" cy="39.0071" rx="1.69607" ry="1.69666" transform="rotate(-90 300.431 39.0071)" fill="#9198A0"/>
        <ellipse cx="300.431" cy="1.69456" rx="1.69607" ry="1.69666" transform="rotate(-90 300.431 1.69456)" fill="#9198A0"/>
    </svg>        
    <div class="welcome-book-products__content _container">
        <h2 class="welcome-book-products__title _title-medium _title-medium-mb">
            Продукты
        </h2>
        <div class="products__row">
            <a href="#" target="_blank" class="products__item products__item-big" style="justify-content: unset;">
                <div class="products__item-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/teamforce-360.png" alt="teamforce-360">
                </div>
                <div class="products__item-info">
                    <h3 class="products__item-title">ТИМФОРС360</h3>
                    <p class="products__item-text">
                        Платформа автоматизации мотивации <br />
                        и вовлеченности
                    </p>
                    <div class="products__item-platforms">
                        <div class="products__item-platform">
                            <div class="products__item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/android-icon.png" alt="android-icon" />
                            </div>
                            <p class="products__item-name">Android</p>
                        </div>
                        <div class="products__item-platform">
                            <div class="products__item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ios-icon.png" alt="ios-icon" />
                            </div>
                            <p class="products__item-name">iOS</p>
                        </div>
                        <div class="products__item-platform">
                            <div class="products__item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/web-icon.png" alt="web-icon" />
                            </div>
                            <p class="products__item-name">Web</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="products__row products__row-medium">
            <a href="#" target="_blank" class="products__item products__item-orange products__item-main">
                <div class="products__item-info">
                    <h3 class="products__item-title">B2BCLOUD</h3>
                    <p class="products__item-text">
                        СмартСтаффинг-платформа <br /> 
                        минимизации простоев <br /> 
                        IT-специалситов
                    </p>
                    <div class="products__item-platforms">
                        <div class="products__item-platform">
                            <div class="products__item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/web-icon.png" alt="web-icon" />
                            </div>
                            <p class="products__item-name">Web</p>
                        </div>
                    </div>
                </div>
                <div class="products__item-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/b2b-cloud.png" alt="b2b-cloud">
                </div>
            </a>
            <a href="#" target="_blank" class="products__item products__item-main">
                <div class="products__item-info">
                    <h3 class="products__item-title">ALLIANCERP</h3>
                    <p class="products__item-text">
                        Отраслевая ERP для T&M <br />
                        ИТ-бизнеса на базе 1С
                    </p>
                    <div class="products__item-platforms">
                        <div class="products__item-platform">
                            <div class="products__item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/web-icon.png" alt="web-icon" />
                            </div>
                            <p class="products__item-name">Web</p>
                        </div>
                    </div>
                </div>
                <div class="products__item-image _grayscale">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/alliancerp-product.png" alt="alliancerp-product">
                </div>
            </a>
        </div>
    </div>
</section>
                <section class="welcome-book-big-map _grey-section">
    <div class="_container">
        <h2 class="welcome-book-big-map__title _title-medium">
            География 
            <span class="_text-orange">ТИМ ФОРС</span>
        </h2>
        <img src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-map.png" alt="welcome-book-map" class="welcome-book-big-map__map">
    </div>
</section>
                <section class="welcome-book-philosophy _grey-section">
    <img 
        src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-philosophy-bg.png" 
        alt="welcome-book-philosophy-bg" 
        class="welcome-book-philosophy__bg" 
    />
    <div class="welcome-book-philosophy__content _container">
        <h2 class="welcome-book-philosophy__title _title-medium _title-medium-mb">
            Философия 
            <span class="_text-orange">ТИМ ФОРС</span>
        </h2>
        <div class="welcome-book-philosophy__row">
            <div class="item-dark-big welcome-book-philosophy__item">
                <h4 class="item-dark-big__title welcome-book-philosophy__item-title">Кодекс</h4>
                <div class="welcome-book-philosophy__item-content">
                    <p class="welcome-book-philosophy__item-text">
                        Мы развиваемся, экспериментируем и учимся на практике — в этом сила <br />
                        нашей команды. За свои ошибки мы уже заплатили. Ценности, которые нас объединяют, описаны в Кодексе ТИМ ФОРС.
                    </p>
                    <p class="welcome-book-philosophy__item-text welcome-book-philosophy__item-half">
                        Чтобы лучше понимать философию, ценности и принципы компании, мы проводим регулярные встречи для совместного толкования кодекса.
                    </p>
                </div>
                <div class="welcome-book-philosophy__item-place">
                    <div class="welcome-book-philosophy__item-pos">
                        <h5>КОГДА</h5>
                        <p>каждый крайний <br /> четверг месяца в 18:00</p>
                    </div>
                    <div class="welcome-book-philosophy__item-pos">
                        <h5>ГДЕ</h5>
                        <p>MS TEAMS</p>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-codex.png" alt="welcome-book-codex" class="welcome-book-philosophy__item-codex" />
            </div>
            <div class="item-dark-big welcome-book-philosophy__item">
                <h4 class="item-dark-big__title welcome-book-philosophy__item-title">Гимн</h4>
                <div class="welcome-book-philosophy__item-content">
                    <p class="welcome-book-philosophy__item-text">
                        Эта то, что помогает нам сплотиться и вспомнить о главном.
                    </p>
                </div>
                <a href="#" target="_blank" class="welcome-book-philosophy__item-video">
                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 5C11.0739 5 10.2871 5.36665 9.69256 5.97533C9.13769 6.54341 8.79479 7.27278 8.56963 7.9858C8.12204 9.40315 8 11.2204 8 13V31C8 32.5491 8.12544 34.3466 8.56326 35.806C8.78136 36.533 9.11032 37.2924 9.63676 37.894C10.1989 38.5365 10.9959 39 12 39C12.7562 39 13.5889 38.7814 14.3765 38.5051C15.1912 38.2194 16.085 37.8251 17.0015 37.3804C18.6816 36.5652 20.5426 35.5286 22.272 34.5654L22.7293 34.3107C25.8469 32.576 29.5276 30.4203 32.4426 28.3681C33.8948 27.3457 35.2067 26.3146 36.171 25.3455C36.6527 24.8615 37.0851 24.356 37.4054 23.8409C37.715 23.3431 38 22.7094 38 22C38 21.2906 37.715 20.6569 37.4054 20.1591C37.0851 19.644 36.6527 19.1385 36.171 18.6545C35.2067 17.6854 33.8948 16.6543 32.4426 15.6319C29.5276 13.5797 25.8469 11.424 22.7293 9.68925L22.2722 9.4347C20.5428 8.47144 18.6816 7.4348 17.0015 6.61962C16.085 6.17495 15.1912 5.78065 14.3765 5.49487C13.5889 5.21856 12.7562 5 12 5ZM11 13C11 11.2796 11.128 9.84685 11.4304 8.8892C11.5802 8.41472 11.7373 8.17534 11.8387 8.07155C11.9004 8.00835 11.9261 8 12 8C12.2438 8 12.6934 8.08366 13.3835 8.32575C14.0466 8.55838 14.8262 8.89865 15.6919 9.3187C17.2914 10.0948 19.0787 11.0901 20.8267 12.0636L21.2707 12.3107C24.364 14.032 27.9333 16.1262 30.7156 18.085C32.112 19.0681 33.2606 19.9828 34.0445 20.7706C34.2804 21.0077 34.46 21.2134 34.5958 21.3851C34.8892 21.7564 34.8892 22.2436 34.5958 22.6149C34.46 22.7866 34.2804 22.9923 34.0445 23.2294C33.2606 24.0172 32.112 24.9319 30.7156 25.915C27.9333 27.8738 24.364 29.968 21.2707 31.6893L20.8267 31.9364C19.0787 32.9099 17.2914 33.9053 15.6919 34.6813C14.8262 35.1013 14.0466 35.4416 13.3835 35.6743C12.6934 35.9163 12.2438 36 12 36C11.9911 36 11.9857 35.9994 11.9832 35.9991C11.9776 35.9961 11.9464 35.9779 11.8945 35.9185C11.7647 35.7701 11.5936 35.467 11.4367 34.944C11.1246 33.9034 11 32.4509 11 31V13Z" fill="white"/>
                    </svg>                        
                    <img src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-philosophy-img-2.png" alt="welcome-book-philosophy-img-2">
                </a>
            </div>
        </div>
    </div>
</section>
                <section class="welcome-book-privilege _grey-section">
    <img src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-privilege-bg.png" alt="welcome-book-privilege-bg" class="welcome-book-privilege__bg">
    <div class="welcome-book-privilege__content _container">
        <h2 class="welcome-book-privilege__title _title-medium _title-medium-mb">
            Привилегии сотрудников 
            <span class="_text-orange">
                ТИМ ФОРС
            </span>
        </h2>
        <p class="welcome-book-privilege__text">
            Мы заботимся о каждом члене нашей команды. Для этого мы <br /> 
            разработали настраиваемую систему бенефитов для наши х <br /> 
            сотрудников
        </p>
        <div class="welcome-book-privilege__wrapper item-dark-big">
            <h4 class="welcome-book-privilege__wrapper-title">
                Гибкий соцпакет
            </h4>
            <p class="welcome-book-privilege__wrapper-text">
                 ежегодное вознаграждение по одному из следующих направлений
            </p>
            <ul class="welcome-book-privilege__wrapper-grid">
                <li class="welcome-book-privilege__wrapper-item center-page__item">
                    <div class="welcome-book-privilege__wrapper-col">
                        <div class="center-page__item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/heart-icon.svg" alt="heart-icon" />
                        </div>
                        <h4 class="center-page__item-title">
                            Здоровье
                        </h4>
                    </div>
                    <ul class="center-page__item-list">
                        <li class="center-page__item-pos">ДМС</li>
                        <li class="center-page__item-pos">Психолог</li>
                        <li class="center-page__item-pos">Фитнес</li>
                    </ul>
                </li>
                <li class="welcome-book-privilege__wrapper-item center-page__item">
                    <div class="welcome-book-privilege__wrapper-col">
                        <div class="center-page__item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/files-icon.svg" alt="files-icon" />
                        </div>
                        <h4 class="center-page__item-title">
                            Образование
                        </h4>
                    </div>
                    <ul class="center-page__item-list">
                        <li class="center-page__item-pos">Курсы повышения квалификации</li>
                        <li class="center-page__item-pos">Изучение английского языка</li>
                        <li class="center-page__item-pos">Участие в профильных конференциях</li>
                    </ul>
                </li>
                <li class="welcome-book-privilege__wrapper-item center-page__item">
                    <div class="welcome-book-privilege__wrapper-col">
                        <div class="center-page__item-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/gamepad-icon.svg" alt="gamepad-icon" />
                        </div>
                        <h4 class="center-page__item-title">
                            Путешествия и досуг
                        </h4>
                    </div>
                    <ul class="center-page__item-list">
                        <li class="center-page__item-pos">Дополнительные 3 дня оплачиваемого отпуска</li>
                        <li class="center-page__item-pos">Сертификаты на авиа/ ЖД путевки</li>
                        <li class="center-page__item-pos">Подарочные карты на досуг <br /> и развлечения</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="products__row">
            <a href="#" target="_blank" class="products__item products__item-big products__item cafe" style="box-shadow: 7px 10px 52px 0px rgba(0, 0, 0, 0.50);">
                <div class="products__item-info products__item-info-left">
                    <h3 class="products__item-title cafe" style="text-transform: none;">Бенефит-кафе в системе ТФ360</h3>
                    <p class="products__item-text cafe" style="font-size: 16px;">
                        ТФ360 – это система благодарностей и поощрений, разработанная компанией ТИМ ФОРС. <br /> 
                        Каждый новый сотрудник регистрируется в ней, чтобы стать неотъемлемой частью нашего <br /> 
                        дружного ТФ-комьюнити.

                        <br />
                        <br />

                        Здесь мы с коллегами обмениваемся благодарностями, участвуем в интересных челленджах, <br />
                        зарабатываем бонусы и награды, и получаем приятные приятные поощрения из бенефит-кафе

                    </p>
                    <div class="products__item-platforms cafe">
                        <div class="products__item-platform">
                            <div class="products__item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/android-icon.png" alt="android-icon" />
                            </div>
                            <p class="products__item-name">Android</p>
                        </div>
                        <div class="products__item-platform">
                            <div class="products__item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ios-icon.png" alt="ios-icon" />
                            </div>
                            <p class="products__item-name">iOS</p>
                        </div>
                        <div class="products__item-platform">
                            <div class="products__item-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/web-icon.png" alt="web-icon" />
                            </div>
                            <p class="products__item-name">Web</p>
                        </div>
                    </div>
                </div>
                <div class="products__item-image cafe">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/teamforce-360.png" alt="teamforce-360">
                </div>
            </a>
        </div>
    </div>
</section>
                <section class="welcome-book-bot _grey-section">
    <div class="_container">
        <h2 class="_title-medium">
            Бот - помощник Тимур
        </h2>
        <p class="welcome-book-bot__text">
            Ты уже знаком с нашим ботом Тимуром? Давай мы расскажем, чем <br /> он может быть тебе полезен. Благодаря простым командам, ты <br /> можешь получить от него ценную информацию:
        </p>
        <ul class="welcome-book-bot__items">
            <li class="welcome-book-bot__item">
                <span class="_text-orange _text-bold">/office</span>
                - Адрес главного офиса в Сколково
            </li>
            <li class="welcome-book-bot__item">
                <span class="_text-orange _text-bold">/benefits</span>
                - Информация о бонусах компании
            </li>
            <li class="welcome-book-bot__item">
                <span class="_text-orange _text-bold">/contaсts</span>
                - Контакты всех отделов
            </li>
            <li class="welcome-book-bot__item">
                <span class="_text-orange _text-bold">/find</span>
                - Поиск контактных данных коллег
            </li>
            <li class="welcome-book-bot__item">
                <span class="_text-orange _text-bold">/initiative</span>
                - Сбор инициатив, идей и предложений
            </li>
            <li class="welcome-book-bot__item">
                <span class="_text-orange _text-bold">/business_trip</span>
                - Подготовка к командировке
            </li>
            <li class="welcome-book-bot__item">
                <span class="_text-orange _text-bold">/vacation</span>
                - Подготовка к отпуску
            </li>
            <li class="welcome-book-bot__item">
                <span class="_text-orange _text-bold">/finance</span>
                - Вопросы по начислениям
            </li>
            <li class="welcome-book-bot__item">
                <span class="_text-orange _text-bold">/referal</span>
                - Информация о реферальной программе
            </li>
            <li class="welcome-book-bot__item">
                <span class="_text-orange _text-bold">/tf360</span>
                - О проекте ТФ360
            </li>
            <li class="welcome-book-bot__item">
                <span class="_text-orange _text-bold">/social_media</span>
                - Ссылки на наши соцсети
            </li>
            <li class="welcome-book-bot__item">
                <span class="_text-orange _text-bold">/support</span>
                - Помогает найти ответственного по вопросу
            </li>
        </ul>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-bot-bg-first.png" alt="welcome-book-bot-bg-first" class="welcome-book-bot__bg-first" />
    <img src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-bot-bg-second.png" alt="welcome-book-bot-bg-second" class="welcome-book-bot__bg-second" />
</section>
                <section class="welcome-book-map _grey-section">
    <div class="_container">
        <h2 class="welcome-book-map__title _title-medium">Карта</h2>
        <div class="welcome-book-map__row">
            <div class="item-dark-big">
                <h4 class="item-dark-big__title">Адрес</h4>
                <p class="welcome-book-map__item-text">
                    территория Инновационного центра "Сколково"д. Сколково, <br /> 
                    Большой бульвар, д. 42, стр. 1, офис 337, ядро 4, этаж 0
                </p>
            </div>
            <div class="item-dark-big">
                <h4 class="item-dark-big__title">Где можно оставить автомобиль?</h4>
                <p class="welcome-book-map__item-text">
                    Парковка «Технопарк» 
                    <a href="https://sta-parking.ru/" target="_blank" class="_text-orange _text-underline">
                        https://sta-parking.ru/
                    </a><br/>
                    Заезд с Можайского шоссе через разворот у Трехгорки
                </p>
            </div>
        </div>
        <div class="welcome-book-map__row">
            <div class="item-dark-big">
                <h4 class="item-dark-big__title">Как нас найти?</h4>
                <img src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-how-to-find.jpg" alt="welcome-book-how-to-find" class="welcome-book-map__item-img" />
            </div>
            <div class="item-dark-big">
                <h4 class="item-dark-big__title">Как дойти от МЦД Сколково?</h4>
                <img src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-how-to-find-2.jpg" alt="welcome-book-how-to-find-2" class="welcome-book-map__item-img" />
            </div>
        </div>
    </div>
</section>
            </div>
            <div data-welcome-tab-content="project" style="display: none;">
                <section class="welcome-book-documents _grey-section">
    <div class="_container">
        <h2 class="welcome-book-documents__title _title">
            Необходимые документы для трудоустройства (граждан РФ) <span class="_text-orange">*</span>
        </h2>
        <ul class="welcome-book-documents__grid">
            <li class="welcome-book-documents__item welcome-book-documents__item-orange">
                <h4 class="welcome-book-documents__item-title">
                    В штат
                </h4>
                <ul class="welcome-book-documents__item-list">
                    <li class="welcome-book-documents__item-pos">
                        Паспорт*
                    </li>
                    <li class="welcome-book-documents__item-pos">
                        СНИЛС
                    </li>
                    <li class="welcome-book-documents__item-pos">
                        ИНН
                    </li>
                    <li class="welcome-book-documents__item-pos">
                        Документ об образовании
                    </li>
                    <li class="welcome-book-documents__item-pos">
                        Фактический адрес проживания
                    </li>
                    <li class="welcome-book-documents__item-pos">
                        Фото 3х4 + в электронном формате
                    </li>
                    <li class="welcome-book-documents__item-pos">
                        Сертификат о вакцинации*
                    </li>
                    <li class="welcome-book-documents__item-pos">
                        Трудовая книжка или справка СТД-Р
                    </li>
                    <li class="welcome-book-documents__item-pos">
                        Военный билет**
                    </li>
                    <li class="welcome-book-documents__item-pos">
                        Свидетельства о заключении брака, рождении ребенка**
                    </li>
                    <li class="welcome-book-documents__item-pos">
                        Банковские реквизиты (для перечисления заработной платы)
                    </li>
                    <li class="welcome-book-documents__item-pos">
                        Справки формы 182-н
                    </li>
                </ul>
            </li>
            <li class="welcome-book-documents__item">
                <h4 class="welcome-book-documents__item-title">
                    Как ИП/ СЗ/ ГПХ
                </h4>
                <ul class="welcome-book-documents__item-list">
                    <li class="welcome-book-documents__item-pos">
                        Электронная почта и телефон для связи
                    </li>
                    <li class="welcome-book-documents__item-pos">
                        Паспорт*
                    </li>
                    <li class="welcome-book-documents__item-pos">
                        ИНН
                    </li>
                    <li class="welcome-book-documents__item-pos">
                        СНИЛС
                    </li>
                    <li class="welcome-book-documents__item-pos">
                        Военный билет**
                    </li>
                    <li class="welcome-book-documents__item-pos">
                        Дипломы об образовании
                    </li>
                    <li class="welcome-book-documents__item-pos">
                        Выписка из ЕГРИП (для ИП)
                    </li>
                    <li class="welcome-book-documents__item-pos">
                        Реквизиты для перечисления вознаграждения
                    </li>
                    <li class="welcome-book-documents__item-pos">
                        Справка о постановке на учет в качестве самозанятого (только для СЗ)
                    </li>

                    <li class="welcome-book-documents__item-pos">
                        Справка о состоянии расчетов по налогу на профессиональный доход (только для СЗ)
                    </li>
                    <li class="welcome-book-documents__item-pos">
                        Cправка о трудовой деятельности (личный кабинет). Выгрузка из ГОСУСЛУГ (для ГПХ)
                    </li>
                </ul>
            </li>
        </ul>
        <p class="welcome-book-documents__text">
            <span class="_text-orange">*</span> 
            для граждан других стран комплект документов другой . Полный список документов необходимых для трудоустройства предоставляется сотрудниками кадрового отдела.
        </p>
    </div>
</section>
                <section class="welcome-book-stages _grey-section">
    <img src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-stages-bg.png" alt="welcome-book-stages-bg" class="welcome-book-stages__bg" />
    <div class="welcome-book-stages__content _container">
        <h2 class="welcome-book-stages__title _title">
            Этапы подготовки к выходу на проект
        </h2>
        <ul class="welcome-book-stages__list">
            <li class="welcome-book-stages__item">
                <div class="welcome-book-stages__item-main">
                    <p class="welcome-book-stages__item-number">
                        1
                    </p>
                    <p class="welcome-book-stages__item-title">
                        Согласование плановой даты старта
                    </p>
                </div>
            </li>
            <li class="welcome-book-stages__item">
                <div class="welcome-book-stages__item-main">
                    <p class="welcome-book-stages__item-number">
                        2
                    </p>
                    <p class="welcome-book-stages__item-title">
                        Сбор документов для оформления сотрудничества с ТИМ ФОРС
                    </p>
                </div>
            </li>
            <li class="welcome-book-stages__item">
                <div class="welcome-book-stages__item-main">
                    <p class="welcome-book-stages__item-number">
                        3
                    </p>
                    <p class="welcome-book-stages__item-title">
                        Оформление документов для прохождения проверки службы безопасности и создания доступов к системам
                    </p>
                </div>
            </li>
            <li class="welcome-book-stages__item">
                <div class="welcome-book-stages__item-main">
                    <p class="welcome-book-stages__item-number">
                        4
                    </p>
                    <p class="welcome-book-stages__item-title">
                        Согласование  документов для сотрудничества с ТИМ ФОРС (в цифровом формате)
                    </p>
                </div>
            </li>
            <li class="welcome-book-stages__item">
                <div class="welcome-book-stages__item-main">
                    <p class="welcome-book-stages__item-number">
                        5
                    </p>
                    <p class="welcome-book-stages__item-title">
                        Подписание документов о сотрудничестве
                    </p>
                </div>
            </li>
        </ul>
    </div>
</section>
                <section class="welcome-book-stages welcome-book-devices _grey-section">
    <img src="<?php echo get_template_directory_uri(); ?>/img/environment-bg.png" alt="environment-bg" class="welcome-book-devices__bg">
    <div class="_container">
        <h2 class="welcome-book-stages__title _title">
            Оборудование
        </h2>
        <p class="welcome-book-stages__text">
            Для получения оборудования необходимо:
        </p>
        <ul class="welcome-book-stages__list">
            <li class="welcome-book-stages__item">
                <div class="welcome-book-stages__item-main">
                    <p class="welcome-book-stages__item-number">
                        1
                    </p>
                    <p class="welcome-book-stages__item-title">
                        Сообщить о необходимости предоставления оборудования
                    </p>
                </div>
            </li>
            <li class="welcome-book-stages__item" data-accordeon="">
                <a class="welcome-book-stages__item-main">
                    <p class="welcome-book-stages__item-number">
                        2
                    </p>
                    <p class="welcome-book-stages__item-title">
                        Согласовать адрес доставки /получения
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_462_22491)">
                            <path d="M15.9617 12.4163C16.6869 12.4163 17.0501 11.549 16.5373 11.0418C16.5373 11.0418 16.5373 11.0418 16.5373 11.0418L14.0164 8.5482C12.2799 6.83052 11.4116 5.97168 10.3327 5.97168C9.25381 5.97168 8.38556 6.83052 6.64907 8.5482L4.12817 11.0418C3.61539 11.549 3.97856 12.4163 4.70374 12.4163C4.91962 12.4163 5.12666 12.3315 5.27931 12.1805L7.80021 9.68688C8.701 8.79584 9.26324 8.24454 9.72498 7.89605C10.1417 7.58153 10.2872 7.58189 10.3305 7.582L10.3327 7.58201L10.3349 7.582C10.3782 7.58189 10.5237 7.58153 10.9405 7.89605C11.4022 8.24454 11.9645 8.79584 12.8652 9.68687L15.3862 12.1805C15.3862 12.1805 15.3862 12.1805 15.3862 12.1805C15.5388 12.3315 15.7458 12.4163 15.9617 12.4163Z" fill="#BBC1C7"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_462_22491">
                            <rect width="19.3338" height="19.3338" fill="white" transform="matrix(-1 8.7425e-08 8.74205e-08 1 20 0.333008)"/>
                            </clipPath>
                            </defs>
                        </svg>                            
                    </p>
                </a>
                <ol class="welcome-book-stages__item-list">
                    <li class="welcome-book-stages__item-pos">
                        <p class="welcome-book-stages__item-order">1/</p>
                        <p class="welcome-book-stages__item-text">
                            Можно приехать забрать лично в офисе
                        </p>
                    </li>
                    <li class="welcome-book-stages__item-pos">
                        <p class="welcome-book-stages__item-order">2/</p>
                        <p class="welcome-book-stages__item-text">
                            Можно получить через курьерскую службу.
                            Сотрудник ТИМ ФОРС организует доставку через курьерскую службу и направит трек номер для отслеживания
                        </p>
                    </li>
                </ol>
            </li>
            <li class="welcome-book-stages__item" data-accordeon="">
                <a class="welcome-book-stages__item-main">
                    <p class="welcome-book-stages__item-number">
                        3
                    </p>
                    <p class="welcome-book-stages__item-title">
                        Оформить документы
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_462_22491)">
                            <path d="M15.9617 12.4163C16.6869 12.4163 17.0501 11.549 16.5373 11.0418C16.5373 11.0418 16.5373 11.0418 16.5373 11.0418L14.0164 8.5482C12.2799 6.83052 11.4116 5.97168 10.3327 5.97168C9.25381 5.97168 8.38556 6.83052 6.64907 8.5482L4.12817 11.0418C3.61539 11.549 3.97856 12.4163 4.70374 12.4163C4.91962 12.4163 5.12666 12.3315 5.27931 12.1805L7.80021 9.68688C8.701 8.79584 9.26324 8.24454 9.72498 7.89605C10.1417 7.58153 10.2872 7.58189 10.3305 7.582L10.3327 7.58201L10.3349 7.582C10.3782 7.58189 10.5237 7.58153 10.9405 7.89605C11.4022 8.24454 11.9645 8.79584 12.8652 9.68687L15.3862 12.1805C15.3862 12.1805 15.3862 12.1805 15.3862 12.1805C15.5388 12.3315 15.7458 12.4163 15.9617 12.4163Z" fill="#BBC1C7"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_462_22491">
                            <rect width="19.3338" height="19.3338" fill="white" transform="matrix(-1 8.7425e-08 8.74205e-08 1 20 0.333008)"/>
                            </clipPath>
                            </defs>
                        </svg>                            
                    </p>
                </a>
                <ol class="welcome-book-stages__item-list">
                    <li class="welcome-book-stages__item-pos">
                        <p class="welcome-book-stages__item-order">1/</p>
                        <p class="welcome-book-stages__item-text">
                            Подписать документы о получении оборудования для выполнения производственных задач и направить скан документа сотруднику ТИМ ФОРС
                        </p>
                    </li>
                </ol>
            </li>
        </ul>
    </div>
</section>
                <section class="welcome-book-first-day _grey-section">
    <img src="<?php echo get_template_directory_uri(); ?>/img/first-day-bg.png" alt="first-day-bg" class="welcome-book-first-day__bg">
    <div class="_container">
        <h2 class="welcome-book-first-day__title _title">
            Твой первый рабочий день
        </h2>
        <ol class="internship-journey__grid journey-section__grid welcome-book-first-day__grid">
            <li class="journey-section__item">
                <p class="journey-section__item-circle">
                    01
                </p>
                Подписание документов о начале сотрудничества  
            </li>
            <li class="journey-section__item">
                <p class="journey-section__item-circle">
                    02
                </p>
                Активация доступов для работы в системах
            </li>
            <li class="journey-section__item">
                <p class="journey-section__item-circle">
                    03
                </p>
                Знакомство с командой
            </li>
        </ol>
    </div>
</section>
                <section class="welcome-book-stages _grey-section">
    <img src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-faq-bg.png" alt="welcome-book-faq-bg" class="welcome-book-stages__bg" />
    <div class="welcome-book-stages__content _container">
        <h2 class="welcome-book-stages__title _title">
            Жизненные ситуации
        </h2>
        <p class="welcome-book-stages__text">
            Мы не хотим перегружать тебя лишней информацией,  <br />
            но просьба отметить себе важные моменты, которые существенны в нашем процессе:
        </p>
        <ul class="welcome-book-stages__list">
            <li class="welcome-book-stages__item" data-accordeon="">
                <a class="welcome-book-stages__item-main">
                    <p class="welcome-book-stages__item-number">
                        1
                    </p>
                    <p class="welcome-book-stages__item-title">
                        Отпуск
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_462_22491)">
                            <path d="M15.9617 12.4163C16.6869 12.4163 17.0501 11.549 16.5373 11.0418C16.5373 11.0418 16.5373 11.0418 16.5373 11.0418L14.0164 8.5482C12.2799 6.83052 11.4116 5.97168 10.3327 5.97168C9.25381 5.97168 8.38556 6.83052 6.64907 8.5482L4.12817 11.0418C3.61539 11.549 3.97856 12.4163 4.70374 12.4163C4.91962 12.4163 5.12666 12.3315 5.27931 12.1805L7.80021 9.68688C8.701 8.79584 9.26324 8.24454 9.72498 7.89605C10.1417 7.58153 10.2872 7.58189 10.3305 7.582L10.3327 7.58201L10.3349 7.582C10.3782 7.58189 10.5237 7.58153 10.9405 7.89605C11.4022 8.24454 11.9645 8.79584 12.8652 9.68687L15.3862 12.1805C15.3862 12.1805 15.3862 12.1805 15.3862 12.1805C15.5388 12.3315 15.7458 12.4163 15.9617 12.4163Z" fill="#BBC1C7"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_462_22491">
                            <rect width="19.3338" height="19.3338" fill="white" transform="matrix(-1 8.7425e-08 8.74205e-08 1 20 0.333008)"/>
                            </clipPath>
                            </defs>
                        </svg>                            
                    </p>
                </a>
                <ol class="welcome-book-stages__item-list">
                    <li class="welcome-book-stages__item-pos">
                        <p class="welcome-book-stages__item-order">1/</p>
                        <div class="welcome-book-stages__item-text">
                            Количество дней:
                            <ul class="welcome-book-stages__item-listing">
                                <li>Для штатных сотрудников количество отпускных дней составляет 28 календарных дней в год.</li>
                                <li>Для всех прочих форм сотрудничества, минимального/максимального количества отпускных дней в год не определено.</li>
                            </ul>
                        </div>
                    </li>
                    <li class="welcome-book-stages__item-pos">
                        <p class="welcome-book-stages__item-order">2/</p>
                        <div class="welcome-book-stages__item-text">
                            Планирование (для штатных):
                            <ul class="welcome-book-stages__item-listing">
                                <li>
                                    график отпусков по штатным сотрудником формируется на год вперед в декабре и утверждается приказом компании
                                    <br />
                                    (по сотрудникам прибывшим в течение года, согласование отпуска происходит за 2 недели до желаемого старта отпуска)
                                </li>
                                <li>формирование графика происходит на основании пожеланий сотрудников</li>
                                <li>для утверждения графика требуется получить согласование непосредственного руководителя ТИМ ФОРС личного плана отпусков</li>
                                <li>планирование отпуска должно учитывать: ситуацию на проекте, график отпусков коллег, отвечать правилам оформления</li>
                            </ul>
                        </div>
                    </li>
                    <li class="welcome-book-stages__item-pos">
                        <p class="welcome-book-stages__item-order">3/</p>
                        <div class="welcome-book-stages__item-text"> 
                            Согласование: 
                            <ul class="welcome-book-stages__item-listing">
                                <li>
                                    не менее чем за 2 недели до плановой даты старта отпуска требуется обсуждение с непосредственным руководителем
                                </li>
                                <li>договоренности фиксируются в электронном виде по email</li>
                            </ul>
                        </div>
                    </li>
                    <li class="welcome-book-stages__item-pos">
                        <p class="welcome-book-stages__item-order">4/</p>
                        <div class="welcome-book-stages__item-text">
                            Оформление (для штатных):
                            <ul class="welcome-book-stages__item-listing">
                                <li>
                                    не менее чем за 2 недели до плановой даты старта отпуска требуется оформить заявление на отпуск и передать в кадры
                                </li>
                            </ul>
                        </div>
                    </li>
                </ol>
            </li>
            <li class="welcome-book-stages__item" data-accordeon="">
                <a class="welcome-book-stages__item-main">
                    <p class="welcome-book-stages__item-number">
                        2
                    </p>
                    <p class="welcome-book-stages__item-title">
                        Больничный
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_462_22491)">
                            <path d="M15.9617 12.4163C16.6869 12.4163 17.0501 11.549 16.5373 11.0418C16.5373 11.0418 16.5373 11.0418 16.5373 11.0418L14.0164 8.5482C12.2799 6.83052 11.4116 5.97168 10.3327 5.97168C9.25381 5.97168 8.38556 6.83052 6.64907 8.5482L4.12817 11.0418C3.61539 11.549 3.97856 12.4163 4.70374 12.4163C4.91962 12.4163 5.12666 12.3315 5.27931 12.1805L7.80021 9.68688C8.701 8.79584 9.26324 8.24454 9.72498 7.89605C10.1417 7.58153 10.2872 7.58189 10.3305 7.582L10.3327 7.58201L10.3349 7.582C10.3782 7.58189 10.5237 7.58153 10.9405 7.89605C11.4022 8.24454 11.9645 8.79584 12.8652 9.68687L15.3862 12.1805C15.3862 12.1805 15.3862 12.1805 15.3862 12.1805C15.5388 12.3315 15.7458 12.4163 15.9617 12.4163Z" fill="#BBC1C7"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_462_22491">
                            <rect width="19.3338" height="19.3338" fill="white" transform="matrix(-1 8.7425e-08 8.74205e-08 1 20 0.333008)"/>
                            </clipPath>
                            </defs>
                        </svg>                            
                    </p>
                </a>
                <ol class="welcome-book-stages__item-list">
                    <li class="welcome-book-stages__item-pos">
                        <p class="welcome-book-stages__item-order">1/</p>
                        <p class="welcome-book-stages__item-text">
                            Необходимо проинформировать о больничном непосредственного руководителя ТИМ ФОРС и предупредить команду проекта об отсутствии в день наступления факта.
                        </p>
                    </li>
                </ol>
            </li>
        </ul>
    </div>
</section>
                <section class="welcome-book-refferal _grey-section">
    <div class="welcome-book-refferal__content _container">
        <h2 class="welcome-book-refferal__title _title">
            Реферальная программа
        </h2>
        <p class="welcome-book-refferal__text">
            ТИМ ФОРС всегда стремится укрепить команду, чем дружнее, тем продуктивнее. 
        </p>
        <p class="welcome-book-refferal__text">
            Здесь каждый может найти новых друзей для реализации своих творческих идей. А также есть возможность привлекать в ТИМ ФОРС своих знакомых и получать 
            за это приятный бонус.
        </p>
        <p class="welcome-book-refferal__text">
            С актуальными условиями реферальной программы можно ознакомиться в <a href="https://cfe.teamforce.dev/" target="_blank" class="_text-orange _text-underline">Confluence</a>.
        </p>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/welcome-book-refferal-bg.png" alt="welcome-book-refferal-bg" class="welcome-book-refferal__bg" />
</section>
            </div>
            <?php get_template_part('/inc/contact-form'); ?>
        </main>
<?php get_footer(); ?>
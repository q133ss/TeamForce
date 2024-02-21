<?php
/*
 * Template name: Лицензии
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
                        <a class="breadcrumbs__link breadcrumbs__link-marked">Лицензии и сетификаты</a>
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
            <section class="center-initial licences-initial-section">
    <div class="services-main__mobile-text">
        <svg width="37" height="321" viewBox="0 0 37 321" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.5">
            <mask id="path-1-outside-1_1586_29105" maskUnits="userSpaceOnUse" x="0.548828" y="0.0429688" width="47" height="321" fill="black">
            <rect fill="white" x="0.548828" y="0.0429688" width="47" height="321"/>
            <path d="M2.58985 282.828H39V294.508H13V300.754C17.1641 300.754 20.8203 300.982 23.9688 301.439C27.1172 301.88 29.707 302.497 31.7383 303.293C33.7695 304.072 35.4115 305.053 36.6641 306.238C37.9167 307.406 38.7884 308.659 39.2793 309.996C39.7871 311.333 40.041 312.848 40.041 314.541C40.041 315.54 39.9479 316.496 39.7617 317.41C39.5925 318.307 39.4232 318.959 39.2539 319.365L39 320H28.3359C28.5052 319.306 28.5899 318.612 28.5899 317.918C28.5899 316.665 28.2598 315.658 27.5996 314.896C26.9225 314.135 25.5007 313.5 23.334 312.992C21.1673 312.467 18.1712 312.205 14.3457 312.205H2.58985L2.58985 282.828ZM2.58985 275.008L2.58985 263.328H20.2871L2.58985 249.541L2.58985 239.664H39V251.369H21.3281L39 265.131V275.008H2.58985ZM39 231.844H2.58985L2.58985 220.164H28.5898V210.008H2.58985L2.58985 198.303H28.5898V194.418H46.0078V206.123H39L39 231.844ZM29.377 178.066L29.377 160.369H39V189.746H2.58985L2.58985 160.902H12.2129L12.2129 178.066H16.1231L16.123 165.066H24.959L24.959 178.066H29.377ZM2.58984 120.1H39V131.805H25.7461V142.723H39L39 154.402H2.58985L2.58985 142.723H15.3359L15.3359 131.805H2.58985L2.58984 120.1ZM19.7539 91.5098C19.8216 91.3405 19.9147 91.1035 20.0332 90.7988C20.1686 90.5111 20.4818 89.9948 20.9727 89.25C21.4466 88.5052 21.9967 87.8451 22.623 87.2695C23.2493 86.694 24.1211 86.1777 25.2383 85.7207C26.3385 85.2467 27.5488 85.0098 28.8691 85.0098C31.916 85.0098 34.5397 86.3893 36.7402 89.1484C38.9408 91.9076 40.041 95.64 40.041 100.346C40.041 102.258 39.821 104.104 39.3809 105.881C38.9577 107.641 38.4414 109.105 37.832 110.273C37.2227 111.424 36.6133 112.457 36.0039 113.371C35.3945 114.268 34.8698 114.92 34.4297 115.326L33.7949 115.961L27.041 109.207C27.278 108.97 27.5742 108.64 27.9297 108.217C28.2682 107.794 28.7253 106.973 29.3008 105.754C29.8763 104.518 30.1641 103.325 30.1641 102.174C30.1641 100.82 29.9102 99.7871 29.4023 99.0762C28.8945 98.3652 28.2767 98.0098 27.5488 98.0098C25.8223 98.0098 24.959 99.3131 24.959 101.92V106.084H15.8691V102.174C15.8691 101.057 15.6576 100.219 15.2344 99.6602C14.8112 99.0846 14.278 98.7969 13.6348 98.7969C13.0085 98.7969 12.4922 99.1016 12.0859 99.7109C11.6628 100.32 11.4512 101.226 11.4512 102.428C11.4512 103.359 11.6543 104.281 12.0605 105.195C12.4499 106.092 12.8307 106.77 13.2031 107.227L13.7871 107.887L7.00781 114.387C6.8724 114.285 6.6862 114.116 6.44922 113.879C6.21224 113.642 5.77214 113.109 5.12891 112.279C4.48568 111.433 3.93555 110.519 3.47852 109.537C3.00456 108.538 2.56445 107.218 2.1582 105.576C1.75195 103.934 1.54883 102.191 1.54883 100.346C1.54883 96.0124 2.58984 92.5508 4.67187 89.9609C6.75391 87.3542 9.18294 86.0508 11.959 86.0508C13.0762 86.0508 14.1087 86.2454 15.0566 86.6348C16.0046 87.0072 16.7578 87.4642 17.3164 88.0059C17.875 88.5475 18.349 89.0807 18.7383 89.6055C19.1107 90.1133 19.3815 90.5619 19.5508 90.9512L19.7539 91.5098ZM2.58984 79.5508L2.58984 67.8711H20.2871L2.58984 54.084L2.58984 44.207H39V55.9121H21.3281L39 69.6738V79.5508H2.58984ZM2.58984 36.3867L2.58984 24.707L20.2871 24.707L2.58984 10.9199L2.58984 1.04297L39 1.04297V12.748L21.3281 12.748L39 26.5098V36.3867H2.58984Z"/>
            </mask>
            <path d="M2.58985 282.828H39V294.508H13V300.754C17.1641 300.754 20.8203 300.982 23.9688 301.439C27.1172 301.88 29.707 302.497 31.7383 303.293C33.7695 304.072 35.4115 305.053 36.6641 306.238C37.9167 307.406 38.7884 308.659 39.2793 309.996C39.7871 311.333 40.041 312.848 40.041 314.541C40.041 315.54 39.9479 316.496 39.7617 317.41C39.5925 318.307 39.4232 318.959 39.2539 319.365L39 320H28.3359C28.5052 319.306 28.5899 318.612 28.5899 317.918C28.5899 316.665 28.2598 315.658 27.5996 314.896C26.9225 314.135 25.5007 313.5 23.334 312.992C21.1673 312.467 18.1712 312.205 14.3457 312.205H2.58985L2.58985 282.828ZM2.58985 275.008L2.58985 263.328H20.2871L2.58985 249.541L2.58985 239.664H39V251.369H21.3281L39 265.131V275.008H2.58985ZM39 231.844H2.58985L2.58985 220.164H28.5898V210.008H2.58985L2.58985 198.303H28.5898V194.418H46.0078V206.123H39L39 231.844ZM29.377 178.066L29.377 160.369H39V189.746H2.58985L2.58985 160.902H12.2129L12.2129 178.066H16.1231L16.123 165.066H24.959L24.959 178.066H29.377ZM2.58984 120.1H39V131.805H25.7461V142.723H39L39 154.402H2.58985L2.58985 142.723H15.3359L15.3359 131.805H2.58985L2.58984 120.1ZM19.7539 91.5098C19.8216 91.3405 19.9147 91.1035 20.0332 90.7988C20.1686 90.5111 20.4818 89.9948 20.9727 89.25C21.4466 88.5052 21.9967 87.8451 22.623 87.2695C23.2493 86.694 24.1211 86.1777 25.2383 85.7207C26.3385 85.2467 27.5488 85.0098 28.8691 85.0098C31.916 85.0098 34.5397 86.3893 36.7402 89.1484C38.9408 91.9076 40.041 95.64 40.041 100.346C40.041 102.258 39.821 104.104 39.3809 105.881C38.9577 107.641 38.4414 109.105 37.832 110.273C37.2227 111.424 36.6133 112.457 36.0039 113.371C35.3945 114.268 34.8698 114.92 34.4297 115.326L33.7949 115.961L27.041 109.207C27.278 108.97 27.5742 108.64 27.9297 108.217C28.2682 107.794 28.7253 106.973 29.3008 105.754C29.8763 104.518 30.1641 103.325 30.1641 102.174C30.1641 100.82 29.9102 99.7871 29.4023 99.0762C28.8945 98.3652 28.2767 98.0098 27.5488 98.0098C25.8223 98.0098 24.959 99.3131 24.959 101.92V106.084H15.8691V102.174C15.8691 101.057 15.6576 100.219 15.2344 99.6602C14.8112 99.0846 14.278 98.7969 13.6348 98.7969C13.0085 98.7969 12.4922 99.1016 12.0859 99.7109C11.6628 100.32 11.4512 101.226 11.4512 102.428C11.4512 103.359 11.6543 104.281 12.0605 105.195C12.4499 106.092 12.8307 106.77 13.2031 107.227L13.7871 107.887L7.00781 114.387C6.8724 114.285 6.6862 114.116 6.44922 113.879C6.21224 113.642 5.77214 113.109 5.12891 112.279C4.48568 111.433 3.93555 110.519 3.47852 109.537C3.00456 108.538 2.56445 107.218 2.1582 105.576C1.75195 103.934 1.54883 102.191 1.54883 100.346C1.54883 96.0124 2.58984 92.5508 4.67187 89.9609C6.75391 87.3542 9.18294 86.0508 11.959 86.0508C13.0762 86.0508 14.1087 86.2454 15.0566 86.6348C16.0046 87.0072 16.7578 87.4642 17.3164 88.0059C17.875 88.5475 18.349 89.0807 18.7383 89.6055C19.1107 90.1133 19.3815 90.5619 19.5508 90.9512L19.7539 91.5098ZM2.58984 79.5508L2.58984 67.8711H20.2871L2.58984 54.084L2.58984 44.207H39V55.9121H21.3281L39 69.6738V79.5508H2.58984ZM2.58984 36.3867L2.58984 24.707L20.2871 24.707L2.58984 10.9199L2.58984 1.04297L39 1.04297V12.748L21.3281 12.748L39 26.5098V36.3867H2.58984Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1_1586_29105)"/>
            </g>
        </svg>            
    </div>
    <div class="center-initial__content _container">
        <div class="center-initial__left">
            <h1 class="center-initial__title _title-initial">
                Лицензии
                и сертификаты
            </h1>
        </div>
        <div class="center-initial__bg">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/licences-bg-first.png" 
                alt="codex-initial-bg-first"
                class="center-initial__bg-first licences-initial-section__bg _centered" 
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
            <section class="licences-items _grey-section">
    <div class="licences-items__dots-left">
        <svg width="28" height="256" viewBox="0 0 28 256" fill="none" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="26.2961" cy="221.647" rx="1.69607" ry="1.69666" transform="rotate(180 26.2961 221.647)" fill="#757E87"/>
            <ellipse cx="26.2961" cy="184.319" rx="1.69607" ry="1.69666" transform="rotate(180 26.2961 184.319)" fill="#757E87"/>
            <ellipse cx="26.2961" cy="146.999" rx="1.69607" ry="1.69666" transform="rotate(180 26.2961 146.999)" fill="#757E87"/>
            <ellipse cx="26.2961" cy="109.671" rx="1.69607" ry="1.69666" transform="rotate(180 26.2961 109.671)" fill="#757E87"/>
            <ellipse cx="26.2961" cy="72.3033" rx="1.69607" ry="1.69666" transform="rotate(180 26.2961 72.3033)" fill="#757E87"/>
            <ellipse cx="26.2961" cy="34.9362" rx="1.69607" ry="1.69666" transform="rotate(180 26.2961 34.9362)" fill="#757E87"/>
        </svg>            
    </div> 
    <div class="licences-items__content _container">
        <h2 class="licences-items__title _title">Лицензии</h2>
        <ul class="licences-items__grid">
            <li class="licences-items__item">
                <a href="#" target="_blank" class="licences-items__item-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/licence-icon.svg" alt="licence-icon" class="licence-items__item-icon">
                    <p class="licences-items__item-text">
                        Лицензии 
                        <br />
                        ФСТЭК
                    </p>
                </a>
            </li>
            <li class="licences-items__item">
                <a href="#" target="_blank" class="licences-items__item-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/licence-icon.svg" alt="licence-icon" class="licence-items__item-icon">
                    <p class="licences-items__item-text">
                        Лицензии 
                        <br />
                        ФСБ
                    </p>
                </a>
            </li>
            <li class="licences-items__item">
                <a href="#" target="_blank" class="licences-items__item-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/licence-icon.svg" alt="licence-icon" class="licence-items__item-icon">
                    <p class="licences-items__item-text">
                        Лицензия 
                        на доп.образование
                    </p>
                </a>
            </li>
        </ul>
    </div>
</section>
            <section class="licences-items _grey-section">
    <div class="licences-items__dots-right">
        <svg width="62" height="340" viewBox="0 0 62 340" fill="none" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="39.0071" cy="338.303" rx="1.69607" ry="1.69666" transform="rotate(180 39.0071 338.303)" fill="#757E87"/>
            <ellipse cx="1.69456" cy="338.303" rx="1.69607" ry="1.69666" transform="rotate(180 1.69456 338.303)" fill="#757E87"/>
            <ellipse cx="39.0071" cy="300.975" rx="1.69607" ry="1.69666" transform="rotate(180 39.0071 300.975)" fill="#757E87"/>
            <ellipse cx="1.69456" cy="300.975" rx="1.69607" ry="1.69666" transform="rotate(180 1.69456 300.975)" fill="#757E87"/>
            <ellipse cx="39.0071" cy="263.647" rx="1.69607" ry="1.69666" transform="rotate(180 39.0071 263.647)" fill="#757E87"/>
            <ellipse cx="1.69456" cy="263.647" rx="1.69607" ry="1.69666" transform="rotate(180 1.69456 263.647)" fill="#757E87"/>
            <ellipse cx="39.0071" cy="226.319" rx="1.69607" ry="1.69666" transform="rotate(180 39.0071 226.319)" fill="#757E87"/>
            <ellipse cx="1.69456" cy="226.319" rx="1.69607" ry="1.69666" transform="rotate(180 1.69456 226.319)" fill="#757E87"/>
            <ellipse cx="39.0071" cy="188.999" rx="1.69607" ry="1.69666" transform="rotate(180 39.0071 188.999)" fill="#757E87"/>
            <ellipse cx="1.69456" cy="188.999" rx="1.69607" ry="1.69666" transform="rotate(180 1.69456 188.999)" fill="#757E87"/>
            <ellipse cx="39.0071" cy="151.671" rx="1.69607" ry="1.69666" transform="rotate(180 39.0071 151.671)" fill="#757E87"/>
            <ellipse cx="1.69456" cy="151.671" rx="1.69607" ry="1.69666" transform="rotate(180 1.69456 151.671)" fill="#757E87"/>
            <ellipse cx="39.0071" cy="114.303" rx="1.69607" ry="1.69666" transform="rotate(180 39.0071 114.303)" fill="#757E87"/>
            <ellipse cx="1.69456" cy="114.303" rx="1.69607" ry="1.69666" transform="rotate(180 1.69456 114.303)" fill="#757E87"/>
            <ellipse cx="39.0071" cy="76.9362" rx="1.69607" ry="1.69666" transform="rotate(180 39.0071 76.9362)" fill="#757E87"/>
            <ellipse cx="1.69456" cy="76.9362" rx="1.69607" ry="1.69666" transform="rotate(180 1.69456 76.9362)" fill="#757E87"/>
            <ellipse cx="39.0071" cy="39.569" rx="1.69607" ry="1.69666" transform="rotate(180 39.0071 39.569)" fill="#757E87"/>
            <ellipse cx="1.69456" cy="39.569" rx="1.69607" ry="1.69666" transform="rotate(180 1.69456 39.569)" fill="#757E87"/>
            <ellipse cx="39.0071" cy="2.19397" rx="1.69607" ry="1.69666" transform="rotate(180 39.0071 2.19397)" fill="#757E87"/>
            <ellipse cx="1.69456" cy="2.19397" rx="1.69607" ry="1.69666" transform="rotate(180 1.69456 2.19397)" fill="#757E87"/>
        </svg>                       
    </div>
    <div class="licences-items__content _container">
        <h2 class="licences-items__title _title">Аккредитация и сертификация</h2>
        <ul class="licences-items__grid">
            <li class="licences-items__item">
                <a href="#" target="_blank" class="licences-items__item-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/licence-icon.svg" alt="licence-icon" class="licence-items__item-icon">
                    <p class="licences-items__item-text">
                        Аккредитация 
                        <br />
                        в МинЦифре
                    </p>
                </a>
            </li>
            <li class="licences-items__item">
                <a href="#" target="_blank" class="licences-items__item-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/licence-icon.svg" alt="licence-icon" class="licence-items__item-icon">
                    <p class="licences-items__item-text">
                        Частное агентство <br /> занятости
                    </p>
                </a>
            </li>
            <li class="licences-items__item">
                <a href="#" target="_blank" class="licences-items__item-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/licence-icon.svg" alt="licence-icon" class="licence-items__item-icon">
                    <p class="licences-items__item-text">
                        Оператор персональных
                        <br />
                        данных
                    </p>
                </a>
            </li>
            <li class="licences-items__item">
                <a href="#" target="_blank" class="licences-items__item-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/licence-icon.svg" alt="licence-icon" class="licence-items__item-icon">
                    <p class="licences-items__item-text">
                        Система менеджмента качества и <br />
                        ГОСТ Р ИСО 9001-2015
                    </p>
                </a>
            </li>
        </ul>
    </div>
</section>
            <?php get_template_part('/inc/contact-form'); ?>
        </main>
<?php
get_footer();
?>
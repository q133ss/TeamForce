<?php
/*
 * Template name: Кодекс
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
                        <a class="breadcrumbs__link breadcrumbs__link-marked">Кодекс</a>
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
            <section class="center-initial codex-initial">
    <div class="services-main__mobile-text">
        <svg width="37" height="231" viewBox="0 0 37 231" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.5">
            <mask id="path-1-outside-1_1600_29682" maskUnits="userSpaceOnUse" x="0" y="0" width="47" height="231" fill="black">
            <rect fill="white" width="47" height="231"/>
            <path d="M2.04102 217.592H14.5332L2.04102 207.385L2.04102 194.436L17.1231 206.928L38.4512 193.395V206.395L25.7051 214.469L29.6152 217.592H38.4512V229.271H2.04102L2.04102 217.592ZM14 180.191C15.7096 181.901 17.8001 182.756 20.2715 182.756C22.7259 182.756 24.808 181.901 26.5176 180.191C28.2272 178.465 29.082 176.374 29.082 173.92C29.082 171.449 28.2272 169.358 26.5176 167.648C24.8079 165.922 22.7259 165.059 20.2715 165.059C17.8001 165.059 15.7096 165.922 14 167.648C12.2734 169.358 11.4102 171.449 11.4102 173.92C11.4102 176.374 12.2734 178.465 14 180.191ZM6.68751 159.295C10.4622 155.334 14.9818 153.354 20.2461 153.354C25.5104 153.354 30.0384 155.334 33.8301 159.295C37.6048 163.239 39.4922 168.105 39.4922 173.895C39.4922 179.684 37.6048 184.559 33.8301 188.52C30.0384 192.464 25.5104 194.436 20.2461 194.436C14.9818 194.436 10.4622 192.464 6.68751 188.52C2.89584 184.559 1.00001 179.684 1.00001 173.895C1.00001 168.105 2.89584 163.239 6.68751 159.295ZM28.041 152.592V150.764C27.9395 150.628 27.7787 150.451 27.5586 150.23C27.3385 150.01 26.8053 149.621 25.959 149.062C25.0957 148.504 24.1647 148.013 23.166 147.59C22.1504 147.15 20.8047 146.752 19.1289 146.396C17.4531 146.024 15.6589 145.838 13.7461 145.838H2.04102L2.04102 117.223H28.041V113.338H45.459V125.043H38.4512V140.887H45.459L45.459 152.592H28.041ZM13.7461 134.387C15.6589 134.387 17.4447 134.556 19.1035 134.895C20.7624 135.216 22.125 135.605 23.1914 136.062C24.2409 136.503 25.1465 136.951 25.9082 137.408C26.6699 137.865 27.2116 138.246 27.5332 138.551L28.041 139.084V128.928H12.4512V134.387H13.7461ZM28.8281 96.9863L28.8281 79.2891H38.4512V108.666H2.04102L2.04102 79.8223H11.6641L11.6641 96.9863H15.5742L15.5742 83.9863H24.4102V96.9863H28.8281ZM2.04102 61.6426H14.5332L2.04102 51.4355L2.04102 38.4863L17.123 50.9785L38.4512 37.4453V50.4453L25.7051 58.5195L29.6152 61.6426H38.4512V73.3223H2.04102L2.04102 61.6426ZM13.9746 24.2168C15.6673 25.9434 17.7663 26.8066 20.2715 26.8066C22.7598 26.8066 24.8503 25.9434 26.543 24.2168C28.2357 22.4733 29.082 20.2982 29.082 17.6914C29.082 16.6927 28.9466 15.7025 28.6758 14.7207C28.4049 13.722 28.0579 12.8841 27.6348 12.207C27.2116 11.5299 26.7969 10.9375 26.3906 10.4297C25.9674 9.90495 25.6204 9.4987 25.3496 9.21094L24.9434 8.85547L32.2051 2C32.4082 2.13542 32.679 2.34701 33.0176 2.63477C33.3392 2.9056 33.9232 3.54036 34.7695 4.53906C35.599 5.53776 36.3353 6.60417 36.9785 7.73828C37.6217 8.85547 38.1973 10.3451 38.7051 12.207C39.2298 14.069 39.4922 15.9818 39.4922 17.9453C39.4922 23.7344 37.6048 28.6094 33.8301 32.5703C30.0384 36.5143 25.5104 38.4863 20.2461 38.4863C14.9818 38.4863 10.4622 36.5143 6.6875 32.5703C2.89583 28.6094 1 23.7344 1 17.9453C1 15.9648 1.25391 14.069 1.76172 12.2578C2.26953 10.4466 2.87891 8.94857 3.58984 7.76367C4.30078 6.57878 5.01172 5.53776 5.72266 4.64063C6.43359 3.74349 7.04297 3.08333 7.55078 2.66016L8.28711 2.10156L15.5742 9.10938C15.4727 9.21094 15.3288 9.35482 15.1426 9.54102C14.9395 9.71029 14.6009 10.0827 14.127 10.6582C13.6361 11.2168 13.2129 11.8092 12.8574 12.4355C12.485 13.0618 12.1549 13.8574 11.8672 14.8223C11.5625 15.7702 11.4102 16.7266 11.4102 17.6914C11.4102 20.2982 12.265 22.4733 13.9746 24.2168Z"/>
            </mask>
            <path d="M2.04102 217.592H14.5332L2.04102 207.385L2.04102 194.436L17.1231 206.928L38.4512 193.395V206.395L25.7051 214.469L29.6152 217.592H38.4512V229.271H2.04102L2.04102 217.592ZM14 180.191C15.7096 181.901 17.8001 182.756 20.2715 182.756C22.7259 182.756 24.808 181.901 26.5176 180.191C28.2272 178.465 29.082 176.374 29.082 173.92C29.082 171.449 28.2272 169.358 26.5176 167.648C24.8079 165.922 22.7259 165.059 20.2715 165.059C17.8001 165.059 15.7096 165.922 14 167.648C12.2734 169.358 11.4102 171.449 11.4102 173.92C11.4102 176.374 12.2734 178.465 14 180.191ZM6.68751 159.295C10.4622 155.334 14.9818 153.354 20.2461 153.354C25.5104 153.354 30.0384 155.334 33.8301 159.295C37.6048 163.239 39.4922 168.105 39.4922 173.895C39.4922 179.684 37.6048 184.559 33.8301 188.52C30.0384 192.464 25.5104 194.436 20.2461 194.436C14.9818 194.436 10.4622 192.464 6.68751 188.52C2.89584 184.559 1.00001 179.684 1.00001 173.895C1.00001 168.105 2.89584 163.239 6.68751 159.295ZM28.041 152.592V150.764C27.9395 150.628 27.7787 150.451 27.5586 150.23C27.3385 150.01 26.8053 149.621 25.959 149.062C25.0957 148.504 24.1647 148.013 23.166 147.59C22.1504 147.15 20.8047 146.752 19.1289 146.396C17.4531 146.024 15.6589 145.838 13.7461 145.838H2.04102L2.04102 117.223H28.041V113.338H45.459V125.043H38.4512V140.887H45.459L45.459 152.592H28.041ZM13.7461 134.387C15.6589 134.387 17.4447 134.556 19.1035 134.895C20.7624 135.216 22.125 135.605 23.1914 136.062C24.2409 136.503 25.1465 136.951 25.9082 137.408C26.6699 137.865 27.2116 138.246 27.5332 138.551L28.041 139.084V128.928H12.4512V134.387H13.7461ZM28.8281 96.9863L28.8281 79.2891H38.4512V108.666H2.04102L2.04102 79.8223H11.6641L11.6641 96.9863H15.5742L15.5742 83.9863H24.4102V96.9863H28.8281ZM2.04102 61.6426H14.5332L2.04102 51.4355L2.04102 38.4863L17.123 50.9785L38.4512 37.4453V50.4453L25.7051 58.5195L29.6152 61.6426H38.4512V73.3223H2.04102L2.04102 61.6426ZM13.9746 24.2168C15.6673 25.9434 17.7663 26.8066 20.2715 26.8066C22.7598 26.8066 24.8503 25.9434 26.543 24.2168C28.2357 22.4733 29.082 20.2982 29.082 17.6914C29.082 16.6927 28.9466 15.7025 28.6758 14.7207C28.4049 13.722 28.0579 12.8841 27.6348 12.207C27.2116 11.5299 26.7969 10.9375 26.3906 10.4297C25.9674 9.90495 25.6204 9.4987 25.3496 9.21094L24.9434 8.85547L32.2051 2C32.4082 2.13542 32.679 2.34701 33.0176 2.63477C33.3392 2.9056 33.9232 3.54036 34.7695 4.53906C35.599 5.53776 36.3353 6.60417 36.9785 7.73828C37.6217 8.85547 38.1973 10.3451 38.7051 12.207C39.2298 14.069 39.4922 15.9818 39.4922 17.9453C39.4922 23.7344 37.6048 28.6094 33.8301 32.5703C30.0384 36.5143 25.5104 38.4863 20.2461 38.4863C14.9818 38.4863 10.4622 36.5143 6.6875 32.5703C2.89583 28.6094 1 23.7344 1 17.9453C1 15.9648 1.25391 14.069 1.76172 12.2578C2.26953 10.4466 2.87891 8.94857 3.58984 7.76367C4.30078 6.57878 5.01172 5.53776 5.72266 4.64063C6.43359 3.74349 7.04297 3.08333 7.55078 2.66016L8.28711 2.10156L15.5742 9.10938C15.4727 9.21094 15.3288 9.35482 15.1426 9.54102C14.9395 9.71029 14.6009 10.0827 14.127 10.6582C13.6361 11.2168 13.2129 11.8092 12.8574 12.4355C12.485 13.0618 12.1549 13.8574 11.8672 14.8223C11.5625 15.7702 11.4102 16.7266 11.4102 17.6914C11.4102 20.2982 12.265 22.4733 13.9746 24.2168Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1_1600_29682)"/>
            </g>
        </svg>                      
    </div>
    <div class="center-initial__content _container">
        <div class="center-initial__left">
            <h1 class="center-initial__title _title-initial">
                Кодекс
            </h1>
            <p class="center-initial__text _text-initial">
                Мы развиваемся, экспериментируем и учимся на практике — в этом сила <br />
                нашей команды. За свои ошибки мы уже заплатили. Ценности, которые нас объединяют, описаны в Кодексе ТИМ ФОРС.
            </p>
        </div>
        <div class="center-initial__bg">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/codex-initial-bg-first.png" 
                alt="codex-initial-bg-first"
                class="center-initial__bg-first codex-initial__bg-first center-initial__bg _luminosity" 
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
            <section class="codex-quotes _grey-section">
    <div class="codex-quotes__content _container">
        <div class="codex-quotes__left">
            <ul class="codex-quotes__numbers" data-scrollbar="">
                <li class="codex-quotes__numbers-item" data-codex-quote-number="1">
                    1
                </li>
                <li class="codex-quotes__numbers-item" data-codex-quote-number="2">
                    2
                </li>
                <li class="codex-quotes__numbers-item" data-codex-quote-number="3">
                    3
                </li>
                <li class="codex-quotes__numbers-item" data-codex-quote-number="4">
                    4
                </li>
                <li class="codex-quotes__numbers-item" data-codex-quote-number="5">
                    5
                </li>
                <li class="codex-quotes__numbers-item" data-codex-quote-number="6">
                    6
                </li>
                <li class="codex-quotes__numbers-item" data-codex-quote-number="7">
                    7
                </li>
                <li class="codex-quotes__numbers-item" data-codex-quote-number="8">
                    8
                </li>
                <li class="codex-quotes__numbers-item" data-codex-quote-number="9">
                    9
                </li>
            </ul>
            <ul class="codex-quotes__items" data-scrollbar="">
                <li class="codex-quotes__item" data-codex-quote="1" data-scrollbar="">
                    <div class="codex-quotes__item-content">
                        <h4 class="codex-quotes__item-title">
                            Одни долбят камни, <span class="_text-bold">а другие – строят храм</span>
                        </h4>
                        <div class="codex-quotes__item-body">
                            <p class="codex-quotes__item-text">
                                Трех каменотесов спросили: "Что вы делаете?". 
                            </p>
                            <p class="codex-quotes__item-text">
                                Первый с отчаянием ответил: 
                                "Я дроблю эти ужасные камни". Второй безразлично сказал: 
                                "Я зарабатываю этим себе на жизнь". 
                                А третий воодушевленным голосом произнес:" Я строю храм!". 
                            </p>  
                            <p class="codex-quotes__item-text">
                                Важно понимать для чего Вы работаете и найти для себя смысл, который будет нести Вас вперед.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="codex-quotes__item" data-codex-quote="2" data-scrollbar="">
                    <div class="codex-quotes__item-content">
                        <h4 class="codex-quotes__item-title">
                            Одни долбят камни, <span class="_text-bold">а другие – строят храм</span>
                        </h4>
                        <div class="codex-quotes__item-body">
                            <p class="codex-quotes__item-text">
                                Трех каменотесов спросили: "Что вы делаете?". 
                            </p>
                            <p class="codex-quotes__item-text">
                                Первый с отчаянием ответил: 
                                "Я дроблю эти ужасные камни". Второй безразлично сказал: 
                                "Я зарабатываю этим себе на жизнь". 
                                А третий воодушевленным голосом произнес:" Я строю храм!". 
                            </p>  
                            <p class="codex-quotes__item-text">
                                Важно понимать для чего Вы работаете и найти для себя смысл, который будет нести Вас вперед.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="codex-quotes__item" data-codex-quote="3" data-scrollbar="">
                    <div class="codex-quotes__item-content">
                        <h4 class="codex-quotes__item-title">
                            Одни долбят камни, <span class="_text-bold">а другие – строят храм</span>
                        </h4>
                        <div class="codex-quotes__item-body">
                            <p class="codex-quotes__item-text">
                                Трех каменотесов спросили: "Что вы делаете?". 
                            </p>
                            <p class="codex-quotes__item-text">
                                Первый с отчаянием ответил: 
                                "Я дроблю эти ужасные камни". Второй безразлично сказал: 
                                "Я зарабатываю этим себе на жизнь". 
                                А третий воодушевленным голосом произнес:" Я строю храм!". 
                            </p>  
                            <p class="codex-quotes__item-text">
                                Важно понимать для чего Вы работаете и найти для себя смысл, который будет нести Вас вперед.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="codex-quotes__item" data-codex-quote="4" data-scrollbar="">
                    <div class="codex-quotes__item-content">
                        <h4 class="codex-quotes__item-title">
                            Одни долбят камни, <span class="_text-bold">а другие – строят храм</span>
                        </h4>
                        <div class="codex-quotes__item-body">
                            <p class="codex-quotes__item-text">
                                Трех каменотесов спросили: "Что вы делаете?". 
                            </p>
                            <p class="codex-quotes__item-text">
                                Первый с отчаянием ответил: 
                                "Я дроблю эти ужасные камни". Второй безразлично сказал: 
                                "Я зарабатываю этим себе на жизнь". 
                                А третий воодушевленным голосом произнес:" Я строю храм!". 
                            </p>  
                            <p class="codex-quotes__item-text">
                                Важно понимать для чего Вы работаете и найти для себя смысл, который будет нести Вас вперед.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="codex-quotes__item" data-codex-quote="5" data-scrollbar="">
                    <div class="codex-quotes__item-content">
                        <h4 class="codex-quotes__item-title">
                            Одни долбят камни, <span class="_text-bold">а другие – строят храм</span>
                        </h4>
                        <div class="codex-quotes__item-body">
                            <p class="codex-quotes__item-text">
                                Трех каменотесов спросили: "Что вы делаете?". 
                            </p>
                            <p class="codex-quotes__item-text">
                                Первый с отчаянием ответил: 
                                "Я дроблю эти ужасные камни". Второй безразлично сказал: 
                                "Я зарабатываю этим себе на жизнь". 
                                А третий воодушевленным голосом произнес:" Я строю храм!". 
                            </p>  
                            <p class="codex-quotes__item-text">
                                Важно понимать для чего Вы работаете и найти для себя смысл, который будет нести Вас вперед.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="codex-quotes__item" data-codex-quote="6" data-scrollbar="">
                    <div class="codex-quotes__item-content">
                        <h4 class="codex-quotes__item-title">
                            Одни долбят камни, <span class="_text-bold">а другие – строят храм</span>
                        </h4>
                        <div class="codex-quotes__item-body">
                            <p class="codex-quotes__item-text">
                                Трех каменотесов спросили: "Что вы делаете?". 
                            </p>
                            <p class="codex-quotes__item-text">
                                Первый с отчаянием ответил: 
                                "Я дроблю эти ужасные камни". Второй безразлично сказал: 
                                "Я зарабатываю этим себе на жизнь". 
                                А третий воодушевленным голосом произнес:" Я строю храм!". 
                            </p>  
                            <p class="codex-quotes__item-text">
                                Важно понимать для чего Вы работаете и найти для себя смысл, который будет нести Вас вперед.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="codex-quotes__item" data-codex-quote="7" data-scrollbar="">
                    <div class="codex-quotes__item-content">
                        <h4 class="codex-quotes__item-title">
                            Одни долбят камни, <span class="_text-bold">а другие – строят храм</span>
                        </h4>
                        <div class="codex-quotes__item-body">
                            <p class="codex-quotes__item-text">
                                Трех каменотесов спросили: "Что вы делаете?". 
                            </p>
                            <p class="codex-quotes__item-text">
                                Первый с отчаянием ответил: 
                                "Я дроблю эти ужасные камни". Второй безразлично сказал: 
                                "Я зарабатываю этим себе на жизнь". 
                                А третий воодушевленным голосом произнес:" Я строю храм!". 
                            </p>  
                            <p class="codex-quotes__item-text">
                                Важно понимать для чего Вы работаете и найти для себя смысл, который будет нести Вас вперед.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="codex-quotes__item" data-codex-quote="8" data-scrollbar="">
                    <div class="codex-quotes__item-content">
                        <h4 class="codex-quotes__item-title">
                            Одни долбят камни, <span class="_text-bold">а другие – строят храм</span>
                        </h4>
                        <div class="codex-quotes__item-body">
                            <p class="codex-quotes__item-text">
                                Трех каменотесов спросили: "Что вы делаете?". 
                            </p>
                            <p class="codex-quotes__item-text">
                                Первый с отчаянием ответил: 
                                "Я дроблю эти ужасные камни". Второй безразлично сказал: 
                                "Я зарабатываю этим себе на жизнь". 
                                А третий воодушевленным голосом произнес:" Я строю храм!". 
                            </p>  
                            <p class="codex-quotes__item-text">
                                Важно понимать для чего Вы работаете и найти для себя смысл, который будет нести Вас вперед.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="codex-quotes__item" data-codex-quote="9" data-scrollbar="">
                    <div class="codex-quotes__item-content">
                        <h4 class="codex-quotes__item-title">
                            Одни долбят камни, <span class="_text-bold">а другие – строят храм</span>
                        </h4>
                        <div class="codex-quotes__item-body">
                            <p class="codex-quotes__item-text">
                                Трех каменотесов спросили: "Что вы делаете?". 
                            </p>
                            <p class="codex-quotes__item-text">
                                Первый с отчаянием ответил: 
                                "Я дроблю эти ужасные камни". Второй безразлично сказал: 
                                "Я зарабатываю этим себе на жизнь". 
                                А третий воодушевленным голосом произнес:" Я строю храм!". 
                            </p>  
                            <p class="codex-quotes__item-text">
                                Важно понимать для чего Вы работаете и найти для себя смысл, который будет нести Вас вперед.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/codex-quote-first-bg.png" alt="codex-quote-first-bg" class="codex-quotes__bg-first" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/codex-quote-dots.png" alt="codex-quote-dots" class="codex-quotes__bg-dots" />
    </div>
</section>
            <section class="codex-interpretation _grey-section">
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
            Толкование Кодекса
        </h2>
        <ul class="codex-interpretation__grid">
            <li class="codex-interpretation__item">
                <p class="codex-interpretation__item-number">
                    <span>1</span>
                    <svg width="40" height="40" viewPort="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <circle fill="#2c2b30" r="15" cx="20" cy="20" stroke="#F15A29" stroke-width="2px" stroke-dasharray="94.2px" stroke-dashoffset="70.65px">
                        </circle>
                    </svg>
                </p>
                <h4 class="codex-interpretation__item-title">
                    Каждый крайний четверг
                </h4>
                <p class="codex-interpretation__item-text">
                    Такие встречи также могут быть полезными для обсуждения и решения важных вопросов. 
                    Участники могут обсудить прошлые и будущие планы, 
                    делиться опытом и помогать друг другу в достижении своих целей
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
                    Время встреч 18:00
                </h4>
                <p class="codex-interpretation__item-text">
                    Встреча в 18:00 позволяет всем участникам подготовиться к ней и прийти вовремя. 
                    Это время также хорошо подходит для деловых встреч или рабочих совещаний, 
                    когда все участники могут собраться после рабочего дня, 
                    обсудить важные вопросы и принять решения.
                </p>
            </li>
            <li class="codex-interpretation__item">
                <p class="codex-interpretation__item-number">
                   <span>3</span>
                   <svg width="40" height="40" viewPort="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <circle fill="#2c2b30" r="15" cx="20" cy="20" stroke="#F15A29" stroke-width="2px" stroke-dasharray="94.2px" stroke-dashoffset="23.55px">
                        </circle>
                    </svg>
                </p>
                <h4 class="codex-interpretation__item-title">
                    Место Google Meet
                </h4>
                <p class="codex-interpretation__item-text">
                    Возможность совместной работы: 
                    Google Meet интегрирован с другими инструментами Google, 
                    такими как Google Документы, Google Презентации и Google Таблицы
                </p>
            </li>
            <li class="codex-interpretation__item">
                <p class="codex-interpretation__item-number">
                    <span>4</span>
                    <svg width="40" height="40" viewPort="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <circle fill="#2c2b30" r="15" cx="20" cy="20" stroke="#F15A29" stroke-width="2px" stroke-dasharray="94.2px" stroke-dashoffset="0">
                        </circle>
                    </svg>
                </p>
                <h4 class="codex-interpretation__item-title">
                    Ноутбук или смартфон
                </h4>
                <p class="codex-interpretation__item-text">
                    Достаточно использовать ноутбук или
                    <br />
                    смартфон для подключения
                </p>
            </li>
        </ul>
    </div>
</section>
            <?php get_template_part('/inc/contact-form'); ?>
        </main>
<?php
get_footer();
?>
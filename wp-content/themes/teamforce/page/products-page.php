<?php
/*
 * Template name: Продукты
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
                        <a href="#" class="breadcrumbs__link">Главная</a>
                    </li>
                    <li class="breadcrumbs__item last">
                        <a href="<?php echo get_page_link(85); ?>" class="breadcrumbs__link">Витрина ТФА</a>
                    </li>
                    <li class="breadcrumbs__item last">
                        <a class="breadcrumbs__link breadcrumbs__link-marked">Продукты и сервисы</a>
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
            <section class="products _grey-section">
    <img src="<?php echo get_template_directory_uri(); ?>/img/products-top-bg.png" alt="products-top-bg" class="products__bg" />
    <div class="_container">
        <div class="products__content _grey-section__content">
            <h2 class="products__title _grey-section__title">
                Продукты
            </h2>
            <div class="products__row">
                <a href="#" target="_blank" class="products__item products__item-big">
                    <div class="products__item-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/teamforce-360.png" alt="teamforce-360">
                    </div>
                    <div class="products__item-info">
                        <h3 class="products__item-title">ТИМФОРС360</h3>
                        <p class="products__item-text">Цифровое спасибо создает единое <br /> пространство для сотрудников, где можно дать неформальную обратную связь и получить признание заслуг.</p>
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
                            Межкорпоративная сеть 
                            для развития проектной 
                            кооперации между
                            компаниями в сфере ИТ-услуг
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
                            Отраслевая <br />
                            ERP для T&M IT-бизнеса
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
            <div class="products__row products__row-small">
                <a href="#" target="_blank" class="products__item products__item-small">
                    <div class="products__item-info">
                        <h3 class="products__item-title">Финейтив</h3>
                        <p class="products__item-text">
                            Цифровой финансовый <br /> сервис
                        </p>
                        <div class="products__item-platforms">
                            <div class="products__item-platform products__item-platform-orange">
                                <div class="products__item-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/web-icon-white.png" alt="web-icon-white">
                                </div>
                                <p class="products__item-name">Web</p>
                            </div>
                        </div>
                    </div>
                    <div class="products__item-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fineitiv-product.png" alt="fineitiv-product">
                    </div>
                </a>
                <a href="#" target="_blank" class="products__item products__item-orange products__item-small">
                    <div class="products__item-info">
                        <h3 class="products__item-title">KYNN</h3>
                        <p class="products__item-text">
                            Платформа развития карьеры 
                            и поиска команд
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/kynn-product.png" alt="kynn-product">
                    </div>
                </a>
                <a href="#" target="_blank" class="products__item products__item-small">
                    <div class="products__item-info">
                        <h3 class="products__item-title"> Incomand</h3>
                        <p class="products__item-text">
                            Корпоративный портал нового поколения для компаний
                        </p>
                        <div class="products__item-platforms">
                            <div class="products__item-platform products__item-platform-orange">
                                <div class="products__item-icon products__item-icon-orange">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/web-icon-white.png" alt="web-icon-white" />
                                </div>
                                <p class="products__item-name">Web</p>
                            </div>
                        </div>
                    </div>
                    <div class="products__item-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/incommand-product.png" alt="incommand-product">
                    </div>
                </a>
            </div>
            <div class="products__row products__row-medium">
                <a href="#" target="_blank" class="products__item products__item-main">
                    <div class="products__item-info full">
                        <h3 class="products__item-title">ЕНИСЕЙ</h3>
                        <p class="products__item-text">
                            СУБД «Енисей» — это документо-ориентированная, высокопроизводительная, распределённая NoSQL СУБД 
                            с поддержкой multi-master replication.
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
                </a>
                <a href="#" target="_blank" class="products__item products__item-main">
                    <div class="products__item-info full">
                        <h3 class="products__item-title">Imaginarium</h3>
                        <p class="products__item-text">
                            Post-DevOps-платформа на базе классического Docker, сокращающая сроки разработки, оптимизирующая процессы управления средами, отладки, тестирования, мониторинга и вывода ПО в промышленную эксплуатацию.
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
                </a>
                <a href="#" target="_blank" class="products__item products__item-main">
                    <div class="products__item-info full">
                        <h3 class="products__item-title">FinAxio</h3>
                        <p class="products__item-text">
                            Полностью автоматизированное, единое информационное пространство для казначея,  позволяющее выстроить сквозной процесс управления денежными средствами компании.
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
                </a>
                <a href="#" target="_blank" class="products__item products__item-main">
                    <div class="products__item-info full">
                        <h3 class="products__item-title">НОТА МОДУС</h3>
                        <p class="products__item-text">
                            Модульная платформа 
                            для автоматизации продаж, 
                            маркетинга и клиентского 
                            сервиса.
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
                </a>
            </div>
        </div>
    </div>
</section>
            <?php get_template_part('/inc/contact-form'); ?>
        </main>
<?php
get_footer();
?>
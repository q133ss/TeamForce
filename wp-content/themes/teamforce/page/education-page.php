<?php
/*
 * Template name: Образовательный центр
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
                        <a href="<?php echo get_page_link(77); ?>" class="breadcrumbs__link last">Сервисы</a>
                    </li>
                    <li class="breadcrumbs__item last"> 
                        <a class="breadcrumbs__link breadcrumbs__link-marked">Образовательный центр</a>
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
<section class="education-main">
    <div class="_container">
        <div class="education-main__img">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/education-center-main-image.png" 
                alt="education-center-main-image" 
                class="education-main__img-first"
            />
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/center-circle-bg.png" 
                alt="resource-center-bg-first"
                class="education-main__img-circles _desktop" 
            />  
        </div>
        <a href="#contactForm" data-anchor-scroll="" class="education-main__button _button-orange">Оставить заявку</a>
    </div>
</section>
            <section class="education-quote">
    <div class="education-quote__quote">
        <p class="education-quote__text">
            Образовательный центр подготовки IT-специалистов предлагает курсы и интенсивы по направлениям Java-, Android- и iOS-разработки, System Analytics, Quality Assurance. 
            По завершении курса студенты получают предложения о трудоустройстве на проекты партнеров.
        </p>
        <div class="education-quote__person">
            <div class="education-quote__person-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/elizariev-avatar.png" alt="elizariev-avatar">
            </div>
            <div class="education-quote__person-info">
                <p class="education-quote__person-name">Александр Елизарьев</p>
                <p class="education-quote__person-text">Основатель центра</p>
            </div>
        </div>
    </div>
</section>
            <section class="education-advantages _grey-section">
    <div class="_container">
        <h2 class="education-advantages__title">Преимущества</h2>
        <ul class="education-advantages__items">
            <li class="education-advantages__item">Практика и обучение на реальных проектах</li>
            <li class="education-advantages__item">Преподаватели – эксперты в сфере финтеха и enterprise-разработки</li>
            <li class="education-advantages__item">Сопровождение и обратная связь на протяжении обучения</li>
            <li class="education-advantages__item">Курсы рассчитаны как на начинающих разработчиков, так и на специалистов уровня Middle</li>
        </ul>
    </div>
</section>
            <?php get_template_part('/inc/contact-form'); ?>
        </main>
<?php
get_footer();
?>
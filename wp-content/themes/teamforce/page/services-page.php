<?php
/*
 * Template name: Сервисы
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
                        <a class="breadcrumbs__link last breadcrumbs__link-marked">Сервисы</a>
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
            <section class="services-main">
    <div class="services-main__mobile-text">
        <svg width="37" height="282" viewBox="0 0 37 282" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.5">
            <mask id="path-1-outside-1_1205_47243" maskUnits="userSpaceOnUse" x="0.548828" y="0.789062" width="41" height="281" fill="black">
            <rect fill="white" x="0.548828" y="0.789062" width="41" height="281"/>
            <path d="M14.5234 265.902C16.2162 267.629 18.3151 268.492 20.8203 268.492C23.3086 268.492 25.3991 267.629 27.0918 265.902C28.7845 264.159 29.6309 261.984 29.6309 259.377C29.6309 258.378 29.4955 257.388 29.2246 256.406C28.9538 255.408 28.6068 254.57 28.1836 253.893C27.7604 253.215 27.3457 252.623 26.9395 252.115C26.5163 251.59 26.1693 251.184 25.8984 250.896L25.4922 250.541L32.7539 243.686C32.957 243.821 33.2279 244.033 33.5664 244.32C33.888 244.591 34.472 245.226 35.3184 246.225C36.1478 247.223 36.8841 248.29 37.5274 249.424C38.1706 250.541 38.7461 252.031 39.2539 253.893C39.7787 255.755 40.041 257.667 40.041 259.631C40.041 265.42 38.1537 270.295 34.3789 274.256C30.5872 278.2 26.0593 280.172 20.7949 280.172C15.5306 280.172 11.0111 278.2 7.23634 274.256C3.44467 270.295 1.54884 265.42 1.54884 259.631C1.54884 257.65 1.80274 255.755 2.31055 253.943C2.81837 252.132 3.42774 250.634 4.13868 249.449C4.84962 248.264 5.56055 247.223 6.27149 246.326C6.98243 245.429 7.5918 244.769 8.09962 244.346L8.83595 243.787L16.1231 250.795C16.0215 250.896 15.8776 251.04 15.6914 251.227C15.4883 251.396 15.1497 251.768 14.6758 252.344C14.1849 252.902 13.7617 253.495 13.4063 254.121C13.0339 254.747 12.7038 255.543 12.416 256.508C12.1113 257.456 11.959 258.412 11.959 259.377C11.959 261.984 12.8138 264.159 14.5234 265.902ZM29.377 227.309L29.377 209.611H39V238.988H2.58985L2.58985 210.145H12.2129V227.309H16.1231V214.309H24.959L24.959 227.309H29.377ZM2.58985 203.645L2.58985 186.506C2.58985 182.274 3.84245 178.88 6.34766 176.324C8.83594 173.751 12.0098 172.465 15.8691 172.465C19.7116 172.465 22.8854 173.751 25.3906 176.324C27.8789 178.88 29.1231 182.274 29.1231 186.506V191.965H39L39 203.645H2.58985ZM13 187.268L13 191.965H18.7129V187.268C18.7129 186.37 18.4421 185.626 17.9004 185.033C17.3418 184.441 16.6647 184.145 15.8691 184.145C15.0736 184.145 14.3965 184.441 13.8379 185.033C13.2793 185.626 13 186.37 13 187.268ZM39 149.055V166.98H2.58985L2.58985 150.096C2.58985 145.999 3.53776 142.766 5.4336 140.396C7.32943 138.027 9.5892 136.842 12.2129 136.842C13.2116 136.842 14.168 137.028 15.082 137.4C15.9792 137.756 16.6986 138.188 17.2402 138.695C17.7819 139.186 18.2643 139.686 18.6875 140.193C19.0938 140.684 19.3815 141.107 19.5508 141.463L19.7539 142.021C19.8216 141.852 19.9232 141.607 20.0586 141.285C20.1771 140.947 20.4733 140.38 20.9473 139.584C21.4043 138.788 21.9375 138.077 22.5469 137.451C23.1563 136.825 24.0111 136.266 25.1113 135.775C26.1947 135.268 27.3542 135.014 28.5898 135.014C31.4675 135.014 33.9219 136.266 35.9531 138.771C37.9844 141.26 39 144.688 39 149.055ZM30.1641 155.301V150.096C30.1641 149.199 29.8848 148.454 29.3262 147.861C28.7676 147.269 28.0905 146.973 27.2949 146.973C26.4994 146.973 25.8307 147.269 25.2891 147.861C24.7305 148.454 24.4512 149.199 24.4512 150.096V155.301H30.1641ZM11.4512 151.391V155.301H16.1231V151.391C16.1231 150.629 15.903 150.011 15.4629 149.537C15.0059 149.046 14.4473 148.801 13.7871 148.801C13.127 148.801 12.5768 149.046 12.1367 149.537C11.6797 150.011 11.4512 150.629 11.4512 151.391ZM2.58985 129.555L2.58985 117.875H20.2871L2.58985 104.088L2.58984 94.2109H39V105.916H21.3281L39 119.678V129.555H2.58985ZM14.5234 74.2031C16.2161 75.9297 18.3151 76.793 20.8203 76.793C23.3086 76.793 25.3991 75.9297 27.0918 74.2031C28.7845 72.4596 29.6309 70.2845 29.6309 67.6777C29.6309 66.679 29.4954 65.6888 29.2246 64.707C28.9538 63.7083 28.6068 62.8704 28.1836 62.1934C27.7604 61.5163 27.3457 60.9238 26.9395 60.416C26.5163 59.8913 26.1693 59.485 25.8984 59.1973L25.4922 58.8418L32.7539 51.9863C32.957 52.1217 33.2279 52.3333 33.5664 52.6211C33.888 52.8919 34.472 53.5267 35.3184 54.5254C36.1478 55.5241 36.8841 56.5905 37.5273 57.7246C38.1706 58.8418 38.7461 60.3314 39.2539 62.1934C39.7786 64.0553 40.041 65.9681 40.041 67.9316C40.041 73.7207 38.1536 78.5957 34.3789 82.5566C30.5872 86.5006 26.0592 88.4727 20.7949 88.4727C15.5306 88.4727 11.0111 86.5006 7.23633 82.5566C3.44466 78.5957 1.54883 73.7207 1.54883 67.9316C1.54883 65.9512 1.80273 64.0553 2.31055 62.2441C2.81836 60.4329 3.42773 58.9349 4.13867 57.75C4.84961 56.5651 5.56055 55.5241 6.27148 54.627C6.98242 53.7298 7.5918 53.0697 8.09961 52.6465L8.83594 52.0879L16.123 59.0957C16.0215 59.1973 15.8776 59.3411 15.6914 59.5273C15.4883 59.6966 15.1497 60.069 14.6758 60.6445C14.1849 61.2031 13.7617 61.7956 13.4062 62.4219C13.0339 63.0482 12.7038 63.8438 12.416 64.8086C12.1113 65.7565 11.959 66.7129 11.959 67.6777C11.959 70.2845 12.8138 72.4596 14.5234 74.2031ZM2.58984 1.78906L39 1.78906V13.4941L2.58984 13.4941L2.58984 1.78906ZM39 47.2891H2.58984L2.58984 35.6094H12.4922L12.4922 30.6582C12.4922 26.4264 13.7363 23.0326 16.2246 20.4766C18.7129 17.9036 21.8867 16.6172 25.7461 16.6172C29.5885 16.6172 32.7624 17.9036 35.2676 20.4766C37.7559 23.0326 39 26.4264 39 30.6582V47.2891ZM28.5898 31.4453C28.5898 30.5482 28.319 29.8034 27.7773 29.2109C27.2187 28.6185 26.5417 28.3223 25.7461 28.3223C24.9505 28.3223 24.2734 28.6185 23.7148 29.2109C23.1562 29.8034 22.877 30.5482 22.877 31.4453V35.6094H28.5898V31.4453Z"/>
            </mask>
            <path d="M14.5234 265.902C16.2162 267.629 18.3151 268.492 20.8203 268.492C23.3086 268.492 25.3991 267.629 27.0918 265.902C28.7845 264.159 29.6309 261.984 29.6309 259.377C29.6309 258.378 29.4955 257.388 29.2246 256.406C28.9538 255.408 28.6068 254.57 28.1836 253.893C27.7604 253.215 27.3457 252.623 26.9395 252.115C26.5163 251.59 26.1693 251.184 25.8984 250.896L25.4922 250.541L32.7539 243.686C32.957 243.821 33.2279 244.033 33.5664 244.32C33.888 244.591 34.472 245.226 35.3184 246.225C36.1478 247.223 36.8841 248.29 37.5274 249.424C38.1706 250.541 38.7461 252.031 39.2539 253.893C39.7787 255.755 40.041 257.667 40.041 259.631C40.041 265.42 38.1537 270.295 34.3789 274.256C30.5872 278.2 26.0593 280.172 20.7949 280.172C15.5306 280.172 11.0111 278.2 7.23634 274.256C3.44467 270.295 1.54884 265.42 1.54884 259.631C1.54884 257.65 1.80274 255.755 2.31055 253.943C2.81837 252.132 3.42774 250.634 4.13868 249.449C4.84962 248.264 5.56055 247.223 6.27149 246.326C6.98243 245.429 7.5918 244.769 8.09962 244.346L8.83595 243.787L16.1231 250.795C16.0215 250.896 15.8776 251.04 15.6914 251.227C15.4883 251.396 15.1497 251.768 14.6758 252.344C14.1849 252.902 13.7617 253.495 13.4063 254.121C13.0339 254.747 12.7038 255.543 12.416 256.508C12.1113 257.456 11.959 258.412 11.959 259.377C11.959 261.984 12.8138 264.159 14.5234 265.902ZM29.377 227.309L29.377 209.611H39V238.988H2.58985L2.58985 210.145H12.2129V227.309H16.1231V214.309H24.959L24.959 227.309H29.377ZM2.58985 203.645L2.58985 186.506C2.58985 182.274 3.84245 178.88 6.34766 176.324C8.83594 173.751 12.0098 172.465 15.8691 172.465C19.7116 172.465 22.8854 173.751 25.3906 176.324C27.8789 178.88 29.1231 182.274 29.1231 186.506V191.965H39L39 203.645H2.58985ZM13 187.268L13 191.965H18.7129V187.268C18.7129 186.37 18.4421 185.626 17.9004 185.033C17.3418 184.441 16.6647 184.145 15.8691 184.145C15.0736 184.145 14.3965 184.441 13.8379 185.033C13.2793 185.626 13 186.37 13 187.268ZM39 149.055V166.98H2.58985L2.58985 150.096C2.58985 145.999 3.53776 142.766 5.4336 140.396C7.32943 138.027 9.5892 136.842 12.2129 136.842C13.2116 136.842 14.168 137.028 15.082 137.4C15.9792 137.756 16.6986 138.188 17.2402 138.695C17.7819 139.186 18.2643 139.686 18.6875 140.193C19.0938 140.684 19.3815 141.107 19.5508 141.463L19.7539 142.021C19.8216 141.852 19.9232 141.607 20.0586 141.285C20.1771 140.947 20.4733 140.38 20.9473 139.584C21.4043 138.788 21.9375 138.077 22.5469 137.451C23.1563 136.825 24.0111 136.266 25.1113 135.775C26.1947 135.268 27.3542 135.014 28.5898 135.014C31.4675 135.014 33.9219 136.266 35.9531 138.771C37.9844 141.26 39 144.688 39 149.055ZM30.1641 155.301V150.096C30.1641 149.199 29.8848 148.454 29.3262 147.861C28.7676 147.269 28.0905 146.973 27.2949 146.973C26.4994 146.973 25.8307 147.269 25.2891 147.861C24.7305 148.454 24.4512 149.199 24.4512 150.096V155.301H30.1641ZM11.4512 151.391V155.301H16.1231V151.391C16.1231 150.629 15.903 150.011 15.4629 149.537C15.0059 149.046 14.4473 148.801 13.7871 148.801C13.127 148.801 12.5768 149.046 12.1367 149.537C11.6797 150.011 11.4512 150.629 11.4512 151.391ZM2.58985 129.555L2.58985 117.875H20.2871L2.58985 104.088L2.58984 94.2109H39V105.916H21.3281L39 119.678V129.555H2.58985ZM14.5234 74.2031C16.2161 75.9297 18.3151 76.793 20.8203 76.793C23.3086 76.793 25.3991 75.9297 27.0918 74.2031C28.7845 72.4596 29.6309 70.2845 29.6309 67.6777C29.6309 66.679 29.4954 65.6888 29.2246 64.707C28.9538 63.7083 28.6068 62.8704 28.1836 62.1934C27.7604 61.5163 27.3457 60.9238 26.9395 60.416C26.5163 59.8913 26.1693 59.485 25.8984 59.1973L25.4922 58.8418L32.7539 51.9863C32.957 52.1217 33.2279 52.3333 33.5664 52.6211C33.888 52.8919 34.472 53.5267 35.3184 54.5254C36.1478 55.5241 36.8841 56.5905 37.5273 57.7246C38.1706 58.8418 38.7461 60.3314 39.2539 62.1934C39.7786 64.0553 40.041 65.9681 40.041 67.9316C40.041 73.7207 38.1536 78.5957 34.3789 82.5566C30.5872 86.5006 26.0592 88.4727 20.7949 88.4727C15.5306 88.4727 11.0111 86.5006 7.23633 82.5566C3.44466 78.5957 1.54883 73.7207 1.54883 67.9316C1.54883 65.9512 1.80273 64.0553 2.31055 62.2441C2.81836 60.4329 3.42773 58.9349 4.13867 57.75C4.84961 56.5651 5.56055 55.5241 6.27148 54.627C6.98242 53.7298 7.5918 53.0697 8.09961 52.6465L8.83594 52.0879L16.123 59.0957C16.0215 59.1973 15.8776 59.3411 15.6914 59.5273C15.4883 59.6966 15.1497 60.069 14.6758 60.6445C14.1849 61.2031 13.7617 61.7956 13.4062 62.4219C13.0339 63.0482 12.7038 63.8438 12.416 64.8086C12.1113 65.7565 11.959 66.7129 11.959 67.6777C11.959 70.2845 12.8138 72.4596 14.5234 74.2031ZM2.58984 1.78906L39 1.78906V13.4941L2.58984 13.4941L2.58984 1.78906ZM39 47.2891H2.58984L2.58984 35.6094H12.4922L12.4922 30.6582C12.4922 26.4264 13.7363 23.0326 16.2246 20.4766C18.7129 17.9036 21.8867 16.6172 25.7461 16.6172C29.5885 16.6172 32.7624 17.9036 35.2676 20.4766C37.7559 23.0326 39 26.4264 39 30.6582V47.2891ZM28.5898 31.4453C28.5898 30.5482 28.319 29.8034 27.7773 29.2109C27.2187 28.6185 26.5417 28.3223 25.7461 28.3223C24.9505 28.3223 24.2734 28.6185 23.7148 29.2109C23.1562 29.8034 22.877 30.5482 22.877 31.4453V35.6094H28.5898V31.4453Z" stroke="white" stroke-width="2" mask="url(#path-1-outside-1_1205_47243)"/>
            </g>
        </svg>            
    </div>
    <div class="center-initial__content _container">
        <div class="center-initial__left">
            <h1 class="center-initial__title _title-initial">
                Сервисы
            </h1>
            <p class="center-initial__text _text-initial">
                Современных инструменты усиления роста среднего и малого ИТ-бизнеса.
            </p>
        </div>
        <div class="center-initial__bg">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/services-bg-desktop.png" 
                alt="services-bg-desktop"
                class="center-initial__bg-first services-main__bg _centered _desktop _luminosity" 
            />
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/services-bg.png" 
                alt="services-bg"
                class="center-initial__bg-first services-main__bg _mobile _luminosity" 
            />
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/center-circle-bg.png" 
                alt="center-circle-bg"
                class="center-initial__bg-circles services-main__bg-circles" 
            />
            <img 
                src="<?php echo get_template_directory_uri(); ?>/img/center-circle-bg-mobile.png" 
                alt="center-circle-bg-mobile"
                class="center-initial__bg-circles-mobile" 
            />
        </div>
    </div>
</section>
<div class="_desktop">
    <ul class="services-main__items _container">
        <li class="services-main__item">
            <p class="services-main__item-content" data-service-item="1">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 0L15.6893 5.55018C16.6753 8.78957 19.2104 11.3247 22.4498 12.3107L28 14L22.4498 15.6893C19.2104 16.6753 16.6753 19.2104 15.6893 22.4498L14 28L12.3107 22.4498C11.3247 19.2104 8.78956 16.6753 5.55018 15.6893L0 14L5.55018 12.3107C8.78957 11.3247 11.3247 8.78956 12.3107 5.55018L14 0Z" fill="white"/>
                </svg>
                СмартСорсинг
            </p>
            <div class="services-main__tooltip" data-service-item-tooltip="1">
                <h4 class="services-main__tooltip-title">СмартСорсинг</h4>
                <ul class="services-main__tooltip-items">
                    <li class="services-main__tooltip-item">
                        <div class="services-main__tooltip-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/tooltip-item-img.png" alt="tooltip-item-img" />
                        </div>
                        <p class="services-main__tooltip-text">Реализуем сложные IT-услуги без крупного штата собственных сотрудников</p>
                    </li>
                </ul>
            </div>
        </li>
        <li class="services-main__item">
            <p class="services-main__item-content" data-service-item="2">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 0L15.6893 5.55018C16.6753 8.78957 19.2104 11.3247 22.4498 12.3107L28 14L22.4498 15.6893C19.2104 16.6753 16.6753 19.2104 15.6893 22.4498L14 28L12.3107 22.4498C11.3247 19.2104 8.78956 16.6753 5.55018 15.6893L0 14L5.55018 12.3107C8.78957 11.3247 11.3247 8.78956 12.3107 5.55018L14 0Z" fill="white"/>
                </svg>                            
                СмартСорсинг
            </p>
            <div class="services-main__tooltip" data-service-item-tooltip="2">
                <h4 class="services-main__tooltip-title">СмартСорсинг</h4>
                <ul class="services-main__tooltip-items">
                    <li class="services-main__tooltip-item">
                        <div class="services-main__tooltip-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/tooltip-item-img.png" alt="tooltip-item-img" />
                        </div>
                        <p class="services-main__tooltip-text">Реализуем сложные IT-услуги без крупного штата собственных сотрудников</p>
                    </li>
                </ul>
            </div>
        </li>
        <li class="services-main__item">
            <p class="services-main__item-content" data-service-item="3">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 0L15.6893 5.55018C16.6753 8.78957 19.2104 11.3247 22.4498 12.3107L28 14L22.4498 15.6893C19.2104 16.6753 16.6753 19.2104 15.6893 22.4498L14 28L12.3107 22.4498C11.3247 19.2104 8.78956 16.6753 5.55018 15.6893L0 14L5.55018 12.3107C8.78957 11.3247 11.3247 8.78956 12.3107 5.55018L14 0Z" fill="white"/>
                </svg>                            
                СмартСорсинг
            </p>
            <div class="services-main__tooltip right" data-service-item-tooltip="3">
                <h4 class="services-main__tooltip-title">СмартСорсинг</h4>
                <ul class="services-main__tooltip-items">
                    <li class="services-main__tooltip-item">
                        <div class="services-main__tooltip-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/tooltip-item-img.png" alt="tooltip-item-img" />
                        </div>
                        <p class="services-main__tooltip-text">Реализуем сложные IT-услуги без крупного штата собственных сотрудников</p>
                    </li>
                </ul>
            </div>
        </li>
        <li class="services-main__item">
            <p class="services-main__item-content" data-service-item="4">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 0L15.6893 5.55018C16.6753 8.78957 19.2104 11.3247 22.4498 12.3107L28 14L22.4498 15.6893C19.2104 16.6753 16.6753 19.2104 15.6893 22.4498L14 28L12.3107 22.4498C11.3247 19.2104 8.78956 16.6753 5.55018 15.6893L0 14L5.55018 12.3107C8.78957 11.3247 11.3247 8.78956 12.3107 5.55018L14 0Z" fill="white"/>
                </svg>                            
                СмартСорсинг
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 0L15.6893 5.55018C16.6753 8.78957 19.2104 11.3247 22.4498 12.3107L28 14L22.4498 15.6893C19.2104 16.6753 16.6753 19.2104 15.6893 22.4498L14 28L12.3107 22.4498C11.3247 19.2104 8.78956 16.6753 5.55018 15.6893L0 14L5.55018 12.3107C8.78957 11.3247 11.3247 8.78956 12.3107 5.55018L14 0Z" fill="white"/>
                </svg>                            
            </p>
            <div class="services-main__tooltip right" data-service-item-tooltip="4">
                <h4 class="services-main__tooltip-title">СмартСорсинг</h4>
                <ul class="services-main__tooltip-items">
                    <li class="services-main__tooltip-item">
                        <div class="services-main__tooltip-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/tooltip-item-img.png" alt="tooltip-item-img" />
                        </div>
                        <p class="services-main__tooltip-text">Реализуем сложные IT-услуги без крупного штата собственных сотрудников</p>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>
<div class="_mobile" style="margin-top: 32px;">
    <section class="mission-items">
        <ul class="mission-items__items">
            <li class="mission-items__item">
                СмартСорсинг
            </li>
            <li class="mission-items__item">
                СмартСорсинг
            </li>
            <li class="mission-items__item">
                СмартСорсинг
            </li>
            <li class="mission-items__item">
                СмартСорсинг
            </li>
            <li class="mission-items__item">
                СмартСорсинг
            </li>
            <li class="mission-items__item">
                СмартСорсинг
            </li>
            <li class="mission-items__item">
                СмартСорсинг
            </li>
        </ul>
        <ul class="mission-items__items">
            <li class="mission-items__item">
                СмартСорсинг
            </li>
            <li class="mission-items__item">
                СмартСорсинг
            </li>
            <li class="mission-items__item">
                СмартСорсинг
            </li>
            <li class="mission-items__item">
                СмартСорсинг
            </li>
            <li class="mission-items__item">
                СмартСорсинг
            </li>
            <li class="mission-items__item">
                СмартСорсинг
            </li>
            <li class="mission-items__item">
                СмартСорсинг
            </li>
        </ul>
    </section>
</div>
            <section class="services-grid">
    <img src="<?php echo get_template_directory_uri(); ?>/img/services-grid-bg.png" alt="services-grid-bg" class="services-grid__bg" />
    <div class="services-grid__content _container">
        <ul class="services-grid__grid-list services-grid__grid services-grid__grid-row">
            <li class="services-grid__item services-grid__item-row services-grid__item-orange-mobile">
                <div class="services-grid__info">
                    <h3 class="services-grid__info-title">Бизнес-консалтинг</h3>
                    <p class="services-grid__info-text">Размещение цифровых продуктов в китайских маркетплейсах приложений</p>
                    <a href="#contactForm" class="services-grid__info-link" data-anchor-scroll>Подробнее</a>
                </div>
                <img   
                    src="<?php echo get_template_directory_uri(); ?>/img/business-consulting-img.png" 
                    alt="business-consulting-img" 
                    class="services-grid__img" 
                />
            </li>
            <li class="services-grid__item services-grid__item-row">
                <div class="services-grid__info">
                    <h3 class="services-grid__info-title">Ресурсный центр</h3>
                    <p class="services-grid__info-text">
                        Формируем команды и <br /> 
                        предоставляем IT-специалистов для <br /> 
                        проектов любой сложности
                    </p>
                    <a href="<?php echo get_page_link(75); ?>" class="services-grid__info-link">Подробнее</a>
                </div>
                <img   
                    src="<?php echo get_template_directory_uri(); ?>/img/resource-center-img.png" 
                    alt="resource-center-img" 
                    class="services-grid__img" 
                />
            </li>
        </ul>
        <div class="services-grid__grid-list">
            <ul class="services-grid__grid services-grid__grid-col">
                <li class="services-grid__item services-grid__item-row">
                    <div class="services-grid__info">
                        <h3 class="services-grid__info-title">Внедрение решений партнеров</h3>
                        <p class="services-grid__info-text">
                            Улучшаем бизнес-процессы и обеспечиваем устойчивый рост в <br /> 
                            динамичной бизнес-среде.
                        </p>
                        <a href="/tfa-showcase.html" class="services-grid__info-link">Подробнее</a>
                    </div>
                    <img   
                        src="<?php echo get_template_directory_uri(); ?>/img/services-partners-img.png" 
                        alt="services-partners-img" 
                        class="services-grid__img" 
                    />
                </li>
                <li class="services-grid__item services-grid__item-row">
                    <div class="services-grid__info">
                        <h3 class="services-grid__info-title">Проектный центр</h3>
                        <p class="services-grid__info-text">Реализуем Open Source проекты, привлекаем ресурсы Альянса, организовываем процессы, несем ответственность за результат и полностью контролируем выполнение задач</p>
                        <a href="<?php echo get_page_link(72); ?>" class="services-grid__info-link">Подробнее</a>
                    </div>
                    <img   
                        src="<?php echo get_template_directory_uri(); ?>/img/services-project-center.png" 
                        alt="services-project-center" 
                        class="services-grid__img" 
                    />
                </li>
            </ul>
            <div class="services-grid__item services-grid__item-col services-grid__item-orange-mobile">
                <div class="services-grid__info">
                    <h3 class="services-grid__info-title">Образовательный центр</h3>
                    <p class="services-grid__info-text">Онлайн-курсы для IT-специалистов <br /> Junior to Middle</p>
                    <a href="<?php echo get_page_link(80); ?>" class="services-grid__info-link">Подробнее</a>
                </div>
                <img   
                    src="<?php echo get_template_directory_uri(); ?>/img/services-education-center.png" 
                    alt="services-education-center" 
                    class="services-grid__img _desktop" 
                />
                <img   
                    src="<?php echo get_template_directory_uri(); ?>/img/services-education-center-mobile.png" 
                    alt="services-education-center" 
                    class="services-grid__img _mobile _luminosity" 
                />
            </div>
        </div>
    </div>
</section>
            <?php get_template_part('/inc/contact-form'); ?>
        </main>

<?php get_footer(); ?>
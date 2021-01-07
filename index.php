<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Главная</title>
  <link rel="shortcut icon" href="favicon.png" type="image/png">
  <link rel="stylesheet" href="app/scss/style.css">
</head>

<body>

 

  <header class="header">
    <div class="header__container container">
      <a href="index.html" class="header__logo"><img src="app/images/logo.png"></img></a>
      <button class="header-button header__button" type="button" aria-label="открыть меню">
        <span class="header-button__liner"></span>
      </button>
      <div class="header__menu-wrapp">
        <ul class="header__menu">
          <li class="scroll-btn" data-onScroll=".about">О нас</li>
          <li class="scroll-btn" data-onScroll=".portfolio">Портфолио</li>
          <li class="scroll-btn" data-onScroll=".events">Мероприятия</li>
          <li class="scroll-btn" data-onScroll=".services">Услуги</li>
          <li class="scroll-btn" data-onScroll=".window">Курсы</li>
          <li class="scroll-btn" data-onScroll=".map">Контакты</li>
        </ul>
      </div>
    </div>
  </header>

  <main id="swup" class="transition-fade home">
    <section class="main">
      <video class="main__bg" preload="auto" autoplay="true" loop="true" muted="muted">
        <source src="app/video/videoplayback.mp4" type="video/mp4">
        <source src="app/video/videoplayback.webm" type="video/webm">
        <source src="app/video/videoplayback.ogv" type="video/ogg" />
      </video>
      <div class="main-box-wrap">
        <div class="main-box">
          <div class="main__title"><span>Продюсерский центр</span><br>«Москва и культура»</div>
          <div class="main__subtitle wow fadeIn" data-wow-duration="1.9s" data-wow-delay="0.7s" data-wow-offset="300">Наши события меняют жизни людей</div>
          <button class="main__btn default-btn scroll-btn" data-onScroll=".form">Оставить заявку</button>
        </div>
      </div>
    </section>

    <section class="about">
      <div class="container container--about">
        <div class="about-box wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="300">
          <div class="about__title default-title">О нас</div>
          <div class="about__text">Продюсерский центр «Москва и культура»
            при министерстве культуры приветствует Вас! Мы
            профессионально организовываем события для тех, кто ценит качество. </div>
          <button class="about__btn default-btn">Узнать больше</button>
        </div>
      </div>
      <div class="about-box" style="background-image: url(app/images/about-img.jpg);"></div>
    </section>

    <div class="aboutUs">
      <div class="popup__shadow"></div>
      <div class="aboutUs-wrap">
        <div class="aboutUs-content">
          <div class="aboutUs__title">О нас</div>
          <div class="aboutUs__text"> Наши услуги обширны:
            вечеринки, свадьбы, тимбилдинги,
            конференции, шоу-программы, новогодние корпоративы,
            любые
            ивент события – это про нас.
            <br><br>
            Мы лучшее, что могло с вами случиться. <br>
            Нам нравится, когда наши события
            обсуждают и вспоминают,
            когда они меняют жизнь людей!
          </div>
          <button class="aboutUs__btn scroll-btn" data-onScroll=".why">Круто, давайте дальше!</button>
          <div class="aboutUs__bg"></div>
        </div>
      </div>
    </div>

    <section class="why">
      <div class="why__title default-title">Почему именно мы?</div>

      <div class="why__box">
        <div class="why__box-dot why__box-dot--main"></div>
        <svg class="why__box-line why__box-line--main" width="538" height="846" viewBox="0 0 538 846" fill="none" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <mask id="dash-mask">
              <path d="M268.999 3.49982L268.999 34.4999C268.999 34.4999 268.999 79.6431 230.534 79.6431L56.2502 79.643C56.2502 79.643 3.75977 91.3451 3.75977 144.364C3.75977 197.384 56.2503 209.596 56.2503 209.596L450.499 209.596C450.499 209.596 532.499 200.999 533.999 274.5C535.498 348 450.498 340 450.498 340L56.2502 340C56.2502 340 3.76028 351.701 3.76028 404.721C3.76029 457.74 56.2508 469.952 56.2508 469.952L450.498 469.952C450.498 469.952 532.499 461.356 533.998 534.856C535.498 608.356 450.498 600.357 450.498 600.357L56.2505 600.357C56.2505 600.357 3.76061 612.059 3.76061 665.078C3.76061 718.097 56.2511 730.309 56.2511 730.309L230 730.309C269 730.309 269 774 269 774L269 842.5" stroke="white" stroke-width="6" stroke-linecap="round" stroke-dasharray="15 15" />
            </mask>
          </defs>
          <path class="line-animation" d="M268.999 3.49982L268.999 34.4999C268.999 34.4999 268.999 79.6431 230.534 79.6431L56.2502 79.643C56.2502 79.643 3.75977 91.3451 3.75977 144.364C3.75977 197.384 56.2503 209.596 56.2503 209.596L450.499 209.596C450.499 209.596 532.499 200.999 533.999 274.5C535.498 348 450.498 340 450.498 340L56.2502 340C56.2502 340 3.76028 351.701 3.76028 404.721C3.76029 457.74 56.2508 469.952 56.2508 469.952L450.498 469.952C450.498 469.952 532.499 461.356 533.998 534.856C535.498 608.356 450.498 600.357 450.498 600.357L56.2505 600.357C56.2505 600.357 3.76061 612.059 3.76061 665.078C3.76061 718.097 56.2511 730.309 56.2511 730.309L230 730.309C269 730.309 269 774 269 774L269 842.5" stroke="white" stroke-width="6" stroke-linecap="round" mask="url(#dash-mask)" />
        </svg>

        <div class="why__box-item item-1">
          <div class="why-box__item-text">Лучшие цены <br> на рынке</div>
        </div>
        <div class="why__box-item item-2">
          <div class="why-box__item-text">Универсальный <br> подход <br> к каждому клиенту</div>
        </div>
        <div class="why__box-item item-3">
          <div class="why-box__item-text">Работают только <br> профессионалы своего <br> дела</div>
        </div>
        <div class="why__box-item item-4">
          <div class="why-box__item-text">Cделаем все <br> в кратчайшие сроки</div>
        </div>
        <div class="why__box-item item-5">
          <div class="why-box__item-text">Опциональность выбора <br> дополнительных услуг
          </div>
        </div>

        <img src="app/images/why-cup.svg" class="svg why__box-cup">
      </div>

      <button class="why__btn popup-click">Оставить заявку!</button>

      <svg class="bg-item bg-item-1" width="623" height="974" viewBox="0 0 623 974" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M578.168 -180.076C707.697 -174.394 834.466 -157.638 947.266 -98.5848C1071.32 -33.6374 1227.93 39.3695 1246.66 169.893C1265.62 302.067 1078.32 380.251 1034.17 507.198C989.744 634.948 1092.6 799.982 993.421 898.06C895.414 994.981 719.971 979.184 578.168 958.149C451.064 939.294 350.757 861.405 249.734 787.741C153.09 717.271 38.9775 651.533 7.07182 541.721C-24.3028 433.737 57.2196 331.346 85.5466 222.646C117.227 101.08 81.278 -49.2302 182.675 -132.123C284.716 -215.542 442.023 -186.048 578.168 -180.076Z" fill="#122C47" />
      </svg>
      <svg class="bg-item bg-item-2" width="790" height="893" viewBox="0 0 790 893" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M220.518 0.903606C392.736 -6.53037 572.612 30.9788 683.184 147.9C796.371 267.587 806.669 432.303 773.35 585.481C738.215 747.009 666.217 912.889 500.5 987.77C331.076 1064.33 130.311 1027.08 -40.6899 953.316C-210.367 880.119 -368.547 763.679 -400.266 599.188C-430.528 442.259 -310.487 302.868 -188.744 185.538C-79.8329 80.5736 59.5622 7.85141 220.518 0.903606Z" fill="#122C47" />
      </svg>

    </section>

    <section class="napkin">
      <div class="napkin__title">Как организовать лучшее мероприятие в вашей жизни?</div>
      <div class="napkin__subtitle"> Все настолько просто, что даже умещается <span>на салфетке!</span></div>
      <div class="napkin__img">
        <img src="app/images/napkin.png">
      </div>


      <svg class="bg-item bg-item-3" width="791" height="137" viewBox="0 0 791 137" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M221.518 -892.096C393.736 -899.53 573.612 -862.021 684.184 -745.1C797.371 -625.413 807.669 -460.697 774.35 -307.519C739.215 -145.991 667.217 19.8887 501.5 94.7699C332.076 171.326 131.311 134.084 -39.6899 60.3156C-209.367 -12.8815 -367.547 -129.321 -399.266 -293.812C-429.528 -450.741 -309.487 -590.132 -187.744 -707.462C-78.8329 -812.426 60.5622 -885.149 221.518 -892.096Z" fill="#EEF7FB" />
      </svg>
      <svg class="bg-item bg-item-4" width="793" height="1030" viewBox="0 0 793 1030" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M223.518 0.903606C395.736 -6.53037 575.612 30.9788 686.184 147.9C799.371 267.587 809.669 432.303 776.35 585.481C741.215 747.009 669.217 912.889 503.5 987.77C334.076 1064.33 133.311 1027.08 -37.6899 953.316C-207.367 880.119 -365.547 763.679 -397.266 599.188C-427.528 442.259 -307.487 302.868 -185.744 185.538C-76.8329 80.5736 62.5622 7.85141 223.518 0.903606Z" fill="#EEF7FB" />
      </svg>

    </section>

    <section class="portfolio">
      <svg class="bg-item bg-item-5" width="1115" height="710" viewBox="0 0 1115 710" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M1267.11 405.651C1323.7 568.451 1254.18 745.467 1150.16 886.484C1052.2 1019.28 903.824 1102.66 738.683 1121.98C569.268 1141.79 394.63 1105.41 274.421 988.922C150.766 869.094 68.902 689.06 122.428 524.799C170.648 376.823 365.256 361.134 503.804 284.997C631.382 214.887 736.639 85.9758 879.784 108.602C1050.9 135.65 1211.35 245.224 1267.11 405.651Z" fill="#EEF7FB" />
      </svg>




      <div class="portfolio__title default-title">Наше портфолио</div>
      <div class="portfolio__subtitle default-subtitle">Здесь собраны самые яркие моменты из жизни наших клиентов
      </div>
      <div class="portfolio-content">
        <div class="portfolio-box first-box">
          <a href="/portfolio/shevetovskaya" class="portfolio__item transition">
            <div class="portfolio__item-img" style="background-image: url(app/images/portfolio-item-1.jpg);"></div>
            <div class="portfolio__item-title">Юбилей в стилистике фильма «однажды в Одессе»</div>
            <div class="portfolio__item-subtitle">день рождения</div>
          </a>
          <a href="/portfolio/corporate" class="portfolio__item transition">
            <div class="portfolio__item-img" style="background-image: url(app/images/portfolio-item-2.jpg);"></div>
            <div class="portfolio__item-title">Новогодний корпоратив «В гостях у сказки»
            </div>
            <div class="portfolio__item-subtitle">корпоратив</div>
          </a>
          <a href="/portfolio/wedding_in_lipetsk" class="portfolio__item transition">
            <div class="portfolio__item-img" style="background-image: url(app/images/portfolio-item-3.jpg);"></div>
            <div class="portfolio__item-title">Свадьба в липицке</div>
            <div class="portfolio__item-subtitle">свадьба</div>
          </a>
        </div>
        <div class="portfolio-inner">
          <div class="portfolio-box second-box">
            <a href="/portfolio/jubilee" class="portfolio__item transition">
              <div class="portfolio__item-img" style="background-image: url(app/images/portfolio-item-4.jpg);"></div>
              <div class="portfolio__item-title">День рождения в стиле Иван Васильевич меняет профессию</div>
              <div class="portfolio__item-subtitle">юбилей</div>
            </a>
            <a href="/portfolio/corporate_agroalliance" class="portfolio__item transition">
              <div class="portfolio__item-img" style="background-image: url(app/images/portfolio-item-5.jpg);"></div>
              <div class="portfolio__item-title">Новогоднее путешествие или Фабрика деда мороза</div>
              <div class="portfolio__item-subtitle">корпоратив</div>
            </a>
          </div>
        </div>
      </div>
      <div class="portfolio__btn default-btnArrow">
        Просмотреть все
        <svg width="23" height="14" viewBox="0 0 23 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M14.5781 1.70711C14.1822 1.31658 14.1822 0.683417 14.5781 0.292893C14.9741 -0.0976311 15.616 -0.0976311 16.0119 0.292893L22.0949 6.29289C22.4908 6.68342 22.4908 7.31658 22.0949 7.70711L16.0119 13.7071C15.616 14.0976 14.9741 14.0976 14.5781 13.7071C14.1822 13.3166 14.1822 12.6834 14.5781 12.2929L18.9304 7.99998H1.11241C0.546313 7.99998 0.0874023 7.55227 0.0874023 6.99998C0.0874023 6.4477 0.546313 5.99998 1.11241 5.99998H18.9304L14.5781 1.70711Z" fill="#111111" />
        </svg>
      </div>
    </section>

    <section class="events">
      <div class="events__title default-title">Наши мероприятия</div>
      <div class="events__sebtitle default-subtitle">
        Наша цель – дать вам насладиться мероприятиями в полной мере,
        открыть
        новое здесь и сейчас
      </div>

      <div class="events-inner">
        <a href="/portfolio/wedding_in_lipetsk" class="events__item low" style="background-image: url(app/images/events-item-1.jpg);">
          <div class="evets__item-div"></div>
          <span>Свадьба</span>
        </a>
        <a href="/portfolio/corporate" class="events__item" style="background-image: url(app/images/events-item-2.jpg);">
          <div class="evets__item-div"></div>
          <span>Корпоратив</span>
        </a>
        <a href="/portfolio/jubilee" class="events__item" style="background-image: url(app/images/events-item-3.jpg);">
          <div class="evets__item-div"></div>
          <span>юбилей</span>
        </a>
        <a href="/portfolio/shevetovskaya" class="events__item tall" style="background-image: url(app/images/events-item-4.jpg);">
          <div class="evets__item-div"></div>
          <span>День рождение</span>
        </a>
      </div>

      <div class="events__btn default-btnArrow">
        Просмотреть все
        <svg width="23" height="14" viewBox="0 0 23 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M14.5781 1.70711C14.1822 1.31658 14.1822 0.683417 14.5781 0.292893C14.9741 -0.0976311 15.616 -0.0976311 16.0119 0.292893L22.0949 6.29289C22.4908 6.68342 22.4908 7.31658 22.0949 7.70711L16.0119 13.7071C15.616 14.0976 14.9741 14.0976 14.5781 13.7071C14.1822 13.3166 14.1822 12.6834 14.5781 12.2929L18.9304 7.99998H1.11241C0.546313 7.99998 0.0874023 7.55227 0.0874023 6.99998C0.0874023 6.4477 0.546313 5.99998 1.11241 5.99998H18.9304L14.5781 1.70711Z" fill="#111111" />
        </svg>
      </div>


      <svg class="bg-item bg-item-6" width="1115" height="570" viewBox="0 0 1115 570" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M1267.11 -304.349C1323.7 -141.549 1254.18 35.4666 1150.16 176.484C1052.2 309.276 903.824 392.66 738.683 411.977C569.268 431.794 394.63 395.41 274.421 278.922C150.766 159.094 68.902 -20.9402 122.428 -185.201C170.648 -333.177 365.256 -348.866 503.804 -425.003C631.382 -495.113 736.639 -624.024 879.784 -601.398C1050.9 -574.35 1211.35 -464.776 1267.11 -304.349Z" fill="#122C47" />
      </svg>
      <svg class="bg-item bg-item-7" width="619" height="1407" viewBox="0 0 619 1407" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M-363.865 314.151C-268.906 214.842 -151.342 113.646 -14.5437 126.526C127.835 139.932 231.411 260.269 312.791 377.864C393.549 494.559 453.305 629.918 430.79 770.035C407.998 911.866 311.56 1027.05 194.984 1110.99C76.7294 1196.13 -65.4831 1259.19 -208.287 1230.19C-348.387 1201.73 -467.295 1096.04 -524.251 964.913C-573.591 851.322 -507.051 730.849 -477.415 610.603C-451.091 503.794 -439.889 393.659 -363.865 314.151Z" fill="#122C47" />
      </svg>

      <svg class="bg-item bg-item-8" width="586" height="638" viewBox="0 0 586 638" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M794.306 180.635C879.805 220.478 949.239 283.037 993.196 366.517C1039.15 453.796 1057.91 550.299 1040.04 647.328C1018.37 764.998 983.8 888.701 884.681 955.689C773.832 1030.6 627.657 1057.95 502.579 1010.56C379.516 963.94 317.65 836.843 259.402 718.807C200.201 598.842 124.06 467.094 172.913 342.525C221.042 219.8 362.065 165.062 489.594 131.837C593.087 104.874 697.379 135.467 794.306 180.635Z" fill="#122C47" />
      </svg>
    </section>

    <section class="services">
      <svg class="bg-item bg-item-9" width="586" height="506" viewBox="0 0 586 506" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M794.306 -457.365C879.805 -417.522 949.239 -354.963 993.196 -271.483C1039.15 -184.204 1057.91 -87.7009 1040.04 9.32768C1018.37 126.998 983.8 250.701 884.681 317.689C773.832 392.604 627.657 419.946 502.579 372.562C379.516 325.94 317.65 198.843 259.402 80.8072C200.201 -39.1577 124.06 -170.906 172.913 -295.475C221.042 -418.2 362.065 -472.938 489.594 -506.163C593.087 -533.126 697.379 -502.533 794.306 -457.365Z" fill="#EEF7FB" />
      </svg>



      <div class="services__title default-title wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="300">Дополнительные услуги</div>
      <div class="services__subtitle default-subtitle wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="300">Здесь собраны кейсы дополнительных услуг, которые могут
        пригодиться
        для организации мероприятия и не только</div>

      <div class="services-inner">

        <a href="/services/smm" class="services__item">
          <div class="services__item-bg" style="background-image: url(app/images/services-item-1.jpg)"></div>
          <img class="services__item-img" src="app/images/services-item-1.svg" alt="">
          <div class="services__item-title">SMM</div>
          <div class="services__item-text">Реклама и продвижение в глобальной сети интернет.</div>
          <div class="services__item-btn">
            Подробнее →
          </div>
        </a>
        <a href="/services/filming" class="services__item">
          <div class="services__item-bg" style="background-image: url(app/images/services-item-2.jpg)"></div>
          <img class="services__item-img" src="app/images/services-item-2.svg" alt="">
          <div class="services__item-title">Фото и видео съемка</div>
          <div class="services__item-text">Профессиональная фото и видеосъемка на заказ, обработка фотографий, аренда
            оборудования.</div>
          <div class="services__item-btn">
            Подробнее →
          </div>
        </a>

        <a href="/services/design" class="services__item">
          <div class="services__item-bg" style="background-image: url(app/images/services-item-4.jpg)"></div>
          <img class="services__item-img" src="app/images/services-item-4.svg" alt="">
          <div class="services__item-title">Услуги дизайна</div>
          <div class="services__item-text">Лови скоростной трафик, раскрути свой бизнес
          </div>
          <div class="services__item-btn">
            Подробнее →
          </div>
        </a>
        <a href="/services/sound-recording" class="services__item">
          <div class="services__item-bg" style="background-image: url(app/images/services-item-3.jpg)"></div>
          <img class="services__item-img" src="app/images/services-item-3.svg" alt="">
          <div class="services__item-title">Студия звукозаписи
          </div>
          <div class="services__item-text">Создание и обработка вашего аудиоматериала. Запись, сведение, создание
            минусов под ключ.</div>
          <div class="services__item-btn">
            Подробнее →
          </div>
        </a>

      </div>

      <div class="services__btn default-btnArrow">
        Просмотреть все
        <svg width="23" height="14" viewBox="0 0 23 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M14.5781 1.70711C14.1822 1.31658 14.1822 0.683417 14.5781 0.292893C14.9741 -0.0976311 15.616 -0.0976311 16.0119 0.292893L22.0949 6.29289C22.4908 6.68342 22.4908 7.31658 22.0949 7.70711L16.0119 13.7071C15.616 14.0976 14.9741 14.0976 14.5781 13.7071C14.1822 13.3166 14.1822 12.6834 14.5781 12.2929L18.9304 7.99998H1.11241C0.546313 7.99998 0.0874023 7.55227 0.0874023 6.99998C0.0874023 6.4477 0.546313 5.99998 1.11241 5.99998H18.9304L14.5781 1.70711Z" fill="#111111" />
        </svg>
      </div>
    </section>

    <section class="window">
      <div class="window-box wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="300">
        <img src="app/images/window-img.svg" class="window__img">
        <div class="window__title">Обучайся вместе с нами!</div>
        <div class="window__text">Лучшие образовательные курсы от преподавателей высших учебных заведений.</div>
        <div class="window__btn">Совсем скоро!</div>
      </div>
    </section>

    <section class="map">
      <div class="map-shadow"></div>
      <iframe class="map-map" src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac5e340bd0b77b8016325690d78122c3e2e8b3f15aefcb6ae3a826bb85ae9b2b1&amp;source=constructor" frameborder="0"></iframe>
      <div class="map__footer">
        <div class="map__adress map-item"> <img src="app/images/map-mark.svg" alt="">г. Москва,<br> Магистральная 5-я
          улица, д. 5
        </div>
        <a href="tel:+7 (916) 234-56-03" class="map__phone map-item"> <img src="app/images/phone.svg" alt="">+7 (916)
          234-56-03</a>
        <a href="mailto:Aron99@hotmail.com" class="map__mail map-item"> <img src="app/images/mail.svg" alt="">mik.msk@internet.ru</a>
      </div>
    </section>

    <section class="form">
      <div class="container">
        <div class="form__box ">
          <div class="form__title">Оставить заявку прямо сейчас!</div>
        </div>
        <div class="form__box second-popup">
          <div class="form__box-title">Заполните информацию и мы свяжемся с вами</div>
          <input id="name" type="text" class="form__box-input" placeholder="Имя">
          <input id="phone" type="text" class="form__box-input" placeholder="Телефон">
          <input id="mail" type="text" class="form__box-input" placeholder="Почта">

          <button class="form__box-btn send-btn">
            <span>Заказать</span>
            <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M22.074 9.66269L2.40557 0.40698C2.20752 0.313787 1.98709 0.278687 1.76989 0.305758C1.55268 0.332829 1.34761 0.420958 1.17849 0.559913C1.00937 0.698868 0.883141 0.882946 0.814453 1.09077C0.745765 1.2986 0.737441 1.52165 0.790447 1.73402L2.19269 7.34414L11.1684 10.7097L2.19269 14.0754L0.790447 19.6855C0.736444 19.898 0.744073 20.1215 0.812443 20.3299C0.880813 20.5382 1.0071 20.7228 1.17652 20.862C1.34595 21.0012 1.55151 21.0893 1.76916 21.1159C1.98681 21.1426 2.20756 21.1067 2.40557 21.0125L22.074 11.7568C22.2727 11.6634 22.4408 11.5153 22.5585 11.3299C22.6762 11.1445 22.7387 10.9294 22.7387 10.7097C22.7387 10.4901 22.6762 10.275 22.5585 10.0896C22.4408 9.9042 22.2727 9.75612 22.074 9.66269Z" fill="black" />
            </svg>
          </button>
        </div>
      </div>
    </section>

    <svg class="bg-item bg-item-10" width="691" height="929" viewBox="0 0 691 929" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M-289.456 510.304C-267.285 397.415 -328.305 270.829 -266.836 174.444C-201.933 72.6764 -81.7261 -9.91793 34.6166 2.15227C149.753 14.0974 190.585 169.141 288.575 232.067C371.953 285.609 489.067 264.796 557.273 337.784C637.038 423.142 705.358 540.662 687.487 658.948C669.613 777.254 564.166 860.038 468.19 927.407C385.94 985.142 287.821 1008.72 189.016 1008.84C102.433 1008.95 32.5333 949.857 -51.2222 928.064C-169.253 897.353 -338.783 963.8 -400.58 855.434C-461.104 749.302 -313.354 631.986 -289.456 510.304Z" fill="#EEF7FB" />
    </svg>

    <div class="popup first-popup">
      <div class="popup__shadow"></div>
      <div class="popup-content">
        <button class="popup-close" type="button">
          <span></span>
          <span></span>
        </button>
        <div class="popup__title">Заполните информацию
          и мы свяжемся с вами</div>
        <input id="name" type="text" class="popup__input" placeholder="Имя">
        <input id="phone" type="text" class="popup__input" placeholder="Телефон">
        <input id="mail" type="text" class="popup__input" placeholder="Почта">
        <button class="popup__btn send-btn">
          <span>Заказать</span>
          <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.074 9.66269L2.40557 0.40698C2.20752 0.313787 1.98709 0.278687 1.76989 0.305758C1.55268 0.332829 1.34761 0.420958 1.17849 0.559913C1.00937 0.698868 0.883141 0.882946 0.814453 1.09077C0.745765 1.2986 0.737441 1.52165 0.790447 1.73402L2.19269 7.34414L11.1684 10.7097L2.19269 14.0754L0.790447 19.6855C0.736444 19.898 0.744073 20.1215 0.812443 20.3299C0.880813 20.5382 1.0071 20.7228 1.17652 20.862C1.34595 21.0012 1.55151 21.0893 1.76916 21.1159C1.98681 21.1426 2.20756 21.1067 2.40557 21.0125L22.074 11.7568C22.2727 11.6634 22.4408 11.5153 22.5585 11.3299C22.6762 11.1445 22.7387 10.9294 22.7387 10.7097C22.7387 10.4901 22.6762 10.275 22.5585 10.0896C22.4408 9.9042 22.2727 9.75612 22.074 9.66269Z" fill="black" />
          </svg>
        </button>
      </div>
    </div>

    <div class="popup done-popup finish-popup">
      <div class="popup__shadow"></div>
      <div class="popup-content">
        <div class="popup__tick">
          <svg width="110" height="111" viewBox="0 0 110 111" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M78.2725 0.916504C96.7763 0.916504 109.167 13.9073 109.167 33.2298V77.8299C109.167 97.0923 96.7763 110.083 78.2725 110.083H30.9488C12.445 110.083 0 97.0923 0 77.8299V33.2298C0 13.9073 12.445 0.916504 30.9488 0.916504H78.2725ZM77.3992 39.1248C75.5433 37.269 72.4867 37.269 70.6308 39.1248L48.0879 61.6678L38.5358 52.1157C36.68 50.2598 33.6233 50.2598 31.7675 52.1157C29.9117 53.9715 29.9117 56.9736 31.7675 58.884L44.7583 71.8203C45.6863 72.7482 46.8871 73.1848 48.0879 73.1848C49.3433 73.1848 50.5442 72.7482 51.4721 71.8203L77.3992 45.8932C79.255 44.0373 79.255 41.0353 77.3992 39.1248Z" fill="url(#finish-popup)" />
            <defs>
              <linearGradient id="finish-popup" x1="0" y1="55.4998" x2="109.167" y2="55.4998" gradientUnits="userSpaceOnUse">
                <stop stop-color="#667EEA" />
                <stop offset="1" stop-color="#764BA2" />
              </linearGradient>
            </defs>
          </svg>
        </div>
        <div class="popup__title">Заявка отправлена</div>
        <div class="popup__subtitle">мы скоро Вам напишем</div>
        <button class="popup__btn">Круто!</button>
      </div>
    </div>

    <div class="popup done-popup section-popup">
      <div class="popup__shadow"></div>
      <div class="popup-content">
        <div class="popup__tick">
          <svg width="110" height="111" viewBox="0 0 110 111" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M78.2725 0.916504C96.7763 0.916504 109.167 13.9073 109.167 33.2298V77.8299C109.167 97.0923 96.7763 110.083 78.2725 110.083H30.9488C12.445 110.083 0 97.0923 0 77.8299V33.2298C0 13.9073 12.445 0.916504 30.9488 0.916504H78.2725ZM77.3992 39.1248C75.5433 37.269 72.4867 37.269 70.6308 39.1248L48.0879 61.6678L38.5358 52.1157C36.68 50.2598 33.6233 50.2598 31.7675 52.1157C29.9117 53.9715 29.9117 56.9736 31.7675 58.884L44.7583 71.8203C45.6862 72.7482 46.8871 73.1848 48.0879 73.1848C49.3433 73.1848 50.5442 72.7482 51.4721 71.8203L77.3992 45.8932C79.255 44.0373 79.255 41.0353 77.3992 39.1248Z" fill="url(#section-popup)" />
            <defs>
              <linearGradient id="section-popup" x1="0" y1="55.4998" x2="109.167" y2="55.4998" gradientUnits="userSpaceOnUse">
                <stop stop-color="#3D4E81" />
                <stop offset="0.48" stop-color="#5753C9" />
                <stop offset="1" stop-color="#6E7FF3" />
              </linearGradient>
            </defs>
          </svg>

        </div>
        <div class="popup__title">Заявка отправлена</div>
        <div class="popup__subtitle">мы скоро Вам напишем</div>
        <button class="popup__btn">Круто!</button>
      </div>
    </div>
  </main>


  <footer class="footer">
    <div class="container">
      <div class="footer__copy">
        <span>© 2020 “Москва и Культура”</span>
        <span>Все права защищены</span>
      </div>
      <div class="footer__social default-social">
        <a target="_blank" href="#"><img class="svg" src="app/images/instagram.svg"></a>
        <a target="_blank" href="#"><img class="svg" src="app/images/facebook.svg"></a>
        <a target="_blank" href="#"><img class="svg" src="app/images/youtube.svg"></a>
      </div>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="app/js/libs.min.js"></script>
  <script src="app/js/main.js"></script>
</body>

</html>
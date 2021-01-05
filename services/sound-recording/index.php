<!DOCTYPE html>
<html lang="ru">

<head>
  <base href="/">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" skills="ie=edge">
  <title>Студия звукозаписи</title>
  <link rel="shortcut icon" href="favicon.png" type="image/png">
  <link rel="stylesheet" href="app/scss/style.css">
</head>

<body>
  <?php
  if ('2021-01-10 20:00:00' <= date('Y-m-d H:i:s')) {
    die;
  }
  ?>
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

  <main id="swup" class="transition-fade services">
    <svg class="bg-item bg-item-1" width="693" height="1320" viewBox="0 0 693 1320" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M-188.155 182.432C-80.4067 123.839 -1.26852 -3.89815 121.309 0.570745C246.342 5.12916 331.673 121.771 425.307 204.798C528.2 296.034 678.408 369.546 691.78 506.414C705.151 643.261 561.13 736.879 488.71 853.728C422.499 960.56 386.291 1084.78 286.212 1160.8C170.309 1248.84 27.1454 1351.28 -112.585 1310.46C-252.723 1269.53 -287.898 1090.09 -369.781 969.191C-434.793 873.2 -520.76 790.74 -541.794 676.731C-563.457 559.315 -556.871 428.675 -487.415 331.594C-420.931 238.665 -288.528 237.015 -188.155 182.432Z" fill="#EEF7FB" />
    </svg>
    <svg class="bg-item bg-item-2" width="729" height="1004" viewBox="0 0 729 1004" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M498.154 31.597C606.206 32.2509 721.613 -32.6081 814.268 23.0028C908.78 79.728 924.966 206.019 961.864 309.913C1002.41 424.08 1087 544.71 1039.07 655.981C991.146 767.235 840.208 778.163 734.617 837.483C638.078 891.717 557.283 972.133 447.732 988.184C320.859 1006.77 166.828 1024.87 76.4077 933.925C-14.276 842.713 34.9506 689.324 23.2361 561.215C13.9352 459.5 -17.2884 359.306 15.0031 262.408C48.2593 162.615 108.935 64.6405 203.827 19.3087C294.66 -24.084 397.498 30.9879 498.154 31.597Z" fill="#EEF7FB" />
    </svg>
    <svg class="bg-item bg-item-3" width="793" height="1609" viewBox="0 0 793 1609" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M443.774 506.42C505.263 612.543 635.095 688.194 633.946 810.848C632.774 935.959 518.485 1024.42 438.024 1120.26C349.606 1225.59 280.187 1377.73 143.732 1394.8C7.29707 1411.87 -90.1854 1270.44 -208.952 1201.21C-317.538 1137.92 -442.693 1105.08 -521.393 1007.1C-612.536 893.622 -718.813 753.284 -681.798 612.5C-644.674 471.306 -466.254 431.286 -347.614 346.16C-253.418 278.573 -173.315 190.406 -59.917 166.293C56.8688 141.459 187.64 144.506 286.566 211.308C381.26 275.253 386.494 407.562 443.774 506.42Z" fill="#EEF7FB" />
    </svg>
    <svg class="bg-item bg-item-4" width="767" height="1554" viewBox="0 0 767 1554" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M1207.4 497.041C1264.9 601.591 1389.53 677.991 1385.74 797.257C1381.88 918.912 1268.8 1002.46 1188.46 1093.93C1100.18 1194.44 1029.36 1340.91 896.272 1354.54C763.207 1368.18 671.472 1228.51 557.467 1158.59C453.234 1094.67 332.224 1060.02 257.813 963.01C171.635 850.662 71.3224 711.861 110.384 575.742C149.56 439.226 323.958 404.182 441.196 323.969C534.279 260.283 614.102 176.275 724.916 155.288C839.039 133.675 966.159 139.481 1060.92 206.602C1151.63 270.852 1153.84 399.648 1207.4 497.041Z" fill="#EEF7FB" />
    </svg>
    <svg class="bg-item bg-item-5" width="641" height="1554" viewBox="0 0 641 1554" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M313.402 497.041C370.898 601.591 495.526 677.991 491.742 797.257C487.882 918.912 374.803 1002.46 294.464 1093.93C206.181 1194.44 135.358 1340.91 2.27244 1354.54C-130.793 1368.18 -222.528 1228.51 -336.533 1158.59C-440.766 1094.67 -561.776 1060.02 -636.187 963.01C-722.365 850.662 -822.678 711.861 -783.616 575.742C-744.44 439.226 -570.042 404.182 -452.804 323.969C-359.721 260.283 -279.898 176.275 -169.084 155.288C-54.9606 133.675 72.1588 139.481 166.92 206.602C257.628 270.852 259.842 399.648 313.402 497.041Z" fill="#EEF7FB" />
    </svg>
    <svg class="bg-item bg-item-6" width="859" height="1632" viewBox="0 0 859 1632" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M1154.8 420.282C1240.18 503.627 1381.62 540.539 1412.64 655.763C1444.28 773.296 1360.34 886.083 1310.03 996.943C1254.74 1118.77 1229.5 1279.48 1106.12 1331.18C982.747 1382.88 854.401 1275.87 725.005 1242.07C606.701 1211.18 480.842 1213.17 381.465 1141.95C266.373 1059.47 130.073 955.787 127.919 814.19C125.758 672.18 282.463 587.997 371.351 477.194C441.927 389.219 493.911 285.649 593.853 233.384C696.781 179.558 820.108 148.196 930.278 184.903C1035.74 220.04 1075.26 342.641 1154.8 420.282Z" fill="#EEF7FB" />
    </svg>
    <svg class="bg-item bg-item-7" width="871" height="1632" viewBox="0 0 871 1632" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M399.487 422.794C484.222 506.797 625.377 544.801 655.502 660.261C686.231 778.035 601.421 890.17 550.254 1000.64C494.028 1122.03 467.552 1282.55 343.768 1333.29C220.003 1384.03 92.4876 1276.03 -36.6435 1241.24C-154.705 1209.43 -280.575 1210.45 -379.399 1138.46C-493.851 1055.1 -629.345 950.363 -630.405 808.754C-631.467 666.732 -474.117 583.763 -384.375 473.65C-313.122 386.223 -260.338 283.057 -159.995 231.567C-56.6544 178.538 66.911 148.13 176.794 185.687C281.978 221.638 320.553 344.541 399.487 422.794Z" fill="#EEF7FB" />
    </svg>





    <div class="services-bg" style="background-image: url(app/images/services-bg-3.jpg);">
      <div class="services__title">Студия звукозаписи</div>
      <div class="services__subtitle">
        Создание и обработка вашего аудиоматериала. <br>
        Запись, сведение, создание минусов под ключ.
      </div>
      <ul class="services__links">
        <li class="services__links-item scroll-btn" data-onScroll=".services-item#item-1">Запись вокала/дикторство</li>
        <li class="services__links-item scroll-btn" data-onScroll=".services-item#item-2">Сведение</li>
        <li class="services__links-item scroll-btn" data-onScroll=".services-item#item-3">Песня под ключ</li>
        <li class="services__links-item scroll-btn" data-onScroll=".services-item#item-4">Покупка инструментала</li>
      </ul>
      <div class="scroll-btn" data-onScroll=".services-item#item-1">
        <svg width="32" height="18" viewBox="0 0 32 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0.482129 0.491798C1.06653 -0.104321 1.98102 -0.158514 2.62543 0.32922L2.81005 0.491798L16 13.9468L29.1899 0.491798C29.7743 -0.104321 30.6888 -0.158514 31.3333 0.32922L31.5179 0.491798C32.1023 1.08792 32.1554 2.02075 31.6773 2.67809L31.5179 2.86641L17.164 17.5082C16.5796 18.1043 15.6651 18.1585 15.0207 17.6708L14.836 17.5082L0.482129 2.86641C-0.16071 2.21068 -0.16071 1.14753 0.482129 0.491798Z" fill="white" />
        </svg>
      </div>
    </div>


    <div class="services-item noMarginText" id="item-1">
      <section class="main">
        <div class="main__title">Запись вокала/дикторство</div>
        <div class="container">
          <div class="main-box">
            <div class="main__content">
              <div class="main__content-text">В нашей студии звукозаписи вы можете записывать вокал или дикторство с
                профессиональными звукорежиссерами на качественном оборудовании, отвечающем всем требованиям мировых
                стандартов, радио и телевидения.
              </div>
            </div>
            <img class="main__img" src="app/images/sound-img-1.jpg" alt="">
          </div>
        </div>
      </section>

      <div class="tasks tasks-1">
        <div class="container">
          <div class="tasks__item">
            <div class="tasks__item-text">
              Работа в наше студии — это уникальная уютная атмосфера и чуткие звукорежиссеры! Работа с нами позволит
              вам получать удовольствие не только от результата, но и от самого процесса!
            </div>
          </div>
          <div class="tasks__item">
            <div class="tasks__item-text">
              Мы рады работать, не только с опытными исполнителями, но и с начинающими артистами и просто любителями.
              В нашей студии вокал записывается с минусом, песни в подарок, на свадьбу, корпоративные гимны. Запись
              голоса у нас – это недорого и доступно даже новичкам.
            </div>
          </div>
          <div class="tasks__item">
            <div class="tasks__item-text">
              Если вы хотите записать песню со своей собственной оригинальной песней, вы также можете запросить у нас
              аранжировку с микшированием и вокальным мастерингом.

            </div>
          </div>
        </div>
      </div>
      <div class="tasks tasks-2">
        <div class="container">
          <div class="tasks__item">
            <div class="tasks__item-text">
              Работа в наше студии — это уникальная уютная атмосфера и чуткие звукорежиссеры! Работа с нами позволит
              вам получать удовольствие не только от результата, но и от самого процесса!
            </div>
          </div>

          <div class="tasks__item">
            <div class="tasks__item-text">
              Если вы хотите записать песню со своей собственной оригинальной песней, вы также можете запросить у нас
              аранжировку с микшированием и вокальным мастерингом.
            </div>
          </div>

          <div class="tasks__item">
            <div class="tasks__item-text">
              Мы рады работать, не только с опытными исполнителями, но и с начинающими артистами и просто любителями.
              В нашей студии вокал записывается с минусом, песни в подарок, на свадьбу, корпоративные гимны. Запись
              голоса у нас – это недорого и доступно даже новичкам.
            </div>
          </div>
        </div>
      </div>

      <div class="tasks tasks-3">
        <div class="container">
          <div class="tasks__item">
            <div class="tasks__item-text">
              Работа в наше студии — это уникальная уютная атмосфера и чуткие звукорежиссеры! Работа с нами позволит
              вам получать удовольствие не только от результата, но и от самого процесса!
            </div>
          </div>
          <div class="tasks__item">
            <div class="tasks__item-text">
              Мы рады работать, не только с опытными исполнителями, но и с начинающими артистами и просто любителями.
              В нашей студии вокал записывается с минусом, песни в подарок, на свадьбу, корпоративные гимны. Запись
              голоса у нас – это недорого и доступно даже новичкам.
            </div>
          </div>

          <div class="tasks__item">
            <div class="tasks__item-text">
              Если вы хотите записать песню со своей собственной оригинальной песней, вы также можете запросить у нас
              аранжировку с микшированием и вокальным мастерингом.
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services-item" id="item-2">
      <section class="main">
        <div class="main__title">Сведение</div>
        <div class="container">
          <div class="main-box">
            <div class="main__content">
              <div class="main__content-text">
                Мы профессионально микшируем вокал с минусовкой, учитывая ваши пожелания и данные. Для микширования и
                мастеринга вокала мы используем высококачественную и современную обработку.
                <br><br>
                Мы занимаемся коммерческим сведением и мастерингом песен, не уступающих западным песням. Микс треков
                (мультитрековый) дает вам больше возможностей для звука, подходящего для вашего микса.

              </div>
            </div>
            <img class="main__img" src="app/images/sound-img-2.jpg" alt="">
          </div>
        </div>
      </section>
    </div>

    <div class="services-item" id="item-3">
      <section class="main">
        <div class="main__title">Под Ключ
        </div>
        <div class="container">
          <div class="main-box">
            <div class="main__content">
              <div class="main__content-text">
                Также вы можете заказать песню под ключ у нашего композитора, и мы сочиним для вас песню с нуля с
                текстами и музыкой, а потом запишем ее вашим голосом.
                <br><br>
                Мы подпишем договор о передаче авторских прав заказчику и выдадим лицензию на ваше имя при регистрации в
                РАО.
                <br><br>
                Продюсировать и записывать вокал будем на нашей студии звукозаписи (Москва). Сведение и мастеринг
                включены в стоимость песни под ключ.

              </div>
            </div>
            <img class="main__img" src="app/images/sound-img-3.jpg" alt="">
          </div>
        </div>
      </section>

    </div>

    <div class="services-item" id="item-4">
      <section class="main">
        <div class="main__title">Покупка Инструментала</div>
        <div class="container">
          <div class="main-box">
            <div class="main__content">
              <div class="main__content-text">
                Вы можете купить у нас бит/инструментал, который будет создан под вашим чутким руководством и по вашим
                запросам.
                <br><br>
                Подписываем договор о передаче авторских прав заказчику и о сроках оформления.
              </div>
            </div>
            <img class="main__img" src="app/images/sound-img-4.jpg" alt="">
          </div>
        </div>
      </section>

    </div>

    <section class="form">
      <div class="form__title">Уточните детали и цену</div>
      <div class="form-inner">
        <input id="name" type="text" class="form__input" placeholder="Имя">
        <input id="phone" type="text" class="form__input" placeholder="Телефон">
        <input id="mail" type="text" class="form__input" placeholder="Почта">
      </div>
      <button class="form__btn send-btn">Отправить</button>
    </section>
  </main>

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
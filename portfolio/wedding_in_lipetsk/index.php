<!DOCTYPE html>
<html lang="ru">

<head>
  <base href="/">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Свадьба в Липицке</title>
  <link rel="shortcut icon" href="favicon.png" type="image/png">
  <link rel="stylesheet" href="app/scss/style.css">
</head>

<body>
 
  <header class="header">
    <div class="header__container container">
      <a href="index.html" class="header__logo"><img src="app/images/logo.png"></img></a>
      <button class="header-button" type="button" aria-label="открыть меню">
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

  <main id="swup" class="transition-fade portfolio">
    <section class="main" style="background-image: url(app/images/portfolio-bg-3.jpg);">
      <div class="main__item">Свадьба в липицке</div>
    </section>

    <section class="content">
      <div class="container">
        <div class="content__title">Про событие</div>
        <div class="content-box">
          <div class="content__item">
            <div class="content__item-img">
              <img class="svg" src="app/images/smile.svg">
            </div>
            <span> ШЕВЕТОВСКАЯ</span>
          </div>
          <div class="content__item">
            <div class="content__item-img">
              <img class="svg" src="app/images/date.svg">
            </div>
            Не указано
          </div>
          <div class="content__item">
            <div class="content__item-img">
              <img class="svg" src="app/images/party.svg">
            </div>
            День рождение
          </div>
          <div class="content__item">
            <div class="content__item-img">
              <img class="svg" src="app/images/map-mark__portfolio.svg">
            </div>
            <span>Не указано</span>

          </div>
        </div>

        <div class="content__title">Как это было</div>
        <div class="content__text">
          Для проведения мероприятия было арендовано самое лучшее помещение из всех возможных – свадьба прошла на
          природе.
          <br><br>
          Гости расположились в просторной светлой беседке, которую декораторы украсили белыми цветами. В глубине
          беседки расположена сцена, где устроились музыканты, которые развлекали гостей.
          <br><br>
          Наши организаторы постарались создать атмосферу весенней свежести, которая прекрасно гармонирует с темой
          праздником.
        </div>
        <div class="content__title">Галерея</div>
        <div class="content__gallery" style="background-image: url(app/images/portfolio-bg-3.jpg);">
          <div class="content__gallery-span"></div>
          <div class="content__gallery-box">
            <div class="content__gallery-img">
              <img src="app/images/cursor-click.svg" alt="">
            </div>
            <div class="content__gallery-title">нажмите, чтобы посмотреть, как это было</div>
          </div>
        </div>
        <div class="content__order">
          <div class="content__order-btn popup-click">
            <span>Заказать</span>
            <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M24.568 10.7933L1.90134 0.126645C1.6731 0.0192456 1.41907 -0.0212042 1.16876 0.009993C0.918441 0.0411902 0.682112 0.142755 0.48721 0.302892C0.292309 0.463029 0.146833 0.675169 0.0676744 0.914677C-0.0114842 1.15419 -0.0210774 1.41124 0.0400093 1.65598L1.65601 8.12131L12 12L1.65601 15.8786L0.0400093 22.344C-0.0222267 22.5889 -0.0134342 22.8465 0.0653583 23.0866C0.144151 23.3267 0.289685 23.5394 0.484938 23.6998C0.680191 23.8603 0.917088 23.9618 1.16792 23.9925C1.41875 24.0232 1.67314 23.9819 1.90134 23.8733L24.568 13.2066C24.7971 13.099 24.9908 12.9283 25.1264 12.7146C25.2621 12.501 25.3341 12.2531 25.3341 12C25.3341 11.7469 25.2621 11.499 25.1264 11.2853C24.9908 11.0716 24.7971 10.901 24.568 10.7933Z" fill="white" />
            </svg>
          </div>
          <div class="content__order-box">
            <span>Поделиться:</span>
            <div class="content__order-social">
              <a target="_blank" href="#"><img class="svg" src="app/images/instagram.svg"></a>
              <a target="_blank" href="#"><img class="svg" src="app/images/facebook.svg"></a>
              <a target="_blank" href="#"><img class="svg" src="app/images/youtube.svg"></a>
            </div>
          </div>
        </div>
      </div>

      <svg class="bg-item bg-item-11" width="640" height="1073" viewBox="0 0 640 1073" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M546.645 0.767403C656.804 -10.5858 733.623 106.643 816.977 179.564C892.109 245.293 965.215 311.279 1005.83 402.476C1050.16 502.029 1101.71 618.222 1056.48 717.369C1011.64 815.641 878.191 824.703 786.879 882.391C703.965 934.773 641.589 1014.89 546.645 1039.46C430.363 1069.56 297.461 1098.48 195.143 1035.56C91.262 971.671 56.6827 838.801 27.7236 720.323C0.579599 609.272 -21.4186 484.516 36.3404 385.863C91.1933 292.173 227.318 296.798 313.973 231.404C403.327 163.975 435.299 12.243 546.645 0.767403Z" fill="#EEF7FB" />
      </svg>
      <svg class="bg-item bg-item-12" width="874" height="1480" viewBox="0 0 874 1480" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M-142.5 280.86C-55.2111 212.709 72.1556 271.202 181.515 288.687C280.089 304.448 377.082 321.504 459.945 377.182C550.4 437.962 655.809 509.004 670.171 617.032C684.406 724.106 576.167 802.693 529.465 900.081C487.057 988.513 476.783 1089.53 409.41 1160.79C326.894 1248.08 229.673 1343.2 109.56 1344.26C-12.3904 1345.33 -112.285 1251.14 -199.771 1166.16C-281.773 1086.51 -366.698 992.509 -370.186 878.244C-373.499 769.729 -255.724 701.317 -217.06 599.875C-177.192 495.273 -230.73 349.745 -142.5 280.86Z" fill="#EEF7FB" />
      </svg>
    </section>
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

  <div class="popup first-popup">
    <div class="popup__shadow"></div>
    <div class="popup-content">
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



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="app/js/libs.min.js"></script>
  <script src="app/js/main.js"></script>
  <script>
    let camera, scene, renderer, geometry, material, mesh, renderObject, allObject;
    init();

    function init() {
      const loadManager = new THREE.LoadingManager();
      const loader = new THREE.TextureLoader(loadManager);

      loadManager.onLoad = () => {
        renderer.render(scene, camera);
        $('.three-canvas').addClass('active');
      };

      camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
      camera.position.z = 1;

      scene = new THREE.Scene();

      allObject = [{
          nameImg: '220.jpg',
          positionX: 0,
          positionZ: 0,
          rotationY: 0,
          objectClick: true,
        },
        {
          nameImg: '441.jpg',
          positionX: 1.3,
          positionZ: 0.54,
          rotationY: -Math.PI / 4,
        },
        {
          nameImg: '216.jpg',
          positionX: -1.3,
          positionZ: 0.54,
          rotationY: Math.PI / 4,
        },

        {
          nameImg: '700.jpg',
          positionX: -0.245,
          positionZ: 3.515,
          rotationY: (5 * Math.PI) / 4,
        },

        {
          nameImg: '665.jpg',
          positionX: -4,
          positionZ: 3.5,
          rotationY: Math.PI / 2,
        },
        {
          nameImg: '707.jpg',
          positionX: -3.46,
          positionZ: 4.8,
          rotationY: (3 * Math.PI) / 4,
        },
      ]

      geometry = new THREE.CubeGeometry(1.5, 0.85, 0.1);

      for (const iterator of allObject) {
        let materials = [
          new THREE.MeshBasicMaterial({
            color: 0x242424,
            flatShading: true
          }),
          new THREE.MeshBasicMaterial({
            color: 0x242424,
            flatShading: true
          }),
          new THREE.MeshBasicMaterial({
            color: 0x242424,
            flatShading: true
          }),
          new THREE.MeshBasicMaterial({
            color: 0x242424,
            flatShading: true
          }),
          new THREE.MeshBasicMaterial({
            map: loader.load('app/images/wedding_in_lipetsk/' + iterator.nameImg)
          }),
          new THREE.MeshBasicMaterial({
            color: 0x242424,
            flatShading: true
          }),
        ];
        mesh = new THREE.Mesh(geometry, materials);
        scene.add(mesh);
        mesh.position.x = iterator.positionX;
        mesh.position.y = 0;
        mesh.position.z = iterator.positionZ;
        mesh.rotation.x = 0;
        mesh.rotation.y = iterator.rotationY;
        mesh.rotation.z = 0;
      }

      renderer = new THREE.WebGLRenderer({
        antialias: true
      });
      renderer.setSize(window.innerWidth, window.innerHeight);
      renderObject = document.body.appendChild(renderer.domElement);
      $(renderObject).addClass('three-canvas');
      $('.three-canvas').css('display', 'none');

      renderer.render(scene, camera);
    }
  </script>
  <script src="app/js/three-script.js"></script>
</body>

</html>
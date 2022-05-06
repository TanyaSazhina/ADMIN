<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="foramt-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>О поселении</title>
</head>

<body>
    <?php
    include "template/_header.php"
    ?>
    <div class="way container">
        <a href="index.php">Главная</a>
        <a href="#">О поселении</a>
    </div>
    <main class="page about-content container">
        <ul class="sidebar">
            <li class="sidebar__item">
                <a href="#contacts">
                    Контактная информация
                </a>
            </li>
            <li class="sidebar__item">
                <a href="#structure">
                    Организационная структура
                </a>
            </li>
            <li class="sidebar__item">
                <a href="#gallery">
                    Галерея
                </a>
            </li>
            <li class="sidebar__item">
                <a href="#boss">
                    Руководитель
                </a>
            </li>
        </ul>
        <div class="about">
            <section class="about-contacts" id="contacts">
                <div class="contacts__container container">
                    <h2 class="contacts__title title">
                        Контакты
                    </h2>
                    <div class="contacts__description">Администрация Новоуральского сельского поселения Таврического
                        муниципального района Омской области</div>
                    <ul class="contacts__info">
                        <li class="contacts__item">
                            <a class="contacts__item-map" href="https://yandex.ru/maps/-/CCUBzFCCSB" target="_blank">
                                646820 Омская область, Таврический район, п.Новоуральский, ул.Центральная, д.6
                            </a>
                        </li>
                        <li class="contacts__item">
                            <a class="contacts__item-tel" href="tel:83815137243">
                                +7(38151) 3-72-43
                            </a>
                        </li>
                        <li class="contacts__item">
                            <a class="contacts__item-email" href="mailto:mun2306@inbox.ru">
                                mun2306@inbox.ru
                            </a>
                        </li>
                        <li class="contacts__item">
                            <a class="contacts__item-email" href="mailto:novoural_admin@mail.ru">
                                novoural_admin@mail.ru
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="structure" id="structure">
                <div class="structure__title title">
                    Организационная структура
                </div>
                <ol class="structure__list">
                    <li>Глава Администрации Новоуральского сельского поселения
                        <ol class="structure__list">
                            <li>Ведущий специалист-специалист по кадрам, делопроизводител</li>
                            <li>Главный специалист - экономист</li>
                            <li>Главный специалист – главный бухгалтер
                                <ol class="structure__list">
                                    <li>Ведущий специалист - бухгалтер </li>
                                    <li>Бухгалтер</li>
                                </ol>
                            </li>
                            <li>Ведущий специалист</li>
                            <li>Специалист 1 категории</li>
                            <li>Инспектор ВУС</li>
                        </ol>
                    </li>
                </ol>
            </section>
            <section class="gallery" id="gallery">
                <div class="gallery__title title">
                    Галерея
                </div>
                <div class="gallery__sliders">
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <picture><source srcset="img/gallery/slider1.webp" type="image/webp"><img src="img/gallery/slider1.jpg" /></picture>
                            </div>
                            <div class="swiper-slide">
                                <picture><source srcset="img/gallery/slider2.webp" type="image/webp"><img src="img/gallery/slider2.jpg" /></picture>
                            </div>
                            <div class="swiper-slide">
                                <picture><source srcset="img/gallery/slider3.webp" type="image/webp"><img src="img/gallery/slider3.jpg" /></picture>
                            </div>
                            <div class="swiper-slide">
                                <picture><source srcset="img/gallery/slider4.webp" type="image/webp"><img src="img/gallery/slider4.jpg" /></picture>
                            </div>
                            <div class="swiper-slide">
                                <picture><source srcset="img/gallery/slider5.webp" type="image/webp"><img src="img/gallery/slider5.jpg" /></picture>
                            </div>
                            <div class="swiper-slide">
                                <picture><source srcset="img/gallery/slider6.webp" type="image/webp"><img src="img/gallery/slider6.jpg" /></picture>
                            </div>
                            <div class="swiper-slide">
                                <picture><source srcset="img/gallery/slider7.webp" type="image/webp"><img src="img/gallery/slider7.jpg" /></picture>
                            </div>
                        </div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <picture><source srcset="img/gallery/slider1.webp" type="image/webp"><img src="img/gallery/slider1.jpg" /></picture>
                            </div>
                            <div class="swiper-slide">
                                <picture><source srcset="img/gallery/slider2.webp" type="image/webp"><img src="img/gallery/slider2.jpg" /></picture>
                            </div>
                            <div class="swiper-slide">
                                <picture><source srcset="img/gallery/slider3.webp" type="image/webp"><img src="img/gallery/slider3.jpg" /></picture>
                            </div>
                            <div class="swiper-slide">
                                <picture><source srcset="img/gallery/slider4.webp" type="image/webp"><img src="img/gallery/slider4.jpg" /></picture>
                            </div>
                            <div class="swiper-slide">
                                <picture><source srcset="img/gallery/slider5.webp" type="image/webp"><img src="img/gallery/slider5.jpg" /></picture>
                            </div>
                            <div class="swiper-slide">
                                <picture><source srcset="img/gallery/slider6.webp" type="image/webp"><img src="img/gallery/slider6.jpg" /></picture>
                            </div>
                            <div class="swiper-slide">
                                <picture><source srcset="img/gallery/slider7.webp" type="image/webp"><img src="img/gallery/slider7.jpg" /></picture>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="boss" id="boss">
                <div class="boss__title title">
                    Руководитель
                </div>
                <div class="boss__content">
                    <div class="boss__text">
                        <div class="boss__name">
                            Кирин Евгений Викторович
                        </div>
                        <div class="boss__subtitle">
                            Биография
                        </div>
                        <ul class="boss__list">
                            <li> Родился 31 марта 1968 года в с. Петровка Омского района Омской области. </li>
                            <li> Окончил Чапаевскую среднюю школу в 1985 году. </li>
                            <li> С 1986г. по 1988г. служил в рядах Советской Армии. </li>
                            <li> В 1989 году окончил Саргатское педагогическом училище. Поступил на работу учителем
                                физической культуры в Сыропятскую среднюю школу. </li>
                            <li> С 1992 года работал учителем физкультуру в Тихорецкой школе.</li>
                            <li> В 2001 года принят на работу учителем физической культуры в Новоуральскую среднюю школу
                                Таврического района. </li>
                            <li> В 2003 году закончил Сибирский государственный университет физической культуры с
                                присвоением квалификации «Специалист по физической культуре и спорту».</li>
                            <li> Семейное положение: женат, имеет двоих детей.</li>
                            <li> 30 октября 2005 года был избран на должность главы Новоуральского сельского поселения
                                Таврического муниципального района Омской области, которую занимает по сегодняшний день.
                            </li>
                        </ul>
                    </div>
                    <picture><source srcset="img/boss.webp" type="image/webp"><img class="boss__img" src="img/boss.jpg" alt="boss"></picture>
                </div>
            </section>
        </div>
    </main>
    
    <?php
    include "template/_footer.php"
    ?>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/script.min.js"></script>
</body>

</html>
<?php
include 'components/connect.php';
$_monthsList = array(
    "-01-" => "января", "-02-" => "февраля",
    "-03-" => "марта", "-04-" => "апреля", "-05-" => "мая", "-06-" => "июня",
    "-07-" => "июля", "-08-" => "августа", "-09-" => "сентября",
    "-10-" => "октября", "-11-" => "ноября", "-12-" => "декабря"
);

//$news_preview = mysqli_query($conn, "SELECT * FROM `news` ORDER BY `date` DESC LIMIT 3");
$news_index = mysqli_query($conn, "SELECT * FROM `news` ORDER BY `date` DESC LIMIT 4");


?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="foramt-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Главная</title>
</head>

<body>
    <?php
    include "template/_header.php";
    ?>
    <main class="page">
        <section class="preview">
            <div class="preview__container container">
                <div class="preview__item">
                    <h3 class="preview__title">
                        3220 человек
                    </h3>
                    <p class="preview__description">
                        численность населения новоуральского сельского поселения на 2021 год
                    </p>
                </div>
                <div class="preview__item">
                    <h3 class="preview__title">
                        1929 год
                    </h3>
                    <p class="preview__description">
                        дата основания административного центра - поселка новоуральский
                    </p>
                </div>
                <div class="preview__item">
                    <h3 class="preview__title">
                        6
                    </h3>
                    <p class="preview__description">
                        населенных пунктов
                    </p>
                </div>
                <div class="preview__item">
                    <h3 class="preview__title">
                        2004 год
                    </h3>
                    <p class="preview__description">
                        статус и границы сельского поселения установлены Законом омской области от 30 июля 2004
                    </p>
                </div>
            </div>
            <div class="preview__bg">
                <picture>
                    <source srcset="img/preview-index.webp" type="image/webp"><img src="img/preview-index.jpg" alt="preview">
                </picture>
            </div>
            <!--<div class="preview__news container">
                <?php
                foreach ($news_preview as $news_item) { ?>
                    <a href="news-item.php?id=<?= $news_item['id'] ?>" class="preview__news-item index-news__item">
                        <div class="preview__news-img">
                            <img class="index-news__img" src="<?= $news_item['img'] ?>" alt="news">
                        </div>
                        <div class="index-news__info">
                            <div class="index-news__date preview__news-date">
                                <?= date("d.m.y", strtotime($news_item['date'])) ?>
                            </div>
                            <h4 class="index-news__title preview__news-title">
                                <?= $news_item['title'] ?>
                            </h4>
                        </div>
                    </a>
                <?php } ?>
            </div>-->
        </section>
        <section class="index-news">
            <div class="index-news__container container">
                <div class="index-news__header">
                    <h2 class="index-news__title title">
                        новости
                    </h2>
                    <a href="news.php" class="index-news__link link">
                        Все новости
                    </a>
                </div>
                <div class="index-news__content">
                    <?php
                    foreach ($news_index as $news_item) { ?>
                        <a href="news-item.php?id=<?= $news_item['id'] ?>" class="index-news__news-item index-news__item">
                            <div class="index-news__news-img">
                                <img class="index-news__img" src="<?= $news_item['img'] ?>" alt="news">
                            </div>
                            <div class="index-news__info index-news__info">
                                <div class="index-news__date index-news__news-date">
                                    <?php
                                    $_mD = date("-m-", strtotime($news_item['date'])); //для замены
                                    $currentDate = str_replace($_mD, ", " . $_monthsList[$_mD] . " ", date("d-m-Y", strtotime($news_item['date'])));
                                    echo $currentDate;
                                    ?>
                                </div>
                                <h4 class="index-news__title index-news__news-title">
                                    <?= $news_item['title'] ?>
                                </h4>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section class="directions-index">
            <div class="directions-index__container container">
                <h2 class="directions-index__title title">
                    Направления работы
                </h2>
                <div class="directions-index__content">
                    <a href="directions.php#covid" class="directions-index__item">
                        <picture>
                            <source srcset="img/directions/virus.svg" type="image/webp"><img src="img/directions/virus.svg" alt="virus" class="directions-index__img">
                        </picture>
                        <div class="directions-index__item-text">
                            <h3 class="directions-index__item-title">
                                COVID-19
                            </h3>
                            <p class="directions-index__description">
                                Узнайте о видах помощи, которую федеральное правительство предлагает людям и
                                предприятиям, пострадавшим от пандемии COVID-19.
                            </p>
                        </div>
                    </a>
                    <a href="directions.php#jobs" class="directions-index__item">
                        <picture>
                            <source srcset="img/directions/case.svg" type="image/webp"><img src="img/directions/case.svg" alt="case" class="directions-index__img">
                        </picture>
                        <div class="directions-index__item-text">
                            <h3 class="directions-index__item-title">
                                Рабочие места и безработица
                            </h3>
                            <p class="directions-index__description">
                                Узнайте, как и где искать новую работу или карьеру, получить помощь, если вы
                                безработный, и многое другое.
                            </p>
                        </div>
                    </a>
                    <a href="directions.php#concerns" class="directions-index__item">
                        <picture>
                            <source srcset="img/directions/money.svg" type="image/webp"><img src="img/directions/money.svg" alt="money" class="directions-index__img">
                        </picture>
                        <div class="directions-index__item-text">
                            <h3 class="directions-index__item-title">
                                Проблемы потребителей
                            </h3>
                            <p class="directions-index__description">
                                Узнайте, как быть безопасным потребителем, что делать, когда покупка или услуга идут не
                                так, и многое другое.
                            </p>
                        </div>
                    </a>
                    <a href="directions.php#housing" class="directions-index__item">
                        <picture>
                            <source srcset="img/directions/home.svg" type="image/webp"><img src="img/directions/home.svg" alt="home" class="directions-index__img">
                        </picture>
                        <div class="directions-index__item-text">
                            <h3 class="directions-index__item-title">
                                Жилье
                            </h3>
                            <p class="directions-index__description">
                                Получите информацию и услуги, которые помогут вам найти и сохранить дом.
                            </p>
                        </div>
                    </a>
                    <a href="directions.php#healthcare" class="directions-index__item">
                        <picture>
                            <source srcset="img/directions/heart.svg" type="image/webp"><img src="img/directions/heart.svg" alt="heart" class="directions-index__img">
                        </picture>
                        <div class="directions-index__item-text">
                            <h3 class="directions-index__item-title">
                                Здравоохранение
                            </h3>
                            <p class="directions-index__description">
                                Найдите ресурсы здравоохранения от правительства
                            </p>
                        </div>
                    </a>
                    <a href="directions.php#business" class="directions-index__item">
                        <picture>
                            <source srcset="img/directions/business.svg" type="image/webp"><img src="img/directions/business.svg" alt="business" class="directions-index__img">
                        </picture>
                        <div class="directions-index__item-text">
                            <h3 class="directions-index__item-title">
                                Малый бизнес
                            </h3>
                            <p class="directions-index__description">
                                Узнайте, как начать малый бизнес, получить финансовую помощь от правительства и многое
                                другое.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="questions">
            <div class="questions__container container">
                <h2 class="questions__title title">
                    Опросы
                </h2>
                <div class="questions__content">
                    <div class="questions__item">
                        <h3 class="questions__item-title">
                            Предложения по улучшению поселения
                        </h3>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeatkAWUzgNHRXX9_zwOkMANlg8xP7uPdTOLM1kYVviCt-bcw/viewform" class="questions__link link" target="_blank">
                            Начать
                        </a>
                    </div>
                    <div class=" questions__item">
                        <h3 class="questions__item-title">
                            О вашем отношении к поселению
                        </h3>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeatkAWUzgNHRXX9_zwOkMANlg8xP7uPdTOLM1kYVviCt-bcw/viewform" class="questions__link link" target="_blank">
                            Начать
                        </a>
                    </div>
                    <div class=" questions__item">
                        <h3 class="questions__item-title">
                            О судьбе поселения
                        </h3>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeatkAWUzgNHRXX9_zwOkMANlg8xP7uPdTOLM1kYVviCt-bcw/viewform" class="questions__link link" target="_blank">
                            Начать
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class=" contacts">
            <div class="contacts__container container">
                <h2 class="contacts__title title">
                    Контакты
                </h2>
                <div class="contacts__content">
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
                    <div class="contacts__map">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab3dce12f0b95dd508b2d93fad9aeb6d1bb18b36986219d79274438d10cea9e21&amp;source=constructor" width="100%" height="300px" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
    include "template/_footer.php"
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.min.js"></script>
</body>

</html>
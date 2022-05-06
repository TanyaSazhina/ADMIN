<?php
include 'components/connect.php';
$_monthsList = array(
    "-01-" => "января", "-02-" => "февраля",
    "-03-" => "марта", "-04-" => "апреля", "-05-" => "мая", "-06-" => "июня",
    "-07-" => "июля", "-08-" => "августа", "-09-" => "сентября",
    "-10-" => "октября", "-11-" => "ноября", "-12-" => "декабря"
);
$appeals = mysqli_query($conn, "SELECT * FROM `message` WHERE `answer` != '' ORDER BY `date` DESC");
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="foramt-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Обращения</title>
</head>

<body>
    <?php
    include "template/_header.php"
    ?>
    <div class="way container">
        <a href="/">Главная</a>
        <a href="#">Обращения</a>
    </div>
    <main class="page">
        <section class="leave-appeals">
            <div class="leave-appeals__container container">
                <h2 class="leave-appeals__title title">
                    Оставить обращение
                </h2>
                <div class="leave-appeals__content">
                    <div class="leave-appeals__left">
                        <p class="leave-appeals__paragraph">
                            В связи с мероприятиями по предотвращению распространения коронавируса личный прием граждан,
                            а также прием обращений на бумажных носителях временно приостановлены. Просьба обращаться за
                            консультациями по телефонам и электронной почте.
                        </p>
                        <a href="form.php" class="leave-appeals__link link">
                            Оставить обращение
                        </a>
                    </div>
                    <div class="leave-appeals__right">
                        <p class="leave-appeals__paragraph">
                            Часы приема отдела по работе с обращениями граждан:
                        </p>
                        <p class="leave-appeals__paragraph">
                            Понедельник - Четверг: <span class="light">с 10:00 - 12:00 и с 15:00 - 17:00</span><br>
                            Пятница: <span class="light">с 10:00 - 12:00 и с 15:00 до 16:3</span>0
                        </p>
                        <p class="leave-appeals__paragraph">
                            Заведующий Приемной: <span class="light">Дворников Сергей Владиславович</span>
                        </p>
                        <ul class="contacts__info light">
                            <li class="contacts__item">
                                <a class="contacts__item-map" href="https://yandex.ru/maps/-/CCUBzFCCSB" target="_blank">
                                    646820 Омская область, Таврический район, п.Новоуральский, ул.Центральная, д.6
                                </a>
                            </li>
                            <li class="contacts__item ">
                                <a class="contacts__item-tel" href="tel:83815137243">
                                    +7(38151) 3-72-43
                                </a>
                            </li>
                            <li class="contacts__item">
                                <a class="contacts__item-tel" href="tel:84991233254">
                                    +7 (499) 123-32-54
                                </a>
                            </li>
                            <li class="contacts__item">
                                <a class="contacts__item-email" href="mailto:novoural_admin@mail.ru">
                                    novoural_admin@mail.ru
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="review-appeals">
            <div class="review-appeals__container container">
                <h2 class="review-appeals__title title">
                    Обзор обращений
                </h2>
                <div class="review-appeals__content">
                    <?php
                    foreach ($appeals as $appeal) { ?>
                        <div class="review-appeals__item">
                            <div class="review-appeals__date">
                                <?php
                                $_mD = date("-m-", strtotime($appeal['date'])); //для замены
                                $currentDate = str_replace($_mD, ", " . $_monthsList[$_mD] . " ", date("d-m-Y", strtotime($appeal['date'])));
                                echo $currentDate;
                                ?>
                            </div>
                            <div class="review-appeals__question">
                                <?= $appeal['message'] ?>
                            </div>
                            <div class="review-appeals__answer">
                                <?= $appeal['answer'] ?>
                            </div>
                        </div>
                    <?php } ?>
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
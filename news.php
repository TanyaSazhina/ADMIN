<?php
include 'components/connect.php';
$_monthsList = array(
    "-01-" => "января", "-02-" => "февраля",
    "-03-" => "марта", "-04-" => "апреля", "-05-" => "мая", "-06-" => "июня",
    "-07-" => "июля", "-08-" => "августа", "-09-" => "сентября",
    "-10-" => "октября", "-11-" => "ноября", "-12-" => "декабря"
);
$news = mysqli_query($conn, "SELECT * FROM `news` ORDER BY `date` DESC");
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="foramt-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Новости</title>
</head>

<body>
    <?php
    include "template/_header.php";
    ?>
    <div class="way container">
        <a href="/">Главная</a>
        <a href="#">Новости</a>
    </div>
    <main class="page">
        <section class="news">
            <div class="news__container container">
                <h2 class="title">
                    новости
                </h2>
                <div class="news__content">
                    <?php
                    foreach ($news as $news_item) { ?>
                        <a href="news-item.php?id=<?= $news_item['id'] ?>" class="news__item">
                            <img class="news__img" src="<?= $news_item['img'] ?>" alt="news">
                            <div class="news__info">
                                <div class="news__date index-news__date">
                                    <?php
                                    $_mD = date("-m-", strtotime($news_item['date'])); //для замены
                                    $currentDate = str_replace($_mD, ", " . $_monthsList[$_mD] . " ", date("d-m-Y", strtotime($news_item['date'])));
                                    echo $currentDate;
                                    ?> </div>
                                <h4 class="news__title index-news__title">
                                    <?= $news_item['title'] ?>
                                </h4>
                            </div>
                        </a>
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
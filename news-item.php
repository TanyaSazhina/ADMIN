<?php
include 'components/connect.php';
$news_id = $_GET['id'];
$id = $_GET['id'];
$sql = 'SELECT * FROM `news` WHERE id=?';
$stmt = $conn->prepare($sql); // создали команду
$stmt->bind_param("i", $id); // привязали переменную $id к запросу
$stmt->execute(); // выполнили запрос
$result = $stmt->get_result(); // получили результат
$row = $result->fetch_assoc(); // выбрали первую строку результата
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="foramt-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Новость</title>
</head>

<body>
    <?php
    include "template/_header.php"
    ?>
    <div class="way container">
        <a href="index.php">Главная</a>
        <a href="news.php">Новости</a>
        <a href="#"> <?= $row['title'] ?></a>
    </div>
    <main class="page news-item">
        <div class="news-item__preview">
            <img src="<?= $row['img'] ?>" alt="gallery">
        </div>
        <div class="news-item__container container">
            <h1 class="news-item__title">
                <div class="news-item__mark">
                    “
                </div>
                <?= $row['title'] ?>
            </h1>
            <div class="news-item__text">
                <?= $row['description'] ?>
            </div>
        </div>
    </main>
    <?php
    include "template/_footer.php"
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.min.js"></script>
</body>

</html>
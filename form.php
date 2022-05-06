<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="foramt-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Оставить обращение</title>
</head>

<body>
    <?php
    include "template/_header.php"
    ?>
    <div class="way container">
        <a href="/">Главная</a>
        <a href="appeals.php">Обращения</a>
        <a href="#">Форма отправки обращения</a>
    </div>
    <main class="page">
        <div class="form">
            <div class="form__container container">
                <h1 class="form__title title">
                    Форма отправки сообщения
                </h1>
                <form class="form__body" method="POST">
                    <div class="form__item">
                        <div class="form__item-title">
                            В электронной анкете в Вашем обращении укажите в именительном падеже Ваши:
                        </div>
                        <div class="form__input-container">
                            <label class="form__label" for="name">
                                Имя *
                            </label>
                            <input class="form__input" type="text" name="name" id="name" required>
                        </div>
                        <div class="form__input-container">
                            <label class="form__label" for="surname">
                                Фамилию *
                            </label>
                            <input class="form__input" type="text" name="surname" id="surname" required>
                        </div>
                    </div>
                    <div class="form__item">
                        <div class="form__item-title">
                            В поле ввода текста обращения в форме электронного документа в Вашем обращении: </div>
                        <label class="form__label" for="message">
                            Изложите суть предложения, заявления или жалобы *
                        </label>
                        <textarea class="form__textarea" type="text" name="message" id="message" required></textarea>
                    </div>
                    <div class="form__submit" onclick="submit()">Отправить</div>
                </form>
            </div>
        </div>
    </main>
    <?php
    include "template/_footer.php"
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.min.js"></script>
    <script>
        function getData(obj_form) {
            var hData = {};
            $('input, textarea', obj_form).each(function() {
                if (this.name && this.name != '') {
                    hData[this.name] = this.value;
                }
            });
            return hData;
        }

        function submit() {
            var postData = getData('.form__body');
            $.ajax({
                dataType: 'json',
                url: "components/message.php",
                method: 'POST',
                async: true,
                data: postData,
                success: function(data) {
                    alert(data['message']);
                    if (data['success']) {
                        location.href = 'form.php';
                    }
                }
            });
        };
    </script>
</body>

</html>
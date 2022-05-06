<?php
include 'connect.php';

$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : NULL;
$surname = isset($_REQUEST['surname']) ? $_REQUEST['surname'] : NULL;
$message = isset($_REQUEST['message']) ? $_REQUEST['message'] : NULL;
$date = date('Y-m-d');
$resData = array();
if (!$name) {
    $resData['message'] = "Введите имя";
    $resdata['success'] = 0;
} elseif (!$surname) {
    $resData['message'] = "Введите фамилию";
    $resdata['success'] = 0;
} elseif (!$message) {
    $resData['message'] = "Введите сообщение";
    $resdata['success'] = 0;
} else {
    $sql = "INSERT INTO `message` (`name`, `surname`, `message`, `date`) VALUE ('$name', '$surname', '$message', '$date')";

    try {
        $rs = mysqli_query($conn, $sql);
    } catch (Throwable $e) {
        echo "Error caught: " . $e->getMessage();
    }

    if ($rs) {
        $resData['message'] = "Данные успешно отправленны. Ваш вопрос уже в обработке";
        $resdata['success'] = 1;
    } else {
        $resData['success'] = 0;
        $resData['message'] = "Данные не отправленны";
    };
}

echo json_encode($resData);

<?php

define("FILE_MESSAGE", "file.txt"); // Имя файла хранения сообщений

require 'handler.php';

if (isset($_POST['sub'])) {
    if(!empty($_POST['name']) && !empty($_POST['description'])) {
        seve_message();
        header("Location: {$_SERVER['PHP_SELF']}");
        die;
    }
}

$massages = get_message();
$massages = array_message($massages);

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .message {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }

        .message:nth-child(2n) {
            background: #cbb3ff;
        }
    </style>
</head>
<body>

    <form action="index.php" method="post">
        <input type="text" name="name"> <br>
        <textarea name="description" id="" cols="30" rows="5"></textarea> <br>
        <button type="submit" name="sub">Отправить</button>
    </form>

    <hr>

    <?php if(!empty($massages)) : ?>
        <?php foreach ($massages as $message) : ?>
            <?php $message = get_format_message($message); ?>
            <div class="message">
                <p>Автор: <?php echo $message[0] ?> | Дата: <?php echo $message[2] ?></p>
                <div>
                    <?php echo nl2br(htmlspecialchars($message[1])) ?>
                </div>
            </div>
        <?php endforeach;  ?>
    <?php  endif;?>

</body>
</html>

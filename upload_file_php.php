<?php
    var_dump($_POST);

    if(!empty($_FILES)) {
        move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $_FILES['file']['name']);
        //move_uploaded_file($_FILES['file']['tmp_name'], 'upload/test.jpg'); // произвольое имя
        // лучше герерировать имя и ставить полученное расширение
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post" enctype="multipart/form-data">
      <p><input type="text" name="name"></p>
      <p><input type="file" name="file"></p>
      <p><button type="submit">Send</button></p>   
    </form>
</body>
</html>

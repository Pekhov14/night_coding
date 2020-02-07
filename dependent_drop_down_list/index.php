<?php
    require_once 'DbConnect.php';
    require_once  'functions.php';
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Load on Select</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<br><br>
<div class="container">
    <h1 class="text-center">Зависимый выпадающий список</h1>
    <div class="wrap_form" style="width: 50%; margin: 0 auto; padding-top: 50px;">
        <form>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Авор</label>

                <select class="form-control" id="authors" name="authors">
                    <option disabled selected>Выберите автора</option>
                    <?php
                        $authors = load_authors();

                        foreach ($authors as $author)
                            echo "<option id='". $author['id'] ."' value='".$author['id']."' >" . $author['name'] . "</option>";
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Книга</label>
                <select class="form-control" id="books" name="books">
                    <option disabled selected>Выберите книгу</option>
                </select>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
	$(document).ready(function () {
        $('#authors').change(function () {
            let authorId = $(this).val(); // this == #authors id текущего элемента option

            $.ajax({
            	url: "functions.php",
            	method: "POST",
            	data: {authorId:authorId}  // создаем в post поле authorId со знач authorId из option
                }).done(function(books) {
                    // console.log(books);
                    books = JSON.parse(books);
                    $('#books').empty(); // что бы старые данные очищались
                    books.forEach(function (books) {
                        $('#books').append('<option>' + books.name + '</option>');
                    });
            });

        });
    });
</script>
</body>
</html>

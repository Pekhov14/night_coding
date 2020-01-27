<?php
    require 'connect.php';
//    require  'functions.php';
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
	<form>
		<div class="form-group">
			<label for="exampleFormControlSelect1">Example select</label>
			<select class="form-control" id="exampleFormControlSelect1">
				<option>1</option>
			</select>
		</div>
		<div class="form-group">
			<label for="exampleFormControlSelect1">Example select</label>
			<select class="form-control" id="exampleFormControlSelect1">
				<option>1</option>
			</select>
		</div>

	</form>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
	$(document).ready(function () {
		$('#brand').change(function () {
			let brand_id = $(this).val(); // id текущего элемента option

			$.ajax({
				url: "load_data.php",
				method: "POST",
				data: {brand_id:brand_id}, // создаем в post поле brand_id со знач brand_id из js
				success: function (data) {
					$('#show_product').html(data);
                }
			});
        });
    });
</script>
</body>
</html>

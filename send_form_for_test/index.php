<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        /* div:nth-child(1) { */
            /* display: none !important; */
            /* background-color: white !important; */
        /* } */
        .main {
            width: 300px;
            height: 100%;
            margin: 100px auto;
            /* background: #477;
            padding: 50px */
        }
        .cbalink {
            display: none;
        }
    </style>
</head>
<body>
<div class="container">

    <div class="main">
        <form>
        <div class="form-group">
            <input type="text" name="username" class="inputName form-control" placeholder="Имечко">
        </div>
        <div class="form-group">
            <input type="text" name="userphone" class="inputPassword form-control" placeholder="Телефончик">
        </div>
        <button type="button" class="btn btn-primary send">Отправочка</button>
        </form>
    </div>

<!-- Content here -->
</div>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script>
    $(document).ready(function() {
        $('button.send').on('click', function() {
            let nameValue  = $('input.inputName').val();
            let phoneValue = $('input.inputPassword').val();

            if(nameValue === '') {
                Swal.fire('Имя обязательное значение')
                Swal.fire({
                type: 'error',
                title: 'Упсс...',
                text: 'Имя обязательно для запонения!'
                })
            } else {
                $.ajax({
                method: "POST",
                url: "some.php",
                data: { username: nameValue, userphone: phoneValue }
                })
                .done(function(msg) {
                    // console.log(`Data Saved: ${msg} `);
                    $('input.inputName').val('');
                    $('input.inputPassword').val('');
                    Swal.fire({
                    position: 'center',
                    type: 'success',
                    title: 'Данные успешно добавенны!',
                    showConfirmButton: false,
                    timer: 2500
                    })
                });
            }

            
        })
    })
</script>

</body>
</html>


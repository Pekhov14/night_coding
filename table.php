<?php

// Элегантный вывод таблицы без if-ов

$arr = [
    'item 1',
    'item 2',
    'item 3',
    'item 4',
    'item 5',
    'item 6',
    'item 7',
    'item 8',
    'item 9',
    'item 10',
    'item 11',
    'item 12',
    'item 13',
    'item 14',
    'item 15',
    'item 16',
    'item 17',
    'item 18',
    'item 19',
    'item 20',
];

// var_dump($arr);
// $arr2 = array_chunk($arr, 4);
// var_dump($arr2);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="conteiner">
    <?php foreach (array_chunk($arr, 4) as $value): ?>
        <div class="row">
            <?php foreach($value as $item): ?>
                <div class="col-md-3"> 
                    <?php echo $item; ?> 
                </div>
            <?php endforeach ?>
        </div>
    <?php endforeach; ?>
</div>

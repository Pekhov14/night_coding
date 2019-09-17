<style>
    a { text-decoration: none}
    a.active { text-decoration: underline }
    a.disabled {
        pointer-events: none;
    }
</style>

<?php
    error_reporting(-1);

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=night;charset=utf8',
            'root',
            ''
        );
    } catch (PDOException $e) {
        die('Немогу подключиться');
    }

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $notes_on_page = 2; // сколько вывожу на страницу записей

    $from = ($page - 1) * $notes_on_page; // с какой страницы страрт

    $sql       = "SELECT * FROM users_coments LIMIT $from,$notes_on_page";
    $statement = $pdo->query($sql);
    $comments  = $statement->fetchAll(PDO::FETCH_ASSOC);

    var_dump($comments);
    // если масс пуст сказать иди в жопу нет такой страници

    $sql       = "SELECT COUNT(*) as count FROM users_coments";
    $statement = $pdo->query($sql);
    $count     = $statement->fetch(PDO::FETCH_ASSOC)['count']; // кол записей в  базе

    $pages_count = ceil($count / $notes_on_page); // сколько нужно страниц


// вывод пагинации
    $prev = $page - 1;
    $next = $page + 1;
    if ($page != 1) {
        echo "<a href=\"?page=$prev\"> << </a> ";
    } else if ($page == 1) {
        echo "<a href=\"?page=$prev\" class='disabled'> << </a> ";
    }


    for ($i = 1; $i <= $pages_count; $i++) {
        if ($page == $i) {
            $class = ' class="active"';
        } else {
            $class = '';
        }

        echo "<a href=\"?page=$i\" $class>$i</a> ";
    }


    if ($page != $pages_count) {
        echo "<a href=\"?page=$next\"> >> </a> ";
    } else if ($page == $pages_count) {
        echo "<a href=\"?page=$next\" class='disabled'> >> </a> ";
    }




//if ($page == $i) {
//    echo "<a href=\"?page=$i\" class=\"active\">$i</a> ";
//} else {
//    echo "<a href=\"?page=$i\">$i</a> ";
//}
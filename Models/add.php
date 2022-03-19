<?php

if (isset($_POST['title'])) {
    require '../Dbcoonection/db.php';

    $title = $_POST['title'];

    if (empty($title)) {
        header("Location: ../work14_16_no_oop.php?mess=помилка");
    } else {
        $way = $connect->prepare("INSERT INTO todo_work14_16_no_oop(title) VALUE(?)");
        $road = $way->execute([$title]);

        if ($road) {
            header("Location: ../work14_16_no_oop.php?mess=пишу_завдання");
        } else {
            header("Location: ../work14_16_no_oop.php");
        }
        $connect = null;
        exit();
    }
} else {
    header("Location: ../work14_16_no_oop.php?mess=помилка");
}

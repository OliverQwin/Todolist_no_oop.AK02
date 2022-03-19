<?php

if (isset($_POST['id'])) {
    require '../Dbcoonection/db.php';

    $id = $_POST['id'];

    if (empty($id)) {
        echo 0;
    } else {
        $way = $connect->prepare("DELETE FROM todo_work14_16_no_oop WHERE id=?");
        $road = $way->execute([$id]);

        if ($road) {
            echo 1;
        } else {
            echo 0;
        }
        $connect = null;
        exit();
    }
} else {
    header("Location: ../work14_16_no_oop.php?mess=помилка");
}

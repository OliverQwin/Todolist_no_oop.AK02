<?php

if (isset($_POST['id'])) {
    require '../Dbcoonection/db.php';

    $id = $_POST['id'];
    if (empty($id)) {
        echo 'помилка';
    } else {
        $todos14_16 = $connect->prepare("SELECT id, checked FROM todo_work14_16_no_oop WHERE id=?");
        $todos14_16->execute([$id]);

        $todo14_16 = $todos14_16->fetch();
        $Ids = $todo14_16['id'];
        $checked = $todo14_16['checked'];

        $Checked = $checked ? 0 : 1;

        $road = $connect->query("UPDATE todo_work14_16_no_oop SET checked=$Checked WHERE id=$Ids");

        if ($road) {
            echo $checked;
        } else {
            echo "помилка";
        }
        $connect = null;
        exit();
    }
} else {
    header("Location: ../work14_16_no_oop.php?mess=помилка");
}

<?php
require 'Dbcoonection/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Work14-16(no OOP)</title>
</head>

<body>
    <header>
        <h1>Ваш список завдань</h1>
    </header>
    <div class="pages">
        <div class="adding">
            <form action="Models/add.php" method="POST" autocomplete="off">
                <?php if (isset($_GET['mess']) && $_GET['mess'] == 'помилка') { ?>
                    <input type="text" name="title" placeholder="Пишу завдання..." />
                    <?php echo "<script>alert(\"Ви забули ввести завдання\");</script>"; ?>
                    <button type="submit">Додати завдання(Enter) +</button>

                <?php } else { ?>
                    <input type="text" name="title" placeholder="Пишу завдання..." />
                    <button type="submit">Додати завдання(Enter)+</button>
                <?php } ?>
            </form>
        </div>
        <?php
        require 'Dbcoonection/db.php';
        $todos14_16 = $connect->query("SELECT * FROM todo_work14_16_no_oop ORDER BY id DESC");
        ?>
        <div class="photo_todo">
            <?php if ($todos14_16->rowCount() <= 0) { ?>
                <div class="todo_class">
                    <div class="gif">
                        <img src="gif/263809535_0.gif" width="100%">
                        <p>Список завдань порожній(додайте завдання)</p>
                    </div>
                </div>
            <?php } ?>

            <?php while ($todo14_16 = $todos14_16->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="todo_class">
                    <span id="<?php echo $todo14_16['id']; ?>" class="delete_to_do">Вилучити завдання</span>
                    <?php if ($todo14_16['checked']) { ?>
                        <input type="checkbox" class="check-box" data-todo-id="<?php echo $todo14_16['id']; ?>" checked />
                        <h2 class="checked"><?php echo $todo14_16['title'] ?></h2>
                    <?php } else { ?>
                        <input type="checkbox" data_todo_id="<?php echo $todo14_16['id']; ?>" class="check-box" />
                        <h2><?php echo $todo14_16['title'] ?></h2>
                    <?php } ?>
                    <br>
                    <small>Создано: <?php echo $todo14_16['date_time'] ?></small>
                    <div class="todo_class">
                        <div class="gif">
                            <img src="gif/6GcM.gif" width="100%">
                            <img src="gif/Uond.gif" width="90px" />
                            <?php $page = $_SERVER['PHP_SELF']; ?>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <script src="dataid/createtodosetting.js"></script>
</body>

</html>
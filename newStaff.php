<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <title>Новый Сотрудник</title>
    <link rel="stylesheet" type="text/css" href="css/Style_new_staff.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js" defer></script>
    <script src="js/script.js" defer></script>
    <?php
    require "block/admin_left_panel.php";
    ?>
</head>

<body>
    <form action="add_new_staff.php" method="post">
        <div class="new_staff">
            <img src="/Images/logogogog.png" alt="">
            <input type="text" class="fio_field" placeholder="ФИО" name="add_new_staff_fio">
        </div>
    </form>
</body>
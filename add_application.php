<?php
include_once 'connect.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
    <title>Добавление заявки</title>
    <style>
        .edit-form {
            font-family: Arial;
        }
    </style>
</head>
<body>
<header class="header">
    <div class="header-container">
        <a href="#" class="header-logo"><img src="img/dns-mini-logo.png" alt="DNS" class="header-logo"></a>
        <a href="index.php" class="header-link">На главную</a>
    </div>
</header>
<main class="application-log-main">
    <h1 class="main-title">Добавить заявку</h1>
    <form action="added_app.php" method="post" class="edit-form">

        <label for="lastname">Фирма</label>
        <input type="text" class="form-control" id="lastname" name="firm" value="" required>

        <label for="name">Наименование товара</label>
        <input type="text" class="form-control" id="name" name="name_tov" value="" required>

        <label for="art">Артикул</label>
        <input type="text" class="form-control" id="art" name="article" value="" required>

        <label for="lname">Фамилия клиента</label>
        <input type="text" class="form-control" id="lname" name="lastname" value="" required>

        <label for="fname">Имя клиента</label>
        <input type="text" class="form-control" id="fname" name="firstname" value="" required>

        <label for="telephone_num">Номер телефона</label>
        <input type="text" class="form-control" id="telephone_num" name="telephone_number" value="" required>

        <label for="defect">Заявленный дефект</label>
        <input type="text" class="form-control" id="defect" name="defect" value="" required>

        <label for="damaged">Видимые повреждения</label>
        <input type="text" class="form-control" id="damaged" name="damage" value="" required>

        <label for="category">Категория товара</label>
        <input type="text" class="form-control" id="category" name="category" value="" required>
        <label for="time">Дата</label>
        <input type="date" class="form-control" id="time" name="datatime" value="<?php echo date('Y-m-d'); ?>" required>
        <button type="submit" class="header-link">Сохранить</button>
    </form>
    <a href="certificate.php" class="header-link" style="margin-top: 20px; text-align: center">Составить акт приёма-передачи</a>
</main>
</body>
</html>

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
    <style>
        label {
            font-family: Arial;
        }
        .container {
            height: 70vh;
        }
    </style>
    <title>Отчетность</title>
</head>
<body>
<header class="header">
    <div class="header-container">
        <a href="#" class="header-logo"><img src="img/dns-mini-logo.png" alt="DNS" class="header-logo"></a>
        <a href="index.php" class="header-link">На главную</a>
    </div>
</header>
<main class="application-log-main">
    <div class="container">
        <form action="reports_data.php" method="post">
            <label for="data">Выберите месяц и год для составления отчёта: </label>
            <br>
            <input name="data" type="month" class="form-control" id="data" required>
            <br>
            <br>
            <button type="submit" class="header-link">Составить отчёт</button>
        </form>
    </div>
</main>
</body>
</html>

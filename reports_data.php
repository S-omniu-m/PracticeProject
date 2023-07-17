<?php


include_once 'connect.php';


$str = $_POST['data'];
$array = preg_split("/[-]/", $str);
$month = $array[1];
$year = $array[0];

$sql = "SELECT `firm`, `product_name`, `article_number`, `client_lastname`, `client_firstname`, `client_number`, `defect`, `visible_damage`, `done` FROM `application_log` INNER JOIN `technic` ON `id_technic` = `technic`.`id` WHERE MONTH(`data`) = $month AND YEAR(`data`) = $year;";
$result = $conn->query($sql);
$count = mysqli_query($conn, "SELECT COUNT(`article_number`) FROM `application_log` INNER JOIN `technic` ON `id_technic` = `technic`.`id` WHERE MONTH(`data`) = $month AND YEAR(`data`) = $year;");
$count = mysqli_fetch_array($count);
$countDoneArr = mysqli_query($conn, "SELECT COUNT(`article_number`) FROM `application_log` INNER JOIN `technic` ON `id_technic` = `technic`.`id` WHERE MONTH(`data`) = $month AND YEAR(`data`) = $year AND `done` = 1;");
$countDone = mysqli_fetch_array($countDoneArr);
$countNeed = $count[0];
//print_r($countDone[0]);
// $countAll = mysqli_query($conn, "");

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
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
    <div class="table-container">
        <h1 class="main-title">Отчет за <?php echo $month; ?>.<?php echo $year; ?></h1>
        <?php
            if($countNeed > 0) {
            ?>
                <table class="application-table">
                    <tr>
                        <th>Фирма</th>
                        <th>Наименование товара</th>
                        <th>Артикул</th>
                        <th>Фамилия Клиента</th>
                        <th>Имя Клиента</th>
                        <th>Номер телефона</th>
                        <th>Заявленный дефект</th>
                        <th>Видимые повреждения</th>
                        <th>Статус</th>
                    </tr>
                    <?php while ($row = $result->fetch_assoc()) { ?>

                        <tr>
                            <th><?php echo $row['firm']; ?></th>
                            <th><?php echo $row['product_name']; ?></th>
                            <th><?php echo $row['article_number']; ?></th>
                            <th><?php echo $row['client_lastname']; ?></th>
                            <th><?php echo $row['client_firstname']; ?></th>
                            <th><?php echo $row['client_number']; ?></th>
                            <th><?php echo $row['defect']; ?></th>
                            <th><?php echo $row['visible_damage']; ?></th>
                            <?php
                            if($row['done'] == 0) {
                                echo "<th>Не выполнено</th>";
                            }else {
                                echo "<th>Выполнено</th>";
                            }
                            ?>

                        </tr>
                    <?php } ?>
                </table>
                <h2>Заявок в этом месяце: <?php echo $countNeed; ?></h2>
                <h2>Выполненных заявок: <?php echo $countDone[0]; ?></h2>
        <?php
            } else {
                echo "<p class='text'>В этом месяце заявок не поступало</p>";
            }
        ?>
        <br>
        <a href="reports.php" class="header-link">Назад</a>
    </div>
</main>
</body>
</html>

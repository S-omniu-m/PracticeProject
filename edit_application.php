<?php
include_once 'connect.php';
$id = $_GET['articlenum'];

$sql = "SELECT `firm`, `product_name`, `article_number`, `client_lastname`, `client_firstname`, `client_number`, `defect`, `visible_damage`, `done` FROM `application_log` INNER JOIN `technic` ON `id_technic` = `technic`.`id`;";
$result = $conn->query($sql);
$idOfTechniceArr = mysqli_query($conn, "SELECT * FROM `technic` WHERE `article_number` = $id;");
$idOfTechnice = mysqli_fetch_assoc($idOfTechniceArr);
$needID = $idOfTechnice['id'];
$infoAboutAppArr = mysqli_query($conn, "SELECT * FROM `application_log` WHERE `id_technic` = $needID;");
$infoAboutApp = mysqli_fetch_all($infoAboutAppArr);
//print_r($infoAboutApp[0]);
//print_r($id);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
    <title>Редактирование заявки</title>
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
    <h1 class="main-title">Журнал заявок</h1>
    <form action="save_applications.php" method="post" class="edit-form">
        <input type="hidden" name="id" value="<?php echo $needID;?>">

            <label for="lastname">Фирма</label>
            <input type="text" class="form-control" id="lastname" name="firm" value="<?php echo $idOfTechnice['firm'];?>" required>

            <label for="name">Наименование товара</label>
            <input type="text" class="form-control" id="name" name="name_tov" value="<?php echo $idOfTechnice['product_name'];?>" required>

            <label for="art">Артикул</label>
            <input type="text" class="form-control" id="art" name="article" value="<?php echo $idOfTechnice['article_number'];?>" required>

            <label for="lname">Фамилия клиента</label>
            <input type="text" class="form-control" id="lname" name="lastname" value="<?php echo $infoAboutApp[0][3];?>" required>

            <label for="fname">Имя клиента</label>
            <input type="text" class="form-control" id="fname" name="firstname" value="<?php echo $infoAboutApp[0][4];?>" required>

            <label for="telephone_num">Номер телефона</label>
            <input type="text" class="form-control" id="telephone_num" name="telephone_number" value="<?php echo $infoAboutApp[0][5];?>" required>

            <label for="defect">Заявленный дефект</label>
            <input type="text" class="form-control" id="defect" name="defect" value="<?php echo $infoAboutApp[0][6];?>" required>

            <label for="damaged">Видимые повреждения</label>
            <input type="text" class="form-control" id="damaged" name="damage" value="<?php echo $infoAboutApp[0][7];?>" required>

            <label for="status">Статус</label>
            <input type="text" class="form-control" id="status" name="status" value="<?php echo $infoAboutApp[0][8];?>" required>

        <button type="submit" class="btn-control">Сохранить</button>
    </form>
</main>
</body>
</html>
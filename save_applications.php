<?php

include_once 'connect.php';

print_r($_POST);
$id = $_POST['id'];
$idArtic = $_POST['article'];
$firm = $_POST['firm'];
$nameOfTov = $_POST['name_tov'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$telephone_number = $_POST['telephone_number'];
$defect = $_POST['defect'];
$damage = $_POST['damage'];
$status = $_POST['status'];

print_r($idArtic);
$sql = "UPDATE `technic` SET `firm` = '$firm', `article_number` = $idArtic, `product_name` = '$nameOfTov' WHERE `id` = $id";
$sql2 = "UPDATE `application_log` SET `client_lastname` = '$lastname', `client_firstname` = '$firstname', `client_number` = '$telephone_number', `defect` = '$defect', `visible_damage` = '$damage', `done` = $status WHERE `id_technic` = $id";

if ($conn->query($sql) === TRUE) {
    echo "Данные успешно отредактированы";
} else {
    echo "Ошибка при редактировании данных: " . $conn->error;
}
if ($conn->query($sql2) === TRUE) {
    echo "Данные успешно отредактированы";
} else {
    echo "Ошибка при редактировании данных: " . $conn->error;
}

header("Location: /application_log.php");

?>
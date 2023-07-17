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
$category = $_POST['category'];
$data = $_POST['datatime'];
$sql = "INSERT INTO `technic` (`firm`, `article_number`, `product_name`, `category`)
        VALUES ('$firm', '$idArtic', '$nameOfTov', '$category')";
$sql2 = "INSERT INTO `application_log` (`id_employee`, `id_technic`, `client_lastname`, `client_firstname`, `client_number`, `defect`, `visible_damage`, `data`, `done`)
        VALUES ('1', '2', '$lastname', '$firstname', '$telephone_number', '$defect', '$damage', '$data', '0')";

if ($conn->query($sql) === TRUE) {
    echo "Данные успешно добавлены в базу данных.";
} else {
    echo "Ошибка при выполнении запроса: " . $conn->error;
}

if ($conn->query($sql2) === TRUE) {
    echo "Данные успешно добавлены в базу данных.";
} else {
    echo "Ошибка при выполнении запроса: " . $conn->error;
}

header("Location: /application_log.php");

?>
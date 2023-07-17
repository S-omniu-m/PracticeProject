<?php

include_once 'connect.php';

$techArr = mysqli_query($conn, "SELECT * FROM `technic`;");
$tech = mysqli_fetch_all($techArr);
$appArr = mysqli_query($conn, "SELECT * FROM `application_log`;");
$app = mysqli_fetch_assoc($appArr);


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
    <title>Акт приёма-передачи</title>
    <style>
        .edit-form {
            font-family: Arial;

        }
        .text {
            font-family: Arial;
            font-weight: bold;
        }
        .text-2 {
            font-family: Arial;
        }
        .certificate-select {
            width: 200px;
            height: 25px;
            font-family: Arial;
            font-size: 14px;
            font-weight: bold;
        }
        input {
            font-family: Arial;
            font-weight: bold;
        }
        .container {
            width: 600px;
            align-items: normal;
        }
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 STYLE="text-align: center">АКТ №4 от <input type="date" value="<?php echo date('Y-m-d'); ?>"><br>ПРИЕМА-ПЕРЕДАЧИ ТЕХНИКИ В РЕМОНТ</h2>
        <br>
        <br>
        <p class="text">Наименование: Телефон SASMSUNG</p>
        <p class="text">Модель: S21 FE</p>
        <p class="text">Артикул: 1234123</p>
        <p class="text">Заявленный дефект: Царапины</p>
        <p class="text">Видимые повреждения: Бытовые потёртости</p>
        <p class="text">Комплектация: Провод TYPE-C</p>
        <p class="text">Вид работ: Гарантийный</p>
        <p class="text">Принял: Миронов А. Подпись: __________</p><br><br>
        <p class="text-2">Ремонт изделия выполняется в срок не более 90 (девяносто) рабочих дней при условии наличия на складе необходимых запчастей. В случае их отсутствия ремонт выполняется в течении 2-х рабочих дней с момента получения запасных частей от фирмы-изготовителя.</p>
        <br>
        <p class="text-2">Изделие с согласия Заказчика принимается без разборки и проверки неисправностей, без проверки внутренних повреждений. Заказчик принимает на себя риск связанный с возможным появлением в сданном изделии скрытых дефектов, не указанных в акте приема-передачи изделия в ремонт.</p>
        <br>
        <p class="text-2">В случае неявки потребителя за получением результата выполненной работы или иного уклонения потребителя от его приемки исполнитель вправе, письменно предупредив потребителя, по истечении двух месяцев со дня такого предупреждения продать изделие за разумную цену, а вырученную сумму, за вычетом всех причитающихся исполнителю платежей, внести в депозит в порядке, предусмотренном стетьей 327 Гражданского РФ.</p>
        <br>
        <p class="text-2">В случае не ремонтпригодности изделия сервисный центр вправе произвести утилизацию через один месяц после извещения владельца.</p>
        <br>
        <p class="text-2">Для получения заказа необходимо иметь следующие документы: </p>
        <p class="text-2">-данный Акт приема-передачи;</p>
        <p class="text-2">-доверенность с правом подписи Акта приема-передачи (для юридических лиц);</p>
        <p class="text-2">-паспорт (удостоверение личности).</p>
        <br>
        <h3>Заказчик: Барсуков И.</h3>
        <br>
        <h3>Подпись: ____________________ Барсуков И.</h3>

    </div>
    <script>
        window.print();
    </script>
</body>
</html>
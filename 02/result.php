<?php
/*Noticeエラー回避*/
error_reporting(E_ALL & ~E_NOTICE);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $name2 = $_POST["name2"];
    $sex = $_POST["sex"];
    $number = $_POST["number"];
    $number2 = $_POST["number2"];
    $number3 = $_POST["number3"];
    $address = $_POST["address"];
    $question = $_POST["question"];
    $question1 = $_POST["question1"];
    $email = $_POST["email"];
    $email2 = $_POST["email2"];
    $abc = $_POST["abc"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <body>
        <?php
        echo $question;
        ?>
    </body>
</head>
</html>

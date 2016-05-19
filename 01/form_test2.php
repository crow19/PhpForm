<?php
    /*エラー回避*/
    error_reporting(E_ALL & ~E_NOTICE);
    /*入力した文字を受け取る*/
    $name = $_GET['name'];
    /*受け取った文字を表示*/
    echo $name . "さん、こんにちは";
?>

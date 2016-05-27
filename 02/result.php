<?php
/*Noticeエラー回避*/
error_reporting(E_ALL & ~E_NOTICE);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $name2 = $_POST["name2"];
    /*半角に変換したものを用意*/
    $number = mb_convert_kana($_POST["number"],'n','utf-8');
    $number2 = mb_convert_kana($_POST["number2"],'n','utf-8');
    $number3 = mb_convert_kana($_POST["number3"],'n','utf-8');
    $address = $_POST["address"];
    $question = $_POST["question"];
    $question1 = $_POST["question1"];
    /*エンターキーで改行表示*/
    $question1 = nl2br(htmlspecialchars($question1));
    $email = $_POST["email"];
    $email2 = $_POST["email2"];
    $abc = $_POST["abc"];
}

?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="default_result.css">
    <title>送信完了</title>
    <meta charset="utf-8">

    <body  style="font-family:'メイリオ',Meiryo;">
        <!--全体の枠-->
        <div id="warp">
            <!--見出し-->
            <h1>送信完了</h1>

            <!--formのサイズ-->
            <div id="main">
                <div id="main1">
                        <div class="main_bar_1">
                        <!--苗字-->
                        <div id="name_left1">姓名</div>
                        <div id="name_right1">
                            <?php echo $name."<span style='margin-right: 10px;'></span>".$name2; ?>
                        </div>
                        <!--解除-->
                        <div class="clear_box"></div>
                    </div>

                    <div class="main_bar">
                        <!--性別-->
                        <!--idを追加して文字をクリックしてもチェックがつくようにするためlabel追加-->
                        <div id="name_left1">性別</div>
                        <!--選択した性別出力-->
                        <div id="name_right1">
                            <?php
                                /*男性*/
                                if ($_POST["sex"] == "1") { //男性なら
                                    print "男性";
                                }
                                /*女性*/
                                elseif ($_POST["sex"] == "2") { //女性なら
                                    print "女性";
                                }
                                /*不明*/
                                elseif ($_POST["sex"] == "3") { //不明なら
                                    print "不明";
                                }
                            ?>
                        </div>
                        <!--解除-->
                        <div class="clear_box"></div>
                    </div>

                    <div class="main_bar">
                        <!--住所-->
                        <div id="name_left1">住所</div>
                        <div id="name_right1">
                            <?php
                                if ($address){
                                	print $address;
                                }else{
                                	print "未入力";
                                }
                            ?>
                        </div>
                        <!--解除-->
                        <div class="clear_box"></div>
                    </div>

                    <div class="main_bar">
                        <!--電話番号-->
                        <div id="name_left1">電話番号</div>
                        <div id="name_right1">
                            <!--送信したデータが数字であれば送信可能-->
                            <?php
                                if (is_numeric($number) and is_numeric($number2) and is_numeric($number3)) {
                                    print $number."-".$number2."-".$number3;
                                }
                                 else {
                                    print '半角数字でご記入ください';
                                }
                            ?>
                        </div>
                        <!--解除-->
                        <div class="clear_box"></div>
                    </div>

                    <div class="main_bar">
                        <!--メールアドレス-->
                        <div id="name_left1">メールアドレス</div>
                        <div id="name_right1">
                            <!--半角英数字でデータを送信しないと表示されない-->
                            <?php
                            if (preg_match("/^[a-zA-Z0-9]+$/", $email) and preg_match("/^[a-zA-Z0-9]+$/", $email2)) {
                                print $email."@".$email2;
                            }
                            else {
                                print '半角英数字でご記入ください';
                            }
                            ?>
                        </div>
                        <!--解除-->
                        <div class="clear_box"></div>
                    </div>

                    <div class="main_bar">
                        <!--どこでサイトを知りましたか-->
                        <div id="name_left1">どこで知りましたか</div>
                        <div id="name_right1">
                            <?php
                                if (isset($_POST["abc"])) {
                                    /*変数$abcに格納*/
                                    $abc = $_POST["abc"];
                                }
                                if (isset($abc[0])) {
                                    print "インターネット ";
                                }
                                if (isset($abc[1])) {
                                    print "広告･新聞 ";
                                }
                                if (isset($abc[2])) {
                                    print "その他 ";
                                }
                            ?>
                        </div>
                        <!--解除-->
                        <div class="clear_box"></div>
                    </div>

                    <div class="main_bar">
                        <!--質問カテゴリ-->
                        <div id="name_left1">質問カテゴリ</div>
                        <div id="name_right1">
                            <?php
                                if ($_POST["question"] == "1" ) {
                                    print "不明点";
                                }
                                if ($_POST["question"] == "2" ) {
                                    print "故障";
                                }
                                if ($_POST["question"] == "3" ) {
                                    print "その他";
                                }
                                else {
                                    print "無選択";
                                }
                            ?>
                        </div>
                        <!--解除-->
                        <div class="clear_box"></div>
                    </div>

                </div>

                <div id="main2">
                    <div class="main1_bar1">
                        <!--質問内容-->
                        <div id="name_left2">質問内容</div>
                        <!--<div class="clear_box"></div>-->
                        <div id="textarea">
                            <div id="textarea1"><?php echo $question1; ?></div>
                        </div>
                        <div class="clear_box"></div>
                    </div>
                </div>

                <div id="main3">
                    <div id="button">
                        <!--前の画面に戻る-->
                        <form>
                        <input type="button" id="button" value="戻る" onClick="location.href='contact.php'">
                        </form>
                    </div>
                    <!--解除-->
                    <div class="clear_box"></div>
                </div>


        </div>


    </body>

</head>

</html>

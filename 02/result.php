<?php
/*Noticeエラー回避*/
error_reporting(E_ALL & ~E_NOTICE);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $name2 = $_POST["name2"];
    /*$sex = $_POST["sex"];*/
    $number = $_POST["number"];
    $number2 = $_POST["number2"];
    $number3 = $_POST["number3"];
    $address = $_POST["address"];
    $question = $_POST["question"];
    $question1 = $_POST["question1"];
    $question1 = nl2br($question1);
    $email = $_POST["email"];
    $email2 = $_POST["email2"];
    $abc = $_POST["abc"];
}

?>
<!DOCTYPE html>
<html>

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
                        <div class="main_bar">
                        <!--苗字-->
                        <div id="name_left1">姓名</div>
                        <div id="name_right1">
                            <?php echo $name.'&nbsp;&nbsp;'.$name2; ?>
                        </div>
                    </div>
                        <div class="clear_box"></div>

                        <div class="main_bar">
                        <!--性別-->
                        <!--idを追加して文字をクリックしてもチェックがつくようにするためlabel追加-->
                        <div id="name_left1">性別</div>
                        <!--選択した性別出力-->
                        <div id="name_right1">
                            <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    /*男性*/
                                    if ($_POST["sex"] == "男性") { //男性なら
                                    print "男性";
                                    }
                                    /*女性*/
                                    elseif ($_POST["sex"] == "女性") { //女性なら
                                    print "女性";
                                    }
                                    /*不明*/
                                    elseif ($_POST["sex"] == "不明") { //不明なら
                                    print "不明";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                        <div class="clear_box"></div>

                        <div class="main_bar">
                        <!--住所-->
                        <div id="name_left1">住所</div>
                        <div id="name_right1">
                            <?php echo $address; ?>
                        </div>
                    </div>
                        <div class="clear_box"></div>

                        <div class="main_bar">
                        <!--電話番号-->
                        <div id="name_left1">電話番号</div>
                        <div id="name_right1">
                            <?php echo $number."-".$number2."-".$number3; ?>
                        </div>
                        </div>
                        <div class="clear_box"></div>

                        <div class="main_bar">
                        <!--メールアドレス-->
                        <div id="name_left1">メールアドレス</div>
                        <div id="name_right1">
                            <?php echo $email."@".$email2 ?>
                        </div>
                    </div>
                        <div class="clear_box"></div>

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
                    </div>
                        <div class="clear_box"></div>

                        <div class="main_bar">
                        <!--質問カテゴリ-->
                        <div id="name_left1">質問カテゴリ</div>
                        <div id="name_right1">
                            <?php
                                if ($_POST["question"] == "1" ) {
                                        print "不明点";
                                    }
                                    elseif ($_POST["question"] == "2" ) {
                                        print "故障";
                                    }
                                    elseif ($_POST["question"] == "3" ) {
                                        print "その他";
                                    }
                                    else {
                                        print "選択してください";
                                    }
                            ?>
                        </div>
                    </div>
                        <div class="clear_box"></div>

                </div>

                <div id="main2">
                    <!--質問内容-->
                    <div id="name_left1">質問内容</div>
                    <!--<div class="clear_box"></div>-->
                    <div id="name_right1">
                        <?php print $question1; ?>
                    </div>
                    <div class="clear_box"></div>
                </div>

                <div id="main3">
                    <div id="button">
                        <!--送信ボタン-->
                        <input type="submit" id="submit_button" value="送信">
                        <div class="clear_box"></div>
                    </div>
                </div>


        </div>


    </body>

</head>

</html>

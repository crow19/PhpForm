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
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="default.css">
    <title>お問い合わせ</title>
    <meta charset="utf-8">

    <body  style="font-family:'メイリオ',Meiryo;">
        <!--全体の枠-->
        <div id="warp">
            <!--見出し-->
            <h1>お問い合わせフォーム</h1>

            <!--formのサイズ-->
            <div id="main">
                <div id="main1">
                    <!--フォーム-->
                    <form id="form" method="post" action="contact.php">

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
                        <div id="name_right1">
                            <?php echo $sex; ?>
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
                            <?php echo $abc; ?>
                        </div>
                    </div>
                        <div class="clear_box"></div>

                        <div class="main_bar">
                        <!--質問カテゴリ-->
                        <div id="name_left1">質問カテゴリ</div>
                        <div id="name_right1">
                            <?php echo $question; ?>
                        </div>
                    </div>
                        <div class="clear_box"></div>

                </div>

                <div id="main2">
                    <!--質問内容-->
                    <div id="name_left1">質問内容</div>
                    <!--<div class="clear_box"></div>-->
                    <div id="name_right1">
                        <?php echo $question1; ?>
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

                </form>

        </div>


    </body>

</head>

</html>

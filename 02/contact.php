<?php
/*Noticeエラー回避*/
error_reporting(E_ALL & ~E_NOTICE);

// 送信フラグ
$send_flg = false;
// エラーメッセージ
$err_msg = array();
// 送信ボタンを押した後の処理
if (isset($_POST["submit_button"])) {
	/*生、名、住所、質問内容未記入時にエラー*/
	if ($_POST["name"] == "") {
		$err_msg[] = "姓は必須です。\n";
	}
	if ($_POST["name2"] == "") {
		$err_msg[] = "名は必須です。\n";
	}
	if ($_POST["email"] == "" || $_POST["email2"] == "") {
		$err_msg[] = "メールアドレスは必須です。\n";
	}
	if ($_POST["question1"] == "") {
		$err_msg[] = "質問内容は必須です。\n";
	}
	if (count($err_msg) == 0) {
    	header('HTTP/1.1 307 Temporary Redirect');
		header("Location:result.php");
    }
}
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="default.css">
    <!--タイトル-->
    <title>お問い合わせ</title>
    <!--文字コード設定-->
    <meta  http-equiv="content-type" content="text/html" charset="utf-8">
</head>
<!--フォント設定-->
<body style="font-family:'メイリオ',Meiryo;">
    <!--全体の枠-->
    <div id="warp">

        <?php
            // 初期フォーム表示
            if (!$send_flg) {
        ?>
        <!--見出し-->
        <h1>お問い合わせフォーム</h1>
        <!--formの全体-->
        <div id="main">
            <!--姓から質問カテゴリまでの枠-->
            <div id="main1">
                <!--フォーム-->
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <!--縦、横設定-->
                    <div class="main_bar_1">
                        <!--姓-->
                        <div id="name_left1">姓</div>
                        <!--姓記入欄-->
                        <div id="name_right1">
                            <input type="text" name="name" placeholder="山田" value="<?php echo $_POST["name"] ?>">
							<span class="reqMark">*</span>
                        </div>
                        <!--解除-->
                        <div class="clear_box"></div>
                    </div>

                    <!--縦、横設定-->
                    <div class="main_bar">
                        <!--名-->
                        <div id="name_left1">名</div>
                        <!--名記入欄-->
                        <div id="name_right1">
                            <input type="text" name="name2" placeholder="太郎" value="<?php echo $_POST["name2"] ?>">
							<span class="reqMark">*</span>
                        </div>
                        <!--解除-->
                        <div class="clear_box"></div>
                    </div>

                    <!--縦、横設定-->
                    <div class="main_bar">
                        <!--性別-->
                        <div id="name_left1">性別</div>
                        <!--idを追加して文字をクリックしてもチェックがつくようにするためlabel追加-->
                        <!--radioボタン選択欄-->
                        <div id="name_right1">
							<!--男性-->
                            <input type="radio" name="sex" value="1" checked id="m">
                            <label for="m">男性</label>
							<!--女性-->
                            <input type="radio" name="sex" value="2" id="w">
                            <label for="w">女性</label>
							<!--不明-->
                            <input type="radio" name="sex" value="3" id="z">
                            <label for="z">不明</label>
                        </div>
                        <!--解除-->
                        <div class="clear_box"></div>
                    </div>

                    <!--縦、横設定-->
                    <div class="main_bar">
                        <!--住所-->
                        <div id="name_left1">住所</div>
                        <!--住所記入欄-->
                        <div id="name_right1">
                            <input type="textbox" name="address" size="60">
                        </div>
                        <!--解除-->
                        <div class="clear_box"></div>
                    </div>

                    <!--左側-->
                    <div class="main_bar">
                        <!--電話番号-->
                        <div id="name_left1">電話番号</div>
                        <!--電話番号記入欄-->
                        <div id="name_right1">
                            <!--半角数字、各枠4文字しか入力できない-->
                            <input type="text2" name="number" maxlength="4" onKeyup="this.value=this.value.replace(/[^0-9a-z]+/i,'')" pattern="[0-9]*[0-9]">
							&nbsp;-&nbsp;
                            <input type="text2" name="number2" maxlength="4" onKeyup="this.value=this.value.replace(/[^0-9a-z]+/i,'')" pattern="[0-9]*[0-9]">
							&nbsp;-&nbsp;
                            <input type="text2" name="number3" maxlength="4" onKeyup="this.value=this.value.replace(/[^0-9a-z]+/i,'')" pattern="[0-9]*[0-9]">
                        </div>
                        <!--解除-->
                        <div class="clear_box"></div>
                    </div>

                    <!--縦、横設定-->
                    <div class="main_bar">
                        <!--メールアドレス-->
                        <div id="name_left1">メールアドレス</div>
                        <!--メールアドレス記入-->
                        <div id="name_right1">
                            <!--半角英数字しか入力できない-->
                            <input type="text1" name="email" onKeyup="this.value=this.value.replace(/[^0-9a-z]+/i,'')" value="<?php echo $_POST["email"] ?>">
							&nbsp;@&nbsp;
                            <input type="text1" name="email2" onKeyup="this.value=this.value.replace(/[^0-9a-z]+/i,'')" value="<?php echo $_POST["email2"] ?>">
							<span class="reqMark">*</span>
						</div>
                        <!--解除-->
                        <div class="clear_box"></div>
                    </div>

                    <!--縦、横設定-->
                    <div class="main_bar">
                        <!--どこで知りましたか-->
                        <div id="name_left1">どこで知りましたか</div>
                        <!--checkbox選択欄-->
                        <div id="name_right1">
                            <input type="checkbox" name="abc[0]" id="a" value="インターネット" checked>
                            <label for="a">インターネット</label>
                            <input type="checkbox" name="abc[1]" id="b" value="広告･新聞">
                            <label for="b">広告･新聞</label>
                            <input type="checkbox" name="abc[2]" id="c" value="その他">
                            <label for="c">その他</label>
                        </div>
                        <!--解除-->
                        <div class="clear_box"></div>
                    </div>

                    <!--縦、横設定-->
                    <div class="main_bar">
                        <!--質問カテゴリ-->
                        <div id="name_left1">質問カテゴリ</div>
                        <!--選択質問-->
                        <div id="name_right1">
                            <select name="question">
                                <option value="">--選択してください--</option>
                                <option value="1">不明点</option>
                                <option value="2">故障</option>
                                <option value="3">その他</option>
                            </select>
                        </div>
                        <!--解除-->
                        <div class="clear_box"></div>
                    </div>

        	</div>

            <!--質問内容の枠-->
            <div id="main2">
                <!--縦、横設定-->
                <div class="main1_bar1">
                    <!--質問内容-->
                    <div id="name_left2">質問内容</div>
                    <!--記入欄-->
                    <div id="textarea">
                        <textarea name="question1" cols="70" placeholder="質問内容をご記入ください" value="<?php echo $_POST["question1"] ?>"></textarea>
						<span class="reqMark">*</span>
                    </div>
                    <!--解除-->
                    <div class="clear_box"></div>
                </div>
            </div>

            <!--送信ボタン、リセットボタンの枠-->
            <div id="main3">
                <div id="button">
                    <!--送信ボタン-->
                    <input type="submit" name="submit_button" id="submit_button" value="送信">
                    <!--リセットボタン-->
                    <input type="reset" id="reset_button" value="リセット">
                    <!--解除-->
                    <div class="clear_box"></div>
                </div>
            </div>

            	</form>

    	</div>

		<!--未記入時エラー表示-->
    	<div id="main4">
	        <?php
	            /*エラーメッセージがある場合*/
	            if (count($err_msg) > 0) {
	        ?>
	        <p style="color:red;">
	        <?php
	            foreach ($err_msg as $val) {
	        ?>
	        ※
	        <?php
	            echo $val;
	        ?>
	        <?php
	            }
	        ?>
	        <br />
	        <?php
	            }
	        }
	        ?>
    </div>

</body>
</html>

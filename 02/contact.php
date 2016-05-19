<!DOCTYPE html>
<html>
<head>
<!--CSS-->
<link rel="stylesheet" type="text/css" href="default.css">
<title>お問い合わせ</title>
<meta charset="utf-8">
    <body>
        <!--全体の枠-->
        <div id="warp">
        <!--見出し-->
        <h1>お問い合わせフォーム</h1>

        <!--formのサイズ-->
        <div id="main">
            <div id="main1">
                <!--フォーム-->
                <form id="form" method="post" action="result.php">

                <!--苗字-->
                <div id="name_left1">姓</div>
                <div id="name_right1"><input type="text" name="name"></div>
                <div class="clear_box"></div>

                <!--名前-->
                <div id="name_left2">名</div>
                <div id="name_right3"><input type="text" name="name2"></div>
                <div class="clear_box"></div>


                <!--性別-->
                <!--idを追加して文字をクリックしてもチェックがつくようにするためlabel追加-->
                性別
                <input type="radio" name="sex"　value="1"><label for="m">男性
                <input type="radio" name="sex"　value="2"><label for="w">女性
                <input type="radio" name="sex"　value="3"><label for="z">不明
                <div class="clear_box"></div>

                <!--住所-->
                住所
                <input type="textarea" name="address" size="60">
                <div class="clear_box"></div>

                <!--電話番号-->
                電話番号
                    <input type="text" name="number"> - <input type="text" name="number2"> - <input type="text" name="number3">
                <div class="clear_box"></div>


                <!--メールアドレス-->
                メールアドレス
                    <input type="text" name="email"> @ <input type="text" name="email2">
                <div class="clear_box"></div>


                <!--どこでサイトを知りましたか-->
                どこでサイトを知りましたか
                    <input type="checkbox" name="abc" value="1"><label for="1">インターネット
                    <input type="checkbox" name="abc" value="2"><label for="2">広告
                    <input type="checkbox" name="abc" value="3"><label for="3">家族・親戚
                <div class="clear_box"></div>

                <!--質問カテゴリ-->
                質問カテゴリ
                <select name="question">
                    <option value="">--選択してください--</option>
                    <option value="1">感想</option>
                    <option value="2">故障</option>
                    <option value="3">不明点</option>
                </select>
                <div class="clear_box"></div>
            </div>

                <div id="main2">
                <!--質問内容-->
                質問内容
                    <textarea name="question1" cols="40" rows="5" maxlength="30" placeholder="質問内容をご記入ください"></textarea>
                <div class="clear_box"></div>

                <!--送信ボタン-->
                <input type="submit" value="送信">

                <!--リセットボタン-->
                <input type="reset" value="リセット"><br />
                <div class="clear_box"></div>
            </div>


        </form>

        </div>

        </div>


    </body>

</head>
</html>

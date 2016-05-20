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
                    <form id="form" method="post" action="result.php">

                        <div class="main_bar">
                        <!--苗字-->
                        <div id="name_left1">姓</div>
                        <div id="name_right1">
                            <input type="text" name="name">
                        </div>
                    </div>
                        <div class="clear_box"></div>

                        <div class="main_bar">
                        <!--名前-->
                        <div id="name_left1">名</div>
                        <div id="name_right1">
                            <input type="text" name="name2">
                        </div>
                        </div>
                        <div class="clear_box"></div>

                        <div class="main_bar">
                        <!--性別-->
                        <!--idを追加して文字をクリックしてもチェックがつくようにするためlabel追加-->
                        <div id="name_left1">性別</div>
                        <div id="name_right1">
                            <input type="radio" name="sex" id="m" 　value="男性">
                            <label for="m">男性</label>
                            <input type="radio" name="sex" id="w" 　value="女性">
                            <label for="w">女性</label>
                            <input type="radio" name="sex" id="z" 　value="不明">
                            <label for="z">不明</label>
                        </div>
                    </div>
                        <div class="clear_box"></div>

                        <div class="main_bar">
                        <!--住所-->
                        <div id="name_left1">住所</div>
                        <div id="name_right1">
                            <input type="textbox" name="address" size="60">
                        </div>
                    </div>
                        <div class="clear_box"></div>

                        <div class="main_bar">
                        <!--電話番号-->
                        <div id="name_left1">電話番号</div>
                        <div id="name_right1">
                            <div class="overflow">
                                <input type="text" name="number"> -
                                <input type="text" name="number2"> -
                                <input type="text" name="number3">
                            </div>
                        </div>
                        </div>
                        <div class="clear_box"></div>

                        <div class="main_bar">
                        <!--メールアドレス-->
                        <div id="name_left1">メールアドレス</div>
                        <div id="name_right1">
                            <input type="text" name="email"> @
                            <input type="text" name="email2">
                        </div>
                    </div>
                        <div class="clear_box"></div>

                        <div class="main_bar">
                        <!--どこでサイトを知りましたか-->
                        <div id="name_left1">どこで知りましたか</div>
                        <div id="name_right1">
                            <input type="checkbox" name="abc" id="a" value="1">
                            <label for="a">インターネット</label>
                            <input type="checkbox" name="abc" id="b" value="2">
                            <label for="b">広告･新聞</label>
                            <input type="checkbox" name="abc" id="c" value="3">
                            <label for="c">家族・親戚</label>
                        </div>
                    </div>
                        <div class="clear_box"></div>

                        <div class="main_bar">
                        <!--質問カテゴリ-->
                        <div id="name_left1">質問カテゴリ</div>
                        <div id="name_right1">
                            <select name="question">
                                <option value="">--選択してください--</option>
                                <option value="1">不明点</option>
                                <option value="2">故障</option>
                                <option value="3">その他</option>
                            </select>
                        </div>
                    </div>
                        <div class="clear_box"></div>

                </div>

                <div id="main2">
                    <!--質問内容-->
                    <div id="name_left1">質問内容</div>
                    <!--<div class="clear_box"></div>-->
                    <div id="textarea">
                        <textarea name="question1" cols="70" rows="5" maxlength="50" placeholder="質問内容をご記入ください"></textarea>
                    </div>
                    <div class="clear_box"></div>
                </div>

                <div id="main3">
                    <div id="button">
                        <!--送信ボタン-->
                        <input type="submit" id="submit_button" value="送信">

                        <!--リセットボタン-->
                        <input type="reset" id="reset_button" value="リセット">
                        <br />
                        <div class="clear_box"></div>
                    </div>
                </div>

                </form>

        </div>


    </body>

</head>

</html>

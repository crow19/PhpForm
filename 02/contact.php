<!DOCTYPE html>
<html>
<head>
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="default.css">
    <!--タイトル-->
    <title>お問い合わせ</title>
    <!--文字コード設定-->
    <meta charset="utf-8">
</head>
<!--フォント設定-->
<body  style="font-family:'メイリオ',Meiryo;">

    <!--全体の枠-->
    <div id="warp">
        <!--見出し-->
        <h1>お問い合わせフォーム</h1>

        <!--formの全体-->
        <div id="main">
            <!--姓から質問カテゴリまでの枠-->
            <div id="main1">
                <!--フォーム-->
                <form id="form" name="form" method="post" action="result.php">
                    <!--縦、横設定-->
                    <div class="main_bar">
                        <!--左側-->
                        <div id="name_left1">姓</div>
                        <!--右側-->
                        <div id="name_right1">
                            <input type="text" name="name" required="required">
                        </div>
                    </div>
                    <!--clear_box(左寄せ、または右寄せされた全ての要素に対する回り込みを解除)の設定-->
                    <div class="clear_box"></div>

                    <!--縦、横設定-->
                    <div class="main_bar">
                        <!--左側-->
                        <div id="name_left1">名</div>
                        <!--右側-->
                        <div id="name_right1">
                            <input type="text" name="name2" required="required">
                        </div>
                    </div>
                    <!--clear_box(左寄せ、または右寄せされた全ての要素に対する回り込みを解除)の設定-->
                    <div class="clear_box"></div>

                    <!--縦、横設定-->
                    <div class="main_bar">
                        <!--左側-->
                        <div id="name_left1">性別</div>
                        <!--idを追加して文字をクリックしてもチェックがつくようにするためlabel追加-->
                        <!--右側-->
                        <div id="name_right1">
                            <input type="radio" name="sex" value="男性" checked id="m">
                            <label for="m">男性</label>
                            <input type="radio" name="sex" value="女性" id="w">
                            <label for="w">女性</label>
                            <input type="radio" name="sex" value="不明" id="z">
                            <label for="z">不明</label>
                        </div>
                    </div>
                    <!--clear_box(左寄せ、または右寄せされた全ての要素に対する回り込みを解除)の設定-->
                    <div class="clear_box"></div>

                    <!--縦、横設定-->
                    <div class="main_bar">
                        <!--左側-->
                        <div id="name_left1">住所</div>
                        <!--右側-->
                        <div id="name_right1">
                            <input type="textbox" name="address" size="60" required="required">
                        </div>
                    </div>
                    <!--clear_box(左寄せ、または右寄せされた全ての要素に対する回り込みを解除)の設定-->
                    <div class="clear_box"></div>

                    <!--左側-->
                    <div class="main_bar">
                        <!--左側-->
                        <div id="name_left1">電話番号(半角英数字)</div>
                        <!--右側-->
                        <div id="name_right1">
                            <!--半角数字、4文字しか入力できない-->
                            <input type="text1" name="number" maxlength="4" onKeyup="this.value=this.value.replace(/[^0-9a-z]+/i,'')" pattern="[0-9]*[0-9]" required="required"> -
                            <input type="text1" name="number2" maxlength="4" onKeyup="this.value=this.value.replace(/[^0-9a-z]+/i,'')" pattern="[0-9]*[0-9]" required="required"> -
                            <input type="text1" name="number3" maxlength="4" onKeyup="this.value=this.value.replace(/[^0-9a-z]+/i,'')" pattern="[0-9]*[0-9]" required="required">
                        </div>
                    </div>
                    <!--clear_box(左寄せ、または右寄せされた全ての要素に対する回り込みを解除)の設定-->
                    <div class="clear_box"></div>

                    <!--縦、横設定-->
                    <div class="main_bar">
                        <!--左側-->
                        <div id="name_left1">メールアドレス</div>
                        <!--右側-->
                        <div id="name_right1">
                            <!--半角英数字しか入力できない-->
                            <input type="text" name="email" onKeyup="this.value=this.value.replace(/[^0-9a-z]+/i,'')" required="required"> @
                            <input type="text" name="email2" onKeyup="this.value=this.value.replace(/[^0-9a-z]+/i,'')" required="required">
                        </div>
                    </div>
                    <!--clear_box(左寄せ、または右寄せされた全ての要素に対する回り込みを解除)の設定-->
                    <div class="clear_box"></div>

                    <!--縦、横設定-->
                    <div class="main_bar">
                        <!--左側-->
                        <div id="name_left1">どこで知りましたか</div>
                        <!--右側-->
                        <div id="name_right1">
                            <input type="checkbox" name="abc[0]" id="a" value="インターネット" checked>
                            <label for="a">インターネット</label>
                            <input type="checkbox" name="abc[1]" id="b" value="広告･新聞">
                            <label for="b">広告･新聞</label>
                            <input type="checkbox" name="abc[2]" id="c" value="その他">
                            <label for="c">その他</label>
                        </div>
                    </div>
                    <!--clear_box(左寄せ、または右寄せされた全ての要素に対する回り込みを解除)の設定-->
                    <div class="clear_box"></div>

                    <!--縦、横設定-->
                    <div class="main_bar">
                        <!--左側-->
                        <div id="name_left1">質問カテゴリ</div>
                        <!--右側-->
                        <div id="name_right1">
                            <select name="question" required="required">
                                <option value="">--選択してください--</option>
                                <option value="1">不明点</option>
                                <option value="2">故障</option>
                                <option value="3">その他</option>
                            </select>
                        </div>
                    </div>
                    <!--clear_box(左寄せ、または右寄せされた全ての要素に対する回り込みを解除)の設定-->
                    <div class="clear_box"></div>

            </div>

            <!--質問内容の枠-->
            <div id="main2">
                <!--縦、横設定-->
                <div class="main1_bar1">
                    <!--左側-->
                    <div id="name_left1">質問内容</div>
                    <!--右側-->
                    <div id="textarea">
                        <textarea name="question1" cols="70" rows="8" placeholder="質問内容をご記入ください" maxlength="300" required="required"></textarea>
                    </div>
                </div>
                <!--clear_box(左寄せ、または右寄せされた全ての要素に対する回り込みを解除)の設定-->
                <div class="clear_box"></div>
            </div>

            <!--送信ボタン、リセットボタンの枠-->
            <div id="main3">
                <div id="button">
                    <!--送信ボタン-->
                    <input type="submit" id="submit_button" value="送信">
                    <!--<button type="button"id="submit_button" onclick="submit();">送信</button>-->
                    <!--リセットボタン-->
                    <input type="reset" id="reset_button" value="リセット">
                    <!--clear_box(左寄せ、または右寄せされた全ての要素に対する回り込みを解除)の設定-->
                    <div class="clear_box"></div>
                </div>
            </div>

            </form>

    </div>


</body>



</html>

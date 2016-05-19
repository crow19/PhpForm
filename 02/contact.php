<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="default.css">
<title>お問い合わせ</title>
<meta charset="utf-8">
    <body>
        <!--全体の枠-->
        <div id="warp">
        <!--見出し-->
        <h1>お問い合わせフォーム</h1>
        <!--フォーム-->
        <form id="form" method="post" action="result.php">
            <ul class="nav">
                <!--名前-->
                <li>名前</li>
                <li>姓：<input type="text" name="name">&nbsp;名:<input type="text" name="name2">
                </li><br />

                <!--性別-->
                <!--idを追加して文字をクリックしてもチェックがつくようにするためlabel追加-->
                <li>性別</li>
                <li><input type="radio" name="sex"　value="1"><label for="m">男性
                    <input type="radio" name="sex"　value="2"><label for="w">女性
                    <input type="radio" name="sex"　value="3"><label for="z">不明
                </li><br />

                <!--電話番号-->
                <li>電話番号</li>
                    <li><input type="text" name="number"> - <input type="text" name="number2"> - <input type="text" name="number3">
                </li>
                <br />

                <!--住所-->
                <li>住所</li>
                    <li><input type="textarea" name="address" size="60">
                </li>
                <br />

                <!--質問カテゴリ-->
                <li>質問カテゴリ</li>
                <select name="question">
                    <option value="">--選択してください--</option>
                    <option value="1">感想</option>
                    <option value="2">故障</option>
                    <option value="3">不明点</option>
                </select>
                </li>
                <br />

                <!--質問内容-->
                <li>質問内容</li>
                    <li><textarea name="question1" cols="40" rows="5" maxlength="30" placeholder="質問内容をご記入ください"></textarea>
                </li>
                <br />

                <!--メールアドレス-->
                <li>メールアドレス</li>
                    <input type="text" name="email"> @ <input type="text" name="email2">
                </li>
                <br />

                <!--どこでサイトを知りましたか-->
                <li>どこでサイトを知りましたか</li>
                    <li><input type="checkbox" name="abc" value="1"><label for="1">インターネット
                    <input type="checkbox" name="abc" value="2"><label for="2">広告
                    <input type="checkbox" name="abc" value="3"><label for="3">家族・親戚
                </li>
                <br />

                <!--送信ボタン-->
                <input type="submit" value="送信">

                <!--リセットボタン-->
                <input type="reset" value="リセット"><br />
            </ul>
        </form>

        </div>


    </body>

</head>
</html>

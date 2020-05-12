<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sent.css">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <form action="thank.html" method="post">
            <div class="form-name">会員登録のご確認</div>
            <div class="form-item">お名前</div>
            <?php echo $_POST["name"]; ?>
            <div class="form-item">電話番号</div>
            <?php echo $_POST["number"]; ?>
            <div class="form-item">パスワード</div>
            <?php echo str_repeat("*", mb_strlen($_POST["password"], "UTF-8") - 2) . mb_substr($_POST["password"], -2, 2, "UTF-8");?>
            <input type="submit" value="確認">
        </form>
    </div>
</body>
</html>

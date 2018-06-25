<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザ情報登録画面</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
  <form action="registration_conf.php" method="POST">
    <p>氏名（漢字）<input type = "text" name = "name">：氏名を漢字で入力してください。</p>
    <p>姓（半角ローマ字）<input type = "text" name = "family_name_roman">：姓を半角ローマ字で入力してください。</p>
    <p>名（半角ローマ字）<input type = "text" name = "first_name_roman">：名を半角ローマ字で入力してください。</p>
    <p>電話番号（半角数字）<input type = "text" name = "tel">：電話番号を xxx-xxx-xxxxのように市外局番から入力してください。</p>
    <input type = "submit" value = "送信">
    <input type = "reset" value = "リセット">
  </form>
</body>
</html>
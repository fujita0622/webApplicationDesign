<?php
// 変更するユーザ情報を受け取る変数を定義
  $change_user = $_POST['change_user'];
  // ユーザ情報を分割し $change_user_items に配列で格納
  $change_user_items = explode(',' , $change_user);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザ情報変更確認画面</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
  <form action="change_comp.php" method="POST">
    <p>氏名（漢字）：<?php echo $change_user_items[0]; ?></p>
    <p>メールアドレス：<?php echo $change_user_items[4]; ?></p>
    <p>電話番号（半角数字）：<input type="text" name = "change_tel" value="<?php echo $change_user_items[3]; ?>"></p>
    <p>以下の内容を変更してよろしいですか？</p>
    <input type="hidden" name = "change_user" value="<?php echo $change_user; ?>">
    <input type="submit" value="はい">
    <input type="button" onclick="history.back()" value="いいえ">
  </form>
</body>
</html>
<?php
  // 削除するユーザ情報を受け取る変数を定義
  $delete_user = $_POST['delete_user'];
  // ユーザ情報を分割し $delete_user_items に配列で代入
  $delete_user_items = explode(',' , $delete_user);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザ情報削除確認画面</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
  <p>氏名（漢字）：<?php echo $delete_user_items[0]; ?></p>
  <p>メールアドレス：<?php echo $delete_user_items[4]; ?></p>
  <p>電話番号（半角数字）：<?php echo $delete_user_items[3]; ?></p>
  <p>以下の内容を削除してよろしいですか？</p>
  <form action="delete_comp.php" method="POST">
    <input type="hidden" name="delete_user" value="<?php echo $delete_user; ?>">
    <input type="submit" value="はい">
    <input type="button" onclick="history.back()" value="いいえ">
  </form>
</body>
</html>
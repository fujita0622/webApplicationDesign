<?php
  // 初期処理変数の定義ファイルを読み込み
  require_once 'delete/initial_var.php';
  // FORMから受け取る値をチェック処理するファイルを読み込み
  require_once 'delete/check_var.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ファイル削除完了画面</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
  <!-- 削除内容の確認表示 -->
  <p>削除ファイル：<?php echo $file_info_items[0]; ?></p>
  <p>ファイルの説明：<?php echo $file_info_items[1]; ?></p>
  <p>以下の内容を削除しますがよろしいですか？</p>
  <form action="delete_comp.php" method="POST">
    <input type="hidden" name="file_info" value="<?php echo $file_info; ?>">
    <input type="submit" value="はい">
    <input type="button" onclick="history.back();" value="いいえ">
  </form>
</body>
</html>
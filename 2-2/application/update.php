<?php
  // 初期処理変数定義ファイルを読み込み
  require_once 'update/initial_var.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ファイル更新入力画面</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
  <form action="update_comp.php" enctype="multipart/form-data" method="POST">
    <p>更新ファイル<input type="file" name="file">：更新するファイル(<?php echo $file_info_items[0]; ?>)を選択</p>
    <input type="hidden" name="update_filename" value="<?php echo $file_info_items[0]; ?>">
    <p>ファイルの説明（全角）<input type="text" name="file_description" value="<?php echo $file_info_items[1]; ?>">：更新ファイルの説明を入力</p>
    <input type="submit" value="送信">
    <input type="reset" value="リセット">
  </form>
</body>
</html>
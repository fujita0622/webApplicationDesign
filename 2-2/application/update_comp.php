<?php
  // 初期処理変数定義ファイルを読み込み
  require_once 'initial_var.php';
  // FORMの値のチェック処理ファイルの読み込み
  require_once 'check_var.php';
  // FORMの値(更新ファイル)の判定処理ファイルを読み込み
  require_once 'update/check_updatefile.php';
  // ファイルを開く処理ファイルの読み込み
  require_once 'file_open.php';
  // 上書き用配列を定義
  $overwrite_array = array();
  // ファイルから一行ずつ取得
  while ($line = fgets($fp)) {
    // 取得したファイル情報に変更するファイル名が含まれている場合
    if (strpos($line, $file_name) !== false) {
      // cookieを取得し、explode関数で登録ファイルと編集ファイルに分割
      $cookie = explode("&", $_COOKIE['filedata']);
      // strpos関数でcookieの編集ファイルに変更ファイル名が含まれているか判断
      // 含まれる場合
      if (strpos($cookie[1], trim($file_name)) !== false) {
        // cookie情報を編集・出力処理を読み込み
        require_once 'update/setcookie.php';
        // 取得したファイル情報編集処理ファイルを読み込み
        require_once 'update/line_editing.php';
      }
    }
    // ファイル上書き用配列に代入
    $overwrite_array[] = $line;
  }
  // ファイルの上書き処理ファイルを読み込み
  require_once 'overwrite.php';
  // ファイルを閉じる
  fclose($fp);
  // 更新ファイルを一時ファイルから保存ディレクトリに移動
  move_uploaded_file($tmp_file, $file_url);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ファイル更新完了画面</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
  <!-- 更新内容の確認表示 -->
  <p>更新ファイル：<?php echo $file_name; ?></p>
  <p>ファイルの説明：<?php echo $file_description; ?></p>
  <p>以下の内容を更新しました。</p>
</body>
</html>
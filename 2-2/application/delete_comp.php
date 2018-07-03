<?php
  // 初期処理変数の定義ファイルを読み込み
  require_once 'delete/initial_var.php';
  // FORMから受け取る値をチェック処理するファイルを読み込み
  require_once 'delete/check_var.php';
  // ファイルを開く処理ファイルを読み込み
  require_once 'file_open.php';
  // ファイルから一行ずつ取得
  while ($line = fgets($fp)) {
    // 取得したファイル情報を ','区切りで配列に代入
    $line = explode(",", $line);
    // 取得したファイル名($line[0])と削除するファイル名($file_info_items[0])が一致した場合
    if ($line[0] == $file_info_items[0]) {
      //cookieから登録ファイルを削除する処理ファイルを読み込み
      require_once 'delete/delete_cookie.php';
      // ループをスキップ
      continue;
    }
    // 分割したファイルデータをimplodeで統合
    $line = implode(",", $line);
    // 削除ファイルと一致しないファイル情報は上書き用配列に代入
    $overwrite_array[] = $line;
  }
  // ファイルの上書き処理ファイルを読み込み
  require_once 'overwrite.php';
  // ファイルを閉じる
  fclose($fp);
  // 削除するファイル情報からunlink関数でファイルURL($file_info_items[4])を指定し削除
  unlink(trim($file_info_items[4]));
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
  <p>以下の内容を削除しました。</p>
</body>
</html>
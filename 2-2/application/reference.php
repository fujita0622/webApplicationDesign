<?php
  // 初期処理変数定義ファイルを読み込み
  require_once 'reference/initial_var.php';
  // ファイルを開く処理ファイルを読み込み
  require_once 'file_open.php';
  // 登録済みのファイル情報が保存されているファイルから1行ずつ取得
  // 取得する行がなくなった場合、ループを終了
  while ($line = fgets($fp)) {
    // 取得した行とFORMから受け取った値が一致しない場合
    if (trim($line) !== trim($file_info)) {
      // ファイル上書き用配列に取得した行を代入
      $overwrite_array[] = $line;
      // 取得した行とFORMから受け取った値が一致した場合
    } else {
      // 取得した行をexplode関数で分割し配列に代入
      $line = explode(",", $line);
      // 更新フラグ($line[3])が 0 の場合
      if ($line[3] == 0) {
        // cookieの編集・出力処理ファイルを読み込み
        require_once 'reference/setcookie.php';
        // ファイル説明に aタグで更新画面のファイルパスを指定しリンクさせて表示
        echo "<p>ファイル：<a href='update.php'>{$line[1]}</a></p>";
        // 「更新」と表示
        echo "以下の内容でファイルを 更新 できます。";
        // 更新フラグを 1 に指定
        $line[3] = 1;
      // 更新フラグ($line[3])が 0 の場合
      } else {
        // ファイルの説明に aタグでファイルURLを指定しリンクさせて表示
        echo "<p>ファイル：<a href='{$line[4]}'>{$line[1]}</a></p>";
        // 「閲覧のみ」と表示
        echo "以下の内容でファイルを 閲覧のみ できます。";
      }
      // 分割したファイル情報を implode関数で結合
      $line = implode(",", $line);
      // 上書き用配列に代入
      $overwrite_array[] = $line;
    }
  }
  // ファイルの上書き処理ファイルを読み込み
  require_once 'overwrite.php';
  // ファイルを閉じる
  fclose($fp);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ファイル参照画面</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
</body>
</html>
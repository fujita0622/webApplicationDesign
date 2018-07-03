<?php
  // 初期処理変数を定義ファイルを読み込み
  require_once 'initial_var.php';
  // FORMから受け取る値のチェック処理ファイルを読み込み
  require_once 'check_var.php';
  // 同名のファイルがすでに存在するかのチェック処理ファイルを読み込み
  require_once 'registration/file_exists.php';
  // 登録するファイルの情報(ファイル名,ファイルの説明,更新日時,更新フラグ,ファイルURL)を生成・設定・整形する処理ファイルを読み込み
  require_once 'registration/input_format.php';
  // 登録するファイルの情報を保存するファイルの書き込み処理の実行ファイルを読み込み
  require_once 'registration/file_record.php';
  // cookie処理をまとめたファイルを読み込み
  require_once 'registration/setcookie.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ファイル登録完了画面</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
  <!-- 登録内容の確認表示 -->
  <p>登録ファイル：<?php echo $file_name; ?></p>
  <p>ファイルの説明：<?php echo $file_description; ?></p>
  <p>以下の内容を登録しました。</p>
</body>
</html>
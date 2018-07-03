<?php
  // 初期処理変数を定義したファイルを読み込み
  require_once 'list/initial_var.php';
  // ファイルを開く処理ファイルの読み込み
  require_once 'file_open.php';
  // 開いたファイルのファイル情報を配列に代入処理ファイルの読み込み
  require_once 'list/input_file_info.php';
  // ファイルを閉じる
  fclose($fp);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ファイル一覧表示画面</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
<table>
<form action="" method="post">
  <tr>
    <th>選択</th>
    <th>ファイルの内容</th>
    <th>処理</th>
  </tr>
  <?php
    // ファイル情報を代入した配列($file_info_array) 分ループ処理
    // $file_info_array は外部ファイル input_file_info.phpを参照
    for ($index = 0; $index < count($file_info_array); $index++) {
      // 取得したファイル情報を "," で分割し配列に代入
      $file_info = explode("," , $file_info_array[$index]);
      // trタグを表示
      echo "<tr>";
      // 表の「選択」項目にファイル情報を設定したラジオボタンを表示
      echo "<td><input type='radio' name='file_info' value='$file_info_array[$index]'></td>";
      // 表の「ファイルの内容」項目にファイルの説明、更新日付を表示
      echo "<td>" . $file_info[1] . "（" . $file_info[2] . "）" . "</td>";
      // ボタンの決定
      // 更新フラグ($file_info[3])が 0 の場合
      if ($file_info[3] == 0 AND isset($cookie) == true) {
        // ファイル名がcookieの登録ファイルと編集ファイル両方に含まれている場合
        // 
        if (strpos($cookie[0], $file_info[0]) !== false AND strpos($cookie[1], $file_info[0]) !== false) {
          // 「閲覧」「参照」ボタンを表示
          echo "<td>";
          echo "<button formaction='$file_info[4]'>閲覧</button><button formaction='reference.php'>参照</button>";
          echo "</td>";
        // ファイル名がcookieの登録ファイルに含まれている場合
        } elseif (strpos($cookie[0], $file_info[0]) !== false) {
          // 「閲覧」「参照」「削除」ボタンを表示
          echo "<td>";
          echo "<button formaction='$file_info[4]'>閲覧</button><button formaction='reference.php'>参照</button><button formaction='delete_conf.php'>削除</button>";
          echo "</td>";
        // それ以外の場合
        } else {
          // 「閲覧」「参照」ボタンを表示
          echo "<td>";
          echo "<button formaction='$file_info[4]'>閲覧</button><button formaction='reference.php'>参照</button>";
          echo "</td>";
        }
      // 更新フラグ($file_info[3])が 1 の場合
      } elseif($file_info[3] == 1 AND isset($cookie) == true) {
        // ファイル名がcookieの登録ファイルと編集ファイル両方に含まれている場合
        if (strpos($cookie[0], $file_info[0]) !== false AND strpos($cookie[1], $file_info[0]) !== false) {
          // 「閲覧」ボタンを表示
          echo "<td>";
          echo "<button formaction='$file_info[4]'>閲覧</button>";
          echo "</td>";
        // ファイル名がcookieの編集ファイルに含まれている場合
        } elseif (strpos($cookie[1], $file_info[0]) !== false) {
          // 「更新」ボタンを表示
          echo "<td>";
          echo "<button formaction='update.php'>更新</button>";
          echo "</td>";
        // ファイル名がcookieの登録ファイルに含まれている場合
        } else {
          // 「閲覧」ボタンを表示
          echo "<td>";
          echo "<button formaction='$file_info[4]'>閲覧</button>";
          echo "</td>";
        }
      // その他の場合
      } else {
        // 「閲覧」ボタンを表示
        echo "<td><button formaction='$file_info[4]'>閲覧</button></td>";
      }
      echo "</tr>";
    }
  ?>
</form>
</table>
</body>
</html>
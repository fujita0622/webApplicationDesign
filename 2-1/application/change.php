<?php
  // try関数内に例外が発生する可能性のある処理を記述
  try {
  // ユーザー情報(userdata.txt)が保存されているファイルを読み込みオプションを指定し開く
  // $fpに代入
  $fp = fopen("file/userdata.txt", "rb");
  // 例外が発生した場合の処理を catch の{}内に記述
  // 引数に例外クラスをインスタンス化した $e を指定
  } catch (Exception $e) {
    // $e で getMessage(例外メッセージを取得)メソッドを呼び出し画面に表示
    echo $e -> getMessage();
  }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザ情報変更画面</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
  <form action="change_conf.php" method="POST">
    <input type="submit" value="選択したユーザを変更">
    <table>
    <tr>
      <th>変更するユーザ</th>
      <th>氏名(漢字)</th>
      <th>メールアドレス</th>
      <th>電話番号</th>
    </tr>

    <?php
      // 開いたファイルから fgets関数で一行ずづ取得し変数$line に代入
      // while文で取得する行がなくなるまでループ処理
      while ($line = fgets($fp)) {
        // 取得した行の文字列を ',' で分割し配列で$lineに代入
        $line = explode(',', $line);
        // trの開始タグを表示
        echo "<tr>";
        // $line[0](名前)を表示
        echo "<td><input type = 'radio' name = 'change_user' value = '$line[0],$line[1],$line[2],$line[3],$line[4]'></td>";
        // $line[0](名前)を表示
        echo "<td>{$line[0]}</td>";
        // $line[4](メールアドレス)を表示
        echo "<td>{$line[4]}</td>";
        // $line[3](電話番号)を表示
        echo "<td>{$line[3]}</td>";
        // trの終了タグを表示
        echo "</tr>";
      }
      // ファイルを閉じる
      fclose($fp);
    ?>
    
    </table>
  </form>
</body>
</html>
<?php
  // 初期処理変数を定義した get_form_value.php ファイルを読み込み
  require_once 'get_form_value.php';
  // 初期処理変数の型とサイズを判断する registration_check_var.php ファイルを読み込み
  require_once 'registration_check_var.php';

  // 例外が発生する可能性がある処理を try関数内に記述
  try {
    // fopen関数で userdata.txt(顧客情報の保存ファイル)を書き込み用のオプションを設定し開く
    // 変数$fp に代入
    $fp = fopen("file/userdata.txt", "a+b");
    // fwrite関数で 第一引数 $fp(顧客情報の保存ファイル) に 第二引数 $input_format(ファイルに保存する形式に整形した顧客情報)を書き込む
    fwrite($fp, $input_format);
    // fclose関数でファイルを閉じる
    fclose($fp);
  //例外が発生した場合
  } catch (Exception $e) {
  // ExceptionクラスのgetMessage(例外メッセージの取得)メソッドを呼び出しエラーを表示
    die($e->getMessage());
  }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザ情報登録結果画面</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
  <p>氏名（漢字）：<?php echo $name; ?></p>
  <p>メールアドレス：<?php echo $mail; ?></p>
  <p>電話番号：<?php echo $tel; ?></p>
  <p>以下の内容で登録しました。</p>
  <input type="button" onClick="location.href='registration.php'" value="戻る">
</body>
</html>
<?php
  // 変更するユーザ情報を受け取る変数を定義
  $change_user = $_POST['change_user'];
  // 変更する電話番号を受け取る変数を定義
  $change_tel = $_POST['change_tel'];
  // ユーザ情報を分割し $change_user_items に配列で格納
  $change_user_items = explode(',' , $change_user);
  // ユーザ情報の上書きデータを入れる配列を定義
  $overwrite_date = array();

  // 例外が発生する可能性がある処理を try関数内に記述
  try {
    // fopen関数で userdata.txt(顧客情報の保存ファイル)を書き込み用のオプションを設定し開く
    // 変数$fp に代入
    $fp = fopen("file/userdata.txt", "a+b");
    // $fp(ユーザ情報を保存しているファイル)から fgets関数で一行ずつ取得する
    // ファイルから取得できる行がなくなるまでループ処理
    while ($line = fgets($fp)) {
      // 取得した行($line)と変更したいユーザ情報($change_user)が等しい場合
      // ※ trim関数で先頭と末尾にスペースがあったら変更
      if(trim($line) == trim($change_user)) {
        // 変更するユーザ情報を','で分割し配列にする
        $change_user = explode(',' , $change_user);
        // 配列にしたユーザ情報の電話番号($change_user[3])に変更する電話番号($change_tel)を上書き
        $change_user[3] = $change_tel;
        // 配列にしたユーザ情報を implode関数を使い','で文字列連結する
        $change_user = implode(',', $change_user);
        // ユーザ情報の上書きデータ($overwrite_date)用配列に変更するユーザ情報($change_user)を代入
        $overwrite_date[] = $change_user;
        // ループをスキップ
        continue;
      }
      // ユーザ情報の上書きデータ($overwrite_date)用配列に 取得した行($line)を入れる
      $overwrite_date[] = $line;
    }
    // $fp(ユーザ情報を保存しているファイル)をftruncate関数で空にする
    ftruncate($fp,0);
    // ユーザ情報の上書きデータの配列の要素数分ループ処理
    for ($i=0; $i < count($overwrite_date); $i++) { 
    // ユーザ情報の上書きデータ($overwrite_date)を一行ずつ fwrite関数でファイルに書き込む
      fwrite($fp, $overwrite_date[$i]);
    }

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
  <title>ユーザ情報変更結果画面</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
  <p>氏名（漢字）：<?php echo $change_user_items[0]; ?></p>
  <p>メールアドレス：<?php echo $change_user_items[4]; ?></p>
  <p>電話番号：<?php echo $change_tel; ?></p>
  <p>以下の内容で変更しました。</p>
  <input type="button" onClick="location.href='change.php'" value="戻る">
</body>
</html>
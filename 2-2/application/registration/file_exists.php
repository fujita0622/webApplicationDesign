<?php
  // try関数の{}内に例外が発生する可能性のある処理を記述
  try {
    // file_exists関数で同名のファイルがすでに存在するか判断
    // 存在する場合
    if (file_exists("file/$file_name") == true) {
      // 例外を投げる
      throw new Exception("同名のファイルが存在します。");
    }
    // catch関数で例外を捕捉
  } catch (Exception $e) {
    // ExceptionクラスのgetMessageメソッドで例外メッセージを表示
    // die関数で表示後、その後の処理を強制終了
    die($e -> getMessage());
  }
?>
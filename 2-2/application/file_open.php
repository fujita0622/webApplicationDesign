<?php
  // try関数の中に例外が発生する可能性がある処理を記述
  try {
    // // ファイルを開く
    $fp = fopen("file_info/file_info.txt", "a+b");
    // tryで発生した例外をcatch関数で処理
  } catch (Exception $e) {
    // ExceptionクラスのgetMessageメソッドで例外メッセージを出力
    die($e -> getMessage());
  }
?>
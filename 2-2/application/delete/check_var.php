<?php
  // try関数内に例外が発生する可能性がある処理を記述
  try {
    // 削除するファイル情報が空か判断
    // 空でない場合
    if (empty($file_info) == true) {
      // エラーを投げる
      throw new Exception("削除するファイル情報がありせん。");
    }
    // try関数内で例外が発生した例外をcatch関数で捕捉
  } catch (Exception $e) {
    // Exception(例外)クラスの getMessageメソッドで例外メッセージを表示
    die($e -> getMessage());
  }
?>
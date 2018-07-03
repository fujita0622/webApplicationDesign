<?php
  // try関数内に例外が発生する可能性のある処理を記述
  try {
    // FORMでアップしたファイル名を受け取る
    $update_filename = $_POST['update_filename'];
    // FORMでアップしたファイル名が更新ファイル名と同名でなかった場合
    if ($update_filename !== $file_name) {
      // エラーを投げる
      throw new Exception("更新ファイルではありません。");
    }
    // catch関数でtry内で発生した例外を捕捉
  } catch (Exception $e) {
    // エラーメッセージを表示し、die関数でそこまでの処理で強制終了
    die($e -> getMessage());
  }
?>
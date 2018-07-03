<?php
  // ファイルを開く
  $fp = fopen("file_info/file_info.txt", "ab");
  // ファイルに書き込む
  fwrite($fp, $input_format);
  // ファイルを閉じる
  fclose($fp);
  // 一時ファイルから登録ファイルディレクトリに移動する
  move_uploaded_file($tmp_file, $file_url);
?>
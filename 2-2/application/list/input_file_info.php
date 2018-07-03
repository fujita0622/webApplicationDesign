<?php
  // ファイル情報を代入する配列を定義
  $file_info_array = array();
  // ファイル情報をfgets関数で一行ずつ取得
  // 取得するファイル情報がなくなるまでループ処理
  while($line = fgets($fp)) {
    // 配列に代入
    $file_info_array[] = $line;
  }
?>
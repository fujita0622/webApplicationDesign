<?php
  // 登録ファイルのファイル情報保存ファイルを空にする
  ftruncate($fp, 0);

  // 上書き用配列の要素数分ループ処理
  for ($index = 0; $index < count($overwrite_array); $index++) { 
    // fwrite関数でファイルに書き込む
    fwrite($fp, $overwrite_array[$index]);
  }
?>
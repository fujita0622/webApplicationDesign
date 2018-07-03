<?php
  // 取得したファイル情報をexplode関数で分割し配列に代入
  $line = explode(",", $line);
  // $line[1](ファイルの説明)に変更するファイルの説明を代入
  $line[1] = $file_description;
  // 更新フラグ($line[3])に 0 を代入
  $line[3] = 0;
  // 分割した配列を","区切りで文字列に戻す
  $line = implode(",", $line);
?>
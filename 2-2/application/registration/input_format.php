<?php
  // ファイルURLを生成
  $file_url = FILE_DIRECTORY . "/" . $file_name;
  // 登録日を取得
  $last_updated = date('Y-m-d');
  // 更新フラグを0（更新可）に指定
  $update_flag = 0;
  // ファイル情報を保存するフォーマットを生成
  // ファイル名,ファイルの説明,更新日時,更新フラグ,ファイルURL
  $input_format = "{$file_name},{$file_description},{$last_updated},{$update_flag},{$file_url}\n";
?>
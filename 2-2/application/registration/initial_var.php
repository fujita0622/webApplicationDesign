<?php
  // ファイル名
  $file_name = $_FILES['file']['name'];
  // ファイルの説明
  $file_description = $_POST['file_description'];
  // 更新日時
  $last_updated;
  // 更新フラグ 
  $update_flag;
  // ファイルアップロード時の一時ファイル
  $tmp_file = $_FILES['file']['tmp_name'];
  // 登録ファイル保存用ディレクトリ名
  CONST FILE_DIRECTORY = "file";
?>
<?php
  // FORMから受け取る削除するファイル情報を定義
if (isset($_POST['file_info'])) {
    $file_info = $_POST['file_info'];
} else {
  header("Location: ./list.php");
}
  // 削除するファイル情報を "," で分割して配列に代入
  $file_info_items = explode(",", $file_info);
  // ファイル情報上書き用配列を定義
  $overwrite_array = array();
?>
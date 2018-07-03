<?php
  // isset関数でFORMからの値が空でないか判断
  // 空でない場合
  if (isset($_POST['file_info'])) {
    // FORMから受け取るファイル情報を変数に代入
      $file_info = $_POST['file_info'];
  // 空だった場合
  } else {
    // 一覧画面に戻る
    header("Location: ./list.php");
  }
  // 参照するファイル情報を "," で分割して配列に代入
  $file_info_items = explode(",", $file_info);
  // ファイル情報上書き用配列を定義
  $overwrite_array = array();
?>
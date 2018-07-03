<?php
  // cookieを取得し、"&"区切りで登録ファイルと編集ファイルを配列に代入
  if (isset($_COOKIE['filedata'])) {
    $cookie = explode("&", $_COOKIE['filedata']);
  }
  
  // // 登録ファイル($cookie[0])から str_replace関数で 'Upfile:'を取り除く
  // $cookie[0] = str_replace("Upfile:","" ,$cookie[0]);
  // // 登録ファイル($cookie[0])を "+" で分割し配列に代入
  // $registration_file = explode("+", $cookie[0]);
  // // 編集ファイル($cookie[1])から str_replace関数で 'Editfile:'を取り除く
  // $cookie[1] = str_replace("Editfile:","" ,$cookie[1]);
  // // 末尾の , を削除
  // $cookie[1] = rtrim($cookie[1], ",");
  // // 編集ファイル($cookie[0])を "," で分割し配列に代入
  // $edit_file = explode(",", $cookie[1]);
?>
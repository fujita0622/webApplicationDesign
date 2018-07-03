<?php
// cookieを取得し、explode関数で登録ファイルと編集ファイルに分割
  $cookie = explode("&", $_COOKIE['filedata']);
  // 登録ファイルに更新するファイル名を追加
  $cookie[0] = $cookie[0] . "+" . $file_name;
  // 登録ファイルに更新するファイル名を追加
  $cookie[1] = preg_replace("/($file_name),/", "", $cookie[1]);
  // implode関数で分割した登録ファイルと編集ファイルを "&" で結合
  $cookie = implode("&", $cookie);
  // setcookie関数で編集したcookieの値をクライアントに送信
  setcookie("filedata", $cookie, time()+ 60 * 60 * 24 * 30);
?>
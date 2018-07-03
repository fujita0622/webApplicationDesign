<?php
  // cookie情報を取得し,取得した値を explodeで "&" 区切りで配列に代入
  $cookie = explode("&", $_COOKIE['filedata']);
  // preg_replace関数でcookieが保持している登録ファイル($cookie[0])から削除するファイルを検索し抜き出す
  $cookie[0] = preg_replace("/$file_info_items[0][+]/" , "", $cookie[0]);
  // 分割した登録ファイルと編集ファイルを統合
  $cookie = implode("&", $cookie);
  // cookieをクライアントに送信
  setcookie("filedata", $cookie, time()+ 60 * 60 * 24 * 30);
?>
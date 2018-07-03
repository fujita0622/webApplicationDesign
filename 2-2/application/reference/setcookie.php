<?php
  // cookie を受け取り、登録ファイルと編集ファイルに分割
  $cookie = explode("&", $_COOKIE['filedata']);
  // 登録ファイル($cookie[0])にFORMで選択されたファイル名($line[0])を削除
  $cookie[0] = preg_replace("/($line[0])[+]*/", "", $cookie[0]);
  // 編集ファイル($cookie[1])にFORMで選択されたファイル名($line[0])を追加
  $cookie[1] = $cookie[1] . $line[0] . ",";
  // 分割した登録ファイルと編集ファイルを implode関数で結合
  $cookie = implode("&", $cookie);
  // 編集したcookie情報を setcookie関数でクライアントに送信
  setcookie('filedata', $cookie, time() + 60 * 60 * 24 * 30);
?>
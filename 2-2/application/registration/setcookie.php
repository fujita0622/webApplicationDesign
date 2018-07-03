<?php
  // クッキーの値取得し isset関数で定義済みか判断
  // 空でない場合
  if (isset($_COOKIE['filedata']) == true) {
    // 取得したcookieの値をexplode関数を利用し'&'で区切る
    $get_cookie_value = explode("&", $_COOKIE['filedata']);
    // $cookie[0](登録ファイル)に"+ 登録するファイル名" 形式で追加
    $get_cookie_value[0] = $get_cookie_value[0] . "+" . $file_name;
    // 分割したクッキーの値を"&"でつなぎ文字列にする
    $get_cookie_value = implode("&", $get_cookie_value);
    // setcookie関数で追加した値をクライアントに送信
    setcookie("filedata", $get_cookie_value, time()+ 60 * 60 * 24 * 30);
  // 空の場合
  } else {
    // 登録ファイルを追加
    setcookie("filedata", "Upfile:{$file_name}&Editfile:", time()+ 60 * 60 * 24 * 30);
  }
?>
<?php
  // FORMの値を受け取る変数
  // // 名前(漢字)
  $name = $_POST['name'];
  // 姓(半角ローマ字)
  $family_name_roman = $_POST['family_name_roman'];
  // 名(半角ローマ字)
  $first_name_roman = $_POST['first_name_roman'];
  // 電話番号(半角英数字)
  $tel = $_POST['tel'];

  // ドメイン名(@lan.ne.jp)の定数
  CONST DOMAIN = "@lan.ne.jp";

  // 下記フォーマットでメールアドレスを生成
  // メールアドレス 名(半角ローマ字)_姓(半角ローマ字)@lan.ne.jp 
  $mail = $first_name_roman . "_" . $family_name_roman . DOMAIN;
  // ファイルの保存形式を下記順番でカンマで区切り生成
  // 氏名(漢字),姓(半角ローマ字),名(半角ローマ字),電話番号(半角数字),メールアドレス(半角英数字)
  $input_format = "{$name},{$family_name_roman},{$first_name_roman},{$tel},{$mail}\n";
  ?>
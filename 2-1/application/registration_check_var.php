<?php
  // $input_formatからFORMの入力データを分割し配列で格納
  $check_var = explode(',' , $input_format);
  // 入力フォームの項目を配列で代入 
  $input_items = ['氏名(漢字)', '姓(半角ローマ字)', '名(半角ローマ字)', '電話番号'];
  // 入力フォームの項目数をカウント
  $con = count($input_items);
  // 入力フォームの項目の制限文字数を配列で代入
  $character_limit = [32, 20, 20, 15];

  // 例外が発生する可能性がある処理を try関数内に記述
  try {  
    // 型の判断
    // 入力フォームの項目数分ループ処理
    for ($i = 0; $i < $con; $i++) { 
      // FORMの入力データ($check_var)の型を文字列か判断し false だった場合
      if (is_string($check_var[$i]) == false) {
        // エラーを表示
        throw new Exception("$input_items{$i}の型が違います。");
      }
    }

    // サイズの判断
    // 入力フォームの項目数分ループ処理
    for ($i = 0 ; $i < $con; $i++) { 
      // FORMの入力データ($check_var)が制限文字数（$character_limit）を超えている場合
      if (strlen($check_var[$i]) > $character_limit[$i]) {
        // エラーを表示
          throw new Exception("{$input_items[$i]}の制限文字数を超えています。");
      }
    }
  // 例外が発生した場合
  } catch (Exception $e) {
    // ExceptionクラスのgetMessage(例外メッセージの取得)メソッドを呼び出しエラーを表示
    die($e -> getMessage());
  }
?>
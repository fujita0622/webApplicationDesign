<?php
  // FORMから受け取る値を代入した変数を配列に代入
  $form_value_var = [$file_name, $file_description];
  // FORMの項目を配列に代入
  $form_items = ["ファイル", "ファイルの説明"];
  try {
    for ($i=0; $i < count($form_value_var); $i++) { 
      // FORMから取得した値が空出ないか判断
      // 空文字か空だった場合
      if (empty($form_value_var[$i]) == true) {
        // エラー処理を投げる
        throw new Exception($form_items[$i] . "が入力されていません。");
      }
    }
    // ファイルの説明の制限文字数(40バイト)を判断
    if (strlen($form_value_var[1]) > 40) {
      // 40バイトを超えた場合
      // エラー処理を投げる
      throw new Exception($form_items[1] . "の制限文字数を超えています。");
    }
  }
  // try関数で捕捉した例外をcatch関数で処理する
  // Exceptionクラスをインスタンス化
  catch (Exception $e) {
    // ExceptionクラスのgetMessageメソッドで例外メッセージを取得し,die関数でプログラムを強制終了
    die($e -> getMessage());
  }
?>
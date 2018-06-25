<?php
  // 初期処理変数を定義した get_form_value.php ファイルを読み込み
  require_once 'get_form_value.php';
  // 初期処理変数の型とサイズを判断する registration_check_var.php ファイルを読み込み
  require_once 'registration_check_var.php';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザ情報登録確認画面</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
   <!-- 登録内容の確認表示 -->
  <p>氏名（漢字）：<?php echo $name; ?></p>
  <p>姓（半角ローマ字）：<?php echo $family_name_roman; ?></p>
  <p>名（半角ローマ字）：<?php echo $first_name_roman; ?></p>
  <p>電話番号（半角数字）：<?php echo $tel; ?></p>
  <p>以下の内容を登録してよろしいですか？</p>

   <!-- FORM の submitボタンが押されたらinput type="hidden" で非表示データ(登録内容)を送信する -->
  <form action="registration_comp.php" method="POST">
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="family_name_roman" value="<?php echo $family_name_roman; ?>">
    <input type="hidden" name="first_name_roman" value="<?php echo $first_name_roman; ?>">
    <input type="hidden" name="tel" value="<?php echo $tel; ?>">
    <input type="hidden" name="input_format" value="$input_format">
    <input type="submit" value="はい">
    <input type="button" onclick="history.back()" value="いいえ">
  </form>
</body>
</html>
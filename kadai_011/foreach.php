<!DOCTYPE html>
<html lang="ja">
  <head>
      <meta charset="UTF-8">
      <title>PHP基礎編</title>
  </head>
  <body>
      <p>
         <?php
          $vegetable_name = ['名前' => '玉ねぎ', '値段' => 200, '原産地' => '北海道'];
            foreach ($vegetable_name as $key => $value) {
              echo "{$key}: {$value}<br>";
          }
          ?>
      </p>
  </body>
</html>
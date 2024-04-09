<?php
$vegetable_data = ['名前' => '玉ねぎ', '値段' => '200', '産地' => '北海道'];

// 連想配列$vegetable_dataのキーと値を1つずつ順番に出力する
foreach ($vegetable_data as $key => $value) {
  echo "{$key} : {$value}<br>";
}
?>
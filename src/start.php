<?php

$pdo = new PDO(
  'mysql:host=localhost;dbname=mobi',
  'root',
  ''
);

$res = $pdo->query("SELECT * FROM `projects`");

var_dump($res);
foreach ($res AS $row) {
  var_dump($row); nl2br(".");
}
 ?>
